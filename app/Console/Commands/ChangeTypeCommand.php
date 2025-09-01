<?php

declare(strict_types=1);

namespace Modules\User\Console\Commands;

use Illuminate\Console\Command;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Arr;
use Symfony\Component\Console\Input\InputOption;
>>>>>>> 8d82f8c (.)
use Webmozart\Assert\Assert;

use function Laravel\Prompts\text;
<<<<<<< HEAD
=======
use Illuminate\Support\Arr;
use Symfony\Component\Console\Input\InputOption;
use Webmozart\Assert\Assert;

use function Laravel\Prompts\text;
use function Laravel\Prompts\select;
>>>>>>> 8055579 (.)
=======
use function Laravel\Prompts\select;
>>>>>>> 8d82f8c (.)

/**
 * Command to change user type based on project configuration.
 *
 * This command allows administrators to change the type of a user
 * by selecting from available child types in the system.
 */
class ChangeTypeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'user:change-type';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change user type based on project configuration';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 8055579 (.)
=======
     *
     * @return void
>>>>>>> 8d82f8c (.)
     */
    public function handle(): void
    {
        $xot = XotData::make();
        $email = text('User email?');
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8d82f8c (.)
        /** @var UserContract $user */
        $user = XotData::make()->getUserByEmail($email);

        if (!$user) {
            $this->error("User with email '{$email}' not found.");
            return;
        }
        if (!method_exists($user, 'getChildTypes')) {
            $this->error('User model does not have childTypes method.');
<<<<<<< HEAD

=======
        
        /** @var UserContract $user */
        $user = XotData::make()->getUserByEmail($email);

        if (!$user) {
            $this->error("User with email '{$email}' not found.");
            return;
        }
        if (!method_exists($user, 'getChildTypes')) {
            $this->error('User model does not have childTypes method.');
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
            return;
        }

        $childTypes = $xot->getUserChildTypes();
        /** @phpstan-ignore nullsafe.neverNull */
        $this->info("Current user type: {$user->type?->getLabel()}");
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        $typeClass = $xot->getUserChildTypeClass();
        /** @var array<string, string> */
        $options = [];
        foreach ($childTypes as $key => $item) {
            if (is_object($item) && method_exists($item, 'getLabel') && app(\Modules\Xot\Actions\Cast\SafeObjectCastAction::class)->hasNonNullProperty($item, 'value')) {
                $value = app(\Modules\Xot\Actions\Cast\SafeObjectCastAction::class)->getStringProperty($item, 'value', '');
<<<<<<< HEAD
<<<<<<< HEAD
                $options[$value] = (string) $item->getLabel();
            } else {
                $options[(string) $key] = 'Unknown';
=======
                $options[$value] = (string)$item->getLabel();
            } else {
                $options[(string)$key] = 'Unknown';
>>>>>>> 8055579 (.)
=======
                $options[$value] = (string)$item->getLabel();
            } else {
                $options[(string)$key] = 'Unknown';
>>>>>>> 8d82f8c (.)
            }
        }

        $newType = select('Select new user type:', $options);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8d82f8c (.)
        $newTypeEnum = $typeClass::tryFrom($newType);
        Assert::notNull($newTypeEnum);

        
        $user->type = $newTypeEnum;
        $user->save();
<<<<<<< HEAD

=======
        
        $newTypeEnum = $typeClass::tryFrom($newType);
        Assert::notNull($newTypeEnum);

        
        $user->type = $newTypeEnum;
        $user->save();
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        $this->info("User type changed to '{$newTypeEnum->getLabel()}' for {$email}");
    }
}
