<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $fillable = [
        'name', 'gn_division_id', 'polling_division_id'
    ];

    public function gnDivision(){
      return $this->belongsTo(GnDivision::class);
    }

    public function pollingDivision(){
      return $this->belongsTo(PollingDivision::class);
    }

    public function voters(){
      return $this->hasMany(Voter::class);
    }
}
