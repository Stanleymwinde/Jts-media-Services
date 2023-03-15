<!DOCTYPE html>
<html lang="en">
@include('inc.header')
@include('inc.nav')

<body>
    <div class="container-fluid page-header py-5 ">
        <video src="/assets/videos/studio.mp4" autoplay muted loop></video>
        {{-- samnel state --}}
        <div class="" data-wow-delay="0.1s">
            <div class="container py-5">
                <h1 class="display-4 animated text-center slideInDown pb-4" style="color:white">
                    Studio Sessions
                </h1>
            </div>
        </div>
    </div>


    <div class="about d-flex align-items-center text-light py-5" style="padding-top: 7rem">
        <div class="container text-light">
            <div class="row">
                <div class="col-md-8 blog-content  pe-5">
                    <p class="para-light"style="padding-top: 7rem">
                        JT Media offers state-of-the-art studio services that are designed to meet the needs of its
                        clients. The company's studios are equipped with the latest technology, including
                        high-definition cameras, lighting equipment, and sound systems, ensuring that every production
                        is of the highest quality. JT Media's team of experienced producers and technicians work closely
                        with clients to create customized solutions that meet their unique needs.</p>
                    <br>
                    <br>
                    <img src="/assets/images/studio.jpg" class="img-fluid w-70 rounded" style="height:25rem"
                        alt="" />

                    <blockquote>
                        <p class="para-light">The company's studios are ideal for a wide range of productions, including
                            news programs, talk shows, commercials, and live events. With its advanced green-screen
                            technology, JT Media can create realistic virtual environments that transport viewers to
                            different locations around the world. The company's studios also feature a range of set
                            designs that can be customized to fit the theme of any production.</p>
                    </blockquote>
                    <p class="para-light">JT Media's studio services are backed by a team of professionals who are
                        dedicated to delivering exceptional results. From pre-production planning to post-production
                        editing, the company's team of experts work tirelessly to ensure that every detail is taken care
                        of. With its commitment to quality and innovation, JT Media is the go-to choice for clients who
                        demand the very best in studio services. </p><br>
                    <br>
                    <br>

                </div>

                <div class="col-md-4 sidebar" style="padding-top: 5rem">
                    <div class="sidebar-box"></div>
                    <div class="sidebar-box">
                        <img src="" alt="" class="img-fluid mb-4 w-70 rounded" />
                        <h3 class="text-black">Studio Sessions</h3>
                        <p>
                        <p>JT Media's studio sessions are backed by a team of experienced producers and technicians who
                            work closely with clients to deliver exceptional results.</p>
                        </p>
                        <p>
                            <a href="{{ route('contact') }}" class="btn btn-color btn-md text-white">
                                need a studio?
                            </a>
                        </p>
                    </div>
                    <br>
                    <div class="sidebar-box">
                        <h3 class="text-black">why you need a studio</h3>
                        <p></p>
                    </div>
                    <img src="/assets/images/studio1.jpg" class="img-fluid mb-4 w-70 rounded" alt="" />
                    <p class>JT Service studio sessions provide a professional and versatile environment for recording
                        music, podcasts, voiceovers, and other audio projects.</p>
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
