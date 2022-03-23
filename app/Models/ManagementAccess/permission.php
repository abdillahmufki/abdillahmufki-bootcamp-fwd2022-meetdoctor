<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class permission extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'permission';

    // this field must type date yyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'title',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // 2 parameters (path model, field foreign keys)
    public function permissionRole()
    {
        return $this->hasMany('app\Models\ManagementAccess\PermissionRole', 'permission_id');
    }
}
