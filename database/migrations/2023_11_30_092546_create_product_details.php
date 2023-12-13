<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->string('image1',300);
            $table->string('image2',300);
            $table->string('image3',300);
            $table->string('image4',300);
            $table->longText('description');
            $table->string('color');
            $table->string('size');
            // foregin key 
            $table->unsignedBigInteger('product_id')->unique();
            // $table->foreign('foreign key')->references('kone column er shate tar name')->on('kone table er shate ')->restrictOnDelete()->cascadeOnUpdate();
            // product Relation
            $table->foreign('product_id')->references('id')->on('products')->restrictOnDelete()->cascadeOnUpdate();           
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
