<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demand', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->text('content')->nullable()->comment('需求描述');
            $table->unsignedTinyInteger('type')->default(0)->comment('需求类型');
            $table->unsignedTinyInteger('status')->default(0)->comment('状态');
            $table->text('reply')->nullable()->comment('开发回复');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demand');
    }
}
