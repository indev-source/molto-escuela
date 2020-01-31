<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table = 'student_models';
    protected $fillable = ['tutor_id','credencial','people_id'];

    public function people(){
        return $this->belongsTo('App\models\PeopleModel','people_id');
    }
    public function tutor(){
        return $this->belongsTo('App\models\TutorModel','tutor_id');
    }

    public function add($student){
        return StudentModel::create($student);
    }
    public function edit($student){
        return $this->fill($student)->save();
    }
}
