<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsertProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::unprepared("CREATE PROCEDURE InsertFlowers(IN var_nume varchar(255), IN var_marime varchar(255), IN var_culoare varchar(255), IN var_pret int)
                        BEGIN
                        INSERT INTO flori(nume,marime,culoare,pret) VALUES(var_nume,var_marime,var_culoare,var_pret);
                        END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::unprepared('DROP PROCEDURE IF EXISTS InsertFlowers');
    }
}
