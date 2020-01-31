@extends('layouts.admin')
@section('breadcrumb')
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Agregar nuevo empleado</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="/">Escuela</a></li>
                        <li class="breadcrumb-item"><a href="/planteles">Planteles</a></li>
                        <li class="breadcrumb-item active">Agrega plantel</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <a href="/planteles" class="btn btn-primary"><span class="fas fa-list"></span> Listado de planteles</a>
            </div>
        </div>
    </div>
@stop
@section('content')
    <form action="/planteles" method="post">
        @csrf
        <input type="hidden" name="type_address" value="campus">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <h4 class="mb-0 text-white">Datos del plantel</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-white"><span class="badge badge-primary">1</span> Información del plantel</h3>
                        @include('school.campus.form-create') <hr>
                        <h3 class="card-title text-white"><span class="badge badge-primary">2</span> Direccion del plantel</h3>
                        @include('school.address.form-create')
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <h4 class="mb-0 text-white">Reprentante del plantel</h4>
                    </div>
                    <div class="card-body">
                        {!! Form::label('representative_id','Representate') !!}
                        {!! Form::select('representative_id',$representatives,'',['class'=>'form-control','placeholder'=>'Selecciona un representante del plantel']) !!}
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="button"> <span class="fas fa-plus"></span> Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
