<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentUser extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function register(){
        return $this->belongsTo(Register::class);
    }
}
