@extends('layouts.app')

<style>
.jumbotron{
    background-color: #3490dc;  
}
</style>

@section('content')
@include('layouts.welcomenav')
<div class="jumbotron">
  <h1 class="display-4 d-flex justify-content-center" >Welcome to Red Heart Emergency Card</h1>
  <hr class="my-4">
  <p class="text-center">The red heart emergency card will speak for you when you cannot speak for yourself during an emergency.</p>

  
  <p class="text-center"><a class="btn btn-primary btn-lg " href="#types" role="button">Learn more</a></p>

</div>
<h3 class="text-center text-muted">Red Heart Types</h3>
<div class="container marketing pt-4 ">


  <hr class="featurette-divider"  id="types">

  <div class="row featurette">
    <div class="col-md-7">
    <h2 class="featurette-heading">1st Generation <span class="text-muted">Red Heart E-Card <strong>@ R55</strong> Once Off.</span></h2>
      <p class="lead">The card contains all your medical and emergency contact information of you next of kin on a QR Code.</p>
        <ul>
        
        <li>In case of an emergency, all one has to do is scan the QR Code using a smart phone and all your details will be displayed immediately.</li>
        <li>Emergency contact person.</li>
        <li>Emergency contact numbers.</li>
        <li>Existing medical condition.</li>
        <li>Chronic Medication.</li>
        <li>Allergies.</li>
        
        </ul>
    </div>
    <div class="col-md-5">
    <img src="svg/digi.jpg" alt="Red Heart Card" style="width:100%;">
     </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading offset-4">2nd Generation <span class="text-muted">Red Heart E-Card <strong>@ R80</strong>.</span></h2>
      <p class="lead offset-4">The 2nd Red Heart E-Card works likes the 1st Generation card, however it has added emergency benefits which will be allocated upon registration.</p>
      <ul class="offset-4">
      
      </li>
      <li>Accident and Emergency cover up to R100 000.00.</li>
      <li>24/7 Emergency medical service.</li>
    
      </ul>
    </div>
    <div class="col-md-5 order-md-1">
    <img src="svg/digi2.jpg" alt="Red Hear Card" style="width:100%;">
     </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">The Digital <span class="text-muted">Red Heart E-Card @ <strong>R180/Month</strong>.</span></h2>
      <p class="lead">The digital red heart e-card is paired with an APP, once the card is scanned it triggers a panic alert which will send a notification to the emergency contact person and our emergency contact center which will enforce the app to track and trace the person in real time and Information can be easily updated only by the user. </p>
        <ol>
            <li>Added features
            
            <ul>
                <li>Track and Tracing children during School hours.</li>
                <li>Daily notifications when the child enters and leaves the School premises and notifies when they arrive at home. </li>
                <li>Auto notifications as per set location by an emergency contact person. </li>
            </ul>
            
            </li>
            <li>Added benefits:
            <ul>
        <li>Accident and Emergency cover up to R100 000.00.</li>
        <li>24/7 Emergency medical service</li>
        </ul>
            </li>
            </ol>
    </div>
    <div class="col-md-5 ">
    <img src="svg/digi.jpg" alt="Red Heart" style="width:100%;">
      </div>
  </div>
  

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->

@endsection