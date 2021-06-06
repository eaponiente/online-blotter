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
        'status',
        'first_name',
        'last_name',
        'middle_name',
        'mobile',
        'address',
        'citizenship',
        'gender',
        'civil_status',
        'date_of_birth',
        'incident_report',
        'filename',
    ];

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

}
