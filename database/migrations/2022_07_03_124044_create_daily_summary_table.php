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

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('customer_status');

            $table->integer('total_customer');
            $table->string('remark');
            $table->timestamps();
            $table->primary(['summary_date', 'campaign_id', 'user_id', 'status_id'], 'm_primary_ds');
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
