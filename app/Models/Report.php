<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
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
        'civil_status',
        'permanent_address',
        'present_address',
        'citizenship',
        'gender',
        'date_of_birth',
        'who',
        'where',
        'when',
        'synopsis',
        'filename',
        'prepared_by_user_id',
        'prepared_by_signature_filename',
        'incharge_signature_filename'
    ];

    protected $appends= ['fullname'];

    protected static function booted()
    {
        static::creating(function ($report) {
            $report->uuid = Str::uuid();
        });
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'prepared_by_user_id');
    }

    public function getFullnameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

}
