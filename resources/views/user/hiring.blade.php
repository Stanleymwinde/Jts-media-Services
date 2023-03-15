<!DOCTYPE html>
<html lang="en">
@include('inc.header')
@include('inc.nav')

<body>
    <div class="container-fluid page-header1 py-5 ">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown"></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('services') }}">Services</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
        <hr>


        {{-- samnel state --}}
        <div class="" data-wow-delay="0.1s">
            <div class="container py-5">
                <h1 class="display-4 animated text-center slideInDown pb-4" style="color:white">
                    Hiring PA
                </h1>
            </div>
        </div>
    </div>


    <div class="about d-flex align-items-center text-light py-5" style="padding-top: 7rem">
        <div class="container text-light">
            <div class="row">
                <div class="col-md-8 blog-content  pe-5">
                    <p class="para-light"style="padding-top: 7rem">
                        JT Media is always on the lookout for talented and dedicated individuals to join its team as
                        Personal Assistants (PAs). As a PA at JT Media, you will have the opportunity to work alongside
                        some of the most experienced and respected professionals in the media industry. You will be
                        responsible for a wide range of tasks, including managing schedules, booking travel
                        arrangements, and handling administrative duties.</p>
                    <br>
                    <br>
                    <img src="/assets/images/hiringhands.jpg" class="img-fluid w-70 rounded" style="height:25rem"
                        alt="" />

                    <blockquote>
                        <p class="para-light">To be considered for a PA position at JT Media, you must have excellent
                            organizational and communication skills, as well as a strong attention to detail. You should
                            be able to work well under pressure and be comfortable dealing with high-profile
                            individuals. Previous experience in a similar role is preferred, but not required.</p>
                    </blockquote>
                    <p class="para-light">As a PA at JT Media, you will have the opportunity to grow and develop your
                        skills in a dynamic and fast-paced environment. You will work alongside a team of professionals
                        who are passionate about what they do, and who are committed to delivering exceptional results.
                        If you are looking for a challenging and rewarding career in the media industry, then a PA
                        position at JT Media could be the perfect fit for you. </p><br>
                    <br>
                    <br>

                </div>

                <div class="col-md-4 sidebar" style="padding-top: 5rem">
                    <div class="sidebar-box"></div>
                    <div class="sidebar-box">
                        <img src="" alt="" class="img-fluid mb-4 w-70 rounded" />
                        <h3 class="text-black"> Hiring PA</h3>
                        <p>
                        <p>JT Media offers a challenging and rewarding career for Personal Assistants (PAs). The company
                            seeks individuals with excellent organizational and communication skills who can handle
                            administrative duties, travel arrangements, and manage schedules. As part of the team, PAs
                            work alongside seasoned professionals in a dynamic, fast-paced environment.</p>
                        </p>
                        <p>
                            <a href="{{ route('contact') }}" class="btn btn-color btn-md text-white">
                                need some help?
                            </a>
                        </p>
                    </div>
                    <div class="sidebar-box">
                        <h3 class="text-black">Why need a PA</h3>
                        <p></p>
                    </div>
                    <img src="/assets/images/help.jpg" class="img-fluid mb-4 w-70 rounded" alt="" />
                    <p>JT Media values individuals who are dedicated and passionate about their work. While previous
                        experience in a similar role is preferred, it is not required. With a commitment to excellence,
                        innovation, and growth, JT Media offers PAs the opportunity to develop their skills and advance
                        their careers in the media industry.</p>
                </div>
            </div>
        </div>
    </div>



    {{-- end of samnel state --}}
    <!-- Services -->
    <section class="services d-flex align-items-center py-5" id="services">
        <div class="container text-light">
            <div class="text-center pb-4">
                <p>OUR SERVICES</p>
                <h2 class="py-2">Explore unlimited possibilities</h2>
                <p class="para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae asperiores, quia
                    accusantium sunt corporis optio recusandae? Nostrum libero pariatur cumque, ipsa dolores
                    voluptatibus voluptate alias sit fuga. Itaque, ea quo.</p>
            </div>
            <div class="row gy-4 py-2" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-home fa-2x"></i>
                        <h4 class="py-2">HOME BROADBAND</h4>
                        <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit
                            consequatur doloribus natus in suscipit!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-wifi fa-2x"></i>
                        <h4 class="py-2"> HOME WIFI</h4>
                        <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit
                            consequatur doloribus natus in suscipit!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-phone fa-2x"></i>
                        <h4 class="py-2">HOME BROADBAND</h4>
                        <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit
                            consequatur doloribus natus in suscipit!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-mobile fa-2x"></i>
                        <h4 class="py-2">MOBILE CONNECTION</h4>
                        <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit
                            consequatur doloribus natus in suscipit!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-home fa-2x"></i>
                        <h4 class="py-2">SECURITY</h4>
                        <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit
                            consequatur doloribus natus in suscipit!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-tv fa-2x"></i>
                        <h4 class="py-2">TV SETUP BOX</h4>
                        <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit
                            consequatur doloribus natus in suscipit!</p>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- end of services -->

    @include('inc.footer')
</body>

</html>
