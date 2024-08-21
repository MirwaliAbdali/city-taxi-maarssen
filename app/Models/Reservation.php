<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = [
        'first_name',
        'phone',
        'where',
        'time',
        'start_time',
        'end_time',
        'special_request'
    ];
}
