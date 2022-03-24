<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'role';

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
    public function permission_role()
    {
        return $this->hasMany('app\Models\ManagementAccess\PermissionRole', 'role_id');
    }
    public function role()
    {
        return $this->hasMany('app\Models\ManagementAccess\RoleUser', 'role_id');
    }
}
