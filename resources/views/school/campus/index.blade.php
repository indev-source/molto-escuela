@extends('layouts.admin')
@section('breadcrumb')
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Listado de plantelesS</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="/">Escuela</a></li>
                        <li class="breadcrumb-item active">Planteles</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <a href="/planteles/create" class="btn btn-primary"><span class="fas fa-user-plus"></span> Registrar nuevo</a>
            </div>
        </div>
    </div>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">RFC</th>
                                <th class="text-center">Representante</th>
                                <th class="text-center">Estatus</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($campus as $cs)
                                <tr>
                                    <td class="text-center">{{$cs->name}}</td>
                                    <td class="text-center">{{$cs->representative->rfc}}</td>
                                    <td class="text-center">{{$cs->representative->fullname}}</td>
                                    <td class="text-center">
                                        <span class="badge {{$cs->is_active == 1 ? 'badge-success' : 'badge-danger'}}">
                                            <span class="fas {{$cs->is_active == 1 ? 'fa-check' : 'fa-trash'}}"></span>
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{asset('planteles/'.$cs->id.'/edit')}}" class="btn btn-primary btn-sm">
                                            <span class="fas fa-edit"></span>
                                            Actualizar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
