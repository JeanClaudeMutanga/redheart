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
                <div class="card-header text-center">Payment Successful</div>
                    <div class="card-body justify-content-center">
                        <p class="text-center"><img src="/svg/payment/success.GIF" alt=""></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
