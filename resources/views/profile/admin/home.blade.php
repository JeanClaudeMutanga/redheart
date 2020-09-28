@extends('layouts.app')



@section('content')
@include('layouts.individualnav')

<div class="jumbotron">
<h4 class="text-center">Welcome to Red Heart Application Portal</h4>
<hr>
<h3 class="text-center">Admin Portal</h3>

</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 text-center" data-aos="fade-up" >
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registered Schools</h5>
                    <p class="card-text">All schools registered for Red Heart.</p>
                    <a href="/admin/schools" class="btn btn-primary">Open</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 text-center" data-aos="fade-up">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registered Students</h5>
                    <p class="card-text">All students registered for Red Heart.</p>
                    <a href="#" class="btn btn-primary">Open</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection