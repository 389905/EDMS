<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PollingDivision;

class DivSec extends Model
{
    protected $fillable = [
        'name', 'polling_division_id',
    ];

    public function pollingDivision(){
      return $this->belongsTo(PollingDivision::class);
    }
}
