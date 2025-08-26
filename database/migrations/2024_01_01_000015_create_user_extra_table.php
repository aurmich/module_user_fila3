<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\User\Models\Extra;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateExtraTable.
 */
return new class extends XotBaseMigration
{
    protected ?string $model_class = Extra::class;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->increments('id');
                $table->uuidMorphs('model');
                $table->schemalessAttributes('extra_attributes');
                
                
                
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('name')) {
                //    $table->string('name')->nullable();
                // }
<<<<<<< HEAD
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
=======
                $this->updateTimestamps($table, true);
>>>>>>> 4f6d2d5 (.)

                if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
                    $table->string('model_id', 36)->index()->change();
                }
            }
        );
    }

    // end up

    // end down
};
