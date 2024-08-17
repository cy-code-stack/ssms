<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'users_id',
        'time_in',
        'time_out',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'users_id');
    }
}
