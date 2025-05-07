<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ---- models ---
use Modules\User\Models\Role;
use Modules\Xot\Database\Migrations\XotBaseMigration;
use Modules\Xot\Datas\XotData;

/*
 * Class CreateModelHasRolesTable.
 */
return new class extends XotBaseMigration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $team_class = XotData::make()->getTeamClass();
                $table->id();
                // $table->foreignIdFor(Role::class, 'role_id')->nullable();
                $table->integer('role_id')->index()->nullable();
                $table->uuidMorphs('model');
                $table->foreignIdFor($team_class, 'team_id')->nullable();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                $team_class = XotData::make()->getTeamClass();
                if (! $this->hasColumn('team_id')) {
                    $table->foreignIdFor($team_class, 'team_id')->nullable();
                }
<<<<<<< HEAD
=======
<<<<<<< HEAD
                if ('uuid' === $this->getColumnType('model_id')) {
                    $table->string('model_id', 36)->index()->change();
                }
                if ('uuid' === $this->getColumnType('role_id')) {
                    $table->string('role_id', 36)->index()->change();
=======
>>>>>>> 867b3bd (.)
                if ($this->getColumnType('model_id') === 'uuid') {
                    $table->string('model_id', 36)->index()->change();
                }
                if ($this->getColumnType('role_id') === 'uuid') {
                    $table->integer('role_id')->index()->change();
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 867b3bd (.)
                }
                // $this->updateUser($table);
                $this->updateTimestamps($table);
            }
        );
    }
};
