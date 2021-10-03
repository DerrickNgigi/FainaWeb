@extends('layouts.app')

@section('title')
    P4CDA-KU Chapter E-Learning Scholarship Application
@endsection


@section('meta_data')
@endsection



@section('content')
    <!-- page-title-area start -->
    <div
        class="page-title-area pos-relative gray-bg pt-90 pb-60 fix"
        style="background-image: url(img/bg/page-title-bg.png)"
    >
        <div class="shape-slider">
            <img class="shape shape-2" src="img/shape/shape2.png" alt="" />
            <img class="shape shape-4" src="img/shape/shape3.png" alt="" />
            <img class="shape shape-5" src="img/shape/shape-sq.png" alt="" />
            <img class="shape shape-6" src="img/shape/shape-c-2.png" alt="" />
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="page-title mb-30">
                        <h4 style="color: white">P4CDA E-Learning Scholarship Application</h4>
                        {{--                        <p>Go fifth signs dry light sea created greater</p>--}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-left text-lg-right mb-30">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>E-learning</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title-area end -->

    <!-- contact-area  -->

    <!-- contact-area end -->

    <!-- contact-form-area  -->
    <div class="contact-form-area pt-140 pb-120">
        <div class="container formBackground">
            <div class="row">
                <div class="col-xl-8 col-lg-10 offset-lg-1 offset-xl-2">
                    <div class="section-title-2 text-center mb-70">
                        <h2 class="mb-20">E-learning Scholarship Application</h2>
                    </div>
                </div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
            <div id="registration_form" class="contact-form mb-30">
                <form id="contact-form" method="POST" action="{{ route('p4cda_e-learning_scholarship') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="required" id="main_label" for="name"
                            >Full Name ( as per your National Identification Number,
                                passport etc)</label
                            >
                            <input
                                name="name"
                                id="name"
                                required
                                type="text"
                                placeholder=""
                            />
                        </div>
                        <div class="col-lg-6">
                            <label id="main_label" class="required" for="email">Email Address</label>
                            <input name="email" type="email" required placeholder="" />
                        </div>
                        <div class="col-lg-6">
                            <label id="main_label" for="guarantor_name"
                            >Guarantor's Name</label
                            >
                            <input
                                name="guarantor_name"
                                type="text"
                                id="guarantor_name"
                                value="KU CANDAI"
                                readonly
                                required
                                placeholder="Guarantor's Name"
                            />
                        </div>
                        <div class="col-lg-6">
                            <label id="main_label" class="required" for="course"
                            >What Course are you interested in pursuing?</label
                            >
                            <input
                                name="course"
                                id="course"
                                type="text"
                                required
                                placeholder=""
                            />
                        </div>
                        <div class="col-lg-6">
                            <label  id="main_label" for="guarantor_email" style="visibility: hidden" >Guarantor's Email Address</label>
                            <input
                                name="guarantor_email"
                                type="email"
                                id="guarantor_email"
                                required
                                readonly
                                hidden
                                value="derrick@p4cda.net"
                                placeholder=""
                            />
                        </div>
                        <div class="col-lg-6">
                            <label id="main_label" for="guarantor_phone" style="visibility: hidden">Guarantor's Phone Number:</label>
                            <input
                                name="guarantor_phone"
                                id="guarantor_phone"
                                type="text"
                                required
                                value="+254790566616"
                                hidden
                                readonly
                                placeholder=""
                            />
                        </div>
                        <div class="col-sm-6">
                            <p id="main_label" class="required" >Which platform do you wish to pursue the course from?</p>
                            <input
                                type="radio"
                                id="google"
                                name="platform"
                                value="Google"
                                class="radio_custom"
                                required
                            />
                            <label for="google">Grow With Google</label><br />
                            <input
                                type="radio"
                                id="coursera"
                                name="platform"
                                value="Coursera"
                                class="radio_custom"
                            />
                            <label for="coursera">Coursera</label><br />
                            <input
                                type="radio"
                                id="udemy"
                                class="radio_custom"
                                name="platform"
                                value="Udemy"
                            />
                            <label for="udemy">Udemy</label> <br />
                        </div>

                        <div class="col-lg-6">
                            <label id="main_label" class="required" for="user_phone">Phone</label>
                            <input
                                name="user_phone"
                                id="user_phone"
                                type="tel"
                                required
                                value="+254"
                                placeholder=""
                            />
                        </div>

                        <div class="col-lg-6">
                            <label id="main_label" class="required" for="user_whatsapp"> WhatsApp Number</label>
                            <input
                                name="user_whatsapp"
                                id="user_whatsapp"
                                type="tel"
                                value="+254"
                                required
                                placeholder=""
                            />
                        </div>
                        <div class="col-lg-6">
                            <label id="main_label" class="required" for="county"> Home County as per your ID</label>
                            <input
                                name="county"
                                id="county"
                                type="text"
                                required
                                placeholder=""
                            />
                        </div>
                        <div class="col-lg-6">
                            <label id="main_label" class="required" for="ward"> Ward</label>
                            <input
                                name="ward"
                                id="ward"
                                type="text"
                                required
                                placeholder=""
                            />
                        </div>
                        <div class="col-lg-6">
                            <label id="main_label" class="required" for="residence"> Residence</label>
                            <input
                                name="residence"
                                id="residence"
                                type="text"
                                required
                                placeholder=""
                            />
                        </div>

                        <div class="col-sm-6">
                            <p id="main_label" class="required">Gender</p>
                            <input
                                type="radio"
                                id="Male"
                                name="gender"
                                value="Male"
                                class="radio_custom"
                                required
                            />
                            <label for="Male">Male</label><br />
                            <input
                                type="radio"
                                id="Female"
                                name="gender"
                                value="Female"
                                class="radio_custom"
                            />
                            <label for="Female">Female</label><br />
                            <input
                                type="radio"
                                id="Other"
                                class="radio_custom"
                                name="gender"
                                value="Other"
                            />
                            <label for="Other">Other</label> <br />

                            <input
                                type="radio"
                                id="not_say"
                                class="radio_custom"
                                name="gender"
                                value="Prefer Not Say"
                            />
                            <label for="not_say">Prefer Not Say</label> <br />
                        </div>
                        <div class="col-sm-6">
                            <p id="main_label">Do you have any form of disability?</p>
                            <input
                                type="radio"
                                id="Physical"
                                name="disability"
                                value="Physical"
                                class="radio_custom radio_btn"
                            />
                            <label for="Physical">Physical</label><br />
                            <input
                                type="radio"
                                id="Visual"
                                name="disability"
                                value="Visual"
                                class="radio_custom radio_btn"
                            />
                            <label for="Visual">Visual</label><br />
                            <input
                                type="radio"
                                id="Hearing"
                                class="radio_custom radio_btn"
                                name="disability"
                                value="Hearing"
                            />
                            <label for="Hearing">Hearing</label><br />
                            <input
                                type="radio"
                                id="Speech"
                                class="radio_custom radio_btn"
                                name="disability"
                                value="Speech"
                            />
                            <label for="Speech">Speech</label> <br />
                            <input
                                type="radio"
                                id="disability"
                                class="radio_custom"
                                name="disability"
                                value="Other"
                            />
                            <label for="disability">Other</label> <br />
                            <input
                                type="text"
                                id="custom_amount"
                                class="hideInput customInput"
                                name="disability"
                                value=""
                            />
                        </div>
                        <div class="col-sm-6">
                            <p id="main_label" class="required" >How did you know about the project?</p>
                            <input
                                type="radio"
                                id="internet"
                                name="awareness"
                                value="Internet"
                                class="radio_custom"
                                required
                            />
                            <label for="internet">Internet</label><br />
                            <input
                                type="radio"
                                id="trainingProgram"
                                name="awareness"
                                value="University Clubs"
                                class="radio_custom"
                            />
                            <label for="trainingProgram">University Clubs</label><br />
                            <br />
                        </div>
                        <div class="col-lg-6">
                            <label id="main_label" for="linkedin">
                                LinkedIn profile URL Link (if available)</label
                            >
                            <input
                                name="linkedin"
                                id="linkedin"
                                type="text"
                                placeholder=""
                            />
                        </div>
                        <div class="col-lg-12">
                            <p id="main_label" class="required">
                                This is an e-learning program that requires internet
                                connectivity to your laptop/desktop computer/mobile.What
                                kind of internet connectivity would you use to participate
                                in the course if you are selected
                            </p>
                            <input
                                type="radio"
                                id="WIFI"
                                name="internet_Connectivity"
                                class="radio_custom"
                                value="WIFI"
                                required
                            />
                            <label for="WIFI">WIFI</label><br />
                            <input
                                type="radio"
                                id="mobileInternet"
                                name="internet_Connectivity"
                                class="radio_custom"
                                value="Mobile Internet"
                            />
                            <label for="mobileInternet">Mobile Internet</label><br />
                            <input
                                type="radio"
                                id="Broadband"
                                class="radio_custom"
                                name="internet_Connectivity"
                                value="Broadband"
                            />
                            <label for="Broadband">Broadband</label><br />
                            <input
                                type="radio"
                                id="connectivity"
                                class="radio_custom"
                                name="internet_Connectivity"
                                value="Other"

                            />
                            <label for="connectivity">Other</label>
                            <input
                                type="text"
                                id="custom_connect"
                                class="hideInput customInput"
                                name="internet_Connectivity"
                                value=""
                            />
                        </div>
                        <div class="col-lg-6">
                            <label class="required"  id="main_label" for="access">
                                How would you access the course if you are selected? ( The
                                Course can be accessed through a smartphone/desktop/laptop
                                with internet connectivity )</label
                            >
                            <input
                                name="internet_access"
                                id="access"
                                type="text"
                                required
                                placeholder=""
                            />
                        </div>

                        <div class="col-sm-12">
                            <p id="main_label" class="required" >Your Level of Education</p>
                            <input
                                type="radio"
                                id="masterDegree"
                                name="education_level"
                                value="Master's degree"
                                class="radio_custom"
                                required
                            />
                            <label for="masterDegree">Master's degree</label><br />
                            <input
                                type="radio"
                                id="bachelorDegree"
                                name="education_level"
                                value="Bachelor degree"
                                class="radio_custom"
                            />
                            <label for="bachelorDegree">Bachelor degree</label><br />
                            <input
                                type="radio"
                                id="Diploma"
                                class="radio_custom"
                                name="education_level"
                                value="Diploma"
                            />
                            <label for="Diploma">Diploma</label> <br />
                            <input
                                type="radio"
                                id="Certificate"
                                class="radio_custom"
                                name="education_level"
                                value="Certificate"
                            />
                            <label for="Certificate">Certificate</label> <br />
                            <input
                                type="radio"
                                id="secondary"
                                class="radio_custom"
                                name="education_level"
                                value="Secondary School"
                            />
                            <label for="secondary">Secondary School</label> <br />
                        </div>
                        <div class="col-lg-6">
                            <label class="required"  id="main_label" for="student_club">
                                Which students club do you belong to?(Mention one main)</label
                            >
                            <input
                                name="student_club"
                                id="student_club"
                                type="text"
                                required
                                placeholder="Google Developer Student Club, IEEE, IOT Network etc"
                            />
                        </div>
                        <div class="col-sm-12">
                            <p class="required" id="main_label ">Employment status</p>
                            <input
                                type="radio"
                                id="workedpast"
                                name="employment_Status"
                                value="I am a student"
                                class="radio_custom"
                                required
                            />
                            <label for="workedpast"
                            >I am a student</label
                            ><br />
                            <input
                                type="radio"
                                id="workedpast"
                                name="employment_Status"
                                value="I am a student"
                                class="radio_custom"
                                required
                            />
                            <label for="workedpast"
                            >I worked in the past but currently unemployed</label
                            ><br />
                            <input
                                type="radio"
                                id="lookingForJob"
                                name="employment_Status"
                                value="Currently looking for job"
                                class="radio_custom"
                            />
                            <label for="lookingForJob">Currently looking for job</label
                            ><br />
                            <input
                                type="radio"
                                id="lostJob"
                                class="radio_custom"
                                name="employment_Status"
                                value="I have recently lost my job"
                            />
                            <label for="lostJob">I have recently lost my job</label>
                            <br />
                            <input
                                type="radio"
                                id="teacher"
                                class="radio_custom"
                                name="employment_Status"
                                value="I am an instructor/teacher/trainer of TVET institution"
                            />
                            <label for="teacher"
                            >I am an instructor/teacher/trainer of TVET
                                institution</label
                            >
                            <br />
                        </div>

                        <div class="col-sm-12">
                            <p id="main_label">
                                If you are looking for an internship, job or income
                                opportunity, which sector you are looking into? What type of
                                job/income opportunity you are looking for?
                            </p>
                            <input
                                type="radio"
                                id="Agribusiness"
                                name="opportunities"
                                value="Agribusiness ( food processing, farming etc)"
                                class="radio_custom"
                            />
                            <label for="Agribusiness"
                            >Agribusiness ( food processing, farming etc)</label
                            ><br />
                            <input
                                type="radio"
                                id="Healthcare"
                                name="opportunities"
                                value="Healthcare "
                                class="radio_custom"
                            />
                            <label for="Healthcare">Healthcare </label><br />
                            <input
                                type="radio"
                                id="Information"
                                name="opportunities"
                                value="Information and Communication Technology, outsourcing"
                                class="radio_custom"
                            />
                            <label for="Information"
                            >Information and Communication Technology, outsourcing </label
                            ><br />
                            <input
                                type="radio"
                                id="NGO/Humanitarian"
                                name="opportunities"
                                value="NGO/Humanitarian "
                                class="radio_custom"
                            />
                            <label for="NGO/Humanitarian">NGO/Humanitarian </label><br />
                            <input
                                type="radio"
                                id="Micro"
                                name="opportunities"
                                value="Micro, Small and Medium Enterprise "
                                class="radio_custom"
                            />
                            <label for="Micro">Micro, Small and Medium Enterprise </label
                            ><br />
                            <input
                                type="radio"
                                id="Tourism"
                                name="opportunities"
                                value="Tourism "
                                class="radio_custom"
                            />
                            <label for="Tourism">Tourism </label><br />
                            <input
                                type="radio"
                                id="E-Commerce"
                                name="opportunities"
                                value="E-Commerce "
                                class="radio_custom"
                            />
                            <label for="E-Commerce">E-Commerce </label><br />

                            <input
                                type="radio"
                                id="Government"
                                name="opportunities"
                                value="Government Service"
                                class="radio_custom"
                            />
                            <label for="Government">Government Service </label><br />
                            <input
                                type="radio"
                                id="Media"
                                name="opportunities"
                                value="Media and Communication"
                                class="radio_custom"
                            />
                            <label for="Media">Media and Communication </label><br />
                            <input
                                type="radio"
                                id="Education"
                                name="opportunities"
                                value="Education "
                                class="radio_custom"
                            />
                            <label for="Education">Education </label><br />
                            <input
                                type="radio"
                                id="Banking"
                                name="opportunities"
                                value="Banking,Finace,Communication "
                                class="radio_custom"
                            />
                            <label for="Banking">Banking,Finance,Communication </label
                            ><br />
                            <input
                                type="radio"
                                id="Human"
                                name="opportunities"
                                value="Human Resource Management "
                                class="radio_custom"
                            />
                            <label for="Human">Human Resource Management </label><br />
                            <input
                                type="radio"
                                id="Data"
                                name="opportunities"
                                value="Data Analysis"
                                class="radio_custom"
                            />
                            <label for="Data">Data Analysis </label><br />
                            <input
                                type="radio"
                                id="intern_other"
                                name="opportunities"
                                value="other"
                                class="radio_custom"
                            />
                            <label for="intern_other">other </label><br />
                            <input
                                type="text"
                                id="intern_other_input"
                                class="hideInput customInput"
                                name="opportunities"
                                value=""
                            />
                        </div>
                        <div class="col-sm-12">
                            <p class="required" id="main_label">Why do you deserve this opportunity</p>
                            <textarea id="textarea"
                                name="why_you"
                                required
                                cols="30"
                                rows="10"
                                placeholder="Max 2000 characters"
                                minlength="200"
                                maxlength="2000"
                            ></textarea>
                        </div>
                        <div class="col-lg-12">
                            <h2 class="thisText mt-0 mb-3 lead">
                                Part Time Internship and Mentorship
                                <p style="color: red">(Available only for Tech students)</p>
                            </h2>
                        </div>
                        <div class="col-lg-6">
                            <label id="main_label" for="faculty ">Faculty of Study</label>
                            <input
                                name="faculty"
                                id="faculty"
                                type="text"
                                placeholder=""
                            />
                        </div>
                        <div class="col-lg-6">
                            <label id="main_label" for="yearStudy">Year of Study</label>
                            <input
                                name="year_Study"
                                id="yearStudy"
                                type="text"
                                placeholder=""
                            />
                        </div>
                        <div class="col-sm-12">
                            <p id="main_label" >Area of Specialization</p>
                            <input
                                type="radio"
                                id="electrical_skills"
                                name="specialization_area"
                                value="Electrical Skills"
                                class="radio_custom"
                            />
                            <label for="electrical_skills">Electrical Skills</label><br />
                            <input
                                type="radio"
                                id="mechanical_design"
                                name="specialization_area"
                                value="Mechanical Design"
                                class="radio_custom"
                            />
                            <label for="mechanical_design">Mechanical Design </label
                            ><br />
                            <input
                                type="radio"
                                id="graphical_design"
                                class="radio_custom"
                                name="specialization_area"
                                value="Graphical Design (UI/UX)"
                            />
                            <label for="graphical_design">
                                Graphical Design (UI/UX)
                            </label>
                            <br />
                            <input
                                type="radio"
                                id="ai_ml"
                                class="radio_custom"
                                name="specialization_area"
                                value="AI/ML Design"
                            />
                            <label for="ai_ml">AI/ML Design</label> <br />
                            <input
                                type="radio"
                                id="software_design"
                                class="radio_custom"
                                name="specialization_area"
                                value="software design"
                            />
                            <label for="software_design">Software Design</label> <br />
                            <input
                                type="radio"
                                id="gis"
                                class="radio_custom"
                                name="specialization_area"
                                value="Geographical Information Systems Software."
                            />
                            <label for="gis"
                            >Geographical Information Systems Software.</label
                            >
                            <br />
                        </div>


                        <div class="col-sm-12">
                            <p id="main_label" class="required" >
                                DECLARATION: I commit that the information I have given is
                                correct to the best of my knowledge. I also give permission
                                to GODAN's P4CDA to use the information above on open data
                                analytics and with anonymization
                            </p>
                            <input
                                type="radio"
                                id="Yes"
                                name="declaration"
                                value="Yes"
                                class="radio_custom"
                                required
                            />
                            <label for="Yes">Yes</label><br />
                            <input
                                type="radio"
                                id="No"
                                name="declaration"
                                value="No"
                                class="radio_custom"
                            />
                            <label for="No">No</label><br />
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="x-btn btn-black">Submit</button>
                        </div>
                    </div>
                </form>
                <p class="ajax-response"></p>
            </div>
        </div>
    </div>
    <!-- contact-form-area -->
    @endsection
