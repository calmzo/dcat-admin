<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfitIntoSaleOutItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sale_out_item', function (Blueprint $table) {
            $table->decimal("profit")->default(0.00)->comment('利润价格');
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
            $table->dropColumn("profit");
        });
    }
}
