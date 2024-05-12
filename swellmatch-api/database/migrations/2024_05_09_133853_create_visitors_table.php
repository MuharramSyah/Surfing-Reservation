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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->unsignedInteger('rating');
            $table->date('visit_date');
            $table->unsignedBigInteger('board_id');
            $table->unsignedBigInteger('attachment_id');
            $table->unsignedBigInteger('country_id');

            // Set relationship between table
            $table->foreign('board_id') //Defines a foreign key column named 'board_id'
                ->references('id')
                ->on('boards')
                ->onDelete('cascade'); // This method sets the behavior when the referenced record (user) is deleted in the other table.

            $table->foreign('attachment_id')
                ->references('id')
                ->on('attachments')
                ->onDelete('cascade'); // if the referenced visitors record is deleted, the corresponding rows in this table will also be deleted automatically.

            $table->foreign('country_id')
                ->references('id')
                ->on('countries');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
