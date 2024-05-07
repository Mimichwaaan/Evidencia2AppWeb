<?php

// app/Models/OrderStatusChange.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderStatusChange extends Model
{
    protected $fillable = ['status', 'change_time'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
