<!DOCTYPE html>
<html lang="en">
@include('inc.header')
@include('inc.nav')

<body>
    <div class="container-fluid page-header py-5 ">
        <video src="/assets/videos/camera.mp4" autoplay muted loop></video>
        {{-- samnel state --}}
        <div class="" data-wow-delay="0.1s">
            <div class="container py-5">
                <h1 class="display-4 animated text-center slideInDown pb-9" style="color:white; margin-top:5rem">
                    Photography
                </h1>
            </div>
        </div>
    </div>


    <div class="about d-flex align-items-center text-light py-5" style="padding-top: 7rem">
        <div class="container text-light">
            <div class="row">
                <div class="col-md-8 blog-content  pe-5">
                    <p class="para-light"style="padding-top: 7rem">
                        Media's photography services are designed to capture the most important moments of your life.
                        Whether you're looking for a professional photographer for your wedding, a family portrait, or a
                        corporate event, JT Media has you covered. With a team of experienced photographers and
                        state-of-the-art equipment, the company can create stunning images that you will cherish for
                        years to come.</p>
                    <br>
                    <br>
                    <img src="/assets/images/cam2.jpg" class="img-fluid w-70 rounded" style="height:25rem"
                        alt="" />

                    <blockquote>
                        <p class="para-light">All of JT Media's photographers are experts in their field and have a keen
                            eye for detail. They use only the latest equipment and techniques to capture images that are
                            both beautiful and timeless. The company's photographers work closely with clients to
                            understand their vision and create a customized plan that meets their unique needs.</p>
                    </blockquote>
                    <p class="para-light">In addition to its photography services, JT Media also offers a range of
                        post-production options, including editing and retouching, to ensure that your images look their
                        best. The company's team of professionals will work with you to create a final product that
                        exceeds your expectations. </p><br>
                    <br>
                    <br>

                </div>

                <div class="col-md-4 sidebar" style="padding-top: 5rem">
                    <div class="sidebar-box"></div>
                    <div class="sidebar-box">
                        <img src="" alt="" class="img-fluid mt-4 w-70 rounded" />
                        <h3 class="text-black">Photography</h3>
                        <p>
                        <p>So whether you're looking for a photographer for your wedding, a family portrait, or a
                            corporate event, JT Media's photography services are the perfect choice.</p>
                        </p>
                        <p>
                            <a href="{{ route('contact') }}" class="btn btn-color btn-md text-white">
                                need some Pics?
                            </a>
                        </p>
                    </div>
                    <div class="sidebar-box">
                        <h3 class="text-black">Why need a photographer</h3>
                        <p></p>
                    </div>
                    <img src="/assets/images/cam3.jpg" class="img-fluid mb-4 w-70 rounded" alt="" />
                    <p>With its commitment to quality and attention to detail, the company is the go-to choice for
                        clients who demand the very best in photography services.</p>
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
