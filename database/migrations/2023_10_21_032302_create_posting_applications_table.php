<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posting_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('posting_start')->comment('掲載開始日');
            $table->date('posting_end')->comment('掲載終了日');
            $table->integer('plan')->comment('掲載プラン');
            $table->integer('price')->comment('掲載金額');
            $table->integer('area')->comment('掲載エリア');
            $table->text('note')->nullable()->comment('その他');
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
        Schema::dropIfExists('posting_applications');
    }
};
