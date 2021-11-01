<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments(User::ID);
            $table->string(User::FIRST_NAME);
            $table->string(User::LAST_NAME);
            $table->string(User::PHONE_NUMBER)->unique();
            $table->string(User::EMAIL)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string(User::PASSWORD);
            //$table->string(User::PASSWORD_CONFIRMATION);
            $table->integer(User::ROLE)->default('0');
            $table->boolean(User::CONFIRMED)->default(false);
            $table->string(User::AVATAR)->nullable();
            $table->rememberToken();
            $table->timestamp(User::DELETED_AT)->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
