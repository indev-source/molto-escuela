@extends('layouts.admin')
@section('breadcrumb')
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Actualizar datos del representante</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="/">Escuela</a></li>
                        <li class="breadcrumb-item"><a href="/representantes">Representantes</a></li>
                        <li class="breadcrumb-item active">{{$representative->fullname}}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <a href="/representantes" class="btn btn-primary"><span class="fas fa-list"></span> Listado de representantes</a>
            </div>
        </div>
    </div>
@stop
@section('content')
    <form action="{{asset('representantes/'.$representative->id)}}" method="post">
        @csrf
        {{method_field('put')}}
        <div class="row">
            <div class="col-md-8">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <h4 class="mb-0 text-white">Datos del representante</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-white"><span class="badge badge-primary">1</span> Información del representante</h3>
                        @include('school.representatives.form')
                        <button type="submit" class="btn btn-primary" name="button"><span class="fas fa-edit"></span> Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
