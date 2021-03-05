@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
    {{-- <form method="post" action="/posts"> --}}
    {!! Form::open(['method'=>'POST', 'action' => 'App\Http\Controllers\PostsController@store']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Post') !!}
        </div>
        
        
    {!! Form::close() !!}
@endsection