<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAUTriggerTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS AUTrigger');
         DB::unprepared('CREATE TRIGGER AUTrigger AFTER UPDATE ON flori FOR EACH ROW
        BEGIN
        INSERT INTO flowers_updated(nume, status) VALUES(NEW.nume,"UPDATED");
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS AUTrigger');
    }
}
