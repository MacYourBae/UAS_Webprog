<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'account';
    protected $primaryKey = 'account_id';

    public function roles() {
        return $this->hasOne(Role::class);
    }

    public function genders() {
        return $this->hasOne(Gender::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

}
