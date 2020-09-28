@extends('layouts.app')



@section('content')
@include('layouts.individualnav')

<div class="jumbotron">
<h4 class="text-center">Welcome to Red Heart Application Portal</h4>
<hr>
<h3 class="text-center">Student Account</h3>
Home / <a href="/student/create">Add Student</a>
</div>
<div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-8  pt-2">
                    <div class="card-body">
                    @if(auth()->user()->student->count() == 0)
                        <p class="text-center">You have not submited added any students yet</p>
                        <p class="text-center"><a href="/student/create" class="btn btn-primary btn-lg">Add Student</a></p>
                    @endif
                    </div>
            </div>
        </div>
    
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Grade</th>
                    <th>School Name</th>
                    <th>School Address</th>
                    <th>School Phone</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Student Name</th>
                    <th>Grade</th>
                    <th>School Name</th>
                    <th>School Address</th>
                    <th>School Phone</th>
                    <th>Option</th>
                </tr>
                </tfoot>
                <tbody>
               @foreach(auth()->user()->student as $students)
                <tr>
                    <td>{{$students->name}}</td>
                    <td>{{$students->grade}}</td>
                    <td>{{$students->school}}</td>
                    <td>{{$students->school_address}}</td>
                    <td>{{$students->school_phone}}</td>
                    <td>
                    <form action="/student/{{$students->id}}" method="get">
                        <button data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success btn-sm ml-1">Open</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection