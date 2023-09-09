<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable=['order_id','food_id','quantity'];
    public function order():BelongsTo{
        return $this->belongsTo(Order::class);
    }
    public function food():BelongsTo{
        return $this->belongsTo(Food::class);
    }
}
