<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'location', 'description'];
    /** @use HasFactory<\Database\Factories\LocationFactory> */
    use HasFactory;

    public function introductions() {
        return $this->hasMany(Introduction::class);
    }
}
