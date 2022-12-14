<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStockHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_history', function (Blueprint $table) {
            $table->decimal('percent', 10, 2)->default(0)->comment('含绒量');
            $table->unsignedTinyInteger('standard')->default(0)->comment('检验标准');
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
            $table->dropColumn('percent');
            $table->dropColumn('standard');
        });
    }
}
