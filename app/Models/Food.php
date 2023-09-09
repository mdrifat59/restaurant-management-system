<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Food extends Model
{
    use HasFactory;
    protected $fillable=['cat_id','subcat_id','name','description','price','thumbnail'];

    // public function category(): BelongsTo {
    //     return $this->belongsTo(Category::class);
    // }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class,"cat_id");
    }
    public function subcategory(): BelongsTo {
        return $this->belongsTo(Subcategory::class,"subcat_id");
    }
    public function orderdetails():HasMany{
        return $this->hasMany(OrderDetail::class);
    }
}
