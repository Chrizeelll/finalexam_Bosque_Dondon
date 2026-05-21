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
        schema::create('employee', function (blueprint $table) {

            $table->id()->primary();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('add');
            $table->string('dob');
            $table->string('contact');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
