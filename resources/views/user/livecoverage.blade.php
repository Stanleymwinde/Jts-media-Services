<!DOCTYPE html>
<html lang="en">
@include('inc.header')
@include('inc.nav')

<body>
    <div class="container-fluid page-header py-5 ">
        <video src="/assets/videos/live.mp4" autoplay muted loop></video>
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
                    Live Coverage
                </h1>
            </div>
        </div>
    </div>


    <div class="about d-flex align-items-center text-light py-5" style="padding-top: 7rem">
        <div class="container text-light">
            <div class="row">
                <div class="col-md-8 blog-content  pe-5">
                    <p class="para-light"style="padding-top: 7rem">
                        JT Media is a leading media company that provides its audience with timely news coverage from
                        all around the world. The company has an extensive network of journalists and correspondents
                        that ensures that it stays ahead of the curve in delivering breaking news as it happens. With
                        its cutting-edge technology and equipment, JT Media provides live coverage of major events,
                        ensuring that viewers never miss a moment of the action.</p>
                    <br>
                    <br>
                    <img src="/assets/images/live-c.jpg" class="img-fluid w-70 rounded" style="height:25rem"
                        alt="" />

                    <blockquote>
                        <p class="para-light">Whether it's politics, sports, entertainment, or business, JT Media has it
                            all covered. The company's team of experienced reporters and anchors provide insightful
                            analysis and expert commentary on all the important stories of the day. With its 24-hour
                            news cycle, JT Media keeps viewers informed about the latest developments around the clock,
                            making it a reliable source of news for people all over the world.</p>
                    </blockquote>
                    <p class="para-light">In addition to its news coverage, JT Media also offers a range of programming
                        designed to inform and entertain viewers. From documentaries and talk shows to dramas and
                        reality TV, JT Media provides something for everyone. With its extensive reach and diverse
                        audience, JT Media is a powerful force in the media landscape, shaping the way people think
                        about the world around them. </p><br>
                    <br>
                    <br>

                </div>

                <div class="col-md-4 sidebar" style="padding-top: 5rem">
                    <div class="sidebar-box"></div>
                    <div class="sidebar-box">
                        <img src="" alt="" class="img-fluid mb-4 w-70 rounded" />
                        <h3 class="text-black">Live Coverage</h3>
                        <p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium beatae vel laudantium
                            nam, nulla molestiae magnam eos enim ad architecto. Cumque, maxime placeat fugit harum ipsam
                            in consectetur aliquid quo?</p>
                        </p>
                        <p>
                            <a href="{{ route('contact') }}" class="btn btn-color btn-md text-white">
                                need to go live?
                            </a>
                        </p>
                    </div>
                    <br>
                    <div class="sidebar-box">
                        <h3 class="text-black">Why you need us?</h3>
                        <br>
                    </div>
                    <img src="/assets/images/photog.jpg" class="img-fluid mb-4 w-70 rounded" alt="" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quas a quaerat nihil ab vero
                        velit excepturi. Non, magni. Suscipit optio modi nobis voluptates dolor debitis veniam natus
                        unde tempore.</p>
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
