<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
namespace Modules\User\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
use Illuminate\Support\Collection;
use Modules\User\Contracts\TeamContract;
use Modules\User\Models\Team;
use Modules\User\Models\TeamUser;
use Modules\User\Models\User;
<<<<<<< HEAD
use Modules\User\Models\Role;
use Tests\TestCase;
=======
<<<<<<< HEAD
=======
use Tests\TestCase;
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev

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
<<<<<<< HEAD
=======
<<<<<<< HEAD

uses(Tests\TestCase::class);

beforeEach(function (): void {
    $this->user = User::factory()->create();
    $this->team = Team::factory()->create();
    $this->personalTeam = Team::factory()->create([
        'user_id' => $this->user->id,
        'personal_team' => true,
    ]);
});

test('it correctly checks if user belongs to teams', function (): void {
    // Test: User senza team
    $userWithoutTeams = User::factory()->create();
    expect($userWithoutTeams->belongsToTeams())->toBeFalse();

    // Test: User con team owned
    expect($this->user->belongsToTeams())->toBeTrue();

    // Test: User con team membership
    $memberUser = User::factory()->create();
    $memberUser->teams()->attach($this->team->id, ['role' => 'member']);
    expect($memberUser->belongsToTeams())->toBeTrue();
});

test('it correctly checks if user belongs to specific team', function (): void {
    // Test: Null team
    expect($this->user->belongsToTeam(null))->toBeFalse();

    // Test: Owned team
    expect($this->user->belongsToTeam($this->personalTeam))->toBeTrue();

    // Test: Member team
    $this->user->teams()->attach($this->team->id, ['role' => 'member']);
    expect($this->user->belongsToTeam($this->team))->toBeTrue();

    // Test: Non-member team
    $otherTeam = Team::factory()->create();
    expect($this->user->belongsToTeam($otherTeam))->toBeFalse();
});

test('it correctly checks team ownership', function (): void {
    // Test: Owned team
    expect($this->user->ownsTeam($this->personalTeam))->toBeTrue();

    // Test: Non-owned team
    expect($this->user->ownsTeam($this->team))->toBeFalse();

    // Test: Member team (not owner)
    $this->user->teams()->attach($this->team->id, ['role' => 'member']);
    expect($this->user->ownsTeam($this->team))->toBeFalse();
});

test('it uses belongs to many x for teams relationship', function (): void {
    // Verifica che la relazione teams() restituisca BelongsToMany
    $relation = $this->user->teams();
    expect($relation)->toBeInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsToMany::class);

    // Verifica che il pivot model sia TeamUser
    expect($relation->getTable())->toBe('team_user');
});

test('it correctly manages current team', function (): void {
    // Test: Switch to valid team
    $this->user->teams()->attach($this->team->id, ['role' => 'member']);
    $result = $this->user->switchTeam($this->team);
    expect($result)->toBeTrue();
    expect($this->user->current_team_id)->toBe($this->team->id);

    // Test: Switch to null
    $result = $this->user->switchTeam(null);
    expect($result)->toBeTrue();
    expect($this->user->current_team_id)->toBeNull();

    // Test: Switch to non-member team
    $otherTeam = Team::factory()->create();
    $result = $this->user->switchTeam($otherTeam);
    expect($result)->toBeFalse();
});

test('it correctly identifies current team', function (): void {
    $this->user->switchTeam($this->personalTeam);
    
    expect($this->user->isCurrentTeam($this->personalTeam))->toBeTrue();
    expect($this->user->isCurrentTeam($this->team))->toBeFalse();
});

test('it returns all teams user owns or belongs to', function (): void {
    // Aggiungi user come member di un team
    $this->user->teams()->attach($this->team->id, ['role' => 'member']);

    $allTeams = $this->user->allTeams();
    
    expect($allTeams)->toBeInstanceOf(Collection::class);
    expect($allTeams)->toHaveCount(2); // personal team + member team
    expect($allTeams->contains($this->personalTeam))->toBeTrue();
    expect($allTeams->contains($this->team))->toBeTrue();
});

test('it returns owned teams', function (): void {
    $ownedTeams = $this->user->ownedTeams;
    
    expect($ownedTeams)->toBeInstanceOf(Collection::class);
    expect($ownedTeams)->toHaveCount(1);
    expect($ownedTeams->contains($this->personalTeam))->toBeTrue();
});

test('it returns personal team', function (): void {
    $personalTeam = $this->user->personalTeam();
    
    expect($personalTeam)->toBeInstanceOf(TeamContract::class);
    expect($personalTeam->id)->toBe($this->personalTeam->id);
    expect($personalTeam->personal_team)->toBeTrue();
});

test('it correctly determines team role', function (): void {
    // Test: Owner role
    $role = $this->user->teamRole($this->personalTeam);
    expect($role)->toBeInstanceOf(\Modules\User\Models\Role::class);
    expect($role->name)->toBe('owner');

    // Test: Member role
    $this->user->teams()->attach($this->team->id, ['role' => 'admin']);
    $role = $this->user->teamRole($this->team);
    expect($role)->toBeInstanceOf(\Modules\User\Models\Role::class);
    expect($role->name)->toBe('admin');

    // Test: No role (not member)
    $otherTeam = Team::factory()->create();
    $role = $this->user->teamRole($otherTeam);
    expect($role)->toBeNull();
});

test('it provides team role name helper', function (): void {
    // Test: Owner role name
    $roleName = $this->user->teamRoleName($this->personalTeam);
    expect($roleName)->toBe('owner');

    // Test: Member role name - detach first to avoid duplicates
    $this->user->teams()->detach($this->team->id);
    $this->user->teams()->attach($this->team->id, ['role' => 'admin']);
    $roleName = $this->user->teamRoleName($this->team);
    expect($roleName)->toBe('admin');

    // Test: No role (not member)
    $otherTeam = Team::factory()->create();
    $roleName = $this->user->teamRoleName($otherTeam);
    expect($roleName)->toBeNull();
});

test('it correctly checks team role', function (): void {
    // Test: Owner always has any role
    expect($this->user->hasTeamRole($this->personalTeam, 'admin'))->toBeTrue();
    expect($this->user->hasTeamRole($this->personalTeam, 'member'))->toBeTrue();

    // Test: Specific role check
    $this->user->teams()->attach($this->team->id, ['role' => 'admin']);
    expect($this->user->hasTeamRole($this->team, 'admin'))->toBeTrue();
    expect($this->user->hasTeamRole($this->team, 'member'))->toBeFalse();
});

test('it correctly manages team permissions', function (): void {
    // Test: Owner has all permissions
    $permissions = $this->user->teamPermissions($this->personalTeam);
    expect($permissions)->toBe(['*']);
    expect($this->user->hasTeamPermission($this->personalTeam, 'any_permission'))->toBeTrue();

    // Test: Non-member has no permissions
    $otherTeam = Team::factory()->create();
    $permissions = $this->user->teamPermissions($otherTeam);
    expect($permissions)->toBe([]);
    expect($this->user->hasTeamPermission($otherTeam, 'any_permission'))->toBeFalse();

    // Test: Member has role-based permissions
    $this->user->teams()->attach($this->team->id, ['role' => 'admin']);
    $permissions = $this->user->teamPermissions($this->team);
    expect($permissions)->toBe(['admin']);
    expect($this->user->hasTeamPermission($this->team, 'admin'))->toBeTrue();
});

test('it provides utility methods', function (): void {
    // Test: hasTeams() alias
    expect($this->user->hasTeams())->toBeTrue();

    // Test: isOwnerOrMember()
    expect($this->user->isOwnerOrMember($this->personalTeam))->toBeTrue();
    
    $this->user->teams()->attach($this->team->id, ['role' => 'member']);
    expect($this->user->isOwnerOrMember($this->team))->toBeTrue();

    $otherTeam = Team::factory()->create();
    expect($this->user->isOwnerOrMember($otherTeam))->toBeFalse();
});

test('it handles edge cases correctly', function (): void {
    // Test: User senza ID
    $newUser = new User();
    expect($newUser->belongsToTeams())->toBeFalse();

    // Test: Team senza user_id
    $teamWithoutOwner = Team::factory()->create(['user_id' => null]);
    expect($this->user->ownsTeam($teamWithoutOwner))->toBeFalse();
});

test('it validates assertions correctly', function (): void {
    expect(fn () => $this->user->ownsTeam(null))
        ->toThrow(\InvalidArgumentException::class, 'Team cannot be null');
});
=======
>>>>>>> aurmich/dev
class HasTeamsTraitTest extends TestCase
{
    use RefreshDatabase;

<<<<<<< HEAD
    protected User $user;
    protected Team $team;
    protected Team $personalTeam;
=======
    private User $user;
    private Team $team;
    private Team $personalTeam;
>>>>>>> aurmich/dev

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

<<<<<<< HEAD
        // Test: No role
        $otherUser = User::factory()->create();
        $this->assertNull($otherUser->teamRole($this->team));
=======
        // Test: No role (not member)
        $otherTeam = Team::factory()->create();
        $role = $this->user->teamRole($otherTeam);
        $this->assertNull($role);
>>>>>>> aurmich/dev
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

<<<<<<< HEAD
        // Test: Unknown role
        $otherTeam = Team::factory()->create();
        $roleName = $this->user->teamRoleName($otherTeam);
        $this->assertEquals('Unknown', $roleName);
=======
        // Test: No role (not member)
        $otherTeam = Team::factory()->create();
        $roleName = $this->user->teamRoleName($otherTeam);
        $this->assertNull($roleName);
>>>>>>> aurmich/dev
    }

    /** @test */
    public function it_correctly_checks_team_role(): void
    {
<<<<<<< HEAD
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
=======
        // Test: Owner always has any role
        $this->assertTrue($this->user->hasTeamRole($this->personalTeam, 'admin'));
        $this->assertTrue($this->user->hasTeamRole($this->personalTeam, 'member'));

        // Test: Specific role check
        $this->user->teams()->attach($this->team->id, ['role' => 'admin']);
        $this->assertTrue($this->user->hasTeamRole($this->team, 'admin'));
        $this->assertFalse($this->user->hasTeamRole($this->team, 'member'));
>>>>>>> aurmich/dev
    }

    /** @test */
    public function it_correctly_manages_team_permissions(): void
    {
        // Test: Owner has all permissions
<<<<<<< HEAD
        $this->assertTrue($this->user->hasTeamPermission($this->personalTeam, 'edit-team'));

        // Test: Member with specific permission
        $this->user->teams()->attach($this->team->id, [
            'role' => 'editor',
            'permissions' => json_encode(['edit-content' => true])
        ]);
        
        $this->assertTrue($this->user->hasTeamPermission($this->team, 'edit-content'));
        $this->assertFalse($this->user->hasTeamPermission($this->team, 'delete-content'));
=======
        $permissions = $this->user->teamPermissions($this->personalTeam);
        $this->assertEquals(['*'], $permissions);
        $this->assertTrue($this->user->hasTeamPermission($this->personalTeam, 'any_permission'));

        // Test: Non-member has no permissions
        $otherTeam = Team::factory()->create();
        $permissions = $this->user->teamPermissions($otherTeam);
        $this->assertEquals([], $permissions);
        $this->assertFalse($this->user->hasTeamPermission($otherTeam, 'any_permission'));

        // Test: Member has role-based permissions
        $this->user->teams()->attach($this->team->id, ['role' => 'admin']);
        $permissions = $this->user->teamPermissions($this->team);
        $this->assertEquals(['admin'], $permissions);
        $this->assertTrue($this->user->hasTeamPermission($this->team, 'admin'));
>>>>>>> aurmich/dev
    }

    /** @test */
    public function it_provides_utility_methods(): void
    {
<<<<<<< HEAD
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
=======
        // Test: hasTeams() alias
        $this->assertTrue($this->user->hasTeams());

        // Test: isOwnerOrMember()
        $this->assertTrue($this->user->isOwnerOrMember($this->personalTeam));
        
        $this->user->teams()->attach($this->team->id, ['role' => 'member']);
        $this->assertTrue($this->user->isOwnerOrMember($this->team));

        $otherTeam = Team::factory()->create();
        $this->assertFalse($this->user->isOwnerOrMember($otherTeam));
    }

    /** @test */
    public function it_handles_edge_cases_correctly(): void
    {
        // Test: User senza ID
        $newUser = new User();
        $this->assertFalse($newUser->belongsToTeams());

        // Test: Team senza user_id
        $teamWithoutOwner = Team::factory()->create(['user_id' => null]);
        $this->assertFalse($this->user->ownsTeam($teamWithoutOwner));
    }

    /** @test */
    public function it_validates_assertions_correctly(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Team cannot be null');
        
        // Questo dovrebbe lanciare Assert::notNull exception
        $this->user->ownsTeam(null);
    }
}
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
