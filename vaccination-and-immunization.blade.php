@extends('layouts.master')

@section('title', 'Vaccination and Immunization')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Vaccination and Immunization</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Vaccination and Immunization</li>
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
					<h4>What is Vaccination and Immunization: What you need to know</h4>
					<hr>
					<ul>
						<li>
							<div class="media align-self-center">
								<div class="media-body">
									<p>
                                        Vaccination is the process of administering a vaccine to provide immunity against a specific disease. Immunization, on the other 
                                        hand, is the process of becoming immune to a disease through vaccination.
                                        Vaccination and immunization are essential for preventing the spread of many infectious diseases, such as measles, polio, and influenza.
                                    </p>
								</div>
							</div>
						</li>
					</ul>
					<h5><br>Who can contribute in this program</h5>
					<hr>
					<p>
                        Many individuals and organizations can contribute to vaccination and immunization programs, including:<br><br>
                        
                        <ol>
                            <li>Healthcare workers and medical professionals who administer vaccines.</li>
                            <li>Public health organizations and government agencies that develop and promote vaccination campaigns.</li>
                            <li>Pharmaceutical companies that research, develop, and manufacture vaccines.</li>
                            <li>Non-governmental organizations and charitable organizations that support vaccination efforts through fundraising, advocacy, and logistics.</li>
                            <li>Educators and community leaders who raise awareness about the importance of vaccines and immunization.</li>
                            <li>Researchers and scientists who study and improve vaccines and immunization strategies.</li>
                            <li>Volunteers who participate in vaccination clinics and outreach programs.</li>
                            <li>Individuals, families, and caregivers who ensure that they and their loved ones receive recommended vaccinations.</li>
                        </ol>
                    </p>

                    <h5><br>Benefits of Vaccination and Immunization</h5>
					<hr>
					<p>
                        Participating in vaccination and immunization programs offers several benefits:<br><br>
                        
                        <ol>
                            <li>Disease prevention vaccines protect against various infectious diseases, preventing illness and its associated complications.</li>
                            <li>Vaccination promotes herd immunity, decreasing the transmission of infectious illnesses within populations and protecting those 
                            who are unable to be immunized, such as babies and those with compromised immune systems.</li>
                            <li>Vaccination can save money by reducing medical costs associated with vaccine-preventable illnesses and consequences.</li>
                            <li>Vaccines not only protect against particular diseases, but they also help to improve public health by lowering the burden of 
                            infectious diseases, which can have long-term health consequences for individuals and communities.</li>
                        </ol>
                
                    <h5><br>Mission</h5>
					<hr>
					<p>
                        The goal of a vaccination and immunization program is to protect individuals from avoidable illnesses by giving them safe and effective vaccinations.
                    </p>

                    <h5><br>Vision</h5>
					<hr>
					<p>
                        The vision of a vaccination and immunization program in the community is to create a community where every individual has access to timely and affordable 
                        vaccinations, resulting in high immunization coverage and community-wide protection against preventable diseases.
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