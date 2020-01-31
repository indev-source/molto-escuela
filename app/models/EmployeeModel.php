<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    protected $table = 'employee';
    protected $fillable = ['people_id','position_id'];

    public function people(){
        return $this->belongsTo('App\models\PeopleModel','people_id');
    }
    public function position(){
        return $this->belongsTo('App\models\PositionModel','position_id');
    }

    public function add($employee){
        return EmployeeModel::create($employee);
    }
    public function edit($employee){
        return $this->fill($employee)->save();
    }
}
