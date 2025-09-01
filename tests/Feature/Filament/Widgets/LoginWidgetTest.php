<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
>>>>>>> 8d82f8c (.)
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Modules\User\Filament\Widgets\LoginWidget;
use Modules\User\Models\User;
<<<<<<< HEAD

=======
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Modules\User\Filament\Widgets\LoginWidget;
use Modules\User\Models\User;
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
use function Pest\Laravel\assertAuthenticatedAs;

uses(Tests\TestCase::class);

beforeEach(function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
    $this->widget = new LoginWidget;
});

test('it can render widget', function (): void {
    $widget = new LoginWidget;

=======
    $this->widget = new LoginWidget();
});

test('it can render widget', function (): void {
    $widget = new LoginWidget();
    
>>>>>>> 8055579 (.)
=======
    $this->widget = new LoginWidget();
});

test('it can render widget', function (): void {
    $widget = new LoginWidget();
    
>>>>>>> 8d82f8c (.)
    // Use reflection to access the protected view property
    $reflection = new \ReflectionClass($widget);
    $property = $reflection->getProperty('view');
    $property->setAccessible(true);
    $view = $property->getValue($widget);
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8055579 (.)
=======
    
>>>>>>> 8d82f8c (.)
    expect($view)->toContain('pub_theme::filament.widgets.auth.login');
});

test('it has correct form schema', function (): void {
    $schema = $this->widget->getFormSchema();
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8d82f8c (.)
    expect($schema)->toHaveCount(3);
    
    // Check that the schema contains components with the expected names
<<<<<<< HEAD
    $componentNames = array_map(fn ($component) => $component->getName(), $schema);
=======
    
    expect($schema)->toHaveCount(3);
    
    // Check that the schema contains components with the expected names
    $componentNames = array_map(fn($component) => $component->getName(), $schema);
>>>>>>> 8055579 (.)
=======
    $componentNames = array_map(fn($component) => $component->getName(), $schema);
>>>>>>> 8d82f8c (.)
    expect($componentNames)->toContain('email');
    expect($componentNames)->toContain('password');
    expect($componentNames)->toContain('remember');
});

test('it can authenticate user', function (): void {
    // Skip if we can't use the database
<<<<<<< HEAD
<<<<<<< HEAD
    if (! class_exists('CreateUsersTable')) {
=======
    if (!class_exists('CreateUsersTable')) {
>>>>>>> 8d82f8c (.)
        $this->markTestSkipped('Database not available for testing');
        return;
    }
<<<<<<< HEAD

=======
    if (!class_exists('CreateUsersTable')) {
        $this->markTestSkipped('Database not available for testing');
        return;
    }
    
>>>>>>> 8055579 (.)
=======
    
>>>>>>> 8d82f8c (.)
    /** @var \Modules\User\Models\User $user */
    $user = User::factory()->create([
        'email' => 'test@example.com',
        'password' => Hash::make('password123'),
    ]);

    $this->widget->form->fill([
        'email' => 'test@example.com',
        'password' => 'password123',
        'remember' => true,
    ]);

    $this->widget->save();

    assertAuthenticatedAs($user);
});

test('it validates credentials', function (): void {
    $this->widget->form->fill([
        'email' => 'nonexistent@example.com',
        'password' => 'wrongpassword',
    ]);

    // The widget should handle validation internally without throwing exceptions
    $this->widget->save();
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8055579 (.)
=======
    
>>>>>>> 8d82f8c (.)
    // Check that the widget has error messages for invalid credentials
    $errorBag = $this->widget->getErrorBag();
    expect($errorBag->isNotEmpty())->toBeTrue();
    expect(implode(' ', $errorBag->all()))->toContain('errore');
});

test('it requires email and password', function (): void {
    $this->widget->form->fill([
        'email' => '',
        'password' => '',
    ]);

    // The widget should handle validation internally without throwing exceptions
    $this->widget->save();
<<<<<<< HEAD
<<<<<<< HEAD

    // Check that the widget has error messages for required fields
    $errorBag = $this->widget->getErrorBag();
    expect($errorBag->isNotEmpty())->toBeTrue();

=======
    
    // Check that the widget has error messages for required fields
    $errorBag = $this->widget->getErrorBag();
    expect($errorBag->isNotEmpty())->toBeTrue();
    
>>>>>>> 8055579 (.)
=======
    
    // Check that the widget has error messages for required fields
    $errorBag = $this->widget->getErrorBag();
    expect($errorBag->isNotEmpty())->toBeTrue();
    
>>>>>>> 8d82f8c (.)
    $errorMessages = implode(' ', $errorBag->all());
    expect($errorMessages)->toContain('email');
    expect($errorMessages)->toContain('password');
});
