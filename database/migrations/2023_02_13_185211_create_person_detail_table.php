<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_detail', function (Blueprint $table) {
            $table->id();

            $table -> string('phone', 80);
            $table -> string('address', 80);
            $table -> string('avatar') -> nullable() -> default('noImg.png');

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
        Schema::dropIfExists('person_detail');
    }
};
