@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1>
    {!! Form::model($post, ['method'=>'PATCH', 'action' => ['App\Http\Controllers\PostsController@update', $post->id]]) !!} 
        {{ csrf_field() }}
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        {!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}
    {!! Form::close() !!}
        
    {!! Form::open(['method'=>'DELETE', 'action' => ['App\Http\Controllers\PostsController@destroy', $post->id]]) !!} 
        {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection