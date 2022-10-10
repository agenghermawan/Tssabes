<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatistikPeserta extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'strength', 'power', 'agility'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
