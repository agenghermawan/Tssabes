<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','organizer','image','description','dateEvent'
    ];
    protected $dates = ['dateEvent'];

    public function getImageAttribute($value){
        return url('storage/'.$value);
    }
}
