<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration {
    public function up() {
        Schema::create('contacts', function (Blueprint $table){
           $table->bigIncrements('id');
           $table->string('name');
           $table->string('phone');
           $table->text('comments');
           $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('contacts');
    }
}

