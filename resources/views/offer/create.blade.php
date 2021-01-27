@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Add Offer')}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert"> 
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <form method="POST" action="{{route('offers.store')}}">
                        @csrf
                        {{-- <input name="_token" value="{{csrf_token()}}" /> --}}
                        <div class="form-group">
                          <label> {{__('messages.Name Offer en')}} </label>
                          <input type="text" class="form-control" name="name_en"  placeholder="{{__('messages.Name Offer en')}}">
                         @error('name_en')
                          <small class="form-text text-danger">{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                            <label> {{__('messages.Name Offer ar')}} </label>
                            <input type="text" class="form-control" name="name_ar"  placeholder="{{__('messages.Name Offer ar')}}">
                           @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>


                        <div class="form-group">
                          <label >{{__('messages.Price Offer')}} </label>
                          <input type="number" class="form-control" name="price" placeholder="{{__('messages.Price Offer')}} ">
                          @error('price')
                          <small class="form-text text-danger">{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                            <label >{{__('messages.Details Offer')}} </label>
                            <input type="text" class="form-control" name="details"  placeholder="{{__('messages.Details Offer')}} ">
                            @error('details')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                          </div>
                       
                        <button type="submit" class="btn btn-primary">{{__('messages.Save Offer')}}</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
