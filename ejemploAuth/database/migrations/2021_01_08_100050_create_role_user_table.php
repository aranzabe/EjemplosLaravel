<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration {

    /**
     * Run the migrations.
     * Esta migración creará la tabla que relaciona los usuarios con los roles.
     * @return void
     */
    public function up() {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            /*
             * Agregamos en esta tabla los “foreign constraint” para roles y usuarios
             */
            $table->foreign('role_id')
                    ->references('id')
                    ->on('roles')
                    ->onDelete('cascade');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('role_user');
    }

    /**
     * Crearemos un seeder para esta tabla con: php artisan make:seeder RoleTableSeeder
     */
}
