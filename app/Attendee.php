<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
	protected $fillable = ['first_name', 'last_name', 'email', 'address', 'city', 'country', 'phone_number'];
}
