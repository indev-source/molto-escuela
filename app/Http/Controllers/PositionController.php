<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\PositionModel;
class PositionController extends Controller{

    public function index(){
        $positions = PositionModel::all();
        return view('school.positions.index',['positions'=>$positions]);
    }
    public function create(){
        $position = new PositionModel();
        return view('school.positions.create',['position'=>$position]);
    }
    public function store(Request $request){
        try {
            $positionModel = new PositionModel();
            $positionModel->add($request->all());
            alert()->success('Puesto registrado correctamente');
            return redirect('puestos');
        } catch (\Exception $e) {
            alert()->warning("Ha ocurrido un error en el servidor: ".$e->message());
            return back();
        }
    }
    public function show($id){
        //
    }
    public function edit($id)
    {
        $position = PositionModel::findOrFail($id);
        return view('school.positions.edit',['position'=>$position]);
    }
    public function update(Request $request, $id){
        try {
            $positionModel =  PositionModel::findOrFail($id);
            $positionModel->edit($request->all());
            alert()->success('Puesto actualizado correctamente');
            return redirect('puestos');
        } catch (\Exception $e) {
            alert()->warning("Ha ocurrido un error en el servidor: ".$e->message());
            return back();
        }
    }
    public function destroy($id)
    {
        //
    }
}
