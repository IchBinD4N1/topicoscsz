<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['nickname','name', 'team_id', 'country_id', 'age', 'status'];
}