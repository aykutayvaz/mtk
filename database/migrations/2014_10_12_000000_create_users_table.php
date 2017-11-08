<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->string('user_remember_token',40);
            $table->timestamp('user_created_at')->nullable();
            $table->string('user_type',30);//musteri,personel
        });
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('project_id');//projecsiz id=1 gibi
            $table->string('project_name');
            $table->string('project_started_at')->nullable();
            $table->string('project_end_at')->nullable();
        });
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('region_id');
            $table->string('region_name',50);//projesizse region kurum ismi
            $table->string('region_contact',255);
            $table->integer('region_project_id');
        });
        Schema::create('defects', function (Blueprint $table) {
            $table->increments('defect_id');
            $table->integer('project_id');
            $table->integer('region_id');
            $table->string('defect_info');
            $table->integer('defect_status_id');
            $table->timestamp('region_created_at')->nullable();
        });
        Schema::create('defect_status', function (Blueprint $table) {
            $table->increments('defect_status_id');
            $table->string('defect_status_name');
        });
        Schema::create('user_region_auth', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('region_id');
            $table->binary('can_approve');
            $table->binary('can_create');
            $table->binary('can_update');
            $table->binary('can_delete');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('regions');
        Schema::dropIfExists('defects');
        Schema::dropIfExists('user_region_auth');
        Schema::dropIfExists('defect_status');
    }
}
