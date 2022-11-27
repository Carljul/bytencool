<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->double('selling_price')->nullable();
            $table->double('taxed_price')->nullable();
            $table->double('cost_price')->nullable();
            $table->double('downpayment')->nullable();
            $table->double('balance')->nullable();
            $table->string('status')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();

            // Foreign
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
