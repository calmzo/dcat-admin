<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePurchaseInOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchase_in_order', function (Blueprint $table) {
            $table->unsignedInteger('with_id')->default(0)->comment('相关单据id');
            $table->unsignedTinyInteger('review_status')->default(0)->comment('审核状态');
        });
    }
}
