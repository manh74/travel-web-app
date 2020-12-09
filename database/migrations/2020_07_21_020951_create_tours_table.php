<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('summarize',255);
            $table->longText('content');
            $table->string('image',255);
            $table->unsignedBigInteger('id_type');
            $table->foreign('id_type')->references('id')->on('type_tours')->onDelete('cascade');
            $table->string('price',255);
            $table->float('on_sale');
            $table->date('departure_date');
            $table->time('departure_time');
            $table->string('schedule',255);
            $table->string('start_gate',255);
            $table->bigInteger('number_people');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
