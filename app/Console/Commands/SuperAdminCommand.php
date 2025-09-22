<?php

declare(strict_types=1);

namespace Modules\User\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Modules\User\Models\Role;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use Nwidart\Modules\Facades\Module;
use Symfony\Component\Console\Input\InputOption;

use function Laravel\Prompts\text;

class SuperAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'user:super-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign super-admin to user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
<<<<<<< HEAD
    
=======
    public function __construct()
    {
        parent::__construct();
    }
>>>>>>> 079c9da7 (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $email = text('email ?');
        $user_class = XotData::make()->getUserClass();
        /** @var UserContract */
        $user = XotData::make()->getUserByEmail($email);

        // Create super-admin role with web guard
<<<<<<< HEAD
        $role = Role::firstOrCreate(['name' => 'super-admin']);
=======
        $role = Role::firstOrCreate(
            ['name' => 'super-admin']
        );
>>>>>>> 079c9da7 (.)
        $user->assignRole($role);

        // Create module admin roles
        $modules_opts = array_keys(Module::all());
        foreach ($modules_opts as $module) {
<<<<<<< HEAD
            $role_name = Str::lower($module) . '::admin';
            $role = Role::firstOrCreate(['name' => $role_name]);
            $user->assignRole($role);
        }

        $this->info('super-admin assigned to ' . $email);
=======
            $role_name = Str::lower($module).'::admin';
            $role = Role::firstOrCreate(
                ['name' => $role_name]
            );
            $user->assignRole($role);
        }

        $this->info('super-admin assigned to '.$email);
>>>>>>> 079c9da7 (.)
    }

    /**
     * Get the console command options.
     */
    protected function getOptions(): array
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
