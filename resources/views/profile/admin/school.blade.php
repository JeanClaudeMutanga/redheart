@extends('layouts.app')

@section('content')
@include('layouts.individualnav')
<!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column pt-4">

      <!-- Main Content -->
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          @include('layouts.messages')
            <div class="">
                 <h1 class="h3 mb-4 text-gray-800 pt-1">{{$school->name}}</h1>
                 <div class="card shadow mb-4">
                      <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">{{$school->name}}</h6>
                      </div>
                        <div class="card-body">
                              <!------Card---->
                                  <div class="row d-flex justify-content-between ml-2 mr-2">
                                  <div class="card col-lg-6">
                                      <div class="card-body">
                                          <p><strong>Sales Agent</strong>: {{$school->owner}}</p>
                                              <hr>
                                              <p><strong>School Ref No</strong>: {{$school->ref}}</p>
                                              <hr>
                                              <p><strong>Name of School </strong>: {{$school->name}}</p>
                                              <hr>
                                          <p><strong>Total Learners</strong>: {{$school->learners}}</p>
                                              <hr>
                                          <p><strong>School Address</strong> : {{$school->address}}</p>
                                              <hr>
                                          <p><strong>City</strong> : {{$school->city}} </p>
                                              <hr>
                                          <p><strong>State</strong> : {{$school->state}}</p>
                                          <hr>
                                          
                                      </div>
                                  </div>
                      
                                  <div class="card col-lg-6 ">
                                      <div class="card-body">
                                          <p><strong>Contact Person </strong>: {{$school->contact}}</p>
                                              <hr>
                                          <p><strong>Phone Number </strong>: {{$school->phone}}</p>
                                              <hr>
                                          <p><strong>Email </strong>: {{$school->email}}</p>
                                              <hr>
                                              <p><strong>Post Code</strong> : {{$school->postcode}}</p>
                                          <hr>
                                          <p><strong>Sub Sales Agent</strong> : {{$school->sub}} <button data-toggle="modal" data-target="#Sub" class="btb btn-success btn-sm">Update</button></p>
                                          <hr>
                                          <p><strong>2nd Sub Sales Agent</strong> : {{$school->sub2}} <button data-toggle="modal" data-target="#Sub2" class="btb btn-success btn-sm">Update</button></p>
                                          <hr>
                                      </div>
                                  </div>
                              </div>
                              <!------End Card---->
                        </div>
                  </div>
            </div>
                  
                  

        </div>

        <!--- Sub 1 Modal--->
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="Sub">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content card w-100">
                        <div class="modal-body">
                            <form id="CustomerForm" name="CustomerForm" class="form-horizontal" action ="/sub/first/{{$school->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="type" class="col-sm-2 control-label">1st Sub Agent</label>

                                    <div class="col-sm-12">
                                        <input type="text" name="sub" id="ttle" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save
                                </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
          </div>    
        <!---Sub 1 Modal--->
        
        <!--- Sub 2 Modal--->
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="Sub2">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content card w-100">
                        <div class="modal-body">
                            <form id="CustomerForm" name="CustomerForm" class="form-horizontal" action ="/sub/second/{{$school->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="type" class="col-sm-2 control-label">2nd Sub Agent</label>

                                    <div class="col-sm-12">
                                        <input type="text" name="sub2" id="ttle" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save
                                </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
          </div>    
        <!---Sub 2 Modal--->

      </div>
      <!-- End of Main Content -->


      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
@endsection
