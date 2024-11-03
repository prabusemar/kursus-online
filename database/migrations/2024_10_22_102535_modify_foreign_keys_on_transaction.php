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
        // Modify the 'transaction_details' table
        Schema::table('transaction_details', function (Blueprint $table) {
            // Add new columns to store course information
            //$table->string('course_name')->nullable();

            // Modify 'course_id' to be nullable and use nullOnDelete
            $table->foreignId('course_id')->nullable()->change();
            $table->dropForeign(['course_id']);
            $table->foreign('course_id')->references('id')->on('courses')->nullOnDelete();
        });

        // Optional: You can also modify the 'transactions' table if needed
        // For example, if you want to make user_id not cascade delete:
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('email');
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            // Drop the new column if you need to rollback
            $table->dropColumn('course_name');

            // Revert 'course_id' to its original state
            $table->foreignId('course_id')->change();
            $table->dropForeign(['course_id']);
            $table->foreign('course_id')->references('id')->on('courses')->cascadeOnDelete()->cascadeOnUpdate();
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn('email');
            // Revert 'user_id' to cascade delete
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }
};
