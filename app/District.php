<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function pollingDivions(){
      return $this->hasMany(PollingDivision::class);
    }
}
