@extends('layouts.admin')
@section('breadcrumb')
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Agregar nuevo alumno</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="/">Escuela</a></li>
                        <li class="breadcrumb-item"><a href="/alumnos">Alumnos</a></li>
                        <li class="breadcrumb-item active">Agrega alumno</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <a href="/alumnos" class="btn btn-primary"><span class="fas fa-list"></span> Listado de alumnos</a>
            </div>
        </div>
    </div>
@stop
@section('content')
    <form action="{{asset('alumnos/'.$student->id)}}" method="post">
        @csrf
        {{method_field('put')}}
        <input type="hidden" name="type_address" value="students">
        <input type="hidden" name="rol" value="estudiante">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <h4 class="mb-0 text-white">Datos personales</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-white"><span class="badge badge-primary">1</span> Identidad del alumno</h3>
                        @include('school.peoples.form-edit',['people'=>$student->people])
                        <h3 class="card-title text-white"><span class="badge badge-primary">2</span> Direccion del alumno</h3>
                        @include('school.address.form-edit',['address'=>$student->people->address])
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <h4 class="mb-0 text-white">Credenciales</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-white"><span class="badge badge-primary">3</span> Datos de usuario</h3>
                        @include('school.credentials.form-edit',['user'=>$student->people->user]) <br>
                        <h3 class="card-title text-white"><span class="badge badge-primary">4</span> Datos del tutor</h3>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    {!! Form::label('tutor_id','Tutor') !!}
                                    {!! Form::select('tutor_id',$tutors,$student->tutor_id,['class'=>'form-control','placeholder'=>'Selecciona un tutor']) !!}
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    {!! Form::label('credencial','Credencial del alumno') !!}
                                    {!! Form::text('credencial',$student->credencial,['class'=>'form-control']) !!}
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="button"> <span class="fas fa-edit"></span> Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
