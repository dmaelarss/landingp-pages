@extends('layouts.master')

@section('title', 'Cash Aid Assistance')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Cash Aid Assistance</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">CAA</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')


<div class="blog-box blog-details">
    <img class="img-fluid w-100" src="https://laravel.pixelstrap.com/cuba/assets/images/blog/blog-single.jpg" alt="blog-main">
</div>
<br>
<div class="container-fluid">
	<div class="row">
        <div class="col-sm-25 col-xl-15">
			<div class="card">
				<div class="card-header">
					<h5>Assistance To Individuals In Crisis Situation</h5>
					<span></span>
				</div>
				<div class="card-body">
					<div class="default-according style-1" id="accordionoc">
						<div class="card">
							<div class="card-header bg-primary">
								<h5 class="mb-0">
									<button class="btn btn-link text-white" data-bs-toggle="collapse" data-bs-target="#collapseicon" aria-expanded="true" aria-controls="collapse11"><i class="icofont icofont-medical-sign"></i> Medical Assistance<span> Requirements</span></button>
								</h5>
							</div>
							<div class="collapse show" id="collapseicon" aria-labelledby="collapseicon" data-bs-parent="#accordionoc">
								<div class="card-body">
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>Valid ID of the person to be interviewed</li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>Authorization Letter (if applicable)</li>
                                        </p>
                                    </ul>
                                    <p><br>Bring the following based on the assistance being provided:</p>
                                    <h6>FOR HOSPITAL BILL PAYABLE:</h6>
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Medical Certificate/Clinical Abstract/Discharge Summar/Alagang Pinoy Tagubilin Form with diagnosis, complete name, license number, and signiture
                                                of the Physician issued within three months (Original or Certified True Copy)
                                            </li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Hospital Bill or Statement of Account (Outstanding Balance) with name and signiture of the billing clerk or Certificate of Balance and Promissory 
                                                Note signed by the credit and collection officer/billing clerk.
                                            </li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Social Case Study Report or Case Summary.
                                            </li>
                                        </p>
                                    </ul>
                                    <h6><br>FOR MEDICINE OR ASSISTIVE DEVICE:</h6>
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Medical Certificate/Clinical Abstract/Discharge Summar/Alagang Pinoy Tagubilin Form with diagnosis, complete name of the patient, license number, 
                                                and signiture of the Physician issued within three months (Original or Certified True Copy)
                                            </li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Prescription with date of issuance, complete name, license number, 
                                                and signiture of the Physician issued within three months.
                                            </li>
                                        </p>
                                    </ul>
                                    <p><br>If the requested assistance is more than PhP 10,000, the following documents are required:<br></p>
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>Quotation of Medicine or Assistive Device</li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>Social Case Study Report or Case Summary</li>
                                        </p>
                                    </ul>
                                    <h6><br>FOR LABORATORY OR MEDICAL PROCEDURE/OPERATION:</h6>
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Medical Certificate/Clinical Abstract/Discharge Summar/Alagang Pinoy Tagubilin Form with diagnosis, complete name of the patient, license number, 
                                                and signiture of the Physician issued within three months (Original or Certified True Copy)
                                            </li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Laboratory Request or Laboratory Protocol or Doctor's Order with name, license number,
                                                and signiture of the Physician.
                                            </li>
                                        </p>
                                    </ul>
                                    <p><br>If the requested assistance is more than PhP 10,000, the following documents are required:<br></p>
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>Quotation of Medicine or Assistive Device</li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>Social Case Study Report or Case Summary</li>
                                        </p>
                                    </ul>
                                </div>
							</div>
						</div>
						<div class="card">
							<div class="card-header bg-primary">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed text-white" data-bs-toggle="collapse" data-bs-target="#collapseicon1" aria-expanded="false"><i class="icofont icofont-hat-alt"></i> Educational Assistance<span> Requirements</span></button>
								</h5>
							</div>
							<div class="collapse" id="collapseicon1" aria-labelledby="headingeight" data-bs-parent="#accordionoc">
								<div class="card-body">
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>Valid ID of the person to be interviewed</li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>Authorization Letter (if applicable)</li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Enrollment Assesment Form; or Certificate of Enrollment or Registration; or Statement of Account
                                            </li>
                                        </p>
                                    </ul>
                                </div>
							</div>
						</div>
						<div class="card">
							<div class="card-header bg-primary">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed text-white" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="false"><i class="icofont icofont-law-document"></i> Funeral Assistance<span> Requirements</span></button>
								</h5>
							</div>
							<div class="collapse" id="collapseicon2" data-bs-parent="#accordionoc">
								<div class="card-body">
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>Valid ID of the person to be interviewed</li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>Authorization Letter (if applicable)</li>
                                        </p>
                                    </ul>
                                    <p><br>Bring the following based on the assistance being provided:</p>
                                    <h6>FOR FUNERAL BILL PAYABLE:</h6>
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Death Certificate or Certification from the City or Municipal Hall (Civil Registry Office), 
                                                Hospital, Funeral Parlor, Tribal Chieftain of Imam (Original or Certified True Copy)
                                            </li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Promissory Note or Certificate of Balance or Statement of Account
                                            </li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Funeral Contract
                                            </li>
                                        </p>
                                    </ul>
                                    <h6><br>FOR ASSISTANCE FOR TRANSFER OF CADAVER:</h6>
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Death Certificate or Certification from the City or Municipal Hall (Civil Registry Office), 
                                                Hospital, Funeral Parlor, Tribal Chieftain of Imam (Original or Certified True Copy)
                                            </li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Transfer Permit
                                            </li>
                                        </p>
                                    </ul>
                                </div>
							</div>
						</div>
                        <div class="card">
							<div class="card-header bg-primary">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed text-white" data-bs-toggle="collapse" data-bs-target="#collapseicon3" aria-expanded="false" aria-controls="collapseicon3"><i class="icofont icofont-support"></i> Cash Assistance for other Support Services<span> Requirements</span></button>
								</h5>
							</div>
							<div class="collapse" id="collapseicon3" data-bs-parent="#accordionoc">
								<div class="card-body">
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>Valid ID of the person to be interviewed</li>
                                            <li><i class="fa fa-caret-right m-r-10"></i>Authorization Letter (if applicable)</li>
                                        </p>
                                    </ul>
                                    <p><br>Bring the following based on the assistance being provided:</p>
                                    <h6>FOR FIRE VICTIMS:</h6>
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Police Report or Bureau of Fire Protection Report from the Bureau of Fire
                                            </li>
                                        </p>
                                    </ul>
                                    <h6><br>FOR RESCUED CLIENT:</h6>
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Certification from a social worker or Case manager from rescued clients
                                            </li>
                                        </p>
                                    </ul>
                                    <h6><br>FOR LOCALLY STRANDED INDIVIDUALS OF LSI:</h6>
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                LSI without valid IDs, the Medical Certificate or the Travel Authority issued by the Philippine National
                                                Police will suffice and be accepted to prove his or her identity 
                                            </li>
                                        </p>
                                    </ul>
                                    <h6><br>FOR OTHER INCIDENTS:</h6>
                                    <ul>
                                        <p>
                                            <li><i class="fa fa-caret-right m-r-10"></i>
                                                Barangay Certificate of Residency or Certificate of Indigency or Certificate of the Client is in Need of Assistance as
                                                well as other documents from legal authorities or regulating agencies, as may be applicable such as but not limited to:
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><i class="fa fa-angle-right m-r-10"></i>Police Report or Blotter;</li>
                                                    <li><i class="fa fa-angle-right m-r-10"></i>Spot report from the AFP or PNP;</li>
                                                    <li><i class="fa fa-angle-right m-r-10"></i>Joint AFP-PNP Intelligence Committee (JAPIC) certificate;</li>
                                                    <li><i class="fa fa-angle-right m-r-10"></i>Certification of death, Disaster Assistance Family Access Card (DAFAC);</li>
                                                    <li><i class="fa fa-angle-right m-r-10"></i>Medico-legal certification</li>
                                                </ul>
                                            </li>
                                        </p>
                                    </ul>
                                </div>
							</div>
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