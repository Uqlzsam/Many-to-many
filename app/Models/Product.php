<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function customers(): BelongsToMany{
        return $this->belongsToMany(Customer::class);
    }
}