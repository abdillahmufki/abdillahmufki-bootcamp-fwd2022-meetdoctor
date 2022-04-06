<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'permission_role';

    // this field must type date yyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'update_at',
        'deleted_at',
    ];



    public function permission()
    {
        return $this->belongsTo('app\Models\ManagementAccess\Permission.', 'permission_id', 'id');
    }
    public function role()
    {
        return $this->belongsTo('app\Models\ManagementAccess\Role', 'role_id', 'id');
    }
}
