@extends('layout.master');

@section('title' , 'About US')
    
@section('content')
    <div class="container">
        <h1>About Us</h1>
    </div>
@endsection

@section('sidebar')
    <h1> Show sidebar Override on Master </h1>
    @parent
@endsection