<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';
    protected $primaryKey = 'order_id';

    public function accounts() {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function items() {
        return $this->hasMany(Item::class);
    }
}
