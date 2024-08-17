<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subarea extends Model
{
    use HasFactory;

    protected $table = '';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'subarea_scope',
        'area_id'
    ];


    public function area(){
        return $this->belongsTo(Area::class, 'area_id');
    }
}
