<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function contact(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
