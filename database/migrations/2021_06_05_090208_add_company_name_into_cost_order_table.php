<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyNameIntoCostOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cost_order', function (Blueprint $table) {
            $table->string('company_name');
            $table->unsignedInteger('company_id')->default(0);
            $table->dropColumn('category_user');
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
            $table->dropColumn('company_name');
            $table->dropColumn('company_id');
        });
    }
}
