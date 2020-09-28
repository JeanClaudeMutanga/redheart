@extends('layouts.app')

@section('content')
@include('layouts.confirmnav')
<div class="jumbotron">
<h5 class="text-center">To confirm your invitation create an account</h5>
<hr>
<h4 class="text-center">Red Heart Employee Account Registration</h4>
</div>

<!---Begin Original Reg--->
@if($invite->status=="Pending")
<div class="row justify-content-center">
        <div class="col-md-8 pb-4">
            <div class="card">
                <div class="card-header">Create Account</div>

                <div class="card-body">
                    <form method="POST" action="/employee/{{$invite->id}}">
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
    @elseif($invite->status=="Confirmed")
    <p class="text-center"><a href="" class="btn btn-danger btn-lg">The Invitation Has already been confirmed</a></p>
    @endif
    <hr>
    <!---End Original Reg--->
<!---Begin Individual Reg--->
<div class="row justify-content-center collapse" id="test">
        <div class="col-md-7 pb-4">
            <div class="card">
                <div class="card-header">Apply</div>

                <div class="card-body">


                <!----New Employee Confirmation---->
                
                <!----End New Employee Confirmation---->
                
                    <form method="POST" action="">
                        @csrf
                        <h5 class="text-center">General Details</h5>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Full Name</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                @error('name')
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
                            <label for="password" class="col-md-4 col-form-label text-md-right">Choose Password</label>

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
@endsection