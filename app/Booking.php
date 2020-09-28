<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'booking_id';
    protected $fillable = ['booking_id','name','contact_number','event_name','event_date','event_location','package','status'];
}
