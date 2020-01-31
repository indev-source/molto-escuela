@extends('layouts.admin')
@section('breadcrumb')
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Agregar nuevo empleado</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="/">Escuela</a></li>
                        <li class="breadcrumb-item"><a href="/empleados">Empleados</a></li>
                        <li class="breadcrumb-item active">Agrega empleado</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <a href="/empleados" class="btn btn-primary"><span class="fas fa-list"></span> Listado de empleados</a>
            </div>
        </div>
    </div>
@stop
@section('content')
    <form action="/empleados" method="post">
        @csrf
        <input type="hidden" name="type_address" value="employees">
        <input type="hidden" name="rol" value="empleado">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <h4 class="mb-0 text-white">Datos personales</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-white"><span class="badge badge-primary">1</span> Identidad del empleado</h3>
                        @include('school.peoples.form-create')
                        <h3 class="card-title text-white"><span class="badge badge-primary">2</span> Direccion del empleado</h3>
                        @include('school.address.form-create')
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
                        @include('school.credentials.form-create') <br>
                        <h3 class="card-title text-white"><span class="badge badge-primary">$</span> Cargo en la empresa</h3>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    {!! Form::label('nss','NSS') !!}
                                    {!! Form::text('nss','',['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    {!! Form::label('position_id','Puesto') !!}
                                    {!! Form::select('position_id',$positions,'',['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="button"> <span class="fas fa-user-plus"></span> Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
