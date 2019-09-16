@extends('layouts.app')

@section('content')
    <h1>Messages</h1>
    @if (count($messages) > 0)
        @foreach ($messages as $eachmessage)
            <ul class="list-group my-3">
            <li class="list-group-item"><strong>Name: </strong>{{$eachmessage->name}}</li>
            <li class="list-group-item"><strong>Email: </strong>{{$eachmessage->email}}</li>
            <li class="list-group-item"><strong>Message: </strong>{{$eachmessage->message}}</li>
            </ul>
        @endforeach
    @endif
@endsection

@section('sidebar')
    @parent
    <p>This is the appended sidebar</p>
@endsection