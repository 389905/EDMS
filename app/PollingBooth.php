<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollingBooth extends Model
{
    protected $fillable = [
        'name', 'number', 'polling_division_id',
    ];

    public function pollingDivision(){
      return $this->belongsTo(PollingDivision::class);
    }
}
