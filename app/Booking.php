<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['name','contact_number','event_name','event_date','event_location','package','status'];
}
