<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
    // use HasFactory;

    use softDeletes;

    public $table = 'type_user';

    // this field must type date yyy-mm-dd hh-mm-ss
    protected $date = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'name',
        'created_at',
        'update_at',
        'deleted_at',
    ];
    // one to many
    public function detail_user()
    {
        // 2 parameters (path model, field foreign keys)
        return $this->hasMany('app\Models\ManagementAccess\DetailUser', 'type_user_id');
    }
}
