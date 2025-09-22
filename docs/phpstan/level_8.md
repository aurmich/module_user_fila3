# Rapporto PHPStan Livello 8 per il modulo User

> File unificato dopo risoluzione conflitti git (2024-06-12). Per dettagli sulle versioni precedenti, consultare lo storico git.

Data analisi: 2025-04-15 21:59:49

## Riepilogo

Trovati 69 errori al livello 8.

## Errori e suggerimenti

<<<<<<< HEAD
### File: `/var/www/html/<nome progetto>/laravel/Modules/User/app/Filament/Resources/UserResource/Actions/SendOtpAction.php`
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Filament/Resources/UserResource/Actions/SendOtpAction.php`
### File: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/User/app/Filament/Resources/UserResource/Actions/SendOtpAction.php`
=======
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Filament/Resources/UserResource/Actions/SendOtpAction.php`
>>>>>>> 079c9da7 (.)

#### Linea 30: Parameter #1 $user of method Modules\User\Actions\Otp\SendOtpByUserAction::execute() expects Modules\Xot\Contracts\UserContract, Modules\User\Models\User given.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

<<<<<<< HEAD
### File: `/var/www/html/<nome progetto>/laravel/Modules/User/app/Filament/Widgets/Auth/BaseAuthWidget.php`
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Filament/Widgets/Auth/BaseAuthWidget.php`
### File: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/User/app/Filament/Widgets/Auth/BaseAuthWidget.php`
=======
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Filament/Widgets/Auth/BaseAuthWidget.php`
>>>>>>> 079c9da7 (.)

#### Linea 20: Access to an undefined property Modules\User\Filament\Widgets\Auth\BaseAuthWidget::$form.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

#### Linea 26: Access to an undefined property Modules\User\Filament\Widgets\Auth\BaseAuthWidget::$form.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

<<<<<<< HEAD
### File: `/var/www/html/<nome progetto>/laravel/Modules/User/app/Filament/Widgets/Auth/ForgotPasswordWidget.php`
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Filament/Widgets/Auth/ForgotPasswordWidget.php`
### File: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/User/app/Filament/Widgets/Auth/ForgotPasswordWidget.php`
=======
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Filament/Widgets/Auth/ForgotPasswordWidget.php`
>>>>>>> 079c9da7 (.)

#### Linea 36: Access to an undefined property Modules\User\Filament\Widgets\Auth\ForgotPasswordWidget::$form.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

<<<<<<< HEAD
### File: `/var/www/html/<nome progetto>/laravel/Modules/User/app/Filament/Widgets/Auth/LoginWidget.php`
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Filament/Widgets/Auth/LoginWidget.php`
### File: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/User/app/Filament/Widgets/Auth/LoginWidget.php`
=======
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Filament/Widgets/Auth/LoginWidget.php`
>>>>>>> 079c9da7 (.)

#### Linea 25: Access to an undefined property Modules\User\App\Filament\Widgets\Auth\LoginWidget::$form.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

#### Linea 58: Access to an undefined property Modules\User\App\Filament\Widgets\Auth\LoginWidget::$form.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

<<<<<<< HEAD
### File: `/var/www/html/<nome progetto>/laravel/Modules/User/app/Filament/Widgets/Auth/RegisterWidget.php`
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Filament/Widgets/Auth/RegisterWidget.php`
### File: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/User/app/Filament/Widgets/Auth/RegisterWidget.php`
=======
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Filament/Widgets/Auth/RegisterWidget.php`
>>>>>>> 079c9da7 (.)

#### Linea 22: Access to an undefined property Modules\User\App\Filament\Widgets\Auth\RegisterWidget::$form.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

#### Linea 69: Access to an undefined property Modules\User\App\Filament\Widgets\Auth\RegisterWidget::$form.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

<<<<<<< HEAD
### File: `/var/www/html/<nome progetto>/laravel/Modules/User/app/Filament/Widgets/Auth/ResetPasswordWidget.php`
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Filament/Widgets/Auth/ResetPasswordWidget.php`
### File: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/User/app/Filament/Widgets/Auth/ResetPasswordWidget.php`
=======
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Filament/Widgets/Auth/ResetPasswordWidget.php`
>>>>>>> 079c9da7 (.)

#### Linea 54: Access to an undefined property Modules\User\Filament\Widgets\Auth\ResetPasswordWidget::$form.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

<<<<<<< HEAD
### File: `/var/www/html/<nome progetto>/laravel/Modules/User/app/Models/BaseUser.php`
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Models/BaseUser.php`
### File: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/User/app/Models/BaseUser.php`
=======
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Models/BaseUser.php`
>>>>>>> 079c9da7 (.)

#### Linea 229: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::hasRole().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 273: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::belongsToManyX().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 285: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::socialiteUsers().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 319: Access to an undefined property Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::$first_name.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

#### Linea 319: Access to an undefined property Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::$last_name.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

#### Linea 399: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::teamRole().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 422: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::roles().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 428: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownedTeams().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 433: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::belongsToTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta

#### Linea 437: Access to an undefined property Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::$current_team_id.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

#### Linea 445: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::teams().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 451: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::teams().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 467: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownedTeams().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 481: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::teams().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 490: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 490: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::teamPermissions().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 495: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 499: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::teamRole().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 505: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 510: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 515: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::belongsToTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 515: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 520: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::hasTeamPermission().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 520: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 525: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::hasTeamPermission().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 525: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 530: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::hasTeamPermission().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 530: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 535: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::hasTeamPermission().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 535: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 540: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::belongsToTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 540: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::hasTeamPermission().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 545: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::hasPermissionTo().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 579: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::roles().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 585: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::hasRole().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 593: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::roles().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 597: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::roles().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 610: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::roles().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

<<<<<<< HEAD
### File: `/var/www/html/<nome progetto>/laravel/Modules/User/app/Models/Models/BaseUser.php`
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Models/Models/BaseUser.php`
### File: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/User/app/Models/Models/BaseUser.php`
=======
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Models/Models/BaseUser.php`
>>>>>>> 079c9da7 (.)

#### Linea 20: Unable to resolve the template type TRelatedModel in call to method Illuminate\Database\Eloquent\Model::morphMany()

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

<<<<<<< HEAD
### File: `/var/www/html/<nome progetto>/laravel/Modules/User/app/Models/Profile.php`
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Models/Profile.php`
### File: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/User/app/Models/Profile.php`
=======
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Models/Profile.php`
>>>>>>> 079c9da7 (.)

#### Linea 49: PHPDoc tag @property-read for property Modules\User\Models\Profile::$creator contains unknown class Modules\Broker\Models\Profile.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 49: PHPDoc tag @property-read for property Modules\User\Models\Profile::$updater contains unknown class Modules\Broker\Models\Profile.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 49: PHPDoc tag @property-read for property Modules\User\Models\Profile::$user contains unknown class Modules\Broker\Models\User.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

<<<<<<< HEAD
### File: `/var/www/html/<nome progetto>/laravel/Modules/User/app/Models/Traits/HasAuthenticationLogTrait.php (in context of class Modules\User\Models\BaseUser)`
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Models/Traits/HasAuthenticationLogTrait.php (in context of class Modules\User\Models\BaseUser)`
### File: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/User/app/Models/Traits/HasAuthenticationLogTrait.php (in context of class Modules\User\Models\BaseUser)`
=======
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Models/Traits/HasAuthenticationLogTrait.php (in context of class Modules\User\Models\BaseUser)`
>>>>>>> 079c9da7 (.)

#### Linea 72: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::authentications().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 84: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::authentications().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 96: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::authentications().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 108: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::authentications().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 120: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::authentications().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 132: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::authentications().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 148: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::authentications().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 152: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::authentications().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

<<<<<<< HEAD
### File: `/var/www/html/<nome progetto>/laravel/Modules/User/app/Models/Traits/HasTeams.php (in context of class Modules\User\Models\BaseUser)`
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Models/Traits/HasTeams.php (in context of class Modules\User\Models\BaseUser)`
### File: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/User/app/Models/Traits/HasTeams.php (in context of class Modules\User\Models\BaseUser)`
=======
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Models/Traits/HasTeams.php (in context of class Modules\User\Models\BaseUser)`
>>>>>>> 079c9da7 (.)

#### Linea 35: Access to an undefined property Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::$currentTeam.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

#### Linea 113: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::belongsToManyX().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 233: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 247: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 261: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::belongsToTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 261: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 269: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 283: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::ownsTeam().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

<<<<<<< HEAD
### File: `/var/www/html/<nome progetto>/laravel/Modules/User/app/Models/Traits/HasTenants.php (in context of class Modules\User\Models\BaseUser)`
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Models/Traits/HasTenants.php (in context of class Modules\User\Models\BaseUser)`
### File: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/User/app/Models/Traits/HasTenants.php (in context of class Modules\User\Models\BaseUser)`
=======
### File: `/var/www/html/saluteora/laravel/Modules/User/app/Models/Traits/HasTenants.php (in context of class Modules\User\Models\BaseUser)`
>>>>>>> 079c9da7 (.)

#### Linea 27: Call to an undefined method Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::tenants().

**Suggerimento**: Questo metodo non esiste o non è accessibile. Verifica:
- Se il metodo è definito nella classe
- Se il metodo ha la visibilità corretta (public/protected/private)
- Se stai importando la classe corretta
- Se ci sono errori di digitazione nel nome del metodo

#### Linea 33: Access to an undefined property Modules\User\Models\BaseUser<TModel of Illuminate\Database\Eloquent\Model, TRelatedModel of Illuminate\Database\Eloquent\Model>::$tenants.

**Suggerimento**: Questa proprietà non esiste o non è accessibile. Verifica:
- Se la proprietà è definita nella classe
- Se la proprietà ha la visibilità corretta
- Se stai usando un trait che definisce questa proprietà
- Se la proprietà è impostata nel costruttore o in altri metodi

## Risorse utili

- [Documentazione PHPStan](https://phpstan.org/user-guide/getting-started)
- [Tipi in PHP](https://www.php.net/manual/en/language.types.declarations.php)
- [PSR-12: Standard di codifica](https://www.php-fig.org/psr/psr-12/)

## Collegamenti tra versioni di level_8.md
* [level_8.md](laravel/Modules/Chart/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/Reporting/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/Gdpr/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/Notify/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/Xot/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/Dental/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/User/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/UI/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/Lang/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/Job/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/Media/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/Tenant/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/Activity/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/Patient/project_docs/phpstan/level_8.md)
* [level_8.md](laravel/Modules/Cms/project_docs/phpstan/level_8.md)
