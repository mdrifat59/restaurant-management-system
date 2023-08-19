<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=['title','email','phone','date','start_time','participant','description'];
    public function foods(): HasMany {
        return $this->hasMany(Food::class);
    }
}
