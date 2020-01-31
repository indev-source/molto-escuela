<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('fullname','Nombre Completo') !!}
            {!! Form::text('fullname',$tutor->fullname,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::email('email',$tutor->email,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('phone','Telefono') !!}
            {!! Form::text('phone',$tutor->phone,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
