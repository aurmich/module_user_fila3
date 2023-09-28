<?php

declare(strict_types=1);

use Modules\User\Models\User;
use Modules\User\Models\OauthClient;
use Illuminate\Database\Schema\Blueprint;
use Modules\User\Models\OauthClient;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateOauthAuthCodesTable extends XotBaseMigration
{
    public function up(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD:Database/Migrations/2023_06_01_000002_create_oauth_auth_codes_table.php
=======
<<<<<<< HEAD:Database/Migrations/2023_06_01_000001_create_oauth_auth_codes_table.php
        $xot = XotData::make();
        $userClass = $xot->getUserClass();
        $this->tableCreate(
            static function (Blueprint $table) use ($userClass) {
                $table->string('id', 100)->primary();
                // $table->unsignedBigInteger('user_id')->index();
                // $table->unsignedBigInteger('client_id');
                $table->foreignIdFor($userClass, 'user_id')->nullable()->index();
                // $table->unsignedBigInteger('client_id');
                $table->foreignIdFor(OauthClient::class, 'client_id')->nullable()->index();
=======
>>>>>>> master

        $this->tableCreate(
            function (Blueprint $table): void {
                $table->string('id', 100)->primary();
                //$table->unsignedBigInteger('user_id')->index();
                //$table->unsignedBigInteger('client_id');
                //$table->uuid('client_id');
                $table->foreignIdFor(User::class, 'user_id')->index();
                $table->foreignIdFor(OauthClient::class, 'client_id');
<<<<<<< HEAD
=======
        $xot = XotData::make();
        $userClass = $xot->getUserClass();
        $this->tableCreate(
            static function (Blueprint $table) use ($userClass) {
                $table->string('id', 100)->primary();
                // $table->unsignedBigInteger('user_id')->index();
                // $table->unsignedBigInteger('client_id');
                $table->foreignIdFor($userClass, 'user_id')->nullable()->index();
                // $table->unsignedBigInteger('client_id');
                $table->foreignIdFor(OauthClient::class, 'client_id')->nullable()->index();
>>>>>>> 5bfca74 (.):Database/Migrations/2023_06_01_000001_create_oauth_auth_codes_table.php
=======
>>>>>>> 010b661c570d5d6244a5bdbf1e60619c65665565:Database/Migrations/2023_06_01_000002_create_oauth_auth_codes_table.php
>>>>>>> master
                $table->text('scopes')->nullable();
                $table->boolean('revoked');
                $table->dateTime('expires_at')->nullable();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {}
        );
    }
}
