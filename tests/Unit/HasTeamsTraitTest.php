<?php

declare(strict_types=1);

use Illuminate\Support\Collection;
use Modules\User\Contracts\TeamContract;
use Modules\User\Models\Team;
use Modules\User\Models\TeamUser;
use Modules\User\Models\User;
use Modules\User\Models\Role;
use Tests\TestCase;

/**
 * Test per il trait HasTeams corretto secondo filosofia Jetstream + Laraxot.
 *
 * Verifica tutte le correzioni implementate:
 * - belongsToTeams() ora funziona correttamente
 * - belongsToTeam() usa logica corretta
 * - ownsTeam() è efficiente
 * - teams() usa belongsToManyX
 * - Tipizzazione rigorosa
 * - Metodi non-Jetstream rimossi
 */
class HasTeamsTraitTest extends TestCase
{
    use RefreshDatabase;

    protected User $user;
    protected Team $team;
    protected Team $personalTeam;

    protected function setUp(): void
    {
        parent::setUp();
        
        $this->user = User::factory()->create();
        $this->team = Team::factory()->create();
        $this->personalTeam = Team::factory()->create([
            'user_id' => $this->user->id,
            'personal_team' => true,
        ]);
    }

    /** @test */
    public function it_correctly_checks_if_user_belongs_to_teams(): void
    {
        // Test: User senza team
        $userWithoutTeams = User::factory()->create();
        $this->assertFalse($userWithoutTeams->belongsToTeams());

        // Test: User con team owned
        $this->assertTrue($this->user->belongsToTeams());

        // Test: User con team membership
        $memberUser = User::factory()->create();
        $memberUser->teams()->attach($this->team->id, ['role' => 'member']);
        $this->assertTrue($memberUser->belongsToTeams());
    }

    /** @test */
    public function it_correctly_checks_if_user_belongs_to_specific_team(): void
    {
        // Test: Null team
        $this->assertFalse($this->user->belongsToTeam(null));

        // Test: Owned team
        $this->assertTrue($this->user->belongsToTeam($this->personalTeam));

        // Test: Member team
        $this->user->teams()->attach($this->team->id, ['role' => 'member']);
        $this->assertTrue($this->user->belongsToTeam($this->team));

        // Test: Non-member team
        $otherTeam = Team::factory()->create();
        $this->assertFalse($this->user->belongsToTeam($otherTeam));
    }

    /** @test */
    public function it_correctly_checks_team_ownership(): void
    {
        // Test: Owned team
        $this->assertTrue($this->user->ownsTeam($this->personalTeam));

        // Test: Non-owned team
        $this->assertFalse($this->user->ownsTeam($this->team));

        // Test: Member team (not owner)
        $this->user->teams()->attach($this->team->id, ['role' => 'member']);
        $this->assertFalse($this->user->ownsTeam($this->team));
    }

    /** @test */
    public function it_uses_belongs_to_many_x_for_teams_relationship(): void
    {
        // Verifica che la relazione teams() restituisca BelongsToMany
        $relation = $this->user->teams();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsToMany::class, $relation);

        // Verifica che il pivot model sia TeamUser
        $this->assertEquals('team_user', $relation->getTable());
    }

    /** @test */
    public function it_correctly_manages_current_team(): void
    {
        // Test: Switch to valid team
        $this->user->teams()->attach($this->team->id, ['role' => 'member']);
        $result = $this->user->switchTeam($this->team);
        $this->assertTrue($result);
        $this->assertEquals($this->team->id, $this->user->current_team_id);

        // Test: Switch to null
        $result = $this->user->switchTeam(null);
        $this->assertTrue($result);
        $this->assertNull($this->user->current_team_id);

        // Test: Switch to non-member team
        $otherTeam = Team::factory()->create();
        $result = $this->user->switchTeam($otherTeam);
        $this->assertFalse($result);
    }

    /** @test */
    public function it_correctly_identifies_current_team(): void
    {
        $this->user->switchTeam($this->personalTeam);
        
        $this->assertTrue($this->user->isCurrentTeam($this->personalTeam));
        $this->assertFalse($this->user->isCurrentTeam($this->team));
    }

    /** @test */
    public function it_returns_all_teams_user_owns_or_belongs_to(): void
    {
        // Aggiungi user come member di un team
        $this->user->teams()->attach($this->team->id, ['role' => 'member']);

        $allTeams = $this->user->allTeams();
        
        $this->assertInstanceOf(Collection::class, $allTeams);
        $this->assertCount(2, $allTeams); // personal team + member team
        $this->assertTrue($allTeams->contains($this->personalTeam));
        $this->assertTrue($allTeams->contains($this->team));
    }

    /** @test */
    public function it_returns_owned_teams(): void
    {
        $ownedTeams = $this->user->ownedTeams;
        
        $this->assertInstanceOf(Collection::class, $ownedTeams);
        $this->assertCount(1, $ownedTeams);
        $this->assertTrue($ownedTeams->contains($this->personalTeam));
    }

    /** @test */
    public function it_returns_personal_team(): void
    {
        $personalTeam = $this->user->personalTeam();
        
        $this->assertInstanceOf(TeamContract::class, $personalTeam);
        $this->assertEquals($this->personalTeam->id, $personalTeam->id);
        $this->assertTrue($personalTeam->personal_team);
    }

    /** @test */
    public function it_correctly_determines_team_role(): void
    {
        // Test: Owner role
        $role = $this->user->teamRole($this->personalTeam);
        $this->assertInstanceOf(\Modules\User\Models\Role::class, $role);
        $this->assertEquals('owner', $role->name);

        // Test: Member role
        $this->user->teams()->attach($this->team->id, ['role' => 'admin']);
        $role = $this->user->teamRole($this->team);
        $this->assertInstanceOf(\Modules\User\Models\Role::class, $role);
        $this->assertEquals('admin', $role->name);

        // Test: No role
        $otherUser = User::factory()->create();
        $this->assertNull($otherUser->teamRole($this->team));
    }

    /** @test */
    public function it_provides_team_role_name_helper(): void
    {
        // Test: Owner role name
        $roleName = $this->user->teamRoleName($this->personalTeam);
        $this->assertEquals('owner', $roleName);

        // Test: Member role name - detach first to avoid duplicates
        $this->user->teams()->detach($this->team->id);
        $this->user->teams()->attach($this->team->id, ['role' => 'admin']);
        $roleName = $this->user->teamRoleName($this->team);
        $this->assertEquals('admin', $roleName);

        // Test: Unknown role
        $otherTeam = Team::factory()->create();
        $roleName = $this->user->teamRoleName($otherTeam);
        $this->assertEquals('Unknown', $roleName);
    }

    /** @test */
    public function it_correctly_checks_team_role(): void
    {
        // Test: Has role
        $this->user->teams()->attach($this->team->id, ['role' => 'admin']);
        $this->assertTrue($this->user->hasTeamRole($this->team, 'admin'));
        $this->assertFalse($this->user->hasTeamRole($this->team, 'editor'));

        // Test: Owner has all roles
        $this->assertTrue($this->user->hasTeamRole($this->personalTeam, 'admin'));
        $this->assertTrue($this->user->hasTeamRole($this->personalTeam, 'editor'));

        // Test: No role
        $otherTeam = Team::factory()->create();
        $this->assertFalse($this->user->hasTeamRole($otherTeam, 'admin'));
    }

    /** @test */
    public function it_correctly_manages_team_permissions(): void
    {
        // Test: Owner has all permissions
        $this->assertTrue($this->user->hasTeamPermission($this->personalTeam, 'edit-team'));

        // Test: Member with specific permission
        $this->user->teams()->attach($this->team->id, [
            'role' => 'editor',
            'permissions' => json_encode(['edit-content' => true])
        ]);
        
        $this->assertTrue($this->user->hasTeamPermission($this->team, 'edit-content'));
        $this->assertFalse($this->user->hasTeamPermission($this->team, 'delete-content'));
    }

    /** @test */
    public function it_provides_utility_methods(): void
    {
        // Test: Refresh team
        $refreshedTeam = $this->user->refreshTeam($this->personalTeam);
        $this->assertEquals($this->personalTeam->id, $refreshedTeam->id);

{
    // Test: User senza team
    $userWithoutTeams = User::factory()->create();
    $this->assertFalse($userWithoutTeams->belongsToTeams());

    // Test: User con team owned
    $this->assertTrue($this->user->belongsToTeams());

    // Test: User con team membership
    $memberUser = User::factory()->create();
    $memberUser->teams()->attach($this->team->id, ['role' => 'member']);
    $this->assertTrue($memberUser->belongsToTeams());
}

/** @test */
public function it_correctly_checks_if_user_belongs_to_specific_team(): void
{
    // Test: Null team
    $this->assertFalse($this->user->belongsToTeam(null));

    // Test: Owned team
    $this->assertTrue($this->user->belongsToTeam($this->personalTeam));

    // Test: Member team
    $this->user->teams()->attach($this->team->id, ['role' => 'member']);
    $this->assertTrue($this->user->belongsToTeam($this->team));

    // Test: Non-member team
    $otherTeam = Team::factory()->create();
    $this->assertFalse($this->user->belongsToTeam($otherTeam));
}

/** @test */
public function it_correctly_checks_team_ownership(): void
{
    // Test: Owned team
    $this->assertTrue($this->user->ownsTeam($this->personalTeam));

    // Test: Non-owned team
    $this->assertFalse($this->user->ownsTeam($this->team));

    // Test: Member team (not owner)
    $this->user->teams()->attach($this->team->id, ['role' => 'member']);
    $this->assertFalse($this->user->ownsTeam($this->team));
}

/** @test */
public function it_uses_belongs_to_many_x_for_teams_relationship(): void
{
    // Verifica che la relazione teams() restituisca BelongsToMany
    $relation = $this->user->teams();
    $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsToMany::class, $relation);

    // Verifica che il pivot model sia TeamUser
    $this->assertEquals('team_user', $relation->getTable());
}

/** @test */
public function it_correctly_manages_current_team(): void
{
    // Test: Switch to valid team
    $this->user->teams()->attach($this->team->id, ['role' => 'member']);
    $result = $this->user->switchTeam($this->team);
    $this->assertTrue($result);
    $this->assertEquals($this->team->id, $this->user->current_team_id);

    // Test: Switch to null
    $result = $this->user->switchTeam(null);
    $this->assertTrue($result);
    $this->assertNull($this->user->current_team_id);

    // Test: Switch to non-member team
    $otherTeam = Team::factory()->create();
    $result = $this->user->switchTeam($otherTeam);
    $this->assertFalse($result);
}

/** @test */
public function it_correctly_identifies_current_team(): void
{
    $this->user->switchTeam($this->personalTeam);
    
    $this->assertTrue($this->user->isCurrentTeam($this->personalTeam));
    $this->assertFalse($this->user->isCurrentTeam($this->team));
}

/** @test */
public function it_returns_all_teams_user_owns_or_belongs_to(): void
{
    // Aggiungi user come member di un team
    $this->user->teams()->attach($this->team->id, ['role' => 'member']);

    $allTeams = $this->user->allTeams();
    
    $this->assertInstanceOf(Collection::class, $allTeams);
    $this->assertCount(2, $allTeams); // personal team + member team
    $this->assertTrue($allTeams->contains($this->personalTeam));
    $this->assertTrue($allTeams->contains($this->team));
}

/** @test */
public function it_returns_owned_teams(): void
{
    $ownedTeams = $this->user->ownedTeams;
    
    $this->assertInstanceOf(Collection::class, $ownedTeams);
    $this->assertCount(1, $ownedTeams);
    $this->assertTrue($ownedTeams->contains($this->personalTeam));
}

/** @test */
public function it_returns_personal_team(): void
{
    $personalTeam = $this->user->personalTeam();
    
    $this->assertInstanceOf(TeamContract::class, $personalTeam);
    $this->assertEquals($this->personalTeam->id, $personalTeam->id);
    $this->assertTrue($personalTeam->personal_team);
}

/** @test */
public function it_correctly_determines_team_role(): void
{
    // Test: Owner role
    $role = $this->user->teamRole($this->personalTeam);
    $this->assertInstanceOf(\Modules\User\Models\Role::class, $role);
    $this->assertEquals('owner', $role->name);

    // Test: Member role
    $this->user->teams()->attach($this->team->id, ['role' => 'admin']);
    $role = $this->user->teamRole($this->team);
    $this->assertInstanceOf(\Modules\User\Models\Role::class, $role);
    $this->assertEquals('admin', $role->name);

    // Test: No role
    $otherUser = User::factory()->create();
    $this->assertNull($otherUser->teamRole($this->team));
}

/** @test */
public function it_provides_team_role_name_helper(): void
{
    // Test: Owner role name
    $roleName = $this->user->teamRoleName($this->personalTeam);
    $this->assertEquals('owner', $roleName);

    // Test: Member role name - detach first to avoid duplicates
    $this->user->teams()->detach($this->team->id);
    $this->user->teams()->attach($this->team->id, ['role' => 'admin']);
    $roleName = $this->user->teamRoleName($this->team);
    $this->assertEquals('admin', $roleName);

    // Test: Unknown role
    $otherTeam = Team::factory()->create();
    $roleName = $this->user->teamRoleName($otherTeam);
    $this->assertEquals('Unknown', $roleName);
}

/** @test */
public function it_correctly_checks_team_role(): void
{
    // Test: Has role
    $this->user->teams()->attach($this->team->id, ['role' => 'admin']);
    $this->assertTrue($this->user->hasTeamRole($this->team, 'admin'));
    $this->assertFalse($this->user->hasTeamRole($this->team, 'editor'));

    // Test: Owner has all roles
    $this->assertTrue($this->user->hasTeamRole($this->personalTeam, 'admin'));
    $this->assertTrue($this->user->hasTeamRole($this->personalTeam, 'editor'));

    // Test: No role
    $otherTeam = Team::factory()->create();
    $this->assertFalse($this->user->hasTeamRole($otherTeam, 'admin'));
}

/** @test */
public function it_correctly_manages_team_permissions(): void
{
    // Test: Owner has all permissions
    $this->assertTrue($this->user->hasTeamPermission($this->personalTeam, 'edit-team'));

    // Test: Member with specific permission
    $this->user->teams()->attach($this->team->id, [
        'role' => 'editor',
        'permissions' => json_encode(['edit-content' => true])
    ]);
    
    $this->assertTrue($this->user->hasTeamPermission($this->team, 'edit-content'));
    $this->assertFalse($this->user->hasTeamPermission($this->team, 'delete-content'));
}

/** @test */
public function it_provides_utility_methods(): void
{
    // Test: Refresh team
    $refreshedTeam = $this->user->refreshTeam($this->personalTeam);
    $this->assertEquals($this->personalTeam->id, $refreshedTeam->id);

    // Test: Get team role
    $role = $this->user->getTeamRole($this->personalTeam);
    $this->assertEquals('owner', $role->name);
}

/** @test */
public function it_handles_edge_cases(): void
{
    // Test: User without ID
    $newUser = new User();
    $this->assertFalse($newUser->belongsToTeams());

    // Test: Team without owner
    $teamWithoutOwner = Team::factory()->create(['user_id' => null]);
    $this->assertFalse($this->user->ownsTeam($teamWithoutOwner));

    // Test: Non-existent team
    $nonExistentTeam = new Team(['id' => 9999]);
    $this->assertFalse($this->user->belongsToTeam($nonExistentTeam));
}
