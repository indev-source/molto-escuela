<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('fullname','Nombre Completo') !!}
            {!! Form::text('fullname',$representative->fullname,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('rfc','RFC') !!}
            {!! Form::text('rfc',$representative->rfc,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
