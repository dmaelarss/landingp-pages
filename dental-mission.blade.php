@extends('layouts.master')

@section('title', 'Dental Mission')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Dental Mission</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dental Mission</li>
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
					<h4>What is Dental Mission: What you need to know</h4>
					<hr>
					<ul>
						<li>
							<div class="media align-self-center">
								<div class="media-body">
									<p>
                                        A dental mission is a special activity or event where trained dental professionals, such as dentists, dental hygienists, 
                                        and dental assistants, volunteer their time and expertise to provide dental care and treatment to people in need.
                                    </p>
								</div>
							</div>
						</li>
					</ul>
					<h5><br>Who can contribute in this program</h5>
					<hr>
					<p>
                        Several individuals and organizations can contribute to the success of a dental mission:<br><br>
                        1. Dental Professionals: Dentists, dental hygienists, dental assistants, and dental specialists can contribute
                            their time and experience to providing dental care.<br>
                        2. Medical Volunteers: Nurses, physicians, and other healthcare professionals may help with overall patient 
                            care and support.<br>
                        3. Donors and Sponsors: Individuals, businesses, and organizations can contribute funds, dental supplies, equipment, 
                            and other resources to support the mission.<br>
                        4. Local Communities: Working with community leaders and groups can help identify needs and make the dental mission 
                            more manageable.
                    </p>

                    <h5><br>Benefits of Dental Mission</h5>
					<hr>
					<p>
                        Dental missions offer a range of valuable benefits, including:
                        <br><br>
                        1. Dental missions help address oral health issues, potentially reducing pain and discomfort, and preventing 
                            more serious dental problems.
                        <br>
                        2. Dental missions help to improve the public health of the communities they serve by addressing oral health concerns, 
                            potentially lowering the risk of systemic health problems associated with poor oral health.
                        <br>
                        3. They provide essential dental services to underserved communities, offering treatments and education to individuals who may 
                            not have regular access to dental care.
                        <br>
                        4. They provide opportunities for dental professionals and volunteers to contribute their skills and expertise for the benefit 
                            of those in need.
                    </p>
                    <h5><br>Mission</h5>
					<hr>
					<p>
                        Our mission is to improve the oral health and overall well-being of individuals who may not have regular access to dental care.
                    </p>

                    <h5><br>Vision</h5>
					<hr>
					<p>
                        The vision is to create a community where every person can smile with confidence, free from the burden of untreated dental conditions, 
                        and where oral health is recognized as an essential component of overall well-being.
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