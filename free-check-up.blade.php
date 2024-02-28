@extends('layouts.master')

@section('title', 'Free Checkup')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Free Checkup</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Free Checkup</li>
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
					<h4>What is Free Checkup: What you need to know</h4>
					<hr>
					<ul>
						<li>
							<div class="media align-self-center">
								<div class="media-body">
									<p>
                                        In a free medical check-up in the community, medical practitioners usually provide basic health screenings and consultations to community members at no cost. 
                                        These check-ups frequently involve basic examinations, consultations with doctors or nurses, and measurements such as blood pressure, blood sugar, cholesterol 
                                        levels, and BMI. Their goal is to encourage early detection of health issues in the community and preventive healthcare.
                                    </p>
								</div>
							</div>
						</li>
					</ul>
					<h5><br>Who can contribute in this program</h5>
					<hr>
					<p>
                        Many individuals and organizations can contribute to free medical check up program, including:<br><br>
                        
                        <ol>
                            <li>Doctors, nurses, and other medical professionals can volunteer their time and expertise to provide medical examinations, consultations, and screenings.</li>
                            <li>Community members and individuals with an interest in healthcare can volunteer their time to assist with organizing, promoting, and conducting the free medical checkup.</li>
                            <li>Hospitals, clinics, and healthcare facilities can offer their facilities, equipment, and resources to support free medical checkup events.</li>
                        
                        </ol>
                    </p>

                    <h5><br>Benefits of Vaccination and Immunization</h5>
					<hr>
					<p>
                        Participating in free medical checkup program offers several benefits:<br><br>
                        
                        <ol>
                            <li>Free checkups often include preventive screenings and vaccinations, which can help maintain overall health and prevent future illness.</li>
                            <li>Free medical checkups reduce the financial burden on patients, allowing them to prioritize their health without worrying about the associated costs.</li>
                            <li>Checkups provide an opportunity for patients to learn about their health status, receive health-related education, and gain a better understanding of their own health. 
                                This can empower patients to take an active role in their healthcare decisions and self-care practices.</li>
                            <li>Regular checkups can detect health problems early, allowing for prompt treatment and potentially preventing serious complications.</li>
                        </ol>
                
                    <h5><br>Mission</h5>
					<hr>
					<p>
                        The mission of providing free medical checkups aims to promote disease prevention, early detection, and community wellness, reduce healthcare disparities, and enhance overall health and quality of life.
                    </p>

                    <h5><br>Vision</h5>
					<hr>
					<p>
                        The vision of free medical checkups is to provide essential healthcare services to all, regardless of financial status, promoting early detection, disease prevention, and health education.
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