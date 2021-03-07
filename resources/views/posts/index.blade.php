@extends('layouts.app')
@section('content')
    <ul>
       @foreach($posts as $post)
       <div class="image-container">
           <img height="100px" src="{{ $post->path }}" alt="">
       </div>
        <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>
       @endforeach
    </ul>
    <form action="/posts/create" method="get">
        <input type="submit" value="CREATE">
    </form>
@endsection