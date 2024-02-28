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
<div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5>Volunteer Registration form</h5>
      </div>
      <div class="card-body">
        <form class="theme-form mega-form">
          <h6>Personal Information</h6>
          <div class="mb-3">
            <label class="col-form-label">Full Name:</label>
            <input class="form-control" type="text" placeholder="Enter your Full Name" name="name" id="name">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Email Address:</label>
            <input class="form-control" type="email" placeholder="Enter email" name="email" id="email">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Contact Number:</label>
            <input class="form-control" type="number" placeholder="Enter contact number" name="contact" id="contact">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Address:</label>
            <input class="form-control" type="text" placeholder="Address" name="address" id="address">
          </div>
          <fieldset class="mb-3">
            <div class="row">
              <label class="col-form-label col-sm-3 pt-0">Interested in:</label>
              <div class="col-sm-9">
                <div class="form-check radio radio-primary">
                  <input class="form-check-input" id="radio11" type="radio" name="interest" value="Clean-Up Volunteer">
                  <label class="form-check-label" for="radio11">Clean-Up Volunteer</label>
                </div>
                <div class="form-check radio radio-primary">
                  <input class="form-check-input" id="radio22" type="radio" name="interest" value="Healthcare Volunteer">
                  <label class="form-check-label" for="radio22">Healthcare Volunteer</label>
                </div>
                <div class="form-check radio radio-primary">
                  <input class="form-check-input" id="radio33" type="radio" name="interest" value="Coodinator">
                  <label class="form-check-label" for="radio33">Coodinator</label>
                </div>
                <div class="form-check radio radio-primary">
                  <input class="form-check-input" id="radio44" type="radio" name="interest" value="Other">
                  <label class="form-check-label" for="radio44">Other</label>
                </div>
              </div>
            </div>
          </fieldset>
          <div class="row mb-0">
            <label class="col-sm-3 col-form-label pb-0">Preferences in Shifts:</label>
            <div class="col-sm-9">
              <div class="mb-0">
                <div class="form-check form-check-inline checkbox checkbox-primary">
                  <input class="form-check-input" id="inline-form-1" type="checkbox" name="shifts" value="8AM - 1PM">
                  <label class="form-check-label" for="inline-form-1">8AM - 1PM</label>
                </div>
                <div class="form-check form-check-inline checkbox checkbox-primary">
                  <input class="form-check-input" id="inline-form-2" type="checkbox" name="shifts" value="1PM - 6PM">
                  <label class="form-check-label" for="inline-form-2">1PM - 6PM</label>
                </div>
                <div class="form-check form-check-inline checkbox checkbox-primary">
                    <input class="form-check-input" id="inline-form-3" type="checkbox" name="shifts" value="6PM - 11PM">
                    <label class="form-check-label" for="inline-form-3">6PM - 11PM</label>
                  </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{route('communityprograms/tupad')}}" class="btn btn-secondary" >Cancel</a>
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