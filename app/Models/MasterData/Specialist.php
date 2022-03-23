<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    // use HasFactory;

    use softDeletes;

    public $table = 'specialist';

    // this field must type date yyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'name',
        'price',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many
    public function doctor()
    {
        // 2 parameters (path model, field foreign keys)
        return $this->hasMany('app\Models\Operational\Doctor', 'specialist_id');
    }
}
