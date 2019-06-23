<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityRegion extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'city', 'region'
        ];

    public function losts() {
        return $this->hasMany(Lost::class);
    }
}
