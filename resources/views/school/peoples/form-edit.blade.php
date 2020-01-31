<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('name','Nombre(s)') !!}
            {!! Form::text('name',$people->name,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('lastname','Apellido Paterno') !!}
            {!! Form::text('lastname',$people->lastname,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('mothers_lastname','Apellido Materno') !!}
            {!! Form::text('mothers_lastname',$people->mothers_lastname,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('birthday','Fecha de nacimiento') !!}
            {!! Form::date('birthday',$people->birthday,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('curp','CURP') !!}
            {!! Form::text('curp',$people->curp,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('rfc','RFC') !!}
            {!! Form::text('rfc',$people->rfc,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('campus_id','Plantel') !!}
            {!! Form::select('campus_id',$campus,$people->campus_id,['class'=>'form-control','placeholder'=>'Selecciona un plantel disponible']) !!}
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('phone_office','Telefono de la oficina') !!}
            {!! Form::text('phone_office',$people->phone_office,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('mobile_phone','Telefono celular') !!}
            {!! Form::text('mobile_phone',$people->mobile_phone,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
