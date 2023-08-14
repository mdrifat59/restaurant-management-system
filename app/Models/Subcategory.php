<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable=['title','cat_id','description'];
    public function foods(): HasMany {
        return $this->hasMany(Food::class);
    }
}
