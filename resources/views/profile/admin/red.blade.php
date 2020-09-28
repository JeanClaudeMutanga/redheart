@extends('layouts.app')

@section('content')
@include('layouts.individualnav')

<!-- Page Wrapper -->
  <div id="wrapper">
  
    <!-- Sidebar -->
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
  
      <!-- Main Content -->
      <div id="content">
      
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <p class="mt-4"><a href="/home">Home</a> / Schools</p>
          <!-- Page Heading -->
          
            <div class="">
                 <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Added Schools</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Owner</th>
                        <th>School Name</th>
                        <th>School Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Total Learners</th>
                        <th>Contact Person</th>
                        <th>Phone Number</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Owner</th>
                        <th>School Name</th>
                        <th>School Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Total Learners</th>
                        <th>Contact Person</th>
                        <th>Phone Number</th>
                        <th>Option</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($schools as $school)
                    <tr>
                        <td>{{$school->owner}}</td>
                        <td>{{$school->name}}</td>
                        <td>{{$school->address}}</td>
                        <td>{{$school->city}}</td>
                        <td>{{$school->state}}</td>
                        <td>{{$school->learners}}</td>
                        <td>{{$school->contact}}</td>
                        <td>{{$school->phone}}</td>
                        <td>
                           <form action="/admin/school/{{$school->id}}" method="get">
                              <button class="btn btn-success btn-sm ml-1">Open</button>
                           </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$schools->links()}}
                </div>
            </div>
            </div>
            </div>
        </div>

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
@endsection
