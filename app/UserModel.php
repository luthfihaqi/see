<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*class UserModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = ['id','name','jabatan_id', 'email'];

    
    public function jabatan()
    {
        return $this -> belongSto ('App\jabatan');
    }
}
