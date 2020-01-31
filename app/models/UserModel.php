<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table    = 'users';
    protected $fillable = ['email', 'password','rol'];

    public function cryptPassword($password){
        return bcrypt($password);
    }
    public function add($user){
        return UserModel::create($user);
    }
    public function edit($user){
        return $this->fill($user)->save();
    }
}
