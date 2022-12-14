<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInventoryFieldIntoStockHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_history', function (Blueprint $table) {
            $table->decimal('inventory_num')->default(0)->comment('盘点数量');
            $table->decimal('inventory_diff_num')->default(0)->comment('盘点盈亏数量');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stock_history', function (Blueprint $table) {
            $table->dropColumn('inventory_num');
            $table->dropColumn('inventory_diff_num');
        });
    }
}
