<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnBirthdayDetailInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->longText('detail')->nullable()->change();
            $table->date('birthday')->nullable()->change();

            $table->dropColumn('votes');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->text('detail')->nullable()->change();
            $table->datetime('birthday')->nullable()->change();

            $table->integer('votes')->nullable()->after('name');
        
        });
    }
}
