<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',$campus->name,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('clave_sep','Clave SEP') !!}
            {!! Form::text('clave_sep',$campus->clave_sep,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        {!! Form::label('clave_plantel','Clave del plantel') !!}
        {!! Form::text('clave_plantel',$campus->clave_plantel,['class'=>'form-control']) !!}
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        {!! Form::label('phone_office','Telefono de la oficina') !!}
        {!! Form::text('phone_office',$campus->phone_office,['class'=>'form-control']) !!}
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        {!! Form::label('mobile_phone','Telefono celular') !!}
        {!! Form::text('mobile_phone',$campus->mobile_phone,['class'=>'form-control']) !!}
    </div>
</div>
