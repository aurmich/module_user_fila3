<?php

declare(strict_types=1);

namespace Modules\User\Database\Factories;

use Modules\User\Models\DeviceProfile;

/**
 * DeviceProfile Factory
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * Factory for creating DeviceProfile model instances for testing and seeding.
 * Extends DeviceUserFactory since DeviceProfile extends DeviceUser.
=======
 * 
 * Factory for creating DeviceProfile model instances for testing and seeding.
 * Extends DeviceUserFactory since DeviceProfile extends DeviceUser.
 * 
>>>>>>> 8055579 (.)
=======
 * 
 * Factory for creating DeviceProfile model instances for testing and seeding.
 * Extends DeviceUserFactory since DeviceProfile extends DeviceUser.
 * 
>>>>>>> 8d82f8c (.)
 */
class DeviceProfileFactory extends DeviceUserFactory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 8055579 (.)
=======
     * 
>>>>>>> 8d82f8c (.)
     * @var class-string<DeviceProfile>
     */
    protected $model = DeviceProfile::class;

    /**
     * Define the model's default state.
     * Inherits from DeviceUserFactory and adds profile-specific attributes.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return array_merge(parent::definition(), [
            // DeviceProfile-specific attributes can be added here if needed
        ]);
    }
}
