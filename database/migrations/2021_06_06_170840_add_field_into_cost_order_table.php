<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldIntoCostOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cost_order', function (Blueprint $table) {
            $table->unsignedTinyInteger('settlement_completed')->default(0)->comment('结算完成');
            $table->unsignedDecimal("settlement_amount")->default(0.00)->comment('结算实付金额');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cost_order', function (Blueprint $table) {
            $table->dropColumn(['settlement_completed', 'settlement_amount']);
        });
    }
}
