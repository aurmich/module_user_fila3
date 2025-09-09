<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Models\Traits\HasTeams;
use Modules\User\Models\Team;
use Modules\User\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
=======
namespace Modules\User\Tests\Unit\Models\Traits\HasTeamsTest;

namespace Modules\User\Tests\Unit\Widgets;

=======
>>>>>>> 9d96960 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\User\Models\Team;
use Modules\User\Models\Traits\HasTeams;
use Modules\User\Models\User;
>>>>>>> 079c9da (.)

// Mock class per testare il trait
class MockUserWithTeams extends Model
{
    use HasTeams;

    protected $table = 'users';
<<<<<<< HEAD
=======

>>>>>>> 079c9da (.)
    protected $fillable = ['name', 'email'];

    public function getKey()
    {
        return 1;
    }
}

beforeEach(function () {
<<<<<<< HEAD
<<<<<<< HEAD
    $this->user = new MockUserWithTeams();
    $this->user->id = 1;
    
=======
=======
    $this->user = new MockUserWithTeams;
    $this->user->id = 1;
>>>>>>> 9d96960 (.)

>>>>>>> 079c9da (.)
    // Mock del database per i test
    $this->user->setConnection('testing');
});

describe('HasTeams Trait', function () {
    it('can be used in a model', function () {
        expect($this->user)->toBeInstanceOf(MockUserWithTeams::class);
        expect($this->user)->toHaveMethod('teams');
        expect($this->user)->toHaveMethod('belongsToTeam');
    });

    it('has teams relationship method', function () {
        $teamsRelation = $this->user->teams();
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        expect($teamsRelation)->toBeInstanceOf(BelongsToMany::class);
    });

    it('can check if user belongs to a team by ID', function () {
        $teamId = 5;
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        // Mock della relazione teams per simulare l'appartenenza
        $this->user->shouldReceive('teams->where->exists')
            ->with('team_id', $teamId)
            ->andReturn(true);
<<<<<<< HEAD
        
        $result = $this->user->belongsToTeam($teamId);
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        $result = $this->user->belongsToTeam($teamId);

>>>>>>> 9d96960 (.)
        expect($result)->toBeTrue();
    });

    it('can check if user belongs to a team by Team model', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $team = new Team();
        $team->id = 10;
        
=======
=======
        $team = new Team;
        $team->id = 10;
>>>>>>> 9d96960 (.)

>>>>>>> 079c9da (.)
        // Mock della relazione teams per simulare l'appartenenza
        $this->user->shouldReceive('teams->where->exists')
            ->with('team_id', $team->id)
            ->andReturn(true);
<<<<<<< HEAD
        
        $result = $this->user->belongsToTeam($team);
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        $result = $this->user->belongsToTeam($team);

>>>>>>> 9d96960 (.)
        expect($result)->toBeTrue();
    });

    it('returns false when user does not belong to team', function () {
        $teamId = 999;
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        // Mock della relazione teams per simulare la non appartenenza
        $this->user->shouldReceive('teams->where->exists')
            ->with('team_id', $teamId)
            ->andReturn(false);
<<<<<<< HEAD
        
        $result = $this->user->belongsToTeam($teamId);
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        $result = $this->user->belongsToTeam($teamId);

>>>>>>> 9d96960 (.)
        expect($result)->toBeFalse();
    });

    it('handles both integer and Team model parameters', function () {
        $teamId = 15;
<<<<<<< HEAD
<<<<<<< HEAD
        $team = new Team();
        $team->id = 15;
        
=======
=======
        $team = new Team;
        $team->id = 15;
>>>>>>> 9d96960 (.)

>>>>>>> 079c9da (.)
        // Mock per entrambi i casi
        $this->user->shouldReceive('teams->where->exists')
            ->with('team_id', $teamId)
            ->andReturn(true);
<<<<<<< HEAD
        
        $this->user->shouldReceive('teams->where->exists')
            ->with('team_id', $team->id)
            ->andReturn(true);
        
        $resultById = $this->user->belongsToTeam($teamId);
        $resultByModel = $this->user->belongsToTeam($team);
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        $this->user->shouldReceive('teams->where->exists')
            ->with('team_id', $team->id)
            ->andReturn(true);

        $resultById = $this->user->belongsToTeam($teamId);
        $resultByModel = $this->user->belongsToTeam($team);

>>>>>>> 9d96960 (.)
        expect($resultById)->toBeTrue();
        expect($resultByModel)->toBeTrue();
    });

    it('can get all teams for user', function () {
        $teams = collect([
            new Team(['id' => 1, 'name' => 'Team A']),
            new Team(['id' => 2, 'name' => 'Team B']),
            new Team(['id' => 3, 'name' => 'Team C']),
        ]);
<<<<<<< HEAD
        
        // Mock della relazione teams per restituire la collezione
        $this->user->shouldReceive('teams->get')
            ->andReturn($teams);
        
        $userTeams = $this->user->teams()->get();
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        // Mock della relazione teams per restituire la collezione
        $this->user->shouldReceive('teams->get')
            ->andReturn($teams);

        $userTeams = $this->user->teams()->get();

>>>>>>> 9d96960 (.)
        expect($userTeams)->toHaveCount(3);
        expect($userTeams->first()->name)->toBe('Team A');
        expect($userTeams->last()->name)->toBe('Team C');
    });

    it('can filter teams by specific criteria', function () {
        $activeTeams = collect([
            new Team(['id' => 1, 'name' => 'Active Team 1', 'is_active' => true]),
            new Team(['id' => 2, 'name' => 'Active Team 2', 'is_active' => true]),
        ]);
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        // Mock della relazione teams con filtro
        $this->user->shouldReceive('teams->where->get')
            ->with('is_active', true)
            ->andReturn($activeTeams);
<<<<<<< HEAD
        
        $activeUserTeams = $this->user->teams()->where('is_active', true)->get();
        
        expect($activeUserTeams)->toHaveCount(2);
        expect($activeUserTeams->every(fn($team) => $team->is_active))->toBeTrue();
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        $activeUserTeams = $this->user->teams()->where('is_active', true)->get();

        expect($activeUserTeams)->toHaveCount(2);
        expect($activeUserTeams->every(fn ($team) => $team->is_active))->toBeTrue();
>>>>>>> 9d96960 (.)
    });

    it('can check team membership with timestamps', function () {
        $teamId = 25;
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        // Mock della relazione teams con timestamps
        $this->user->shouldReceive('teams->where->exists')
            ->with('team_id', $teamId)
            ->andReturn(true);
<<<<<<< HEAD
        
        $result = $this->user->belongsToTeam($teamId);
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        $result = $this->user->belongsToTeam($teamId);

>>>>>>> 9d96960 (.)
        expect($result)->toBeTrue();
    });

    it('can handle multiple team memberships', function () {
        $teamIds = [1, 2, 3, 4, 5];
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        foreach ($teamIds as $teamId) {
            $this->user->shouldReceive('teams->where->exists')
                ->with('team_id', $teamId)
                ->andReturn(true);
        }
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        foreach ($teamIds as $teamId) {
            $belongsTo = $this->user->belongsToTeam($teamId);
            expect($belongsTo)->toBeTrue();
        }
    });

    it('can handle edge cases with invalid team IDs', function () {
        $invalidTeamIds = [0, -1, null, 'invalid'];
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        foreach ($invalidTeamIds as $teamId) {
            if (is_numeric($teamId) && $teamId > 0) {
                $this->user->shouldReceive('teams->where->exists')
                    ->with('team_id', $teamId)
                    ->andReturn(false);
            }
        }
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        // Test con ID 0 (valido ma probabilmente non esistente)
        $this->user->shouldReceive('teams->where->exists')
            ->with('team_id', 0)
            ->andReturn(false);
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        $result = $this->user->belongsToTeam(0);
        expect($result)->toBeFalse();
    });

    it('can work with team pivot table', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $team = new Team();
        $team->id = 30;
        
=======
=======
        $team = new Team;
        $team->id = 30;
>>>>>>> 9d96960 (.)

>>>>>>> 079c9da (.)
        // Mock della relazione teams con pivot
        $this->user->shouldReceive('teams->where->exists')
            ->with('team_id', $team->id)
            ->andReturn(true);
<<<<<<< HEAD
        
        $result = $this->user->belongsToTeam($team);
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        $result = $this->user->belongsToTeam($team);

>>>>>>> 9d96960 (.)
        expect($result)->toBeTrue();
    });

    it('can handle team relationship with custom pivot table', function () {
        $teamsRelation = $this->user->teams();
<<<<<<< HEAD
        
        expect($teamsRelation)->toBeInstanceOf(BelongsToMany::class);
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        expect($teamsRelation)->toBeInstanceOf(BelongsToMany::class);

>>>>>>> 9d96960 (.)
        // Verifica che la relazione usi la tabella pivot corretta
        $pivotTable = $teamsRelation->getTable();
        expect($pivotTable)->toBe('team_user');
    });

    it('can handle team relationship with custom foreign keys', function () {
        $teamsRelation = $this->user->teams();
<<<<<<< HEAD
        
        expect($teamsRelation)->toBeInstanceOf(BelongsToMany::class);
        
        // Verifica che la relazione usi le chiavi esterne corrette
        $foreignPivotKey = $teamsRelation->getForeignPivotKeyName();
        $relatedPivotKey = $teamsRelation->getRelatedPivotKeyName();
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        expect($teamsRelation)->toBeInstanceOf(BelongsToMany::class);

        // Verifica che la relazione usi le chiavi esterne corrette
        $foreignPivotKey = $teamsRelation->getForeignPivotKeyName();
        $relatedPivotKey = $teamsRelation->getRelatedPivotKeyName();

>>>>>>> 9d96960 (.)
        expect($foreignPivotKey)->toBe('user_id');
        expect($relatedPivotKey)->toBe('team_id');
    });

    it('can handle team relationship with timestamps', function () {
        $teamsRelation = $this->user->teams();
<<<<<<< HEAD
        
        expect($teamsRelation)->toBeInstanceOf(BelongsToMany::class);
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        expect($teamsRelation)->toBeInstanceOf(BelongsToMany::class);

>>>>>>> 9d96960 (.)
        // Verifica che la relazione includa i timestamps
        $withTimestamps = $teamsRelation->withTimestamps;
        expect($withTimestamps)->toBeTrue();
    });
});

describe('HasTeams Trait Integration', function () {
    it('can be used with User model', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $user = new User();
        
=======
=======
        $user = new User;
>>>>>>> 9d96960 (.)

>>>>>>> 079c9da (.)
        expect($user)->toHaveMethod('teams');
        expect($user)->toHaveMethod('belongsToTeam');
    });

    it('maintains trait functionality across different models', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $user1 = new MockUserWithTeams();
        $user2 = new MockUserWithTeams();
        
=======
=======
        $user1 = new MockUserWithTeams;
        $user2 = new MockUserWithTeams;
>>>>>>> 9d96960 (.)

>>>>>>> 079c9da (.)
        expect($user1)->toHaveMethod('teams');
        expect($user1)->toHaveMethod('belongsToTeam');
        expect($user2)->toHaveMethod('teams');
        expect($user2)->toHaveMethod('belongsToTeam');
    });

    it('can handle concurrent team checks', function () {
        $teamIds = [10, 20, 30];
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        foreach ($teamIds as $teamId) {
            $this->user->shouldReceive('teams->where->exists')
                ->with('team_id', $teamId)
                ->andReturn($teamId % 20 === 0); // Solo i team con ID multipli di 20
        }
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        $results = [];
        foreach ($teamIds as $teamId) {
            $results[$teamId] = $this->user->belongsToTeam($teamId);
        }
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        expect($results[10])->toBeFalse();
        expect($results[20])->toBeTrue();
        expect($results[30])->toBeFalse();
    });

    it('can work with team collections', function () {
        $teams = collect([
            new Team(['id' => 1, 'name' => 'Team Alpha']),
            new Team(['id' => 2, 'name' => 'Team Beta']),
        ]);
<<<<<<< HEAD
        
        // Mock della relazione teams
        $this->user->shouldReceive('teams->get')
            ->andReturn($teams);
        
        $userTeams = $this->user->teams()->get();
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        // Mock della relazione teams
        $this->user->shouldReceive('teams->get')
            ->andReturn($teams);

        $userTeams = $this->user->teams()->get();

>>>>>>> 9d96960 (.)
        expect($userTeams)->toBeInstanceOf(\Illuminate\Support\Collection::class);
        expect($userTeams)->toHaveCount(2);
        expect($userTeams->pluck('name')->toArray())->toContain('Team Alpha', 'Team Beta');
    });
});

describe('HasTeams Trait Error Handling', function () {
    it('handles missing team gracefully', function () {
        $nonExistentTeamId = 99999;
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        // Mock della relazione teams per simulare team non esistente
        $this->user->shouldReceive('teams->where->exists')
            ->with('team_id', $nonExistentTeamId)
            ->andReturn(false);
<<<<<<< HEAD
        
        $result = $this->user->belongsToTeam($nonExistentTeamId);
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        $result = $this->user->belongsToTeam($nonExistentTeamId);

>>>>>>> 9d96960 (.)
        expect($result)->toBeFalse();
    });

    it('handles null team parameter gracefully', function () {
        // Mock della relazione teams per simulare parametro null
        $this->user->shouldReceive('teams->where->exists')
            ->with('team_id', null)
            ->andReturn(false);
<<<<<<< HEAD
        
        $result = $this->user->belongsToTeam(null);
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        $result = $this->user->belongsToTeam(null);

>>>>>>> 9d96960 (.)
        expect($result)->toBeFalse();
    });

    it('handles empty team collections', function () {
        $emptyTeams = collect([]);
<<<<<<< HEAD
        
        // Mock della relazione teams per restituire collezione vuota
        $this->user->shouldReceive('teams->get')
            ->andReturn($emptyTeams);
        
        $userTeams = $this->user->teams()->get();
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        // Mock della relazione teams per restituire collezione vuota
        $this->user->shouldReceive('teams->get')
            ->andReturn($emptyTeams);

        $userTeams = $this->user->teams()->get();

>>>>>>> 9d96960 (.)
        expect($userTeams)->toBeInstanceOf(\Illuminate\Support\Collection::class);
        expect($userTeams)->toHaveCount(0);
        expect($userTeams->isEmpty())->toBeTrue();
    });
});

describe('HasTeams Trait Performance', function () {
    it('can handle large numbers of team checks efficiently', function () {
        $largeTeamIds = range(1, 1000);
<<<<<<< HEAD
        
=======

>>>>>>> 079c9da (.)
        foreach ($largeTeamIds as $teamId) {
            $this->user->shouldReceive('teams->where->exists')
                ->with('team_id', $teamId)
                ->andReturn($teamId % 2 === 0); // Solo team con ID pari
        }
<<<<<<< HEAD
        
        $startTime = microtime(true);
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        $startTime = microtime(true);

>>>>>>> 9d96960 (.)
        $results = [];
        foreach ($largeTeamIds as $teamId) {
            $results[$teamId] = $this->user->belongsToTeam($teamId);
        }
<<<<<<< HEAD
        
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

>>>>>>> 9d96960 (.)
        expect($results)->toHaveCount(1000);
        expect($executionTime)->toBeLessThan(1.0); // Dovrebbe essere molto veloce
        expect($results[2])->toBeTrue();
        expect($results[3])->toBeFalse();
    });

    it('can handle team relationship queries efficiently', function () {
        $teams = collect(range(1, 100))->map(function ($id) {
            return new Team(['id' => $id, 'name' => "Team {$id}"]);
        });
<<<<<<< HEAD
        
        // Mock della relazione teams
        $this->user->shouldReceive('teams->get')
            ->andReturn($teams);
        
        $startTime = microtime(true);
        
        $userTeams = $this->user->teams()->get();
        $teamNames = $userTeams->pluck('name')->toArray();
        
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;
        
=======

<<<<<<< HEAD
>>>>>>> 079c9da (.)
=======
        // Mock della relazione teams
        $this->user->shouldReceive('teams->get')
            ->andReturn($teams);

        $startTime = microtime(true);

        $userTeams = $this->user->teams()->get();
        $teamNames = $userTeams->pluck('name')->toArray();

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

>>>>>>> 9d96960 (.)
        expect($userTeams)->toHaveCount(100);
        expect($executionTime)->toBeLessThan(0.1); // Dovrebbe essere molto veloce
        expect($teamNames)->toContain('Team 1', 'Team 50', 'Team 100');
    });
});
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 079c9da (.)
=======
>>>>>>> 9d96960 (.)
