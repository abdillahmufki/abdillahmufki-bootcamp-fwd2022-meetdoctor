<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'role_user';

    // this field must type date yyy-mm-dd hh-mm-ss
    protected $date = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'role_id',
        'user_id',
        'created_at',
        'update_at',
        'deleted_at',
    ];
}
