<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateStoredEventsTable extends XotBaseMigration
{
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->id();
                $table->uuid('aggregate_uuid')->nullable();
                $table->unsignedBigInteger('aggregate_version')->nullable();
                $table->unsignedTinyInteger('event_version')->default(1);
                $table->string('event_class');
                $table->jsonb('event_properties');
                $table->jsonb('meta_data');
                $table->timestamp('created_at');
                $table->index('event_class');
                $table->index('aggregate_uuid');

                $table->unique(['aggregate_uuid', 'aggregate_version']);
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('created_by')) {
                    $table->string('created_by')->nullable();
                    $table->string('updated_by')->nullable();
                }
            }
        );
    }
}
