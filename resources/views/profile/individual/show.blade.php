@extends('layouts.app')

@section('content')

@include('layouts.individualnav')
<div class="jumbotron">
    <h4 class="text-center">Red Heart Individual Acc Application Portal</h4>
        <hr>
    <h3 class="text-center"> Application Details</h3>
</div>

<div class="row justify-content-center" id="test">
    <div class="col-md-10 pb-4">

        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
            <p class="text-center">You submited an application. The details are below.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <a href="/home" class="btn btn-primary btn-lg">Back</a>
        <h4 class="text-center">Personal Details</h4>
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Occupation</th>
                <th scope="col">Next Of Kin</th>
                <th scope="col">Phone</th>
                <th scope="col">2nd Next Of Kin</th>
                <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">{{$user->name}}</th>
                <td>{{$user->email}}</td>
                <td>{{$user->Individual->phone}}</td>
                <td>{{$user->Individual->occupation}}</td>
                <td>{{$user->Individual->next_kin}}</td>
                <td>{{$user->Individual->nex_phone}}</td>
                <td>{{$user->Individual->next_kin2}}</td>
                <td>{{$user->Individual->nex_phone2}}</td>
                </tr>
            </tbody>
        </table>

        <h4 class="text-center">Medical Details</h4>
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">Medical Aid Provider</th>
                <th scope="col">Membership Number</th>
                <th scope="col">Medical Conditions</th>
                <th scope="col">Chronic Medications</th>
                <th scope="col">Allergies</th>
                <th scope="col">Red Card Choice</th>
                <th scope="col">Status</th>
               
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">{{$user->Medicals->provider}}</th>
                <td>{{$user->Medicals->memberno}}</td>
                <td>{{$user->Medicals->existing}}</td>
                <td>{{$user->Medicals->chronic}}</td>
                <td>{{$user->Medicals->allergies}}</td>
                <td>{{$user->RedCards->type}}</td>
                <td>Status</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



@endsection