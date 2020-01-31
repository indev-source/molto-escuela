<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class RepresentativesModel extends Model
{
    protected $table = 'representatives';
    protected $fillable = ['fullname','rfc'];

    public function add($representative){
        return RepresentativesModel::create($representative);
    }
    public function edit($representative){
        return $this->fill($representative)->save();
    }
}
