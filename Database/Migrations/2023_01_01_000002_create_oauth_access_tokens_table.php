<?php

declare(strict_types=1);

use Modules\User\Models\User;
use Modules\User\Models\OauthClient;
use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateOauthAccessTokensTable extends XotBaseMigration
{
    public function up(): void
    {
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->string('id', 100)->primary();
                //$table->unsignedBigInteger('user_id')->nullable()->index();
                // $table->foreignIdFor(User::class);
                //$table->unsignedBigInteger('client_id');
                //$table->uuid('client_id');
                $table->foreignIdFor(User::class, 'user_id')->nullable()->index();
                $table->foreignIdFor(OauthClient::class, 'client_id');
                $table->string('name')->nullable();
                $table->text('scopes')->nullable();
                $table->boolean('revoked');
                $table->timestamps();
                $table->dateTime('expires_at')->nullable();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {}
        );
    }
}