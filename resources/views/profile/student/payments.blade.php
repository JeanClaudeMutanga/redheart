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
                    <th>Reference No</th>
                    <th>Phone Number</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Reference No</th>
                    <th>Phone Number</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Option</th>
                </tr>
                </tfoot>
                <tbody>
               @foreach($payments as $payment)
                <tr>
                    <td>{{$payment->ref}}</td>
                    <td>{{$payment->phone}}</td>
                    <td>{{$payment->description}}</td>
                    <td>{{$payment->status}}</td>
                    <td>{{$payment->created_at}}</td>
                    <td>ZAR {{$payment->amount}}</td>
                    <td>
                        @if($payment->status == "Successful" )
                        <a href="mailto:admin@afrigoteltech.co.za">Contact Admin</a>
                        @else
                        <form action="/application/payment/proceed/{{$payment->id}}" method="get">
                            <button data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success btn-sm ml-1">Complete Payment</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection