<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('family_name');
            $table->unsignedSmallInteger('age')->nullable();
            $table->string('position');
            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->boolean('status')->default('1');
            $table->timestamps();
        });

        Schema::create('member_report', function (Blueprint $table) {
            $table->integer('member_id');
            $table->integer('report_id');
            $table->primary(['member_id','report_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
        Schema::dropIfExists('member_report');
    }
}
