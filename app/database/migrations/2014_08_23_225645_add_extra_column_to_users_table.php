<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddExtraColumnToUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->date('date_of_birth');
            $table->string('nationality')->nullable();
            $table->string('profession')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->string('std_code')->nullable();
            $table->string('landline')->nullable();
            $table->string('mobile')->nullable();
            $table->string('pan')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('bank_ifs_code')->nullable();
            $table->string('account_no')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('nominee_dob')->nullable();
            $table->string('nominee_relation')->nullable();
            // $table->engine = 'MyISAM';
        });


    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->dropColumn([
            'mother_name',
            'father_name',
            'date_of_birth',
            'nationality',
            'profession',
            'address',
            'city',
            'state',
            'pincode',
            'std_code',
            'landline',
            'mobile',
            'pan',
            'bank_name',
            'bank_branch',
            'bank_ifs_code',
            'account_no',
            'nominee_name',
            'nominee_dob',
            'nominee_relation',
            ]);
        });
    }

}
