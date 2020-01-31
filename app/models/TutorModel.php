<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TutorModel extends Model
{
    protected $table = 'tutor';
    protected $fillable = ['fullname','email','phone'];

    public function add($tutor){
        return TutorModel::create($tutor);
    }
    public function edit($tutor){
        return $this->fill($tutor)->save();
    }
}
