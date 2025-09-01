<?php

declare(strict_types=1);

namespace Modules\User\Tests\Unit\Models;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\DatabaseTransactions;
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 8055579 (.)
use Modules\User\Models\Profile;
use Tests\TestCase;

class ProfileTest extends TestCase
{
<<<<<<< HEAD

=======
    use RefreshDatabase;
>>>>>>> 8055579 (.)

    public function test_can_create_profile_with_minimal_data(): void
    {
        $profile = Profile::factory()->create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'user_name' => 'johndoe',
            'email' => 'john@example.com',
        ]);

        $this->assertDatabaseHas('profiles', [
            'id' => $profile->id,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'user_name' => 'johndoe',
            'email' => 'john@example.com',
        ]);
    }

    public function test_can_create_profile_with_all_fields(): void
    {
        $profileData = [
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'user_name' => 'janesmith',
            'email' => 'jane@example.com',
            'phone' => '+1234567890',
            'bio' => 'Software Developer',
            'avatar' => 'avatar.jpg',
            'timezone' => 'UTC',
            'locale' => 'en',
            'preferences' => ['theme' => 'dark', 'notifications' => true],
            'status' => 'active',
            'extra' => ['skills' => ['PHP', 'Laravel'], 'experience' => 5],
        ];

        $profile = Profile::factory()->create($profileData);

        $this->assertDatabaseHas('profiles', [
            'id' => $profile->id,
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'user_name' => 'janesmith',
            'email' => 'jane@example.com',
            'phone' => '+1234567890',
            'bio' => 'Software Developer',
            'avatar' => 'avatar.jpg',
            'timezone' => 'UTC',
            'locale' => 'en',
            'status' => 'active',
        ]);

        // Verifica campi JSON
<<<<<<< HEAD
        expect(['theme' => 'dark', 'notifications' => true], $profile->preferences);
        expect(['skills' => ['PHP', 'Laravel'], 'experience' => 5], $profile->extra);
=======
        $this->assertEquals(['theme' => 'dark', 'notifications' => true], $profile->preferences);
        $this->assertEquals(['skills' => ['PHP', 'Laravel'], 'experience' => 5], $profile->extra);
>>>>>>> 8055579 (.)
    }

    public function test_profile_has_schemaless_attributes(): void
    {
<<<<<<< HEAD
        $profile = new Profile;

        $expectedAttributes = ['extra'];
        expect($expectedAttributes, $profile->getSchemalessAttributes());
=======
        $profile = new Profile();

        $expectedAttributes = ['extra'];
        $this->assertEquals($expectedAttributes, $profile->getSchemalessAttributes());
>>>>>>> 8055579 (.)
    }

    public function test_profile_has_table_name(): void
    {
<<<<<<< HEAD
        $profile = new Profile;

        expect('profiles', $profile->getTable());
=======
        $profile = new Profile();

        $this->assertEquals('profiles', $profile->getTable());
>>>>>>> 8055579 (.)
    }

    public function test_can_find_profile_by_email(): void
    {
        $profile = Profile::factory()->create(['email' => 'unique@example.com']);

        $foundProfile = Profile::where('email', 'unique@example.com')->first();

<<<<<<< HEAD
        expect($foundProfile);
        expect($profile->id, $foundProfile->id);
=======
        $this->assertNotNull($foundProfile);
        $this->assertEquals($profile->id, $foundProfile->id);
>>>>>>> 8055579 (.)
    }

    public function test_can_find_profile_by_user_name(): void
    {
        $profile = Profile::factory()->create(['user_name' => 'uniqueuser']);

        $foundProfile = Profile::where('user_name', 'uniqueuser')->first();

<<<<<<< HEAD
        expect($foundProfile);
        expect($profile->id, $foundProfile->id);
=======
        $this->assertNotNull($foundProfile);
        $this->assertEquals($profile->id, $foundProfile->id);
>>>>>>> 8055579 (.)
    }

    public function test_can_find_profile_by_first_name(): void
    {
        $profile = Profile::factory()->create(['first_name' => 'Unique']);

        $foundProfile = Profile::where('first_name', 'Unique')->first();

<<<<<<< HEAD
        expect($foundProfile);
        expect($profile->id, $foundProfile->id);
=======
        $this->assertNotNull($foundProfile);
        $this->assertEquals($profile->id, $foundProfile->id);
>>>>>>> 8055579 (.)
    }

    public function test_can_find_profile_by_last_name(): void
    {
        $profile = Profile::factory()->create(['last_name' => 'Unique']);

        $foundProfile = Profile::where('last_name', 'Unique')->first();

<<<<<<< HEAD
        expect($foundProfile);
        expect($profile->id, $foundProfile->id);
=======
        $this->assertNotNull($foundProfile);
        $this->assertEquals($profile->id, $foundProfile->id);
>>>>>>> 8055579 (.)
    }

    public function test_can_find_profile_by_phone(): void
    {
        $profile = Profile::factory()->create(['phone' => '+1234567890']);

        $foundProfile = Profile::where('phone', '+1234567890')->first();

<<<<<<< HEAD
        expect($foundProfile);
        expect($profile->id, $foundProfile->id);
=======
        $this->assertNotNull($foundProfile);
        $this->assertEquals($profile->id, $foundProfile->id);
>>>>>>> 8055579 (.)
    }

    public function test_can_find_profile_by_status(): void
    {
        Profile::factory()->create(['status' => 'active']);
        Profile::factory()->create(['status' => 'inactive']);
        Profile::factory()->create(['status' => 'pending']);

        $activeProfiles = Profile::where('status', 'active')->get();

<<<<<<< HEAD
        expect(1, $activeProfiles);
        expect('active', $activeProfiles->first()->status);
=======
        $this->assertCount(1, $activeProfiles);
        $this->assertEquals('active', $activeProfiles->first()->status);
>>>>>>> 8055579 (.)
    }

    public function test_can_find_profile_by_timezone(): void
    {
        Profile::factory()->create(['timezone' => 'UTC']);
        Profile::factory()->create(['timezone' => 'Europe/Rome']);
        Profile::factory()->create(['timezone' => 'America/New_York']);

        $utcProfiles = Profile::where('timezone', 'UTC')->get();

<<<<<<< HEAD
        expect(1, $utcProfiles);
        expect('UTC', $utcProfiles->first()->timezone);
=======
        $this->assertCount(1, $utcProfiles);
        $this->assertEquals('UTC', $utcProfiles->first()->timezone);
>>>>>>> 8055579 (.)
    }

    public function test_can_find_profile_by_locale(): void
    {
        Profile::factory()->create(['locale' => 'en']);
        Profile::factory()->create(['locale' => 'it']);
        Profile::factory()->create(['locale' => 'de']);

        $englishProfiles = Profile::where('locale', 'en')->get();

<<<<<<< HEAD
        expect(1, $englishProfiles);
        expect('en', $englishProfiles->first()->locale);
=======
        $this->assertCount(1, $englishProfiles);
        $this->assertEquals('en', $englishProfiles->first()->locale);
>>>>>>> 8055579 (.)
    }

    public function test_can_find_profiles_by_name_pattern(): void
    {
        Profile::factory()->create(['first_name' => 'John', 'last_name' => 'Doe']);
        Profile::factory()->create(['first_name' => 'Jane', 'last_name' => 'Doe']);
        Profile::factory()->create(['first_name' => 'Bob', 'last_name' => 'Smith']);

        $doeProfiles = Profile::where('last_name', 'like', '%Doe%')->get();

<<<<<<< HEAD
        expect(2, $doeProfiles);
        expect($doeProfiles->every(fn ($profile) => str_contains($profile->last_name, 'Doe')));
=======
        $this->assertCount(2, $doeProfiles);
        $this->assertTrue($doeProfiles->every(fn ($profile) => str_contains($profile->last_name, 'Doe')));
>>>>>>> 8055579 (.)
    }

    public function test_can_find_profiles_by_bio_pattern(): void
    {
        Profile::factory()->create(['bio' => 'Software Developer']);
        Profile::factory()->create(['bio' => 'Designer']);
        Profile::factory()->create(['bio' => 'Product Manager']);

        $devProfiles = Profile::where('bio', 'like', '%Developer%')->get();

<<<<<<< HEAD
        expect(1, $devProfiles);
        expect($devProfiles->every(fn ($profile) => str_contains($profile->bio, 'Developer')));
=======
        $this->assertCount(1, $devProfiles);
        $this->assertTrue($devProfiles->every(fn ($profile) => str_contains($profile->bio, 'Developer')));
>>>>>>> 8055579 (.)
    }

    public function test_can_update_profile(): void
    {
        $profile = Profile::factory()->create(['first_name' => 'Old Name']);

        $profile->update(['first_name' => 'New Name']);

        $this->assertDatabaseHas('profiles', [
            'id' => $profile->id,
            'first_name' => 'New Name',
        ]);
    }

    public function test_can_handle_null_values(): void
    {
        $profile = Profile::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'user_name' => 'testuser',
            'email' => 'test@example.com',
            'phone' => null,
            'bio' => null,
            'avatar' => null,
            'timezone' => null,
            'locale' => null,
        ]);

        $this->assertDatabaseHas('profiles', [
            'id' => $profile->id,
            'phone' => null,
            'bio' => null,
            'avatar' => null,
            'timezone' => null,
            'locale' => null,
        ]);
    }

    public function test_can_find_profiles_by_multiple_criteria(): void
    {
        Profile::factory()->create([
            'status' => 'active',
            'timezone' => 'UTC',
            'locale' => 'en',
        ]);

        Profile::factory()->create([
            'status' => 'active',
            'timezone' => 'Europe/Rome',
            'locale' => 'it',
        ]);

        Profile::factory()->create([
            'status' => 'inactive',
            'timezone' => 'UTC',
            'locale' => 'en',
        ]);

        $profiles = Profile::where('status', 'active')
            ->where('timezone', 'UTC')
            ->get();

<<<<<<< HEAD
        expect(1, $profiles);
        expect('active', $profiles->first()->status);
        expect('UTC', $profiles->first()->timezone);
=======
        $this->assertCount(1, $profiles);
        $this->assertEquals('active', $profiles->first()->status);
        $this->assertEquals('UTC', $profiles->first()->timezone);
>>>>>>> 8055579 (.)
    }

    public function test_profile_has_roles_relationship(): void
    {
        $profile = Profile::factory()->create();

<<<<<<< HEAD
        expect(method_exists($profile, 'roles'));
=======
        $this->assertTrue(method_exists($profile, 'roles'));
>>>>>>> 8055579 (.)
    }

    public function test_profile_has_permissions_relationship(): void
    {
        $profile = Profile::factory()->create();

<<<<<<< HEAD
        expect(method_exists($profile, 'permissions'));
=======
        $this->assertTrue(method_exists($profile, 'permissions'));
>>>>>>> 8055579 (.)
    }

    public function test_profile_has_teams_relationship(): void
    {
        $profile = Profile::factory()->create();

<<<<<<< HEAD
        expect(method_exists($profile, 'teams'));
=======
        $this->assertTrue(method_exists($profile, 'teams'));
>>>>>>> 8055579 (.)
    }

    public function test_profile_has_devices_relationship(): void
    {
        $profile = Profile::factory()->create();

<<<<<<< HEAD
        expect(method_exists($profile, 'devices'));
=======
        $this->assertTrue(method_exists($profile, 'devices'));
>>>>>>> 8055579 (.)
    }

    public function test_profile_has_media_relationship(): void
    {
        $profile = Profile::factory()->create();

<<<<<<< HEAD
        expect(method_exists($profile, 'media'));
=======
        $this->assertTrue(method_exists($profile, 'media'));
>>>>>>> 8055579 (.)
    }

    public function test_profile_can_use_permission_scopes(): void
    {
        $profile = Profile::factory()->create();

<<<<<<< HEAD
        expect(method_exists($profile, 'permission'));
        expect(method_exists($profile, 'withoutPermission'));
=======
        $this->assertTrue(method_exists($profile, 'permission'));
        $this->assertTrue(method_exists($profile, 'withoutPermission'));
>>>>>>> 8055579 (.)
    }

    public function test_profile_can_use_role_scopes(): void
    {
        $profile = Profile::factory()->create();

<<<<<<< HEAD
        expect(method_exists($profile, 'role'));
        expect(method_exists($profile, 'withoutRole'));
=======
        $this->assertTrue(method_exists($profile, 'role'));
        $this->assertTrue(method_exists($profile, 'withoutRole'));
>>>>>>> 8055579 (.)
    }

    public function test_profile_can_use_extra_attributes_scopes(): void
    {
        $profile = Profile::factory()->create();

<<<<<<< HEAD
        expect(method_exists($profile, 'withExtraAttributes'));
=======
        $this->assertTrue(method_exists($profile, 'withExtraAttributes'));
>>>>>>> 8055579 (.)
    }

    public function test_profile_has_factory(): void
    {
        $profile = Profile::factory()->create();

<<<<<<< HEAD
        expect($profile->id);
        expect(Profile::class, $profile);
    }
}
<<<<<<< HEAD
=======
        $this->assertNotNull($profile->id);
        $this->assertInstanceOf(Profile::class, $profile);
    }
}
>>>>>>> 8055579 (.)



<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 8a21b63 (.)
=======

=======
>>>>>>> a0c18bc (.)
>>>>>>> 8055579 (.)
=======
>>>>>>> d51888e (.)
=======

=======
>>>>>>> a0c18bc (.)
>>>>>>> 8055579 (.)
=======

=======
>>>>>>> a0c18bc (.)
=======
>>>>>>> 933fcfe (.)
>>>>>>> e67649e (.)
=======

>>>>>>> 7113f04 (.)
