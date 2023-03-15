<!DOCTYPE html>
<html lang="en">
@include('inc.header')
@include('inc.nav')

<body>
    <div class="container-fluid page-header py-5 ">
        <video src="/assets/videos/dj.mp4" autoplay muted loop></video>
        {{-- samnel state --}}
        <div class="" data-wow-delay="0.1s">
            <div class="container py-5">
                <h1 class="display-4 animated text-center slideInDown pb-9" style="color:white; margin-top:3rem">
                    DJ Sessions
                </h1>
            </div>
        </div>
    </div>



    <div class="about d-flex align-items-center text-light py-5" style="padding-top: 7rem">
        <div class="container text-light">
            <div class="row">
                <div class="col-md-8 blog-content  pe-5">
                    <p class="para-light"style="padding-top: 7rem">
                        JT Media offers world-class DJ services that are perfect for a wide range of events, including
                        weddings, parties, corporate events, and more. With a team of experienced DJs and
                        state-of-the-art equipment, JT Media can create the perfect atmosphere for any occasion. Whether
                        you're looking for upbeat dance music or a more relaxed ambiance, JT Media can tailor its
                        services to meet your specific needs.</p>
                    <br>
                    <br>
                    <img src="/assets/images/dj1.jpg" class="img-fluid w-70 rounded" style="height:25rem"
                        alt="" />

                    <blockquote>
                        <p class="para-light">All of the company's DJs have extensive experience in the industry and are
                            skilled at reading the crowd and playing the right music at the right time. JT Media's DJs
                            use only the highest quality equipment, including professional-grade speakers, mixers, and
                            lighting systems, to ensure that your event sounds and looks amazing.</p>
                    </blockquote>
                    <p class="para-light">JT Media's DJ services also come with a range of customizable options,
                        including song requests, custom playlists, and even personalized introductions for your guests.
                        The company's team of professionals will work closely with you to create a memorable experience
                        that you and your guests will never forget. </p><br>
                    <br>
                    <br>

                </div>

                <div class="col-md-4 sidebar" style="padding-top: 5rem">
                    <div class="sidebar-box"></div>
                    <div class="sidebar-box">
                        <img src="" alt="" class="img-fluid mb-4 w-70 rounded" />
                        <h3 class="text-black">Disk Jockey</h3>
                        <p>
                        <p>So whether you're planning a wedding reception, a corporate event, or a birthday party, JT
                            Media's DJ services are the perfect way to create a fun and memorable atmosphere that
                            everyone will enjoy.</p>
                        </p>
                        <p>
                            <a href="{{ route('contact') }}" class="btn btn-color btn-md text-white">
                                Need a Dj?
                            </a>
                        </p>
                    </div>
                    <div class="sidebar-box">
                        <h3 class="text-black">Why need a Dj</h3>
                        <p></p>
                    </div>
                    <img src="/assets/images/dj2.jpg" class="img-fluid mb-4 w-70 rounded" alt="" />
                    <p></p>
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
