@extends('layouts.admin')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                </div>

                <div class="panel-body">
                    {!! Form::model($industri,['url'=>route('industri.update',$industri->id), 'method'=>'put', 'files'=>'true', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
		              @include('backend.industri._form')
		              {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection