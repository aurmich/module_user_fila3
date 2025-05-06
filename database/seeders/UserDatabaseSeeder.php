<?php

declare(strict_types=1);

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

<<<<<<< HEAD
        $this->call([
            RolesSeeder::class,
            PermissionsSeeder::class,
        ]);
=======
        // $this->call("OthersTableSeeder");
>>>>>>> db74942 (.)
    }
}
