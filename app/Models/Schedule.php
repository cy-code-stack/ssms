<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = "schedules";

    protected $fillable = [
        "id",
        "users_id",
        "area_id",
        "subarea_id",
    ];

    public function user(){
        return $this->belongsTo(User::class, "users_id");
    }

    public function area(){
        return $this->belongsTo(Area::class, "area_id");
    }
    public function subarea(){
        return $this->belongsTo(Subarea::class, "subarea_id");
    }
}
