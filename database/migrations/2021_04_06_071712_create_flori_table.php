<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flori', function (Blueprint $table) {
            $table->id();
                        $table->string('nume')->collation('utf8mb4_general_ci');
                        $table->string('marime')->collation('utf8mb4_general_ci');
                        //culoarea nu este obligatorie
                        $table->string('culoare')->nullable()->collation('utf8mb4_general_ci');
                        $table->integer('pret');
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
        Schema::dropIfExists('flori');
    }
}
