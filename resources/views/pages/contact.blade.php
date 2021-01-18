@extends('layout.master');

@section('title' , 'Contact US')
    
@section('content')
    <div class="container">
        <h1>Contact Us</h1>
        {{ $page_name}} <br>
        {{ $page_description}}
    </div>
@endsection

@section('sidebar')
    <h1> Show sidebar Override on Master </h1>
    @parent
@endsection