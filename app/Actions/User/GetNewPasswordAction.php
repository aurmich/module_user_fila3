<?php

declare(strict_types=1);

namespace Modules\User\Actions\User;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> 8d82f8c (.)
use Illuminate\Support\Str;
use Modules\User\Models\User;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
use Modules\User\Models\User;
use Modules\Xot\Datas\XotData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Xot\Contracts\UserContract;
>>>>>>> 8055579 (.)
=======
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Xot\Contracts\UserContract;
>>>>>>> 8d82f8c (.)
use Spatie\QueueableAction\QueueableAction;

class GetNewPasswordAction
{
<<<<<<< HEAD
<<<<<<< HEAD
    use QueueableAction;

    public function execute(UserContract $record): string
    {
        // $user = XotData::make()->getUserByEmail($record->email);
        $user = $record;
=======
    use QueueableAction; 
    
    public function execute(UserContract $record): string
    {
        //$user = XotData::make()->getUserByEmail($record->email);
        $user=$record;
>>>>>>> 8055579 (.)
=======
    use QueueableAction; 
    
    public function execute(UserContract $record): string
    {
        //$user = XotData::make()->getUserByEmail($record->email);
        $user=$record;
>>>>>>> 8d82f8c (.)
        /*
        $password=Str::password(10);
        $user->update([
            'password' => Hash::make($password),
        ]);
        */
<<<<<<< HEAD
<<<<<<< HEAD
        // $password=trim(Str::random(10));
        // $password='Pgn7T8Bppf';
=======
        //$password=trim(Str::random(10));
        //$password='Pgn7T8Bppf';
>>>>>>> 8d82f8c (.)
        [$password,$password_hash] = once(function () {
            $password=trim(Str::random(10));
            $password_hash=Hash::make($password);
            return [$password,$password_hash];
        });
         
        $user->forceFill([
<<<<<<< HEAD
            // 'password' => Hash::make($password),
            // 'password' => '$2y$12$mFdQg0jwDMG2FjemQo9y5u2SbC1G0xSNKS3gQnFO5CQ109YWHTAtG',
=======
        //$password=trim(Str::random(10));
        //$password='Pgn7T8Bppf';
        [$password,$password_hash] = once(function () {
            $password=trim(Str::random(10));
            $password_hash=Hash::make($password);
            return [$password,$password_hash];
        });
         
        $user->forceFill([
            //'password' => Hash::make($password),
            //'password' => '$2y$12$mFdQg0jwDMG2FjemQo9y5u2SbC1G0xSNKS3gQnFO5CQ109YWHTAtG',
>>>>>>> 8055579 (.)
=======
            //'password' => Hash::make($password),
            //'password' => '$2y$12$mFdQg0jwDMG2FjemQo9y5u2SbC1G0xSNKS3gQnFO5CQ109YWHTAtG',
>>>>>>> 8d82f8c (.)
            'password' => $password_hash,
        ])->save();
        /*
        $user->update([
            'password' => $password,
        ]);
       */
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        return $password;
    }
}
