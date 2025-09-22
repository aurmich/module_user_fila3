<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\RoleResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Pages\Actions\ViewAction;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\User\Filament\Resources\RoleResource;
use Modules\User\Models\Role;
use Modules\User\Support\Utils;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Webmozart\Assert\Assert;

=======
use Webmozart\Assert\Assert;




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





>>>>>>> 079c9da7 (.)
class EditRole extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    // //
    public Collection $permissions;

    // public Role $record;
    protected static string $resource = RoleResource::class;

    /**
     *  ---.
     */
    public function afterSave(): void
    {
        $permissionModels = collect();
        Assert::isArray($data = $this->data);
<<<<<<< HEAD
        $this->permissions->each(static function ($permission) use ($permissionModels, $data): void {
            $permissionModels->push(Utils::getPermissionModel()::firstOrCreate([
                'name' => $permission,
                'guard_name' => $data['guard_name'] ?? 'web',
            ]));
        });
        Assert::isInstanceOf($this->record, Role::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        $this->permissions->each(
            static function ($permission) use ($permissionModels, $data): void {
                $permissionModels->push(
                    Utils::getPermissionModel()::firstOrCreate(
                        [
                            'name' => $permission,
                            'guard_name' => $data['guard_name'] ?? 'web',
                        ]
                    )
                );
            }
        );
        Assert::isInstanceOf($this->record, Role::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 079c9da7 (.)
        $this->record->syncPermissions($permissionModels);
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
<<<<<<< HEAD
        $this->permissions = collect($data)
            ->filter(
                static fn($_permission, $key): bool => (
                    !\in_array($key, ['name', 'guard_name', 'select_all'], false) && Str::contains($key, '_')
                ),
            )
            ->keys();
=======
        $this->permissions = collect($data)->filter(static fn ($permission, $key): bool => ! \in_array($key, ['name', 'guard_name', 'select_all'], false) && Str::contains($key, '_'))->keys();
>>>>>>> 079c9da7 (.)

        return Arr::only($data, ['name', 'guard_name']);
    }
}
