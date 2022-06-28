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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('title', '100');
            $table->text('description')->nullable();
            $table->integer('warehouse_inventory')->default(0);
            $table->enum('status', ['enabled', 'disabled'])->default('enabled');
            $table->float('rate')->default(0);
            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('updated_by')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('deleted_by')
                ->nullable()
                ->constrained('users');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('food_menu', function (Blueprint $table) {
            $table->id();
            $table->integer('food_id');
            $table->foreignId('menu_id');
            $table->timestamps();
        });

        Schema::create('food_order', function (Blueprint $table) {
            $table->id();
            $table->integer('food_id');
            $table->foreignId('order_id');
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
        Schema::dropIfExists('foods');
        Schema::dropIfExists('food_menu');
        Schema::dropIfExists('food_order');
    }
};
