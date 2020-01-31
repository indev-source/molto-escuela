<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        {!! Form::label('email','Email') !!}
        {!! Form::email('email',$employee->people->user->email,['class'=>'form-control']) !!}
    </div>
</div>
