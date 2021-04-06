<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfterDeleteTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          DB::unprepared('CREATE TRIGGER after_Delete AFTER DELETE ON flori FOR EACH ROW
                BEGIN
                INSERT INTO flowers_updated(nume, status) VALUES(OLD.nume,"DELETED");
                END;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       DB::unprepared('DROP TRIGGER IF EXISTS after_Delete');
    }
}
