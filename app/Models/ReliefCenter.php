<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReliefCenter extends Model
{
    use hasFactory;

    protected $primaryKey = 'center_id';

    protected $fillable = [
        'name',
        'location',
        'capacity',
    ];
}
