<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('colony','Colonia') !!}
            {!! Form::text('colony',$employee->people->address->colony,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('postal_code','Codigo Postal') !!}
            {!! Form::text('postal_code',$employee->people->address->postal_code,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('city','Ciudad') !!}
            {!! Form::text('city',$employee->people->address->city,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('state','Estado') !!}
            {!! Form::text('state',$employee->people->address->state,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('country','Pais') !!}
            {!! Form::text('country',$employee->people->address->country,['class'=>'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('address','Direccion') !!}
    {!! Form::textarea('address',$employee->people->address->address,['class'=>'form-control']) !!}
</div>
