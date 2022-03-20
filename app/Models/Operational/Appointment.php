<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    // use HasFactory;
    use softDeletes;

    public $table = 'appointment';

    // this field must type date yyy-mm-dd hh-mm-ss
    protected $date = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'doctor_id',
        'user_id',
        'concultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'update_at',
        'deleted_at',
    ];
}
