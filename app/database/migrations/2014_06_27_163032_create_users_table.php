<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateUsersTable
 *
 * @SuppressWarnings(PHPMD.ShortMethodName)
 */
class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'users', function (Blueprint $table) {
                $table->increments('id');
                $table->timestamps();
                $table->string('email', 100);
                $table->string('password', 60);
                $table->string('reset', 32)->nullable();
                $table->string('remember_token', 255)->nullable();
                $table->boolean('migrated');

                $table->unique('email');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}
