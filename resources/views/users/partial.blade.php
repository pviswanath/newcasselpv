<div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
    {!! Form::label('fname', 'First Name:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-2">
        {!! Form::text('fname', null, ['class' => 'col-xs-2 form-control', 'required' => 'required']) !!}
        @if ($errors->has('fname'))
            <span class="help-block">
                <strong>{{ $errors->first('fname') }}</strong>
            </span>
        @endif
    </div>

    {!! Form::label('lname', 'Last Name:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-2">
        {!! Form::text('lname', null, ['class' => 'col-xs-2 form-control', 'required' => 'required']) !!}
        @if ($errors->has('lname'))
            <span class="help-block">
                <strong>{{ $errors->last('lname') }}</strong>
            </span>
        @endif
    </div>

    {!! Form::label('mname', 'Middle Name:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-2">
        {!! Form::text('mname', null, ['class' => 'col-xs-2 form-control', 'required' => 'required']) !!}
        @if ($errors->has('mname'))
            <span class="help-block">
                <strong>{{ $errors->middle('mname') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'E-Mail Address:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Roles</label>
    <div class="col-md-6">{!! Form::select('rolelist[]', $list_role, null,
   ['class' => 'form-control roles cds-select', 'multiple', 'style' => 'width: 50%; margin-top: 10px;']) !!}</div>
</div>

<div class="form-group{{ $errors->has('residentid') ? ' has-error' : '' }}">
    {!! Form::label('residentid', 'Resident ID:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-2">
        {!! Form::text('residentid', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('residentid'))
            <span class="help-block">
                <strong>{{ $errors->first('residentid') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('residentrelationship') ? ' has-error' : '' }}">
    {!! Form::label('residentrelationship', 'Resident Relationship:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('residentrelationship', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('residentrelationship'))
            <span class="help-block">
                <strong>{{ $errors->first('residentrelationship') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('addressline1') ? ' has-error' : '' }}">
    {!! Form::label('addressline1', 'Address Line 1:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('addressline1', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('addressline1'))
            <span class="help-block">
                <strong>{{ $errors->first('addressline1') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('addressline2') ? ' has-error' : '' }}">
    {!! Form::label('addressline2', 'Address Line 2:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('addressline2', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('addressline2'))
            <span class="help-block">
                <strong>{{ $errors->first('addressline2') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
    {!! Form::label('city', 'City:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('city', null, ['class' => 'col-md-4 form-control', 'required' => 'required']) !!}
        @if ($errors->has('city'))
            <span class="help-block">
                <strong>{{ $errors->first('city') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
    {!! Form::label('state', 'State:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('state', null, ['class' => 'col-md-4 form-control', 'required' => 'required']) !!}
        @if ($errors->has('state'))
            <span class="help-block">
                <strong>{{ $errors->first('state') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
    {!! Form::label('zipcode', 'Zipcode:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('zipcode', null, ['class' => 'col-md-4 form-control', 'required' => 'required']) !!}
        @if ($errors->has('zipcode'))
            <span class="help-block">
                <strong>{{ $errors->first('zipcode') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('homephone') ? ' has-error' : '' }}">
    {!! Form::label('homephone', 'Cell Phone:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-2">
        {!! Form::text('homephone', null, ['class' => 'col-md-2 form-control', 'required' => 'required']) !!}
        @if ($errors->has('homephone'))
            <span class="help-block">
                <strong>{{ $errors->first('homephone') }}</strong>
            </span>
        @endif
    </div>
</div>



<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <div class="checkbox">
            <label>
                {{ Form::hidden('active', false) }}{{ Form::checkbox('active', true, old('active')) }} Receive Email Updates
            </label>
        </div>
    </div>
</div>

<div class="form-group" style="text-align: center">
         {!! Form::button('<i class="fa fa-btn fa-save"></i>Create User', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}

         {!! Form::button('<i class="fa fa-btn fa-save"></i>Reset Fields', ['type' => 'reset', 'class' => 'btn btn-primary']) !!}
 </div>
