<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    protected $fillable = ['name', 'skill', 'bio', 'location_id'];

    /** @use HasFactory<\Database\Factories\IntroductionFactory> */
    use HasFactory;

    public function location() {
        return $this->belongsTo(Location::class);
    }

}
