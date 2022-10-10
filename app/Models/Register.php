<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Seeders\PendaftaranSeeder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Register extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $dates = ['created_at'];
    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
    ];
    public function parent(){
        return $this->hasOne(ParentUser::class);
    }
}
