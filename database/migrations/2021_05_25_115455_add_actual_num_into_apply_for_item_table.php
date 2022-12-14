<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActualNumIntoApplyForItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apply_for_item', function (Blueprint $table) {
            $table->unsignedDecimal('actual_num')->default(0.00)->comment('实领数量');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apply_for_item', function (Blueprint $table) {
            $table->dropColumn('actual_num');
        });
    }
}
