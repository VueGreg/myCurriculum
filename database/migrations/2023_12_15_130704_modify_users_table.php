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
            $table->string('surname');
            $table->string('adress');
            $table->string('postal_code', 5);
            $table->string('city');
            $table->string('cuntry');
            $table->string('phone_number', 10);
            $table->string('linked_in');
            $table->text('adresse_resume_pdf');
            $table->text('profil_description');
            $table->string('job');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            Schema::dropIfExists('personal_access_tokens');
            
        });
    }
};
