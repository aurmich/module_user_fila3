# Authorization System

## Features
- Role-based access control (RBAC)
- Permission management
- Policy-based authorization
- Team-based permissions
- Middleware protection

## Models

### User Model
```php
class User extends Authenticatable
{
    use HasRoles;
    
    // ...
}
```

### Role & Permission
```php
// Assign role to user
$user->assignRole('admin');

// Assign multiple roles
$user->assignRole('writer', 'admin');

// Assign permission to role
$role->givePermissionTo('edit articles');

// Check permission
if ($user->can('edit articles')) {
    // User can edit articles
}
```

## Middleware

### Route Middleware
```php
// Single role
Route::middleware(['role:admin'])->group(function () {
    // Routes for admin only
});

// Multiple roles
Route::middleware(['role:admin|moderator'])->group(function () {
    // Routes for admin or moderator
});

// Permission-based
Route::middleware(['permission:edit articles'])->group(function () {
    // Routes requiring edit articles permission
});
```

## Policies

### Creating Policies
```php
php artisan make:policy PostPolicy --model=Post
```

### Policy Example
```php
class PostPolicy
{
    public function update(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }
}
```

### Authorizing Actions
```php
// In controller
public function update(Request $request, Post $post)
{
    $this->authorize('update', $post);
    
    // The current user can update the post...
}

// In blade
@can('update', $post)
    <!-- Show edit button -->
@endcan
```

## Testing Authorization

### Feature Tests
```php
public function test_admin_can_delete_post()
{
    $user = User::factory()->create();
    $user->assignRole('admin');
    
    $post = Post::factory()->create();
    
    $response = $this->actingAs($user)
        ->delete("/posts/{$post->id}");
        
    $response->assertStatus(200);
    $this->assertDatabaseMissing('posts', ['id' => $post->id]);
}

public function test_guest_cannot_delete_post()
{
    $post = Post::factory()->create();
    
    $response = $this->delete("/posts/{$post->id}");
    
    $response->assertStatus(403);
    $this->assertDatabaseHas('posts', ['id' => $post->id]);
}
```

## Best Practices
1. Use policies for model authorization
2. Prefer role-based permissions over direct user permissions
3. Cache permissions for better performance
4. Keep permission names consistent and descriptive
5. Document all available permissions and roles

## Performance Considerations
- Permission checks are cached by default
- Use `withoutTouching()` when bulk updating to prevent cache flushes
- Consider using gates for simple, non-model related authorization

## Security Considerations
- Always validate permissions on the server-side
- Never trust client-side authorization
- Regularly audit user roles and permissions
- Implement proper logging for permission changes

## Common Issues
1. **Cache Issues**: Clear cache after permission/role changes
   ```bash
   php artisan permission:cache-reset
   ```

2. **Missing Policies**: Always create policies for protected resources

3. **Performance**: Use `withPivot()` when eager loading roles/permissions
   ```php
   $users = User::with(['roles' => function($q) {
       $q->withPivot('team_id');
   }])->get();
   ```

4. **Testing**: Always test both positive and negative cases for authorization
