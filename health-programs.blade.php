@extends('layouts.master')

@section('title', 'Health Programs')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Health Programs</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Health Programs</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-xl-6">
			<div class="card">
				<div class="card-header b-l-primary border-3">
					<h5>Annual Medical Mission</h5>
				</div>
				<div class="card-body">
                    <img src="https://laravel.pixelstrap.com/cuba/assets/images/banner/2.jpg" alt="" width="443" height="200" class="rounded">
				</div>
                <div class="card-footer">
					<p>
						An annual medical mission is an event where medical professionals and volunteers provide 
            			free medical services, such as consultations, screening, and treatment, to underserved communities 
            			or areas with limited access to healthcare.
					</p>
						<a href="{{route('healthprograms/annual-medical-mission')}}" class="btn btn-primary stretched-link">Read More</a>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="card">
				<div class="card-header b-l-primary border-3">
					<h5>Dental Mission</h5>
				</div>
				<div class="card-body">
                    <img src="https://laravel.pixelstrap.com/cuba/assets/images/banner/2.jpg" alt="" width="443" height="200" class="rounded">
				</div>
                <div class="card-footer">
					<p>
						A dental mission is a special activity or event where trained dental professionals, such as dentists, dental hygienists, 
						and dental assistants, volunteer their time and expertise to provide dental care and treatment to people in need.
					</p>
						<a href="{{route('healthprograms/dental-mission')}}" class="btn btn-primary stretched-link">Read More</a>
				</div>
			</div>
		</div>
        <div class="col-sm-12 col-xl-6">
			<div class="card">
				<div class="card-header b-l-primary border-3">
					<h5>Vaccination and Immunization</h5>
				</div>
				<div class="card-body">
                    <img src="https://laravel.pixelstrap.com/cuba/assets/images/banner/2.jpg" alt="" width="443" height="200" class="rounded">
				</div>
                <div class="card-footer">
					<p>
						Vaccination is the process of administering a vaccine to provide immunity against a specific disease. Immunization, on the other 
						hand, is the process of becoming immune to a disease through vaccination. <br>
						Vaccination and immunization are essential for preventing the spread of many infectious diseases, such as measles, polio, and influenza.
					</p>
						<a href="{{route('healthprograms/vaccination-and-immunization')}}" class="btn btn-primary stretched-link">Read More</a>
				</div>
			</div>
		</div>
        <div class="col-sm-12 col-xl-6">
			<div class="card">
				<div class="card-header b-l-primary border-3">
					<h5>Free Checkup</h5>
				</div>
				<div class="card-body">
                    <img src="https://laravel.pixelstrap.com/cuba/assets/images/banner/2.jpg" alt="" width="443" height="200" class="rounded">
				</div>
                <div class="card-footer">
					<p>
						In a free medical check-up in the community, medical practitioners usually provide basic health screenings and consultations to community members at no cost. 
                        These check-ups frequently involve basic examinations, consultations with doctors or nurses, and measurements such as blood pressure, blood sugar, cholesterol 
                        levels, and BMI. Their goal is to encourage early detection of health issues in the community and preventive healthcare.
					</p>
						<a href="{{route('healthprograms/free-check-up')}}" class="btn btn-primary stretched-link">Read More</a>
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