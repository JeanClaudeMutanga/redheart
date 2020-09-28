@extends('layouts.app')



@section('content')
@include('layouts.cooperate')

<div class="jumbotron">
    <h4 class="text-center">Welcome to Red Heart Application Portal</h4>
    <hr>
    <h3 class="text-center">Cooperate Account</h3>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8  pt-2">
            <div class="card ">
                <div class="card-header">Cooperate Applications Dashboard</div>

                <div class="card-body">
                    
                </div>
                
            </div>
        </div>
       
        <div class="col-md-8 pb-4 pt-2">
        <h4 class="text-center">Invited  Employees</h4>
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col"> Pending Invites</th>
                <th> {{$count}}</th>
                </tr>
            </thead>
        </table>
        </div>

        <div class="col-md-8 pb-4">
        <h4 class="text-center">Confirmed  Employees</h4>
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col"> Confirmed Invites</th>
                <th>{{$confirmed}}</th>
                </tr>
            </thead>
        </table>
        </div>
    </div>
</div>
@endsection