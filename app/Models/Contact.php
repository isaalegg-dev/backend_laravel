<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function accounts(): HasMany
    {
        return $this->hasMany(Account::Class);
    }
}
