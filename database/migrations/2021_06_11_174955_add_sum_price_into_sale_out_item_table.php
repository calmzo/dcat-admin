<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSumPriceIntoSaleOutItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sale_out_item', function (Blueprint $table) {
            $table->unsignedDecimal("sum_price")->default(0.00)->comment('销售总价格');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sale_out_item', function (Blueprint $table) {
            $table->dropColumn('sum_price');
        });
    }
}
