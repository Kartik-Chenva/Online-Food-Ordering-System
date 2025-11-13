<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\OrderItem;

class orders extends Model  // ✅ Use "Order" instead of "orders"
{
    use HasFactory;

    protected $table = "orders";  // Laravel assumes this by default
    protected $primaryKey = "id"; // Default is "id", so this line is optional

    protected $fillable = [
        'user_id',
        'name', 
        'phone', 
        'order_date', 
        'address', 
        'total_price',
        'items',
        'image',
    ];

    // ✅ Define the relationship with OrderItem
    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
