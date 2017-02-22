@include('layouts')
@extends('CreateApt')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center" > Create New Apartment</div>
                    <div class="panel-body">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 {{--   {!! Form::open(['url' => 'apartment']) !!}
    <div class="form-group">
        {!! Form::label('apt_floornumber', 'Apartment Floor Number:') !!}
        {!! Form::text('apt_floornumber',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apt_number', 'Apartment Number:') !!}
        {!! Form::text('apt_number',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apt_comments', 'Apartment Comments:') !!}
        {!! Form::text('apt_comments',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!!Form::label('cntr_id', 'Center Name:') !!}
        {{ Form::select('cntr_id', $centers) }}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}--}}

{!! Form::open(['url' => 'apartment']) !!}
<div class="form-group">
    {!! Form::label('apt_floornumber', 'Apartment Floor Number:',['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('apt_floornumber',null,['class' => 'col-md-4 form-control','required' => 'required']) !!}
    </div>
</div>
</br> </br>
<div class="form-group">
    {!! Form::label('apt_number', 'Apartment Number:',['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('apt_number',null,['class' => 'col-md-4 form-control','required' => 'required']) !!}
    </div>
</div>
</br> </br>
<div class="form-group">
    {!! Form::label('apt_comments', 'Apartment Comments:',['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('apt_comments',null,['class'=>'col-md-4 form-control']) !!}
    </div>
</div>
</br> </br>
<div class="form-group">
    {!!Form::label('cntr_name', 'Center Name:',['class' => 'col-md-4 control-label']) !!}
    {{ Form::select('cntr_name', $centers) }}
</div>
</br> </br>

<div class="form-group">


    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>

</div>
</div>
</div>
</div>
</div>
{!! Form::close() !!}
@stop
