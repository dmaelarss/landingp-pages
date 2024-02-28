@extends('layouts.master')

@section('title', 'Community Programs')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Community Programs</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Community Programs</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-40 col-xl-30">
            <div class="ribbon-vertical-left-wrapper card">
                <div class="card-body">
                    <a href="{{route('communityprograms/job-fair')}}">
                        <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-primary"><i class="icofont icofont-love"></i></div>
                        <div>
                        <img src="https://laravel.pixelstrap.com/cuba/assets/images/banner/2.jpg" alt="" width="920" height="95" class="rounded">
                        <p class="text-center">Job Fair</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-40 col-xl-30">
            <div class="ribbon-vertical-left-wrapper card">
                <div class="card-body">
                    <a href="{{route('communityprograms/cash-aid-assistance')}}">
                        <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-success"><i class="icon-signal"></i></div>
                        <div>
                            <img src="https://laravel.pixelstrap.com/cuba/assets/images/banner/2.jpg" alt="" width="920" height="95" class="rounded">
                            <p class="text-center">Cash Aid Assistance</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-40 col-xl-30">
                <div class="ribbon-vertical-right-wrapper card">
                    <div class="card-body">
                        <a href="{{route('communityprograms/tupad')}}">
                            <div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-primary"><i class="icofont icofont-love"></i></div>
                            <div>
                                <img src="https://laravel.pixelstrap.com/cuba/assets/images/banner/2.jpg" alt="" width="920" height="95" class="rounded">
                                <p class="text-center">Tupad</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div  class="col-sm-40 col-xl-30">
                <div class="ribbon-vertical-right-wrapper card">
                    <div class="card-body">
                        <a href="{{route('communityprograms/feeding-program')}}">
                            <div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-success"><i class="icon-signal"></i></div>
                            <div>
                                <img src="https://laravel.pixelstrap.com/cuba/assets/images/banner/2.jpg" alt="" width="920" height="95" class="rounded">
                                <p class="text-center">Feeding Program</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var session_layout = '{{ session()->get('layout') }}';
</script>
@endsection

@section('script')
@endsection