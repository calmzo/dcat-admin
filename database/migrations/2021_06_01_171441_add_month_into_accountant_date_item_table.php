<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMonthIntoAccountantDateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accountant_date_item', function (Blueprint $table) {
            $table->unsignedTinyInteger('month')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accountant_date_item', function (Blueprint $table) {
            $table->removeColumn('month');
        });
    }
}
