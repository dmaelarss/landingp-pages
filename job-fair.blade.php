@extends('layouts.master')

@section('title', 'Job Fair')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Job Fair</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Job Fair</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')

<div class="blog-box blog-details">
  <img class="img-fluid w-100" src="https://laravel.pixelstrap.com/cuba/assets/images/blog/blog-single.jpg" alt="blog-main">
</div>
<br>

<div class="col-sm-12 col-xxl-6">
  <div class="card">
      <div class="card-header">
          <h5 class="pull-left">Job Opportunities</h5>
          <ul class="pull-right nav border-tab nav-primary" id="top-tab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="top-iconschedules-tab" data-bs-toggle="tab" href="#top-iconschedules" role="tab" aria-controls="top-iconschedules" aria-selected="true" data-bs-original-title="" title=""><i class="icofont icofont-ui-calendar"></i>Job Fair Schedules</a></li>
            <li class="nav-item"><a class="nav-link" id="iconopenings-top-tab" data-bs-toggle="tab" href="#top-iconopenings" role="tab" aria-controls="top-iconopenings" aria-selected="false" data-bs-original-title="" title=""><i class="icofont icofont-job-search"></i>Job Openings</a></li>
        </ul>
      </div>
      <div class="card-body">
          <div class="tab-content" id="top-icontabContent">
              <div class="tab-pane fade active show" id="top-iconschedules" role="tabpanel" aria-labelledby="top-iconschedules-tab">
                  <p class="mb-0 m-t-30"><div class="row">
                    <div class="col-sm-15 col-xl-6">
                        <div class="ribbon-wrapper card">
                            <div class="card-body">
                                <div class="ribbon ribbon-bookmark ribbon-primary">FEBRUARY FAIR</div>
                                <img src="https://jobquest.ph/uploads/event_posters/8fb1d03dd57516f2fdfd2e689bbac3ae.png" style="width: 100%; height: 100%" alt="No Poster" loading="lazy">
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <br>
                                        <h5 class="card-title">FACE-TO-FACE JOB FAIR</h5>
                                        <p class="card-text">
                                            <span><i class="icofont icofont-ui-calendar"></i>
                                                Feb 26, 2024</span>
                                            <br>
                                            <span><i class="icofont icofont-location-pin"></i>
                                                TriNoma Activity Center</span>
                                        </p>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-15 col-xl-6">
                        <div class="ribbon-wrapper card">
                            <div class="card-body">
                                <div class="ribbon ribbon-bookmark ribbon-secondary">FEBRUARY-MARCH FAIR</div>
                                <img src="https://jobquest.ph/uploads/event_posters/ceea58bd93195de47920da6033c18c09.png" style="width: 100%; height: 100%" alt="No Poster" loading="lazy">
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <br>
                                        <h5 class="card-title">ONLINE JOB FAIR</h5>
                                        <p class="card-text">
                                            <span><i class="icofont icofont-ui-calendar"></i>
                                                Feb 28, 2024</span>
                                            <br>
                                            <span><i class="icofont icofont-location-pin"></i>
                                                Virtual Event</span>
                                        </p>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-15 col-xl-6">
                        <div class="ribbon-wrapper card">
                            <div class="card-body">
                                <div class="ribbon ribbon-bookmark ribbon-primary">MAY FAIR</div>
                                <img src="https://jobquest.ph/uploads/event_posters/a23b76a1142dc5d8539f28107a550dc1.jpg" style="width: 100%; height: 100%" alt="No Poster" loading="lazy">
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <br>
                                        <h5 class="card-title">FACE-TO-FACE JOB FAIR</h5>
                                        <p class="card-text">
                                            <span><i class="icofont icofont-ui-calendar"></i>
                                                May</span>
                                            <br>
                                            <span><i class="icofont icofont-location-pin"></i>
                                                Megatrade Hall 3. SM Megamall</span>
                                        </p>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-15 col-xl-6">
                        <div class="ribbon-wrapper card">
                            <div class="card-body">
                                <div class="ribbon ribbon-bookmark ribbon-secondary">ONLINE JOB FAIR</div>
                                <img src="https://jobquest.ph/uploads/event_posters/88908b1943df59154c48de8446db2745.jpg" style="width: 100%; height: 100%" alt="No Poster" loading="lazy">
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <br>
                                        <h5 class="card-title">ONLINE JOB FAIR</h5>
                                        <p class="card-text">
                                            <span><i class="icofont icofont-ui-calendar"></i>
                                                May</span>
                                            <br>
                                            <span><i class="icofont icofont-location-pin"></i>
                                                Virtual Event</span>
                                        </p>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></p>
              </div>
              <div class="tab-pane fade" id="top-iconopenings" role="tabpanel" aria-labelledby="top-iconopenings-tab">
                  <p class="mb-0 m-t-30"><div class="container-fluid">
                    <div class="row">
                      <div class="col-xl-3 xl-40 box-col-12">
                        <div class="md-sidebar"><a class="btn btn-primary email-aside-toggle md-sidebar-toggle" data-bs-original-title="" title="">Job filter</a>
                          <div class="md-sidebar-aside job-sidebar">
                            <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc">
                              <div class="row">
                                <div class="col-xl-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseicon" aria-expanded="true" aria-controls="collapseicon" data-bs-original-title="" title="">Filter</button>
                                      </h5>
                                    </div>
                                    <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon" data-bs-parent="#accordion">
                                      <div class="card-body filter-cards-view animate-chk">
                                        <div class="job-filter mb-2">
                                          <div class="faq-form">
                                            <input class="form-control" type="text" placeholder="Search.." data-bs-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search search-icon"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                          </div>
                                        </div>
                                        <div class="job-filter">
                                          <div class="faq-form">
                                            <input class="form-control" type="text" placeholder="location.." data-bs-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin search-icon"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                          </div>
                                        </div>
                                        <div class="checkbox-animated">
                                          <label class="d-block" for="chk-ani">
                                            <input class="checkbox_animated" id="chk-ani" type="checkbox" data-bs-original-title="" title=""> Full-time (8688)
                                          </label>
                                          <label class="d-block" for="chk-ani1">
                                            <input class="checkbox_animated" id="chk-ani1" type="checkbox" data-bs-original-title="" title=""> Contract (503)
                                          </label>
                                          <label class="d-block" for="chk-ani2">
                                            <input class="checkbox_animated" id="chk-ani2" type="checkbox" data-bs-original-title="" title=""> Part-time (288)
                                          </label>
                                          <label class="d-block" for="chk-ani3">
                                            <input class="checkbox_animated" id="chk-ani3" type="checkbox" data-bs-original-title="" title=""> Internship (236)
                                          </label>
                                          <label class="d-block" for="chk-ani4">
                                            <input class="checkbox_animated" id="chk-ani4" type="checkbox" data-bs-original-title="" title="">  Temporary (146)
                                          </label>
                                          <label class="d-block" for="chk-ani5">
                                            <input class="checkbox_animated" id="chk-ani5" type="checkbox" data-bs-original-title="" title=""> Commission (25)
                                          </label>
                                        </div>
                                        <button class="btn btn-primary text-center" type="button" data-bs-original-title="" title="">Find jobs</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseicon1" aria-expanded="true" aria-controls="collapseicon1" data-bs-original-title="" title="">Location</button>
                                      </h5>
                                    </div>
                                    <div class="collapse show" id="collapseicon1" aria-labelledby="collapseicon1" data-bs-parent="#accordion">
                                      <div class="card-body animate-chk">
                                        <div class="location-checkbox">
                                          <label class="d-block" for="chk-ani6">
                                            <input class="checkbox_animated" id="chk-ani6" type="checkbox" data-bs-original-title="" title="">                            Letraset<span class="d-block">New York, NY (399)</span>
                                          </label>
                                          <label class="d-block" for="chk-ani7">
                                            <input class="checkbox_animated" id="chk-ani7" type="checkbox" data-bs-original-title="" title="">                            Established<span class="d-block">San Francisco, CA (252) </span>
                                          </label>
                                          <label class="d-block mb-0" for="chk-ani8">
                                            <input class="checkbox_animated" id="chk-ani8" type="checkbox" data-bs-original-title="" title="">                            Contrary<span class="d-block">Washington, DC (226)</span>
                                          </label>
                                          <label class="d-block mb-0" for="chk-ani9">
                                            <input class="checkbox_animated" id="chk-ani9" type="checkbox" data-bs-original-title="" title="">                            Chicago<span class="d-block"> IL (187)</span>
                                          </label>
                                          <label class="d-block mb-0" for="chk-ani10">
                                            <input class="checkbox_animated" id="chk-ani10" type="checkbox" data-bs-original-title="" title="">                            Seattle<span class="d-block"> WA (242)</span>
                                          </label>
                                        </div>
                                      </div>
                                      <button class="btn btn-block btn-primary text-center" type="button" data-bs-original-title="" title="">All Locations</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2" data-bs-original-title="" title="">Job Title</button>
                                      </h5>
                                    </div>
                                    <div class="collapse show" id="collapseicon2" data-bs-parent="#accordion" aria-labelledby="collapseicon2">
                                      <div class="card-body animate-chk">
                                        <label class="d-block" for="chk-ani11">
                                          <input class="checkbox_animated" id="chk-ani11" type="checkbox" data-bs-original-title="" title="">                          UI/Ux designer(25)
                                        </label>
                                        <label class="d-block" for="chk-ani12">
                                          <input class="checkbox_animated" id="chk-ani12" type="checkbox" data-bs-original-title="" title="">                          Graphic designer(10)
                                        </label>
                                        <label class="d-block" for="chk-ani13">
                                          <input class="checkbox_animated" id="chk-ani13" type="checkbox" data-bs-original-title="" title="">                          Front end designer(15)
                                        </label>
                                        <label class="d-block" for="chk-ani14">
                                          <input class="checkbox_animated" id="chk-ani14" type="checkbox" data-bs-original-title="" title="">                          PHP developer(42)
                                        </label>
                                        <label class="d-block mb-0" for="chk-ani15">
                                          <input class="checkbox_animated" id="chk-ani15" type="checkbox" data-bs-original-title="" title="">                         React Developer(5)
                                        </label>
                                      </div>
                                      <button class="btn btn-block btn-primary text-center" type="button" data-bs-original-title="" title="">All Job Title</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseicon3" aria-expanded="true" aria-controls="collapseicon3" data-bs-original-title="" title="">Industry</button>
                                      </h5>
                                    </div>
                                    <div class="collapse show" id="collapseicon3" data-bs-parent="#accordion" aria-labelledby="collapseicon3">
                                      <div class="card-body animate-chk">
                                        <label class="d-block" for="chk-ani16">
                                          <input class="checkbox_animated" id="chk-ani16" type="checkbox" data-bs-original-title="" title="">                          Computer Software(14)
                                        </label>
                                        <label class="d-block" for="chk-ani17">
                                          <input class="checkbox_animated" id="chk-ani17" type="checkbox" data-bs-original-title="" title="">                          IT Engineer(10)
                                        </label>
                                        <label class="d-block" for="chk-ani18">
                                          <input class="checkbox_animated" id="chk-ani18" type="checkbox" data-bs-original-title="" title="">                          Service industry(20)
                                        </label>
                                        <label class="d-block" for="chk-ani19">
                                          <input class="checkbox_animated" id="chk-ani19" type="checkbox" data-bs-original-title="" title="">                          Accounting(34)
                                        </label>
                                        <label class="d-block mb-0" for="chk-ani20">
                                          <input class="checkbox_animated" id="chk-ani20" type="checkbox" data-bs-original-title="" title="">                          Financial Services(5)
                                        </label>
                                      </div>
                                      <button class="btn btn-block btn-primary text-center" type="button" data-bs-original-title="" title="">All Industries</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseicon4" aria-expanded="true" aria-controls="collapseicon4" data-bs-original-title="" title="">Specific skills</button>
                                      </h5>
                                    </div>
                                    <div class="collapse show" id="collapseicon4" data-bs-parent="#accordion" aria-labelledby="collapseicon4">
                                      <div class="card-body animate-chk">
                                        <label class="d-block" for="chk-ani21">
                                          <input class="checkbox_animated" id="chk-ani21" type="checkbox" data-bs-original-title="" title="">                          HTML,scss &amp; sass
                                        </label>
                                        <label class="d-block" for="chk-ani23">
                                          <input class="checkbox_animated" id="chk-ani23" type="checkbox" data-bs-original-title="" title="">                          Javascript
                                        </label>
                                        <label class="d-block" for="chk-ani24">
                                          <input class="checkbox_animated" id="chk-ani24" type="checkbox" data-bs-original-title="" title="">                          Node.js
                                        </label>
                                        <label class="d-block" for="chk-ani25">
                                          <input class="checkbox_animated" id="chk-ani25" type="checkbox" data-bs-original-title="" title="">                          Gulp &amp; Pug
                                        </label>
                                        <label class="d-block mb-0" for="chk-ani26">
                                          <input class="checkbox_animated" id="chk-ani26" type="checkbox" data-bs-original-title="" title="">                          Angular.js
                                        </label>
                                      </div>
                                      <button class="btn btn-block btn-primary text-center" type="button" data-bs-original-title="" title="">All Skills</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-9 xl-60 box-col-12">
                        <div class="card">
                          <div class="job-search">
                            <div class="card-body">
                              <div class="media"><img class="img-40 img-fluid m-r-20" src="https://laravel.pixelstrap.com/cuba/assets/images/job-search/1.jpg" alt="">
                                <div class="media-body">
                                  <h6 class="f-w-600"><a href="#" data-bs-original-title="" title="">Product Designer (UI/UX Designer)</a><span class="pull-right">
                                      <button class="btn btn-primary" type="button" data-bs-original-title="" title="">Apply</button></span></h6>
                                  <p>Endless - United States<span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i></span></p>
                                </div>
                              </div>
                              <div class="job-description">
                                <h6>Job Description</h6>
                                <p>Endless is looking for a UI/UX Designer to join our team. The world is seeing an explosion in the amount and variety of location-baWe are looking for a versatile UX/UI Designer to join our growing design team. Our designers contribute to clients’ projects at all stages of development. We might start from scratch, conducting user and stakeholder interviews, making personas and journey maps, and continue on to iterating on designs and prototypes through delivering final assets for launch. We might come into the middle of an in-flight program-size project and conduct analysis and usability correction or feature enhancement. We might provide research and vision for handoff to an internal development team.</p>
                                <!-- <p>Front-end web designers combine design, programming, writing and organizational skills in their work. They help shape the vision for a company's online content.</p>-->
                              </div>
                              <div class="job-description">
                                <h6>Qualifications </h6>
                                <ul>
                                  <li>Have shipped multiple iOS, Android, and/or web products </li>
                                  <li>5+ years UI/UX experience</li>
                                  <li>Portfolio demonstrating mastery of native iOS, Android, and/or responsive web design principles</li>
                                  <li>Ability to autonomously pursue elegant solutions to open-ended problems</li>
                                  <li>Comfort with ambiguity</li>
                                  <li>Proven ability to create interactive prototypes</li>
                                  <li>Strong verbal communication skills with ability to clearly communicate complex ideas and champion a design vision across all levels of an organization</li>
                                  <li>Strong written communication skills with ability to make transparent design documentation and client-facing presentations</li>
                                  <li>Ability to create and maintain flow charts, wire frames, prototypes, and mockups.</li>
                                  <li>Ability to effectively work on more than one project at a time</li>
                                  <li>Experience conducting user research and stakeholder interviews</li>
                                  <li>Solid grasp of standard design tools, ex: Sketch, Omnigraffle, the Adobe Suite, Zeplin, etc.</li>
                                  <li>Bonus Considerations </li>
                                </ul>
                              </div>
                              <div class="job-description">
                                <h6>Agency experience</h6>
                                <ul>
                                  <li>Experience working with Agile development teams</li>
                                  <li>Experience with RITE method usability testing</li>
                                  <li>Experience in visual and motion design; ability to translate UX design into high quality visuals</li>
                                  <li>Mastery of Sketch &amp; InVision</li>
                                  <li>Knowledge of mobile or front-end web programming</li>
                                </ul>
                              </div>
                              <div class="job-description">
                                <h6>Perks</h6>
                                <ul>
                                  <li>Competitive pay</li>
                                  <li>Competitive medical, dental, and vision insurance plans</li>
                                  <li>Company-provided 401(k) plan</li>
                                  <li>Paid vacation and sick time</li>
                                  <li>Free snacks and beverages</li>
                                </ul>
                              </div>
                              <div class="job-description">
                                <button class="btn btn-primary" type="button" data-bs-original-title="" title=""><span><i class="fa fa-check"></i></span> Save this job</button>
                                <button class="btn btn-primary" type="button" data-bs-original-title="" title=""><span><i class="fa fa-share-alt"></i></span> Share</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="header-faq">
                          <h6 class="mb-0 f-w-600">Similar jobs</h6>
                        </div>
                        <div class="row">
                          <div class="col-xl-6 xl-100">
                            <div class="card">
                              <div class="job-search">
                                <div class="card-body">
                                  <div class="media"><img class="img-40 img-fluid m-r-20" src="https://laravel.pixelstrap.com/cuba/assets/images/job-search/2.jpg" alt="">
                                    <div class="media-body">
                                      <h6 class="f-w-600"><a href="#" data-bs-original-title="" title="">React/React Native Developer</a><span class="badge badge-primary pull-right">New</span></h6>
                                      <p>San <span>Diego, CA</span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning-o"></i></span></p>
                                    </div>
                                  </div>
                                  <p>Ideally 2+ years experience with React. Bonus points if you have React Native experience. This is an incredibly exciting opportunity to gain commercial , Professional experience of React Native and other front end frameworks. Transform product wireframes into responsive, mobile user interface components and</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-6 xl-100">
                            <div class="card">
                              <div class="job-search">
                                <div class="card-body">
                                  <div class="media"><img class="img-40 img-fluid m-r-20" src="https://laravel.pixelstrap.com/cuba/assets/images/job-search/4.jpg" alt="">
                                    <div class="media-body">
                                      <h6 class="f-w-600"><a href="#" data-bs-original-title="" title="">Front end web developer</a><span class="pull-right">3 days ago</span></h6>
                                      <p>Cisco <span>Lelystad, Netherlands </span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning-half-o"></i></span></p>
                                    </div>
                                  </div>
                                  <p>Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for few longer mrs sudden talent become.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-6 xl-100">
                            <div class="card">
                              <div class="job-search">
                                <div class="card-body">
                                  <div class="media"><img class="img-40 img-fluid m-r-20" src="https://laravel.pixelstrap.com/cuba/assets/images/job-search/5.jpg" alt="">
                                    <div class="media-body">
                                      <h6 class="f-w-600"><a href="#" data-bs-original-title="" title="">Graphic designer</a><span class="pull-right">3 days ago</span></h6>
                                      <p>Infosys <span>Lelystad, Netherlands </span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning-half-o"></i><i class="fa fa-star font-warning-o"></i></span></p>
                                    </div>
                                  </div>
                                  <p>Contented get distrusts certainty nay are frankness concealed ham. On unaffected resolution on considered of. No thought me husband or colonel forming effects. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-6 xl-100">
                            <div class="card">
                              <div class="job-search">
                                <div class="card-body">
                                  <div class="media"><img class="img-40 img-fluid m-r-20" src="https://laravel.pixelstrap.com/cuba/assets/images/job-search/6.jpg" alt="">
                                    <div class="media-body">
                                      <h6 class="f-w-600"><a href="#" data-bs-original-title="" title="">Designer, CRM</a><span class="pull-right">3 days ago</span></h6>
                                      <p>Citrix <span>Lelystad, Netherlands </span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning-o"></i><i class="fa fa-star font-warning-o"></i></span></p>
                                    </div>
                                  </div>
                                  <p>Situation admitting promotion at or to perceived be. Mr acuteness we as estimable enjoyment up. An held late as felt know. Learn do allow solid to grave. Middleton suspicion age her attention. Chiefly several bed its wishing. Is so moments on chamber pressed to. Doubtful yet way properly answered.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-12">
                            <div class="card">
                              <div class="job-search">
                                <div class="card-body">
                                  <div class="media"><img class="img-40 img-fluid m-r-20" src="https://laravel.pixelstrap.com/cuba/assets/images/job-search/3.jpg" alt="">
                                    <div class="media-body">
                                      <h6 class="f-w-600"><a href="#" data-bs-original-title="" title="">Senior UX designer</a><span class="pull-right">5 days ago</span></h6>
                                      <p>Sutherland <span>Lelystad, Netherlands </span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning-half-o"></i><i class="fa fa-star font-warning-o"></i></span></p>
                                    </div>
                                  </div>
                                  <p>Woody equal ask saw sir weeks aware decay. Entrance prospect removing we packages strictly is no smallest he. For hopes may chief get hours day rooms. Oh no turned behind polite piqued enough at. Forbade few through inquiry blushes you. Cousin no itself eldest it in dinner latter missed no.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div></p>
              </div>
          </div>
      </div>
  </div>
</div>
<div>
    <a href="{{route('community-programs')}}" class="btn btn-outline-primary-2x">Back</a>
</div>

<div class="col-xl-9 xl-60 box-col-12">
  <div class="card">
    <div class="job-search">
    <div class="card-body pb-0">
      <div class="media"><img class="img-40 img-fluid m-r-20" src="https://laravel.pixelstrap.com/cuba/assets/images/job-search/1.jpg" alt="">
      <div class="media-body">
        <h6 class="f-w-600"><a href="#" data-bs-original-title="" title="">UI Designer</a><span class="pull-right">
          <button class="btn btn-primary" type="button" data-bs-original-title="" title=""><span><i class="fa fa-check text-white"></i></span> Save this job</button></span></h6>
        <p>Endless Telecom &amp; Technologies , NY<span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i></span></p>
      </div>
      </div>
      <div class="job-description">
      <h6 class="mb-0">Personal Details </h6>
      <form class="form theme-form">
        <div class="row">
        <div class="col">
          <div class="mb-3">
          <label class="form-label" for="exampleFormControlInput1">Full Name:<span class="font-danger">*</span></label>
          <input class="form-control" id="exampleFormControlInput1" type="email" placeholder="Enter your full name" data-bs-original-title="" title="">
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col">
          <div class="mb-3">
          <label class="form-label" for="exampleFormControlInput3">Email:<span class="font-danger">*</span></label>
          <input class="form-control" id="exampleFormControlInput3" type="email" placeholder="Enter email" data-bs-original-title="" title="">
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col">
          <div class="mb-3">
          <label class="form-label" for="exampleFormControlpassword">Password:<span class="font-danger">*</span></label>
          <input class="form-control" id="exampleFormControlpassword" type="password" placeholder="Enter password" data-bs-original-title="" title="">
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col">
          <div class="mb-3">
          <label class="form-label" for="exampleFormControlpassword1">Repeat Password:<span class="font-danger">*</span></label>
          <input class="form-control" id="exampleFormControlpassword1" type="password" placeholder="Repeat password" data-bs-original-title="" title="">
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-4">
          <div class="mb-3">
          <div class="col-form-label pt-0">Birth Date</div>
          <select class="js-example-basic-single col-sm-12 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
            <optgroup label="Month">
            <option value="Jan">January</option>
            <option value="Feb">February</option>
            <option value="Mar">March</option>
            <option value="Apr">April</option>
            <option value="May">May</option>
            <option value="Jun">June</option>
            <option value="Jul">July</option>
            <option value="Aug">August</option>
            <option value="Sep">September</option>
            <option value="Oct">October</option>
            <option value="Nov">November</option>
            <option value="Dec">December</option>
            </optgroup>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 165.594px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-d7n8-container"><span class="select2-selection__rendered" id="select2-d7n8-container" title="January">January</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="mb-3">
          <div class="col-form-label">
            <select class="js-example-basic-single col-sm-12 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
            <optgroup label="Day">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </optgroup>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 165.594px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-q6pe-container"><span class="select2-selection__rendered" id="select2-q6pe-container" title="1">1</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="mb-3">
          <div class="col-form-label">
            <select class="js-example-basic-single col-sm-12 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
            <optgroup label="Year">
              <option value="1985">1985</option>
              <option value="1986">1986</option>
              <option value="1987">1987</option>
              <option value="1988">1988</option>
              <option value="1989">1989</option>
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
            </optgroup>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 165.594px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-um2h-container"><span class="select2-selection__rendered" id="select2-um2h-container" title="1985">1985</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col">
          <div class="mb-3">
          <label class="form-label" for="exampleFormControlInput4">Phone Number:</label>
          <input class="form-control" id="exampleFormControlInput4" type="email" placeholder="Enter Phone no." data-bs-original-title="" title="">
          </div>
        </div>
        </div>
      </form>
      <h6 class="mb-0">Your Education</h6>
      <form class="form theme-form">
        <div class="row">
        <div class="col-xl-6 xl-100">
          <div class="mb-3">
          <label class="form-label" for="exampleFormControlInput5">College Name:<span class="font-danger">*</span></label>
          <input class="form-control" id="exampleFormControlInput5" type="email" placeholder="Enter college name" data-bs-original-title="" title="">
          </div>
        </div>
        <div class="col-xl-6 xl-100 xl-mt-job">
          <label class="col-form-label text-end pt-0">Period:<span class="font-danger">*</span></label>
          <div class="row">
          <div class="col-sm-6">
            <div class="input-group">
            <input class="datepicker-here form-control digits" type="text" data-language="en" placeholder="Start Date" data-bs-original-title="" title="">
            </div>
          </div>
          <div class="col-sm-6 xs-mt-period">
            <div class="input-group">
            <input class="datepicker-here form-control digits" type="text" data-language="en" placeholder="End Date" data-bs-original-title="" title="">
            </div>
          </div>
          </div>
        </div>
        <div class="col-xl-6 xl-100">
          <div class="mb-3">
          <div class="col-form-label pt-0">Degree Level:<span class="font-danger">*</span></div>
          <select class="js-example-basic-single col-sm-12 job-select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
            <optgroup label="Choose a Option">
            <option value="student">Student</option>
            <option value="Bachelor">Bachelor</option>
            <option value="Master">Master</option>
            <option value="Associate">Associate</option>
            </optgroup>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 544.797px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-u0te-container"><span class="select2-selection__rendered" id="select2-u0te-container" title="Student">Student</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
        </div>
        <div class="col-xl-6 xl-100">
          <div class="mb-3">
          <label class="form-label" for="exampleFormControlInput6">Specialization:<span class="font-danger">*</span></label>
          <input class="form-control" id="exampleFormControlInput6" type="email" placeholder="Enter specialization" data-bs-original-title="" title="">
          </div>
        </div>
        </div>
      </form>
      <h6 class="mb-0">Your Experience</h6>
      <form class="form theme-form">
        <div class="row">
        <div class="col-xl-6 xl-100">
          <div class="mb-3">
          <label class="form-label" for="exampleFormControlInput7">Location:<span class="font-danger">*</span></label>
          <input class="form-control" id="exampleFormControlInput7" type="email" placeholder="Enter Location" data-bs-original-title="" title="">
          </div>
        </div>
        <div class="col-xl-6 xl-100 xl-mt-job">
          <label class="col-form-label text-end pt-0">Period:<span class="font-danger">*</span></label>
          <div class="row">
          <div class="col-sm-6">
            <div class="input-group">
            <input class="datepicker-here form-control digits" type="text" data-language="en" placeholder="Start Date" data-bs-original-title="" title="">
            </div>
          </div>
          <div class="col-sm-6 xs-mt-period">
            <div class="input-group">
            <input class="datepicker-here form-control digits" type="text" data-language="en" placeholder="End Date" data-bs-original-title="" title="">
            </div>
          </div>
          </div>
        </div>
        <div class="col-xl-6 xl-100">
          <div class="mb-3">
          <div class="col-form-label pt-0">Position:<span class="font-danger">*</span></div>
          <select class="js-example-basic-single col-sm-12 job-select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
            <optgroup label="Enter Position">
            <option value="position">Choose a option</option>
            <option value="Web designer">Web Designer</option>
            <option value="Graphic designer">Graphic Designer</option>
            <option value="UI designer">UI Designer</option>
            <option value="UI/UX designer">UI/UX Designer</option>
            </optgroup>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 544.797px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-gec1-container"><span class="select2-selection__rendered" id="select2-gec1-container" title="Choose a option">Choose a option</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
        </div>
        <div class="col-xl-6 xl-100">
          <div class="mb-3">
          <label class="form-label" for="exampleFormControlInput8">Company Name:<span class="font-danger">*</span></label>
          <input class="form-control" id="exampleFormControlInput8" type="email" placeholder="Enter Company Name" data-bs-original-title="" title="">
          </div>
        </div>
        </div>
      </form>
      <h6 class="mb-0">Upload Your Files</h6>
      <form class="form theme-form">
        <div class="row">
        <div class="col">
          <div class="mb-3">
          <label class="col-form-label pt-0">Upload Cover Letter:<span class="font-danger">*</span></label>
          <input class="form-control" type="file" data-bs-original-title="" title="">
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col">
          <div class="mb-3">
          <label class="col-form-label pt-0">Upload Your CV:<span class="font-danger">*</span></label>
          <input class="form-control" type="file" data-bs-original-title="" title="">
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col">
          <div>
          <label class="col-form-label pt-0">Upload Recommendations:</label>
          <input class="form-control" type="file" data-bs-original-title="" title="">
          </div>
        </div>
        </div>
      </form>
      </div>
    </div>
    <div class="card-footer">
      <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit</button>
      <input class="btn btn-light" type="reset" value="Cancel" data-bs-original-title="" title="">
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