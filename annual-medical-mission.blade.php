@extends('layouts.master')

@section('title', 'Annual Medical Mission')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Annual Medical Mission</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Annual Medical Mission</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="blog-single">
				<div class="blog-box blog-details">
					<img class="img-fluid w-100" src="https://laravel.pixelstrap.com/cuba/assets/images/blog/blog-single.jpg" alt="blog-main">
					<section class="comment-box">
					<h4>What is Annual Medical Mission: What you need to know</h4>
					<hr>
					<ul>
						<li>
							<div class="media align-self-center">
								<div class="media-body">
									<p>
                                        An annual medical mission is an event where medical professionals and volunteers provide 
                                        free medical services, such as consultations, screening, and treatment, to underserved communities 
                                        or areas with limited access to healthcare.
                                    </p>
                                    <a href="/" class="pull-right btn btn-primary stretched-link">Set an Appointment</a>
								</div>
							</div>
						</li>
					</ul>
					<h5><br>Who can contribute in this program</h5>
					<hr>
					<p>There are several ways you can contribute to an annual medical mission:<br></p><br>
                    <p>
                        1. Medical Professionals: Provide medical care, consultations, and treatment for patients. 
                            This includes doctors, nurses, pharmacists, and other healthcare professionals.<br>
                        2. Non-Medical Volunteers: Help with administrative tasks, patient registration, organizing 
                            supplies, and providing general assistance to the medical team.
                    </p>

                    <h5><br>Benefits of Annual Medical Mission</h5>
					<hr>
					<p>
                        Patients attending an annual medical mission can benefit from various 
                        services and take several actions to make the most of the event:
                        <br></p><br>
                    <p>
                        1. Attendees can take advantage of the free 
                            medical consultations, screenings, and treatments provided by the volunteer medical team.
                        <br>
                        2. Patients can discuss any health concerns 
                            or questions with the healthcare professionals at the event.
                        <br>
                        3. Take part in health screenings, 
                            such as blood pressure checks, blood sugar tests, vision screenings, 
                            and more, to assess their health status.
                        <br>
                        4. Patients can follow the advice
                            and treatment plans prescribed by the medical professionals on-site, 
                            and take any prescribed medications as directed.
                    </p>
                    <h5><br>Mission</h5>
					<hr>
					<p>
                        Our mission is to have a long-term effect by promoting health and wellbeing, avoiding illnesses, and increasing access 
                        to healthcare for those in need.
                    </p>

                    <h5><br>Vision</h5>
					<hr>
					<p>
                        The vision of an annual medical mission is to create a future where quality healthcare is accessible to all, where communities are 
                        empowered to take control of their health, and where sustainable efforts lead to lasting improvements in health and wellness for 
                        underserved populations.
                    </p>
				</section>
				</div>
			</div>
		</div>
	</div>
</div>
<div>
    <a href="{{route('health-programs')}}" class="btn btn-outline-primary-2x">Back</a>
</div>


<script type="text/javascript">
    var session_layout = '{{ session()->get('layout') }}';
</script>
@endsection

@section('script')
@endsection