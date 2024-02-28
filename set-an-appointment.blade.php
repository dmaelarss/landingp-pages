@extends('layouts.master')

@section('title', 'Tupad')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Tupad</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Tupad</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')
<div class="container mt-5">
  <div class="form-group col-12 p-0">
  <div>
    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
  </div>

<form action="{{route('store')}}" method="POST">
  @csrf
  
  <div class="card">
    <div class="card-header">
        <h5>Patient Appointment Request Form</h5><span>Now you can get an online appointment, We will get back to you and fix a meeting with doctors.</span>
    </div>
    <div class="card-body">
        <form>
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label" for="validationDefault01">Patient First Name:</label>
                    <input class="form-control" id="validationDefault01 firstname" type="text" placeholder="First name" required="" name="firstname">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="validationDefault02">Last Name:</label>
                    <input class="form-control" id="validationDefault02 lastname" type="text" placeholder="Last name" required="" name="lastname">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="validationDefault04">Birthdate:</label>
                    <input class="form-control" id="validationDefault03 address" type="date" required="" name="appointmentdate">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-8">
                    <label class="col-form-label">Patient Email:</label>
                    <input class="form-control" type="email" placeholder="Enter email" name="email" id="email">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="validationDefaultContact">Patient Phone Number:</label>
                    <input class="form-control" id="validationDefaultContact" type="number" placeholder="Enter contact number" required="" name="contact">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="validationDefault03">Address:</label>
                    <input class="form-control" id="validationDefault03 address" type="text" placeholder="City" required="" name="address">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label" for="validationDefault04">Time:</label>
                    <select class="form-select" id="validationDefault04" required="">
                        <option selected="" disabled="" value="">Choose...</option>
                        <option>08:00 AM</option>
                        <option>09:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>01:00 PM</option>
                        <option>02:00 PM</option>
                        <option>03:00 PM</option>
                        <option>04:00 PM</option>
                        <option>05:00 PM</option>
                    </select>
                </div>
            </div>
            <div class="row">
                    <label class="col-form-label col-sm-3 pt-0">Patient Gender:</label>
                    <div class="form-check radio radio-primary">
                        <input class="form-check-input" id="radio11" type="radio" name="interest" value="Clean-Up Volunteer">
                        <label class="form-check-label" for="radio11">M</label>
                    </div>
                    <div class="form-check radio radio-primary">
                        <input class="form-check-input" id="radio22" type="radio" name="interest" value="Healthcare Volunteer">
                        <label class="form-check-label" for="radio22">F</label>
                    </div>
                </div>
            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit form</button>
        </form>
        </div>
    </div>
  </div>
</form>
  </div>
</div>

<script type="text/javascript">
  var session_layout = '{{ session()->get('layout') }}';
</script>
@endsection

@section('script')
@endsection