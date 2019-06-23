<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    protected $fillable = [
        'name', 'created_at', 'lastseen_at', 'characteristics', 'yearborn'
    ];

    public function cityRegion()
    {
        return $this->belongsTo(CityRegion::class);
    }
}
