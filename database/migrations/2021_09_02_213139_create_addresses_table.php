<?php

use Database\Seeders\AddressSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('address2')->nullable();
            $table->string('district');
            $table->integer('city_id');
            $table->string('postal_code')->nullable();
            $table->string('phone');
            $table->string('location');
            $table->dateTime('last_update');
        });
        Artisan::call('db:seed', ['--class' => AddressSeeder::class, '--force' => true]);
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
