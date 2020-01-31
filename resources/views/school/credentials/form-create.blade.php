<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        {!! Form::label('email','Email') !!}
        {!! Form::email('email','',['class'=>'form-control']) !!}
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        {!! Form::label('password','Contraseña') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
</div>
