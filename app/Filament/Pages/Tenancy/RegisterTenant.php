<?php

declare(strict_types=1);

namespace Modules\User\Filament\Pages\Tenancy;

use Filament\Forms\Form;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Pages\Tenancy\RegisterTenant as BaseRegisterTenant;
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> 8d82f8c (.)
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
=======
>>>>>>> 8d82f8c (.)
use Modules\Xot\Datas\XotData;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Modules\User\Contracts\TenantContract;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Pages\Tenancy\RegisterTenant as BaseRegisterTenant;
<<<<<<< HEAD
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)

class RegisterTenant extends BaseRegisterTenant
{
    use TransTrait;

    public string $resource;

    public static function getLabel(): string
    {
        $tenantClass = XotData::make()->getTenantClass();
<<<<<<< HEAD
<<<<<<< HEAD
        $func = Str::of(__FUNCTION__)->snake()->toString();
        if (Str::startsWith($func, 'get_')) {
            $func = Str::of($func)->after('get_')->toString();
        }
        $key = Str::of(class_basename(__CLASS__))->snake()->prepend('actions.')->append('.'.$func)->toString();
        $str = static::transClass($tenantClass, $key);
=======
        $func=Str::of(__FUNCTION__)->snake()->toString();
        if(Str::startsWith($func,'get_')){
            $func=Str::of($func)->after('get_')->toString();
        }
        $key=Str::of(class_basename(__CLASS__))->snake()->prepend('actions.')->append('.'.$func)->toString();
        $str= static::transClass($tenantClass,$key);
>>>>>>> 8055579 (.)
=======
        $func=Str::of(__FUNCTION__)->snake()->toString();
        if(Str::startsWith($func,'get_')){
            $func=Str::of($func)->after('get_')->toString();
        }
        $key=Str::of(class_basename(__CLASS__))->snake()->prepend('actions.')->append('.'.$func)->toString();
        $str= static::transClass($tenantClass,$key);
>>>>>>> 8d82f8c (.)

        return $str;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======


>>>>>>> 8d82f8c (.)
    public function form(Form $form): Form
    {
        $tenantClass = XotData::make()->getTenantClass();
        $resource=Str::of($tenantClass)
            ->replace('\Models\\','\Filament\Resources\\')
            ->append('Resource')
            ->toString();
<<<<<<< HEAD
        $this->resource = $resource;

=======


    public function form(Form $form): Form
    {
        $tenantClass = XotData::make()->getTenantClass();
        $resource=Str::of($tenantClass)
            ->replace('\Models\\','\Filament\Resources\\')
            ->append('Resource')
            ->toString();
        $this->resource=$resource;
>>>>>>> 8055579 (.)
=======
        $this->resource=$resource;
>>>>>>> 8d82f8c (.)
        return $form
            ->schema($this->getFormSchema());
    }

    public function getFormSchema(): array
    {
        return $this->resource::getFormSchema();
    }

    /**
     * @param  array<string, mixed>  $data
     */
    protected function handleRegistration(array $data): Model
    {
        $tenantClass = XotData::make()->getTenantClass();

        $tenant = $tenantClass::create($data);
        Assert::implementsInterface($tenant, TenantContract::class);

        $tenant->users()
            ->attach(auth()->user());

        return $tenant;
    }
}
