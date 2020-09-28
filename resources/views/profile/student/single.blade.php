@extends('layouts.app')
@include('layouts.individualnav')

@section('content')

<!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column pt-4">

      <!-- Main Content -->
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
    

					<div class="row d-flex justify-content-between shadow ml-2 mr-2">
                            <div class="card col-lg-6">
                                <h5 class="text-center">Student Details</h5>
                                <div class="card-header">Student Information</div>
                                <div class="card-body">
                                    <p><strong>Student ID</strong> : {{$student->ref}}</p>
                                        <hr>
                                    <p><strong>Student Name </strong>:  {{$student->name}}</p>
                                        <hr>
                                    <p><strong>D.O.B</strong>:  {{$student->dob}}</p>
                                        <hr>
                                    <p><strong>Grade</strong> : {{$student->grade}}</p>
                                        <hr>
                                    <p><strong>School Name</strong> :  {{$student->school}}</p>
                                        <hr>
                                    <p><strong>School Address</strong> :  {{$student->school_address}}</p>
                                        <hr>
                                    <p><strong>School Phone</strong> :  {{$student->school_phone}}</p>
                                        <hr>    
                                </div>
                            </div>
                
                            <div class="card col-lg-6" style="padding-top:29px;">
                                <div class="card-header">Guardian Information</div>
                                <div class="card-body">
                                    <p><strong>Last Name</strong> : {{$student->guardian->name}}</p>
                                        <hr>
                                    <p><strong>Last Name</strong> : {{$student->guardian->lastname}}</p>
                                        <hr>
                                    <p><strong>ID Number </strong>: {{$student->guardian->idnumber}}</p>
                                        <hr>
                                    <p><strong>Physical Address </strong>: {{$student->guardian->address}}</p>
                                        <hr>
                                    <p><strong>Email </strong>: {{$student->guardian->email}}</p>
                                        <hr>
                                    <p><strong>Phone </strong>: {{$student->guardian->phone}}</p>
                                        <hr>
                                    <p><strong>Relation </strong>: {{$student->guardian->relation}}</p>
                                        <hr>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-between ml-2 mr-2">
                            <div class="card col-lg-6">
                                <div class="card-header">2nd Guardian Information</div>
                                <div class="card-body">
                                    <p><strong>Types of Services Requested </strong>: </p>
                                        <hr>
                                    <p><strong>Has Quote Been Signed</strong>: </p>
                                        <hr>
                                    <p><strong>Name of Signer</strong> :</p>
                                        <hr>
                                    <p><strong>Authorized Signer</strong> : </p>
                                        <hr>
                                    <p><strong>Custom Order Form</strong> : </p>
                                     <hr>
                                </div>
                            </div>
                
                            <div class="card col-lg-6">
                                <div class="card-header">Medical Information</div>
                                <div class="card-body">
                                    <p><strong>MRC </strong>: </p>
                                        <hr>
                                    <p><strong>Proposed Credit Limit </strong>: </p>
                                        <hr>
                                </div>
                            </div>
                        </div>
                        <!--New Clients--->
                        <div class="row d-flex justify-content-between ml-2 mr-2">
                            <div class="card col-lg-6">
                                <div class="card-header">Next of Kin</div>
                                <div class="card-body">
                                    <p><strong>Types of Services Requested </strong>: </p>
                                        <hr>
                                    <p><strong>Has Quote Been Signed</strong>: </p>
                                        <hr>
                                    <p><strong>Name of Signer</strong> :</p>
                                        <hr>
                                    <p><strong>Authorized Signer</strong> : </p>
                                        <hr>
                                    <p><strong>Custom Order Form</strong> : </p>
                                     <hr>
                                </div>
                            </div>
                
                            <div class="card col-lg-6">
                                <div class="card-header">Banking Details</div>
                                <div class="card-body">
                                    <p><strong>MRC </strong>: </p>
                                        <hr>
                                    <p><strong>Proposed Credit Limit </strong>: </p>
                                        <hr>
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
