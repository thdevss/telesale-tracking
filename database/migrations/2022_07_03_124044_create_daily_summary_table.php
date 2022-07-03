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
        Schema::create('daily_summary', function (Blueprint $table) {
            $table->date('summary_date');
            $table->foreignUuid('campaign_id')->references('id')->on('campaign');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('customer_status')->references('id')->on('status');
            $table->integer('total_customer');
            $table->string('remark');
            $table->timestamps();
            $table->primary(['summary_date', 'campaign_id', 'user_id', 'customer_status']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_summary');
    }
};
