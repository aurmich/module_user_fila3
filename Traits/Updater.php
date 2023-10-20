<?php

declare(strict_types=1);

namespace Modules\Xot\Traits;

use Illuminate\Contracts\Auth\Authenticatable;

/**
 * Trait Updater.
 * https://dev.to/hasanmn/automatically-update-createdby-and-updatedby-in-laravel-using-bootable-traits-28g9.
 */
trait Updater
{
    /**
     * Undocumented function.
     * move to modelservice.
     */
    /*

     * move to modelservice.
     */
    /*
    public function getTableColumns(): array {
        return $this->getConnection()
            ->getSchemaBuilder()
            ->getColumnListing($this->getTable());
    }

    /**
     * bootUpdater function.
    */

    /**
     * bootUpdater function.
     */
    protected static function bootUpdater(): void
    {
        // parent::boot();
        /*
         * During a model create Eloquent will also update the updated_at field so
         * need to have the updated_by field here as well.
         */
        static::creating(
            function ($model): void {
                // if (auth()->user() instanceof Authenticatable) {
                $model->created_by = auth()->id();
                $model->updated_by = auth()->id();
                // }
            }
        );

        /*
         * updating.
         */
        static::updating(
            function ($model): void {
                $model->updated_by = auth()->id();
            }
        );
        // -------------------------------------------------------------------------------------
        /*
         * Deleting a model is slightly different than creating or deleting.
         * For deletes we need to save the model first with the deleted_by field
        */
        // *
        static::deleting(function ($model) {
            if (\in_array('deleted_by', $model->attributes, true)) {
                $model->deleted_by = auth()->id();
            }
            // $model->save();
        });
        // */
        // ----------------------
    }

    // end function boot
}// end trait Updater
