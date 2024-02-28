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
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="blog-single">
				<div class="blog-box blog-details">
					<img class="img-fluid w-100" src="https://laravel.pixelstrap.com/cuba/assets/images/blog/blog-single.jpg" alt="blog-main">
					<section class="comment-box">
					<h4>What is a Tupad: What you need to know</h4>
					<hr>
					<ul>
						<li>
							<div class="media align-self-center">
								<div class="media-body">
									<p>
										Tupad refers to a set of procedures and methods designed to keep the environment clean and healthy. 
										With the help of volunteer street cleaners, general cleanliness is an activity that improves public health 
										and creates a better, cleaner, environmentally friendly, litter-free place. The Tupad program offers volunteer 
										street cleaners to receive PhP 150 for a four-hour service each day. After working eight hours a day, they will 
										be eligible for the minimum wage.
										</p>
										<a href="{{ route('volunteerform')}}" class="pull-right btn btn-primary stretched-link">Click here to Register</a>
								</div>
							</div>
						</li>
					</ul>
					<h5><br>Who can contribute in this program</h5>
					<hr>
					<p>Several individuals in a community can help with clean up projects, including:<br></p><br>
					<p>
                        1. Residents: Individuals can promote cleanliness, engage in responsible waste management, and adopt sustainable practices in their daily routines. 
                        This includes proper waste disposal, reducing, reusing, and recycling materials, and conserving water and energy.<br>
                        2. Local community organizations: resident associations, youth clubs, and environmental groups, can conduct awareness campaigns, clean-up 
                        drives, and educational programs to improve the environmental cleanliness of their community.<br>
                        3. Schools and educational institutions: may help students and communities understand the importance of environmental cleanliness and 
                        encourage sustainable practices.<br>
                    </p>

                    <h5><br>Benefits of Tupad Program</h5>
					<hr>
					<p>Engaging in clean up in a community offers several benefits:<br></p><br>
					<p>
                        1. Volunteer street cleaners contribute to the preservation of the environment by reducing litter and debris and helping to maintain the cleanliness of the local environment.						
                        <br>
                        2. Street cleaning can also provide educational opportunities for volunteers to learn about waste management, recycling, and environmental responsibility, promoting a greater understanding of sustainable practices.						
                        <br>
                        3. Participating in street cleaning activities can help build social connections and a sense of camaraderie among community members, leading to stronger bonds and a more cohesive neighborhood.
						<br>
						4. Cleaner streets contribute to a healthier and safer environment for residents, reducing the risk of accidents and promoting overall well-being.						
                    </p>

                    <h5><br>Mission</h5>
					<hr>
					<p>
                        The mission of an clean up activity is to protect and improve public health and the quality of 
                        the environment by implementing measures to prevent, control, and mitigate environmental hazards.
                    </p>

                    <h5><br>Vision</h5>
					<hr>
					<p>
                        The vision of an clean up program is to achieve and sustain a clean, safe, and sustainable environment for the 
                        benefit of every individual and community.
                    </p>
				</section>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">

		<div class="col-xxl-4 col-xl-5 col-md-6 col-sm-7 notification box-col-6">
            <div class="card height-equal" style="min-height: 452.344px;">
				<div class="card-header card-no-border">
					<div class="header-top">
						<h5 class="m-0">Recent Activity</h5>
						<div class="card-header-right-icon"></div>
					</div>
              </div>
              <div class="card-body pt-0">
				<ul>
					<li class="d-flex">
                    	<div class="activity-dot-primary"></div>
						<div class="w-100 ms-3">
						<p class="d-flex justify-content-between mb-2"><span class="date-content light-background">8th January, 2024 </span></p>
						<h6>Updated Product<span class="dot-notification"></span></h6>
						<p class="f-light">Quisque a consequat ante sit amet magna...</p>
						</div>
                  </li>
                  <li class="d-flex">
					<div class="activity-dot-warning"></div>
                    <div class="w-100 ms-3">
                      <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">15th February, 2024 </span></p>
                      <h6>Tello just like your product<span class="dot-notification"></span></h6>
                      <p>Quisque a consequat ante sit amet magna... </p>
                    </div>
                  </li>
                  <li class="d-flex">
                    <div class="activity-dot-secondary"></div>
                    <div class="w-100 ms-3">
                      <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">20th February, 2024 </span></p>
                      <h6>Tello just like your product<span class="dot-notification"></span></h6>
                      <p>Quisque a consequat ante sit amet magna... </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
        </div>
		<div class="col-xxl-4 col-xl-7 col-md-6 col-sm-5 box-col-6">
			<div class="col-xl-12">
				<div class="card">
					<div class="blog-box blog-list row">
						<div class="col-sm-5"><img class="img-fluid sm-100-w" src="https://laravel.pixelstrap.com/cuba/assets/images/faq/1.jpg" alt=""></div>
						<div class="col-sm-7">
							<div class="blog-details">
								<div class="blog-date"><span>05</span> March 2024</div>
								<span><h6><i class="icofont icofont-location-pin"></i>Caloocan City</h6></span>
								<div class="blog-bottom-content">
								<ul class="blog-social">
									<li>by: Paige Turner</li>
									<li>15 Hits</li>
								</ul>
								<hr>
								<p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-12">
				<div class="card">
					<div class="blog-box blog-list row">
						<div class="col-sm-5"><img class="img-fluid sm-100-w" src="https://laravel.pixelstrap.com/cuba/assets/images/faq/1.jpg" alt=""></div>
						<div class="col-sm-7">
							<div class="blog-details">
								<div class="blog-date"><span>10</span> March 2024</div>
								<span><h6><i class="icofont icofont-location-pin"></i>Caloocan City</h6></span>
								<div class="blog-bottom-content">
								<ul class="blog-social">
									<li>by: Paige Turner</li>
									<li>15 Hits</li>
								</ul>
								<hr>
								<p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-20">
				<div class="card small-widget mb-sm-0">
					<div class="card-body warning"><span class="f-light">Total of street cleaning volunteers:</span>
						<div class="d-flex align-items-end gap-1">
							<h4>57</h4><span class="font-warning f-12 f-w-500"><i class="icon-arrow-up"></i><span>+20%</span></span>
							<span class="f-light">and counting</span>
						</div>
						<div class="bg-gradient">
							<svg class="stroke-icon svg-fill">
								<use href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#customers"></use>
							</svg>
						</div>
					</div>
				</div>
        	</div>
		</div>
    </div>
</div>
<div>
    <a href="{{route('community-programs')}}" class="btn btn-outline-primary-2x">Back</a>
</div>



<script type="text/javascript">
    var session_layout = '{{ session()->get('layout') }}';
</script>
@endsection

@section('script')
@endsection