# Filament Integration

## Overview
This document covers the Filament integration for the User module, providing admin interfaces for user management.

## Resources

### User Resource
- Path: `app/Filament/Resources/UserResource.php`
- Manages CRUD operations for users
- Includes filters, sorting, and search

### Role & Permission Resources
- Path: `app/Filament/Resources/RoleResource.php`
- Path: `app/Filament/Resources/PermissionResource.php`
- Manage roles and permissions

## Pages

### Dashboard
- User statistics
- Recent activities
- System status

### User Profile
- Edit personal information
- Change password
- Two-factor authentication setup

## Widgets

### User Stats
- Total users
- New users (today)
- Active users

### Activity Log
- Recent user activities
- Login history
- Security events

## Forms

### User Form
```php
public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
                
            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),
                
            Forms\Components\Select::make('roles')
                ->relationship('roles', 'name')
                ->multiple()
                ->preload(),
                
            Forms\Components\Toggle::make('is_active')
                ->default(true),
        ]);
}
```

## Tables

### User Table
```php
public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
                
            Tables\Columns\TextColumn::make('email')
                ->searchable()
                ->sortable(),
                
            Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'success' => 'active',
                    'danger' => 'inactive',
                ]),
                
            Tables\Columns\TextColumn::make('last_login_at')
                ->dateTime()
                ->sortable(),
        ])
        ->filters([
            Tables\Filters\SelectFilter::make('roles')
                ->relationship('roles', 'name')
                ->multiple(),
                
            Tables\Filters\TernaryFilter::make('is_active'),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
}
```

## Customizing Filament

### Theme
Customize the Filament theme by publishing the views:
```bash
php artisan vendor:publish --tag=filament-views
```

### Navigation
Customize the sidebar navigation in `App\Providers\Filament\AdminPanelProvider`:
```php
public function panel(Panel $panel): Panel
{
    return $panel
        ->navigationGroups([
            'User Management',
            'System',
            'Settings',
        ]);
}
```

### Custom Pages
Create custom Filament pages by extending `Filament\Pages\Page`:
```php
class UserActivityLog extends Page
{
    protected static string $view = 'filament.pages.user-activity-log';
    
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    
    protected static ?string $navigationGroup = 'User Management';
    
    protected static ?int $navigationSort = 3;
}
```

## Best Practices
1. Keep resource classes focused and single-responsibility
2. Use form components consistently
3. Implement proper authorization checks
4. Optimize queries with eager loading
5. Use custom filters and actions for complex operations

## Performance Tips
- Use `lazy()` for large tables
- Implement search on indexed columns
- Cache expensive queries
- Use `withCount()` for relationship counts

## Security Considerations
- Always validate and authorize actions
- Use form request validation
- Sanitize user input
- Implement proper CSRF protection
