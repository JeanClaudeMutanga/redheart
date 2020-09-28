@extends('layouts.app')



@section('content')
@include('layouts.individualnav')

<div class="jumbotron">
<h4 class="text-center">Welcome to Red Heart Application Portal</h4>
<hr>
<h3 class="text-center">Student Account</h3>

</div>
<div class="container">
    
    <div class="row mt-2">
        <div class="col-lg-6 col-md-6 text-center" data-aos="fade-up" >
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Payments</h5>
                    <p class="card-text">View all payments made.</p>
                    <a href="/students/payment" class="btn btn-primary">Open</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 text-center" data-aos="fade-up">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registered Students</h5>
                    <p class="card-text">All students registered for Red Heart.</p>
                    <a href=/students/all class="btn btn-primary">Open</a>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
@endsection