@extends('layouts.app')

@section('content')
    <h1>Hello World!!</h1>
    <ul>
        @if (count($people))
            @foreach ($people as $person)
                <li>{{$person}}</li>
            @endforeach
        @endif
    </ul>
    
@endsection


@section('footer')
    {{-- <script>alert('Hello visitor')</script> --}}
@endsection

