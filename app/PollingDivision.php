<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollingDivision extends Model
{
    protected $fillable = [
        'name', 'district_id',
    ];

    public function district(){
      return $this->belongsTo(District::class);
    }

    public function divSecs(){
      return $this->hasMany(DivSec::class);
    }

    public function gnDivisions(){
      return $this->hasManyThrough(GnDivision::class, DivSec::class);
    }

    public function pollingBooths(){
      return $this->hasMany(PollingBooth::class);
    }

    public function villages(){
      return $this->hasMany(Village::class);
    }

    public function voters(){
      return $this->hasManyThrough(Voter::class, PollingBooth::class);
    }
}
