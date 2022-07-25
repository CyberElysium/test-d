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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('stock_code')->unique();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 12, 2);
            $table->integer('quantity')->default(100);
            $table->string('model_no')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->bigInteger('user_id')->nullable();
            $table->date('delivery_date')->nullable();
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
        Schema::dropIfExists('items');
    }
};
