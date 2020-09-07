<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DivSec;

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
}
