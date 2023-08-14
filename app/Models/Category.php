<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['title','description'];

    // public function foods(): HasMany{
    //     return $this->hasMany(Food::class);
    // }

    public function foods(): HasMany {
        return $this->hasMany(Food::class);
    }
}
