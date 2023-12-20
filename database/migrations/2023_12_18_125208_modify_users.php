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
        Schema::table('users', function (Blueprint $table) {

            $table->string('surname')->after('remember_token');
            $table->string('adress')->after('remember_token');
            $table->string('postal_code', 5)->after('remember_token');
            $table->string('city')->after('remember_token');
            $table->string('cuntry')->after('remember_token');
            $table->string('phone_number', 10)->after('remember_token');
            $table->string('linked_in')->after('remember_token');
            $table->text('adresse_resume_pdf')->after('remember_token');
            $table->text('profil_description')->after('remember_token');
            $table->string('job')->after('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table');
    }
};
