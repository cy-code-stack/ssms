<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    use HasFactory;

    protected $table = 'trackers';
    protected $fillable = [
        'id',
        'attendance_id',
        'lat',
        'long'
    ];
}
