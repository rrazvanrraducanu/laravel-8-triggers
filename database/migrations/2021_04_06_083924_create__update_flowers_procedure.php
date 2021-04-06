<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdateFlowersProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     
        DB::unprepared("CREATE PROCEDURE UpdateFlowers(IN var_nume varchar(255))
                        BEGIN
                        UPDATE flori SET pret='10' where nume=var_nume;
                        END");
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS UpdateFlowers');
    }
}
