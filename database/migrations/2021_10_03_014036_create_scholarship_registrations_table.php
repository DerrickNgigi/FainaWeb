<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_registrations', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("guarantor_name");
            $table->string("guarantor_email");
            $table->string("guarantor_phone");
            $table->string("course");
            $table->string("platform");
            $table->string("user_phone");
            $table->string("user_whatsapp");
            $table->string("county");
            $table->string("ward");
            $table->string("residence");
            $table->string("gender");
            $table->string("disability")->nullable();
            $table->string("awareness");
            $table->string("linkedin")->nullable();
            $table->string("internet_Connectivity");
            $table->string("internet_access");
            $table->string("education_level");
            $table->string("student_club");
            $table->string("employment_Status");
            $table->string("opportunities")->nullable();
            $table->text("why_you");
            $table->string("faculty")->nullable();
            $table->string("year_Study")->nullable();
            $table->string("specialization_area")->nullable();
            $table->string("declaration");
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
        Schema::dropIfExists('scholarship_registrations');
    }
}
