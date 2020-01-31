<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PositionModel extends Model
{
    protected $table = 'positions';
    protected $fillable = ['name'];

    public function add($position){
        return PositionModel::create($position);
    }
    public function edit($position){
        return $this->fill($position)->save();
    }
}
