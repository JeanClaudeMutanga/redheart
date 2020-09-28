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
                        <form name="form" id="x1" method="POST" action="https://paynow.netcash.co.za/site/paynow.aspx" target="_top">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="p4" value="{{$payment->amount}}" required autocomplete="name" placeholder="Amount" readonly>
                                    <input type="hidden" class="form-control @error('name') is-invalid @enderror" name="M1" value="10471557-a730-4dc4-bf74-fd70fb1ff944">
                                    <input type="hidden" class="form-control @error('name') is-invalid @enderror" name="M2" value="24ade73c-98cf-47b3-99be-cc7b867b3080">
                                    <input type="hidden" class="form-control @error('name') is-invalid @enderror" name="p2" value="{{$payment->ref}}">
                                    <input type="hidden" class="form-control @error('name') is-invalid @enderror" name="m5" value="{{$payment->student->ref}}">
                                    <input type="hidden" class="form-control @error('name') is-invalid @enderror" name="m6" value="{{$payment->student->name}}">
                                    <input type="hidden" name="m14" value="1">
                                    <input type="hidden" name="m4" value="{{$payment->id}}">
                                    <input type="hidden" name="Budget" value="Y"> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="m9" value="{{auth::user()->email}}" required autocomplete="email" placeholder="Email" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="m11" value="{{$payment->phone}}" required autocomplete="phone" placeholder="Phone Number" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="p3" value="{{$payment->description}}" required autocomplete="description" placeholder="Description" readonly>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6">
                                <input class="btn btn-primary" name="submit" type="submit" value="PAY" id="submit">
                                </div>
                            </div>
                            <p class="mt-2">NB: You will be directed to a secure page where you will make the payment</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function () {
    document.getElementById("submit").click();
    });
    </script>
   
@endsection
