@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{__('Show All Offers')}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  

                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{__('messages.Name Offer')}}</th>
                            <th scope="col">{{__('messages.Price Offer')}}</th>
                            <th scope="col">{{__('messages.Details Offer')}}</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach ($alloffers as $offer)
                          <tr>
                            <th scope="row">{{$offer -> id}}</th>
                            <td>{{$offer -> name}}</td>
                            <td>{{$offer -> price}}</td>
                            <td>{{$offer -> details}}</td>
                          </tr>
                          @endforeach
                         
                        </tbody>
                      </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
