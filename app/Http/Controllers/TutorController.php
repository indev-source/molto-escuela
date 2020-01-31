<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\TutorModel;
class TutorController extends Controller
{

    public function index(){
        $tutors = TutorModel::all();
        return view('school.tutors.index',['tutors'=>$tutors]);
    }
    public function create(){
        $tutor = new TutorModel();
        return view('school.tutors.create',['tutor'=>$tutor]);
    }
    public function store(Request $request){
        try{
            $tutorModel = new TutorModel();
            $tutorModel->add($request->all());
            alert()->success('El tutor fue registrado correctamente');
            return redirect('tutores');
        }catch (\Exception $e) {
            alert()->warning("Ha ocurrido un error en el servidor: ".$e->message());
            return back();
        }
    }
    public function show($id){
        //
    }
    public function edit($id){
        $tutor = TutorModel::findOrfail($id);
        return view('school.tutors.edit',['tutor'=>$tutor]);
    }
    public function update(Request $request, $id){
        try{
            $tutorModel = TutorModel::findOrfail($id);
            $tutorModel->edit($request->all());
            alert()->success('El tutor fue actualizado correctamente');
            return redirect('tutores');
        }catch (\Exception $e) {
            alert()->warning("Ha ocurrido un error en el servidor: ".$e->message());
            return back();
        }
    }
    public function destroy($id){
        //
    }
}
