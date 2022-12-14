<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeSaleOrderCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sale_in_order', function (Blueprint $table) {
            $table->unsignedInteger('address_id')->default(0)->comment('客户地址');
            $table->unsignedInteger('drawee_id')->default(0)->comment('付款人');
        });

        Schema::table('sale_out_order', function (Blueprint $table) {
            $table->unsignedInteger('address_id')->default(0)->comment('客户地址');
            $table->unsignedInteger('drawee_id')->default(0)->comment('付款人');
        });

        Schema::table('sale_order', function (Blueprint $table) {
            $table->unsignedInteger('address_id')->default(0)->comment('客户地址');
            $table->unsignedInteger('drawee_id')->default(0)->comment('付款人');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
