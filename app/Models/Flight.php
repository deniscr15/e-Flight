<?php

namespace App\Models;

use App\Models\Operator;
use App\Models\Route;
use App\Models\AircraftType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function operator()
    {
    	return $this->belongsTo(Operator::class);
    }

    public function route()
    {
    	return $this->belongsTo(Route::class);
    }

    public function aircraftType()
    {
    	return $this->belongsTo(AircraftType::class);
    }
}
