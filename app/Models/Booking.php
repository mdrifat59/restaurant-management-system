<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=['title','email','phone','date','start_time','participant','description','user_id','transaction_id','even_type','admin_massage','status'];

  public function user(): BelongsTo {
    return $this->belongsTo(User::class, "user_id");
}

}
