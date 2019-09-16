@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, fuga hic, dolore totam eligendi odio non consequuntur repellat provident suscipit, vitae odit itaque nesciunt optio architecto? Nam ad hic quam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, fuga hic, dolore totam eligendi odio non consequuntur repellat provident suscipit, vitae odit itaque nesciunt optio architecto? Nam ad hic quam! </p>
@endsection

@section('sidebar')
    @parent
    <p>This is the appended sidebar</p>
@endsection