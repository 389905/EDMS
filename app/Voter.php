<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $fillable = [
        'name', 'house_number', 'gender', 'village_id', 'polling_booth_id',
    ];

    public function pollingDivision(){
      return $this->belongsTo(PollingDivision::class);
    }

    public function village(){
      return $this->belongsTo(Village::class);
    }

    public function pollingBooth(){
      return $this->belongsTo(PollingBooth::class);
    }
}
