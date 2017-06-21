<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPasswordToKlantenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('klanten', function (Blueprint $table) {
            $table->string("password")->default("");
            $table->integer("reputatie")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('klanten', function (Blueprint $table) {
            $table->removeColumn("password");
            $table->removeColumn("reputatie");
        });
    }
}
