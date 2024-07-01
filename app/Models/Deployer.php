<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deployer extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'incident_id'
    ];
}
