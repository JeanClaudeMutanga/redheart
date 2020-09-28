@extends('layouts.app')

@section('content')
@include('layouts.welcomenav')
<div class="jumbotron">
  <h1 class="display-4 d-flex justify-content-center" >Apply For A Red Heart Card </h1>
  <hr class="my-4">
  <p class="text-center">Apply for a card that fits perfectly to your situation and needs.</p>
</div>
<div class="container">

 <!---Start Test Reg--->
     <div class="row justify-content-center">
        <div class="col-md-10 pb-4">
            <div class="card">
                <div class="card-header">Details</div>
                <div class="card-body">
                    <div class="text-center">
                        <ul>
                            
                            <h4>Student/Guardian Account</h4>
                            <p>Register an account as a student or as a guardian. Most suitable for students</p>
                        
                        
                            <h4>Cooperate Account</h4>
                            <p>Account will allow businesses to create & manage accounts for thier employees</p>
                        
                        
                            <h4>Individual Account</h4>
                            <p>This is a personal account you can create for yourself</p>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!---End Test Reg--->

    <!---Start Test Reg--->
    <div class="row justify-content-center">
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
    <div class="row justify-content-center collapse" id="student">
        <div class="col-md-10 pb-4">
            <div class="card">
                <div class="card-header">Apply</div>
                
                <div class="card-body">
                    <form method="POST" action="/test">
                        @csrf
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name2" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname2" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

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
                                <input id="idnumber" type="text" class="form-control @error('idnumber') is-invalid @enderror" name="idnumber2" value="{{ old('idnumber') }}" required autocomplete="idnumber" autofocus>

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
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone2" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email2" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address2" value="{{ old('address') }}" required autocomplete="address">

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
                                <input id="Relationship" type="text" class="form-control @error('Relationship') is-invalid @enderror" name="relationship2" required autocomplete="Relationship">

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
                            <label for="school_phone" class="col-md-4 col-form-label text-md-right">Telephone Number</label>

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
                            <label for="Fax" class="col-md-4 col-form-label text-md-right">Fax</label>

                            <div class="col-md-6">
                                <input id="Fax" type="text" class="form-control @error('Fax') is-invalid @enderror" name="Fax" value="{{ old('Fax') }}" required autocomplete="Fax">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school_address" class="col-md-4 col-form-label text-md-right">Address</label>

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
                        <h5 class="text-center">Medical Details</h5>
                        <div class="form-group row">
                            <label for="medicalaid" class="col-md-4 col-form-label text-md-right">Medical Aid Service Provider</label>

                            <div class="col-md-6">
                                <input id="medicalaid" type="text" class="form-control @error('medicalaid') is-invalid @enderror" name="medicalaid" value="{{ old('medicalaid') }}" required autocomplete="medicalaid" autofocus>

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
                                <input id="dob" type="text" class="form-control @error('lname') is-invalid @enderror" name="number" value="{{ old('dob') }}" required autocomplete="dob" autofocus>

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
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>

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
                                <input id="contact_number" type="phone" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" required autocomplete="contact_number" autofocus>

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
                                <input id="contact2" type="text" class="form-control @error('contact2') is-invalid @enderror" name="contact2" value="{{ old('contact2') }}" required autocomplete="contact2">

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
                                <input id="contact_number2" type="phone" class="form-control @error('contact_number2') is-invalid @enderror" name="contact_number2" value="{{ old('Fax') }}" required autocomplete="contact_number2">

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
                                <input id="existing" type="text" class="form-control @error('existing') is-invalid @enderror" name="existing" required autocomplete="existing">

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
                                <input id="chronic" type="text" class="form-control @error('chronic') is-invalid @enderror" name="chronic" required autocomplete="chronic">

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
                                <input id="Allergies" type="text" class="form-control @error('Allergies') is-invalid @enderror" name="Allergies" required autocomplete="Allergies">

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
                        <h5 class="text-center">Delivery Details</h5>

                        <div class="form-group row">
                            <label for="reciever" class="col-md-4 col-form-label text-md-right">Recipient Full Names</label>

                            <div class="col-md-6">
                                <input id="reciever" type="text" class="form-control @error('reciever') is-invalid @enderror" name="reciever" value="{{ old('reciever') }}" required autocomplete="reciever" autofocus>

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
                                <input id="reciever_phone" type="phone" class="form-control @error('reciever_phone') is-invalid @enderror" name="reciever_phone" value="{{ old('reciever_phone') }}" required autocomplete="reciever_phone" autofocus>

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
                                <input id="reciever_email" type="email" class="form-control @error('reciever_email') is-invalid @enderror" name="reciever_email" value="{{ old('reciever_email') }}" required autocomplete="reciever_email" autofocus>

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
                                <input id="reciever_address" type="text" class="form-control @error('reciever_address') is-invalid @enderror" name="reciever_address" value="{{ old('reciever_address') }}" required autocomplete="reciever_address" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!---Card Type Details--->
                        <hr>
                        <h5 class="text-center">Choose Card Type</h5>
                        <!---End Card Type Details--->
                        <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1st Generation">
                                <label class="form-check-label" for="inlineRadio1">Red Heart Without Benefits</label>
                                 <br>
                                <div class="jumbotron pt-2">
                                    <br>
                                    <br>
                                    <h5 class="text-center">Card Provides details of user in case of Emergency by scanning the QR Code</h5>
                                    <ul class="">
                                    </ul>
                                    <h5 class="text-center">Price: R55</h5>
                                </div>
                        </div>

                        <hr>
                        <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2nd Generation">
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
                                        <h5 class="text-center">Price: R80</h5>
                                        <h5 class="text-center">R30 Once Off Administration Fee</h5>
                                    </div>
                            </div>

                                <hr>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Digital" >
                                    <label class="form-check-label" for="inlineRadio3">Digital Red Heart Card </label>
                                    <br>
                                    <div class="jumbotron pt-2">
                                        <br>
                                        <br>
                                            <h5 class="text-center">Card includes above benefits and the following  features</h5>
                                                <ul class="">
                                                
                                                <li><h5 class="">Track and Tracing children during School hours.</h5></li>
                                                <li><h5 class="">Daily notifications when the child enters and leaves the School premises and notifies when they arrive at home.</h5></li>
                                                <li><h5 class="">Auto notifications as per set location by an emergency contact person.</h5></li>
                                                <li><h5 class="">Information can be easily updated only by the User.</h5></li>
                                                
                                            </ul>
                                            <h5 class="text-center">Price: R180/Month</h5>
                                            <h5 class="text-center">NB: Pre Orders Now Accepted</h5>
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
    
    <!---End Student Reg--->

    <!---Begin Individual Reg-->
    <div class="row justify-content-center collapse" id="test">
        <div class="col-md-10 pb-4">
            <div class="card">
                <div class="card-header">Apply</div>

                <div class="card-body">
                    <form method="POST" action="/individual">
                        @csrf
                        <h5 class="text-center">General Details</h5>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Occupation</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control @error('Occupation') is-invalid @enderror" name="Occupation" required autocomplete="Occupation">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nok" class="col-md-4 col-form-label text-md-right">Next Of Kin</label>

                            <div class="col-md-6">
                                <input id="nok" type="text" class="form-control @error('nok') is-invalid @enderror" name="nok" required autocomplete="nok">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nokphone" class="col-md-4 col-form-label text-md-right">N.O.K Phone Number</label>

                            <div class="col-md-6">
                                <input id="nokphone" type="text" class="form-control @error('nokphone') is-invalid @enderror" name="nokphone" required autocomplete="nokphone">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nok2" class="col-md-4 col-form-label text-md-right">2nd Next Of Kin</label>

                            <div class="col-md-6">
                                <input id="nok2" type="text" class="form-control @error('nok2') is-invalid @enderror" name="nok2" required autocomplete="nok2">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">2nd N.O.K Phone Number</label>

                            <div class="col-md-6">
                                <input id="nokphone2" type="text" class="form-control @error('password') is-invalid @enderror" name="nokphone2" required autocomplete="nokphone2">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        
                        <!---Medical Information--->
                        <h5 class="text-center">Medical Details</h5>
                        <div class="form-group row">
                            <label for="medicalaid" class="col-md-4 col-form-label text-md-right">Medical Aid Service Provider</label>

                            <div class="col-md-6">
                                <input id="medicalaid" type="text" class="form-control @error('medicalaid') is-invalid @enderror" name="medicalaid" value="{{ old('medicalaid') }}" required autocomplete="medicalaid" autofocus>

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
                                <input id="dob" type="text" class="form-control @error('lname') is-invalid @enderror" name="number" value="{{ old('dob') }}" required autocomplete="dob" autofocus>

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
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>

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
                                <input id="contact_number" type="phone" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" required autocomplete="contact_number" autofocus>

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
                                <input id="contact2" type="text" class="form-control @error('contact2') is-invalid @enderror" name="contact2" value="{{ old('contact2') }}" required autocomplete="contact2">

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
                                <input id="contact_number2" type="phone" class="form-control @error('contact_number2') is-invalid @enderror" name="contact_number2" value="{{ old('Fax') }}" required autocomplete="contact_number2">

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
                                <input id="existing" type="text" class="form-control @error('existing') is-invalid @enderror" name="existing" required autocomplete="existing">

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
                                <input id="chronic" type="text" class="form-control @error('chronic') is-invalid @enderror" name="chronic" required autocomplete="chronic">

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
                                <input id="Allergies" type="text" class="form-control @error('Allergies') is-invalid @enderror" name="Allergies" required autocomplete="Allergies">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!---End Medical Information--->
                        <hr>
                        <h5 class="text-center">Choose Card Type</h5>
                        <!---Card Types--->
                        <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1st Generation">
                                <label class="form-check-label" for="inlineRadio1">Red Heart Without Benefits</label>
                                 <br>
                                <div class="jumbotron pt-2">
                                    <br>
                                    <br>
                                    <h5 class="text-center">Card Provides details of user in case of Emergency by scanning the QR Code</h5>
                                    <ul class="">
                                    </ul>
                                    <h5 class="text-center">Price: R55</h5>
                                </div>
                        </div>

                        <hr>
                        <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2nd Generation">
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
                                        <h5 class="text-center">Price: R80</h5>
                                        <h5 class="text-center">R30 Once Off Administration Fee</h5>
                                    </div>
                            </div>

                                <hr>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Digital" >
                                    <label class="form-check-label" for="inlineRadio3">Digital Red Heart Card </label>
                                    <br>
                                    <div class="jumbotron pt-2">
                                        <br>
                                        <br>
                                            <h5 class="text-center">Card includes above benefits and the following  features</h5>
                                                <ul class="">
                                                
                                                <li><h5 class="">Track and Tracing children during School hours.</h5></li>
                                                <li><h5 class="">Daily notifications when the child enters and leaves the School premises and notifies when they arrive at home.</h5></li>
                                                <li><h5 class="">Auto notifications as per set location by an emergency contact person.</h5></li>
                                                <li><h5 class="">Information can be easily updated only by the User.</h5></li>
                                                
                                            </ul>
                                            <h5 class="text-center">Price: R180/Month</h5>
                                            <h5 class="text-center">NB: Pre Orders Now Accepted</h5>
                                        </div>
                                </div>
                        <!---End Card Type--->
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
    
    <!---End Individual Reg--->

    <!---Begin Original Reg--->
    <div class="row justify-content-center">
        <div class="col-md-10 pb-4">
            <div class="card">
                <div class="card-header">Create Account</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Account Type</label>

                            <div class="col-md-6">
                                <select class="custom-select" id="inputGroupSelect02" name="type" required>
                                    <option value="">Choose...</option>
                                    <option value="Cooperate">Cooperate Acc</option>
                                    <option value="Individual">Individual Acc</option>
                                    <option value="Student">Student/Guardian</option>
                                </select>
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!---End Original Reg--->
    
</div>
@endsection
