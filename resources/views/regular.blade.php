@extends('layouts.app')

@section('content')
@include('layouts.individualnav')
<div class="jumbotron">
  <h4 class="text-center">Red Heart Manual Registration Form </h4>
  <hr class="my-4">

</div>
<div class="container">

    <!---Start Test Reg--->
    <div class="row justify-content-center collapse">
        <div class="col-md-10 pb-4">
            <div class="card">
                <div class="card-header">Get ready to apply for red heart card</div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <p>Create an account first to apply for a red heart card</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!---End Test Reg--->



    <!---Begin Student Reg--->
    <div class="row justify-content-center" id="student">
        <div class="col-md-10 pb-4">
            <div class="card">
                <div class="card-header">Apply</div>
                
                <div class="card-body">
                    <form method="POST" action="/regular/create">
                        @csrf
                        <h5 class="text-center"> Sales Details</h5>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Sales Agent</label>

                            <div class="col-md-6">
                                <input id="owner" type="text" class="form-control @error('owner') is-invalid @enderror" name="owner" value="{{ old('owner') }}" required autocomplete="owner" autofocus>

                                @error('owner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="sub" class="col-md-4 col-form-label text-md-right">Sub Agent</label>

                            <div class="col-md-6">
                                <input id="sub" type="text" class="form-control @error('sub') is-invalid @enderror" name="sub" value="{{ old('sub') }}" autocomplete="sub" autofocus>

                                @error('sub')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="sub2" class="col-md-4 col-form-label text-md-right">2nd Sub Agent</label>

                            <div class="col-md-6">
                                <input id="sub2" type="text" class="form-control @error('sub2') is-invalid @enderror" name="sub2" value="{{ old('sub2') }}" autocomplete="sub2" autofocus>

                                @error('sub2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <h5 class="text-center"> Guardian Details</h5>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Guardian Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Guardian Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idnumber" class="col-md-4 col-form-label text-md-right">Guardian ID Number</label>

                            <div class="col-md-6">
                                <input id="idnumber" type="text" class="form-control @error('idnumber') is-invalid @enderror" name="idnumber" value="{{ old('idnumber') }}" required autocomplete="idnumber" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Guardian Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Guardian Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Physical Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Relationship" class="col-md-4 col-form-label text-md-right">Relationship</label>

                            <div class="col-md-6">
                                <input id="Relationship" type="text" class="form-control @error('Relationship') is-invalid @enderror" name="relationship" required autocomplete="Relationship">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr class="">
                        <h5 class="text-center">Second Guardian(Optional)</h5>

                        <!---Second Guardian--->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Guardian Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name2" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Guardian Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname2" value="{{ old('lname') }}"  autocomplete="lname" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idnumber" class="col-md-4 col-form-label text-md-right">Guardian ID Number</label>

                            <div class="col-md-6">
                                <input id="idnumber" type="text" class="form-control @error('idnumber') is-invalid @enderror" name="idnumber2" value="{{ old('idnumber') }}"  autocomplete="idnumber" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Guardian Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone2" value="{{ old('phone') }}"  autocomplete="phone" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Guardian Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email2" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Physical Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address2" value="{{ old('address') }}"  autocomplete="address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Relationship" class="col-md-4 col-form-label text-md-right">Relationship</label>

                            <div class="col-md-6">
                                <input id="Relationship" type="text" class="form-control @error('Relationship') is-invalid @enderror" name="relationship2"  autocomplete="Relationship">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!---End Second Guardian--->

                        <!---Child Information--->
                        <h5 class="text-center">Student Details</h5>
                        <div class="form-group row">
                            <label for="fullnames" class="col-md-4 col-form-label text-md-right">Child Full Names</label>

                            <div class="col-md-6">
                                <input id="fullnames" type="text" class="form-control @error('fullnames') is-invalid @enderror" name="fullnames" value="{{ old('fullnames') }}" required autocomplete="fullnames" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">Death Of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control @error('lname') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school" class="col-md-4 col-form-label text-md-right">School Name</label>

                            <div class="col-md-6">
                                <input id="school" type="text" class="form-control @error('school') is-invalid @enderror" name="school" value="{{ old('school') }}" required autocomplete="school" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Grade" class="col-md-4 col-form-label text-md-right">Grade</label>

                            <div class="col-md-6">
                                <input id="Grade" type="text" class="form-control @error('Grade') is-invalid @enderror" name="Grade" value="{{ old('Grade') }}" required autocomplete="Grade" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school_phone" class="col-md-4 col-form-label text-md-right">School Telephone Number</label>

                            <div class="col-md-6">
                                <input id="school_phone" type="phone" class="form-control @error('school_phone') is-invalid @enderror" name="school_phone" value="{{ old('school_phone') }}" required autocomplete="school_phone">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="Fax" class="col-md-4 col-form-label text-md-right">School Fax</label>

                            <div class="col-md-6">
                                <input id="Fax" type="text" class="form-control @error('Fax') is-invalid @enderror" name="Fax" value="{{ old('Fax') }}" placeholder="Optional"  autocomplete="Fax">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school_address" class="col-md-4 col-form-label text-md-right">School Address</label>

                            <div class="col-md-6">
                                <input id="school_address" type="text" class="form-control @error('school_address') is-invalid @enderror" name="school_address" required autocomplete="school_address">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!---End Child Information--->

                        <!---Medicals--->
                        <h5 class="text-center">Medical Details(Optional)</h5>
                        <div class="form-group row">
                            <label for="medicalaid" class="col-md-4 col-form-label text-md-right">Medical Aid Service Provider</label>

                            <div class="col-md-6">
                                <input id="medicalaid" type="text" class="form-control @error('medicalaid') is-invalid @enderror" name="medicalaid" value="{{ old('medicalaid') }}"  autocomplete="medicalaid" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">Membership Number</label>

                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control @error('lname') is-invalid @enderror" name="number" value="{{ old('dob') }}"  autocomplete="dob" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">Emergency Contact Person</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}"  autocomplete="contact" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact_number" class="col-md-4 col-form-label text-md-right">Contact Number</label>

                            <div class="col-md-6">
                                <input id="contact_number" type="phone" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}"  autocomplete="contact_number" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact2" class="col-md-4 col-form-label text-md-right">2nd Emergency Contact Person</label>

                            <div class="col-md-6">
                                <input id="contact2" type="text" class="form-control @error('contact2') is-invalid @enderror" name="contact2" value="{{ old('contact2') }}"  autocomplete="contact2">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="contact_number2" class="col-md-4 col-form-label text-md-right">Contact Number</label>

                            <div class="col-md-6">
                                <input id="contact_number2" type="phone" class="form-control @error('contact_number2') is-invalid @enderror" name="contact_number2" value="{{ old('Fax') }}"  autocomplete="contact_number2">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="existing" class="col-md-4 col-form-label text-md-right">Existing Medical Conditions</label>

                            <div class="col-md-6">
                                <input id="existing" type="text" class="form-control @error('existing') is-invalid @enderror" name="existing"  autocomplete="existing">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school_address" class="col-md-4 col-form-label text-md-right">Chronic Medication</label>

                            <div class="col-md-6">
                                <input id="chronic" type="text" class="form-control @error('chronic') is-invalid @enderror" name="chronic"  autocomplete="chronic">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school_address" class="col-md-4 col-form-label text-md-right">Allergies</label>

                            <div class="col-md-6">
                                <input id="Allergies" type="text" class="form-control @error('Allergies') is-invalid @enderror" name="Allergies"  autocomplete="Allergies">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr>
                        <!---End Medicals--->
                        <!---Delivery Details--->
                        <h5 class="text-center">Delivery Details(Optional)</h5>

                        <div class="form-group row">
                            <label for="reciever" class="col-md-4 col-form-label text-md-right">Recipient Full Names</label>

                            <div class="col-md-6">
                                <input id="reciever" type="text" class="form-control @error('reciever') is-invalid @enderror" name="reciever" value="{{ old('reciever') }}"  autocomplete="reciever" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="reciever_phone" class="col-md-4 col-form-label text-md-right">Recipient Phone Number</label>

                            <div class="col-md-6">
                                <input id="reciever_phone" type="phone" class="form-control @error('reciever_phone') is-invalid @enderror" name="reciever_phone" value="{{ old('reciever_phone') }}"  autocomplete="reciever_phone" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="reciever_email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="reciever_email" type="email" class="form-control @error('reciever_email') is-invalid @enderror" name="reciever_email" value="{{ old('reciever_email') }}"  autocomplete="reciever_email" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="reciever_phone" class="col-md-4 col-form-label text-md-right">Delivery Address</label>

                            <div class="col-md-6">
                                <input id="reciever_address" type="text" class="form-control @error('reciever_address') is-invalid @enderror" name="reciever_address" value="{{ old('reciever_address') }}"  autocomplete="reciever_address" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>

                        <!---Banking Details---->
                        <h5 class="text-center">Banking Details</h5>

                        <div class="form-group row">
                            <label for="reciever" class="col-md-4 col-form-label text-md-right">Bank Name</label>

                            <div class="col-md-6">
                                <input id="bank_name" type="text" class="form-control @error('bank_name') is-invalid @enderror" name="bank_name" value="{{ old('bank_name') }}"  autocomplete="bank_name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="reciever_phone" class="col-md-4 col-form-label text-md-right">Branch Name</label>

                            <div class="col-md-6">
                                <input id="branch" type="text" class="form-control @error('branch') is-invalid @enderror" name="branch" value="{{ old('branch') }}"  autocomplete="branch" autofocus>

                                @error('branch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="reciever_phone" class="col-md-4 col-form-label text-md-right">Branch Code</label>

                            <div class="col-md-6">
                                <input id="branch_code" type="text" class="form-control @error('branch_code') is-invalid @enderror" name="branch_code" value="{{ old('branch_code') }}"  autocomplete="branch_code" autofocus>

                                @error('branch_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account_type" class="col-md-4 col-form-label text-md-right">Account Type</label>

                            <div class="col-md-6">
                                <input id="account_type" type="text" class="form-control @error('account_type') is-invalid @enderror" name="account_type" value="{{ old('account_type') }}"  autocomplete="account_type" autofocus>

                                @error('account_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account" class="col-md-4 col-form-label text-md-right">Account Number</label>

                            <div class="col-md-6">
                                <input id="reciever_phone" type="text" class="form-control @error('account') is-invalid @enderror" name="account" value="{{ old('account') }}"  autocomplete="account" autofocus>

                                @error('account')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="account" class="col-md-4 col-form-label text-md-right">Debit Order Date</label>

                            <div class="col-md-6">
                                <input id="debit_date" type="date" class="form-control @error('debit_date') is-invalid @enderror" name="debit_date" value="{{ old('debit_date') }}"  autocomplete="debit_date" autofocus>

                                @error('debit_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                                <label for="consent" class="col-md-4 col-form-label text-md-right"></label>

                                <div class="col-md-6 col-sm-8">
                                    <input type="checkbox" name="consent" id="" value="Yes" required> I give Afrigotel Tech my consent to make debit orders <a href="/payment/terms" target="_blank">Terms & Conditions</a> of Red Heart.
                                </div>
                          </div>
                        
                        <hr>
                        <!---Banking Details---->

                        <!---Dealer Codes
                        <h5 class="text-center">Dealer Details</h5>
                        <div class="form-group row">
                            <label for="country_name" class="col-md-4 col-form-label text-md-right">Dealer Code</label>

                            <div class="col-md-6">
                                <input type="text" name="country_name" id="country_name" class="form-control @error('country_name') is-invalid @enderror" placeholder="Enter Dealer Code" name="country_name" required/>
                                <div id="countryList">
                                </div>
                            </div>
                            {{ csrf_field() }}
                        </div>
                        <hr>
                        End Dealer Codes--->
                        
                        <!---Card Type Details--->
                        
                        <h5 class="text-center">Choose Card Type</h5>
                        <!---End Card Type Details--->
                        <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1stGeneration">
                                <label class="form-check-label" for="inlineRadio1">Red Heart Without Benefits + Pocket Cash</label>
                                 <br>
                                <div class="jumbotron pt-2">
                                    <br>
                                    <br>
                                    <h5 class="text-center">Card Provides details of user in case of Emergency by scanning the QR Code</h5>
                                    <ul class="">
                                    </ul>
                                    <h5 class="text-center">Price: R70 Once Off</h5>
                                </div>
                        </div>

                        <hr>
                        <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2ndGeneration">
                                <label class="form-check-label" for="inlineRadio2">Red Heart With Added Benefits</label>
                                <br>
                                    <div class="jumbotron pt-2">
                                        <br>
                                        <br>
                                        <h5 class="text-center">Card Includes Added Benefits</h5>
                                            <ul class="">
                                            <li><h5 class="">R100 000.00 Death and Disability cover</h5></li>
                                            <li><h5 class="">R100 000.00 Accident and Emergency cover</h5></li>
                                            <li><h5 class="">R25 000.00 Private Hospital stabilization</h5></li>
                                            <li><h5 class="">R5 000.00 Funeral</h5></li>
                                            <li><h5 class="">24/7 Emergency medical service</h5></li>
                                            <li><h5 class="">R25 000 .00 Private Ambulance Cover</h5></li>
                                        </ul>
                                        <h5 class="text-center">Price: R70</h5>
                                        <h5 class="text-center">R60 Once Off Administration Fee</h5>
                                    </div>
                            </div>
                        <!---End Delivery Details--->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary offset-3">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){

        $('#country_name').keyup(function(){ 
                var query = $(this).val();
                if(query != '')
                {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                url:"{{ route('autocomplete.fetch') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                $('#countryList').fadeIn();  
                            $('#countryList').html(data);
                }
                });
                }
            });

            $(document).on('click', 'li', function(){  
                $('#country_name').val($(this).text());  
                $('#countryList').fadeOut();  
            });  
        });
    </script>
    
    <!---End Student Reg--->

    
    
</div>
@endsection
