@extends('layouts.app')



@section('content')
@include('layouts.individualnav')

<div class="jumbotron">
    <h4 class="text-center">Welcome to Red Heart Payment Portal</h4>
<hr>
    <h3 class="text-center">Student Account</h3>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10  pt-2">
            <div class="card ">
                <div class="card-header text-center">To complete Application, Make The Necessary Payment</div>
                    <div class="card-body justify-content-center">
                        <form method="POST" action="/application/payment/confirm/{{$student->id}}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="amount" value="{{$student->RedCards->price}}" required autocomplete="name" placeholder="Amount" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{auth::user()->email}}" required autocomplete="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="Red Heart Registration" required autocomplete="description" placeholder="Description" readonly>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Proceed') }}
                                    </button>
                                </div>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
