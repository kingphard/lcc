@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome Admin!!!
                </div>
            </div>
        </div>
    </div>
     <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">Add Audio Sermon </div>
            <div class="panel-body">
               {!! Form::open(['url'=> '/audio_upload','method'=>'POST', 'files' => true]) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'title') !!}
                        {!! Form::text('name', '', ['class' => 'form-control']) !!}
                    </div>
                    
                     <div class="form-group">
                        {!! Form::label('name', 'Delivered By') !!}
                        {!! Form::text('preacher', '', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('details', 'Details') !!}
                        {!! Form::textarea('details', '',['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                   {!! Form::label('Audio File') !!}
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                            <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                            {!! Form::file('aud_file', null) !!}
                            </span>
                             <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>   

                

                {!! Form::submit('Upload Data', ['class' => 'btn btn-primary pull-right']) !!}

                {!! Form::close() !!}
            
        </div>
</div>
@endsection
