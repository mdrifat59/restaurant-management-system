<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['billing_address', 'shipping_address','total','comment','status', 'user_id'];
    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function detail():HasMany{
        return $this->hasMany(OrderDetail::class);
    }
}
