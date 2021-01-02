<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration {

    /**
     * Run the migrations:  php artisan migrate
     *
     * @return void
     */
    public function up() {
        Schema::create('roles', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations:  php artisan migrate:rollback
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('roles');
    }

}
