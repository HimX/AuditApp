<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('audit_plan_types');
            $table->string('name', 255);
            $table->longText('objective')->nullable();
            $table->longText('scope')->nullable();
            $table->longText('description')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
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
        Schema::dropIfExists('audit_plans');
    }
}
