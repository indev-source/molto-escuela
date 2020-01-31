<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('name','Nombre(s)') !!}
            {!! Form::text('name',$employee->people->name,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('lastname','Apellido Paterno') !!}
            {!! Form::text('lastname',$employee->people->lastname,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('mothers_lastname','Apellido Materno') !!}
            {!! Form::text('mothers_lastname',$employee->people->mothers_lastname,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('nss','NSS') !!}
            {!! Form::text('nss',$employee->people->nss,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('curp','CURP') !!}
            {!! Form::text('curp',$employee->people->curp,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('rfc','RFC') !!}
            {!! Form::text('rfc',$employee->people->rfc,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('campus_id','Plantel') !!}
            {!! Form::select('campus_id',$campus,$employee->people->campus_id,['class'=>'form-control','placeholder'=>'Selecciona un plantel disponible']) !!}
        </div>
    </div>
</div>
