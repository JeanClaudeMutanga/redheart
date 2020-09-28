@extends('layouts.app')
@include('layouts.individualnav')


@section('content')
@include('layouts.individualnav')

<div class="jumbotron">
<h4 class="text-center">Welcome to Red Heart Application Portal</h4>
<hr>
<h3 class="text-center">Individual Account</h3>

</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8  pt-2">
            <div class="card ">
                <div class="card-header">Individual Application Status</div>

                <div class="card-body">
                @if($user->Status == "")
                    <p class="text-center">You have not submited an application yet!</p>
                    <p class="text-center"><a href="/individual/create" class="btn btn-primary btn-lg">Complete an application</a></p>
                @elseif($user->Status == "1")
                    <p class="text-center">You have completed an online application</p>
                    <p class="text-center"><a href="/individual/show" class="btn btn-primary btn-lg">View application</a></p>
                @endif
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection