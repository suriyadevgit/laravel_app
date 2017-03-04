<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* 
           
            Table 1 

            First Name
            Last Name
            Date of Birth
            gender
            mobilenumber
            emaildid 
            Nationality
            bloodgroup
            data2Id (name+mobnumber)
 
        */

            if (!Schema::hasTable('tasks')) {
                Schema::create('tasks', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('first_name');
                    $table->string('last_name');
                    $table->string('d_o_b');
                    $table->string('gender');
                    $table->string('mobile_number');
                    $table->string('email_id')->unique;
                    $table->string('nationality');
                    $table->string('bloodgroup');
                    $table->string('data2Id');
                    $table->timestamps();
                });
            }


        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        ///Schema::dropIfExists('tasks');
    }
}
