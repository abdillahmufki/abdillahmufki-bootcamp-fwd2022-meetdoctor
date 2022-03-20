<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'doctor';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function specialist()
    {
        // 2 parameters (path model, field foreign keys, field primary keys from table hasMany?hasOne)
        return $this->belongsTo('app\Models\MasterData\Specialist', 'specialist_id', 'id');
    }
    // one to many
    public function appointment()
    {
        // 2 parameters (path model, field foreign keys)
        return $this->hasMany('app\Models\Operational\Appointment', 'doctor_id');
    }
}
