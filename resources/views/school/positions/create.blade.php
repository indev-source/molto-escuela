@extends('layouts.admin')
@section('breadcrumb')
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Agregar nuevo puesto</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="/">Escuela</a></li>
                        <li class="breadcrumb-item"><a href="/puestos">Puestos</a></li>
                        <li class="breadcrumb-item active">Agrega puesto</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <a href="/puestos" class="btn btn-primary"><span class="fas fa-list"></span> Listado de puestos</a>
            </div>
        </div>
    </div>
@stop
@section('content')
    <form action="/puestos" method="post">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <h4 class="mb-0 text-white">Datos del puesto</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-white"><span class="badge badge-primary">1</span> Información del puesto</h3>
                        @include('school.positions.form')
                        <button type="submit" class="btn btn-primary" name="button"><span class="fas fa-user-plus"></span> Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
