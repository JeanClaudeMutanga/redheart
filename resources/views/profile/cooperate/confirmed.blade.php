@extends('layouts.app')

@section('content')
@include('layouts.cooperate')
<div class="jumbotron">
    <h4 class="text-center">Welcome to Red Heart Application Portal</h4>
    <hr>
    <h3 class="text-center">Cooperate Account</h3>
</div>

<div class="row justify-content-center" id="test">
    <div class="col-md-8 pb-4">
    @if($confirmed->count() ==0)
        <p class="text-center"><a href="" class="btn btn-danger btn-lg">No confimed invites yet</a></p>
    @else
    <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Company</th>
                </tr>
            </thead>
            @foreach($confirmed as $invite )
            <tbody>
                <tr>
                <th scope="row">{{$invite->email}}</th>
                <td>{{$invite->status}}</td>
                <td>{{$invite->company}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    @endif
    </div>

</div>
@endsection