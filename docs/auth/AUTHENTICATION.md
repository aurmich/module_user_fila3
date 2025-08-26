# Authentication System

## Features
- JWT-based authentication
- Social authentication (Google, Facebook, etc.)
- Two-factor authentication (2FA)
- Password reset flow
- Email verification
- Login throttling

## Configuration

### Environment Variables
```env
AUTH_DRIVER=jwt
AUTH_PROVIDER=users

# JWT Configuration
JWT_SECRET=your_jwt_secret
JWT_TTL=60
JWT_REFRESH_TTL=20160

# Socialite Configuration
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_REDIRECT_URI=

FACEBOOK_CLIENT_ID=
FACEBOOK_CLIENT_SECRET=
FACEBOOK_REDIRECT_URI=
```

## Usage

### Login
```php
// Login with email/password
$token = auth()->attempt([
    'email' => $request->email,
    'password' => $request->password
]);

// Return token
return response()->json([
    'access_token' => $token,
    'token_type' => 'bearer',
    'expires_in' => auth()->factory()->getTTL() * 60
]);
```

### Social Login
```php
// Redirect to provider
public function redirectToProvider($provider)
{
    return Socialite::driver($provider)->redirect();
}

// Handle provider callback
public function handleProviderCallback($provider)
{
    $user = Socialite::driver($provider)->user();
    // Find or create user
    $authUser = $this->findOrCreateUser($user, $provider);
    
    // Log the user in
    $token = auth()->login($authUser);
    
    // Return token or redirect
}
```

## Security
- Password hashing with bcrypt
- CSRF protection
- Rate limiting (5 attempts per minute)
- Secure HTTP-only cookies for web auth
- Token blacklisting on logout

## Events
- `Login` - When a user logs in
- `Failed` - When login fails
- `Logout` - When a user logs out
- `Registered` - When a new user registers
- `PasswordReset` - When password is reset

## Testing
```php
// Test authentication
$this->actingAs($user)
     ->get('/api/user')
     ->assertStatus(200);

// Test protected routes
$response = $this->withHeaders([
    'Authorization' => 'Bearer ' . $token,
])->json('GET', '/api/protected-route');
```
