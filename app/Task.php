<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	

	protected $fillable = ['first_name','last_name','d_o_b','gender','mobile_number','email_id','nationality','bloodgroup','data2Id'];

}
