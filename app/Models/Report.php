<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'control_no',
        'station_id',
        'type',
        'status',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'mobile',
        'email',
        'permanent_address',
        'present_address',
        'citizenship',
        'gender',
        'date_of_birth',
        'who',
        'what',
        'where',
        'when',
        'how',
        'synopsis',
        'filename',
    ];

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

}
