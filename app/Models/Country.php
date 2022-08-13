<?php

namespace App\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['country_code','name'];

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function employee(){
        return $this->hasMany(Employee::class);
    }
}
