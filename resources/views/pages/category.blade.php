@extends('layout.master');

@section('title' , 'Category')
    
@section('content')
    <div class="container">

        Category {{ $this_id }} <br>

        {{ $type_id }}  <br>
    </div>
@endsection