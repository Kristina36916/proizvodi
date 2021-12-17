<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTabelaIzmena extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tabela_izmena', function (Blueprint $table) {
            $table->renameColumn('ime','promenaIme');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('izmena', function (Blueprint $table) {
            $table->renameColumn('promenaIme','ime');
        });
    }
}
