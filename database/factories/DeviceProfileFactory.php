<?php

declare(strict_types=1);

namespace Modules\User\Database\Factories;

use Modules\User\Models\DeviceProfile;

/**
 * DeviceProfile Factory
<<<<<<< HEAD
 *
 * Factory for creating DeviceProfile model instances for testing and seeding.
 * Extends DeviceUserFactory since DeviceProfile extends DeviceUser.
 *
=======
 * 
 * Factory for creating DeviceProfile model instances for testing and seeding.
 * Extends DeviceUserFactory since DeviceProfile extends DeviceUser.
 * 
>>>>>>> 079c9da7 (.)
 */
class DeviceProfileFactory extends DeviceUserFactory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 079c9da7 (.)
     * @var class-string<DeviceProfile>
     */
    protected $model = DeviceProfile::class;

    /**
     * Define the model's default state.
     * Inherits from DeviceUserFactory and adds profile-specific attributes.
     *
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    #[\Override]
    public function definition(): array
    {
        return array_merge(
            parent::definition(),
            [
                // DeviceProfile-specific attributes can be added here if needed
            ],
        );
=======
    public function definition(): array
    {
        return array_merge(parent::definition(), [
            // DeviceProfile-specific attributes can be added here if needed
        ]);
>>>>>>> 079c9da7 (.)
    }
}
