<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $table = 'gender';
    protected $primaryKey = 'gender_id';

    public function accounts() {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
