<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_bn', 50);
            $table->string('name_en',50);
            $table->string('relation',7);
            $table->timestamp('app_dob');
            $table->string('father_husband_name',50);
            $table->string('mother_name',50);
            $table->string('nid', 17)->nullable();
            $table->string('present_add');
            $table->string('permanent_add')->nullable();
            $table->string('tel_number', 10)->nullable();
            $table->string('mob_number',11);            
            $table->string('office_name');
            $table->string('disignation',100)->nullable();
            $table->string('pay_scale',20)->nullable();            
            $table->integer('basic_salery')->unsigned()->nullable();
            $table->timestamp('meyadkal')->nullable();                       
            $table->timestamp('joining_date')->nullable();
            $table->string('buisness_type', 100)->nullable();
            $table->integer('other_income')->unsigned()->nullable(); 
            $table->string('tin_no',12)->nullable();
            $table->string('app_receipt_no')->nullable();
            $table->timestamp('receipt_date')->nullable();
            $table->string('pay_order_no')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->timestamp('pay_order_date')->nullable();
            $table->string('starling_des')->nullable();
            $table->float('flate_size')->default(0.00);
            $table->string('job_type')->nullable();
            $table->timestamp('holofnama_date')->nullable();
            $table->string('app_bank_account_no', 30)->nullable();
            $table->string('app_bank_name')->nullable();
            $table->tinyInteger('status',0,1)->default(0);
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
        Schema::dropIfExists('applications');
    }
}
