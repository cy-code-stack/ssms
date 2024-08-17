<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Profile extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'sweepers';

    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'middle_initial',
        'address',
        'birth_date',
        'email',
        'password',
        'assign_status',
        'users_id'
    ];


    public function admin(){
        return $this->belongsTo(User::class, 'users_id');
    }
}
