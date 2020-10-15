<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    protected $table = 'crews';
    protected $primaryKey = 'crew_id';
    protected $fillable = ['crew_id','crew_name','crew_address','crew_contact_number','crew_email','crew_position','crew_department'];
}
