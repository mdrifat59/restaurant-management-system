<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Food extends Model
{
    use HasFactory;
    protected $fillable=['cat_id','subcat_id','title','description','price'];

    // public function category(): BelongsTo {
    //     return $this->belongsTo(Category::class);
    // }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class,"cat_id");
    }
    public function subcategory(): BelongsTo {
        return $this->belongsTo(Subcategory::class,"subcat_id");
    }
}
