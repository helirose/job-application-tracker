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
        Schema::table('job_applications', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('contact_id')->nullable()->constrained('contacts')->nullOnDelete();
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->foreignId('agency_id')->nullable()->constrained('agencies')->nullOnDelete();
        });

        Schema::table('application_events', function (Blueprint $table) {
            $table->foreignId('job_application_id')->constrained('job_applications')->cascadeOnDelete();
        });

        Schema::table('files', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
        });

        Schema::table('file_job_application', function (Blueprint $table) {
            $table->foreignId('job_application_id')->constrained('job_applications')->cascadeOnDelete();
            $table->foreignId('file_id')->constrained('files')->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_applications', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['contact_id']);
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->dropForeign(['agency_id']);
        });
    
        Schema::table('application_events', function (Blueprint $table) {
            $table->dropForeign(['job_application_id']);
        });
        
        Schema::table('files', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('file_job_application', function (Blueprint $table) {
            $table->dropForeign(['job_application_id']);
            $table->dropForeign(['file_id']);
        });

        
       
    }
};
