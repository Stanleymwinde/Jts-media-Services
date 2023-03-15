<!DOCTYPE html>
<html lang="en">

<body>
    @include('inc.header')
    @include('inc.nav')


    <!-- Home -->
    <section class="home py-5 d-flex align-items-center" id="header">
        <div class="container text-light py-5" data-aos="fade-right">
            <video autoplay muted loop id="bg-video">
                <source src="/assets/videos/camera.mp4" type="video/mp4">
            </video>
            <h1 class="headline">Welcome to <span class="home_text">Jts</span>
                <br>A company for comprehensive media solutions
            </h1>
            <p class="para para-light py-3">Jts provide a range of innovative solutions to help businesses stand out in
                a crowded market. From captivating branding to creative content and targeted advertising, we're here to
                help you reach your audience and achieve your goals."</p>
            <div class="d-flex align-items-center">
                <p class="p-2"><i class="fas fa-laptop-house fa-lg"></i></p>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="d-flex align-items-center">
                <p class="p-2"><i class="fas fa-wifi fa-lg"></i></p>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="my-3">
                <a class="btn" href="{{ route('services') }}">View Plans</a>
            </div>
        </div>
    </section>
    <!--end of home-->

    <!-- Information -->
    <section class="information">
        <div class="container-fluid">
            <div class="row text-light">
                <div class="col-lg-4 text-center p-5" data-aos="zoom-in">
                    <i class="fas fa-tachometer-alt fa-3x p-2"></i>
                    <h4 class="py-3">Studio Sessions</h4>
                    <p class="para-light">In today's fast-paced world, reliability is paramount, and Jt Service excels
                        in this regard. With a 99% media uptime and unwavering 24/7 support, clients can rely on Jt for
                        their media needs.</p>
                </div>
                <div class="col-lg-4 text-center p-5" data-aos="zoom-in">
                    <i class="fas fa-clock fa-3x p-2"></i>
                    <h4 class="py-3">Live Coverage</h4>
                    <p class="para-light">Our 99% media uptime ensures reliable and consistent media coverage for
                        clients, providing peace of mind that their brand's message is being effectively communicated.
                    </p>
                </div>
                <div class="col-lg-4 text-center p-5 text-dark" data-aos="zoom-in">
                    <i class="fas fa-headset fa-3x p-2"></i>
                    <h4 class="py-3">Hiring PA</h4>
                    <p class="para-light">We round-the-clock support to ensure that clients receive
                        continuous media coverage. With 24/7 support, Jts provides clients with a peace of mind knowing
                        that their media presence is being actively monitored and managed at all times. This allows Jts
                        to quickly respond to any media-related issues and ensure that clients receive timely coverage.
                    </p>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of information -->


    <!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <p>ABOUT US</p>
                    <h1>We are top media <br> service company</h1>
                    <p class="py-2 para-light">Jt Services specializes in providing comprehensive solutions to
                        businesses seeking to enhance their brand identity, create engaging content, and reach their
                        target audience through strategic advertising. Trust us to elevate your media game and make your
                        business stand out from the competition.</p>
                    <p class="py-2 para-light">Our media services company, we provide a range of innovative solutions to
                        help businesses stand out in a crowded market. From captivating branding to creative content and
                        targeted advertising, we're here to help you reach your audience and achieve your goals.</p>

                    <div class="my-3">
                        <a class="btn" href="{{ route('about') }}">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down">
                    <img class="img-fluid" src="./assets/images/about.jpg" alt="about">
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- end of about -->


    <!-- Services -->
    <section class="services d-flex align-items-center py-5" id="services">
        <div class="container text-light">
            <div class="text-center pb-4">
                <p>OUR SERVICES</p>
                <h2 class="py-2">Explore unlimited possibilities</h2>
                <p class="para-light">Jt Services believes in exploring unlimited possibilities for its clients. By
                    providing reliable media coverage and 24/7 support, Jt helps clients to reach their full potential
                    and expand their horizons. Whether it's expanding into new markets or reaching new audiences.</p>
            </div>
            <div class="row gy-4 py-2" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-home fa-2x"></i>
                        <h4 class="py-2">INNOVATION</h4>
                        <p class="para-light">Jt Services values innovation in media solutions. By staying on top of the
                            latest technologies and trends, Jt offers clients cutting-edge media solutions to stay ahead
                            of the competition at all times, all seasons irespective of the trending market calendar.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-wifi fa-2x"></i>
                        <h4 class="py-2"> QUALITY</h4>
                        <p class="para-light">We prioritize quality in all aspects of media production and delivery. By
                            upholding high standards and attention to detail, we ensure that our clients receive the
                            best possible media solutions that meet their needs and exceed their expectations.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-phone fa-2x"></i>
                        <h4 class="py-2">INTEGRITY</h4>
                        <p class="para-light">Integrity is our core value . We conduct business with
                            honesty, transparency, and ethical standards, ensuring that our clients can trust us to
                            deliver on our promises. We believe in doing the right thing, even when no one is watching.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-mobile fa-2x"></i>
                        <h4 class="py-2">CREATIVITY</h4>
                        <p class="para-light">At Jt Services, we encourage creativity in media solutions. We believe
                            that thinking outside the box is essential to finding unique and effective solutions for our
                            clients. By fostering a culture of creativity and innovation.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-home fa-2x"></i>
                        <h4 class="py-2">DIVERSITY & INCLUSIONS</h4>
                        <p class="para-light">We celebrate diversity and promote an inclusive work environment that
                            values and respects all individuals. By embracing different perspectives and backgrounds, we
                            create a more creative and innovative team that better understands and serves our clients.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-tv fa-2x"></i>
                        <h4 class="py-2">COLLABORATION</h4>
                        <p class="para-light">Collaboration is a key value at Jt Services. We believe in working closely
                            with our clients to understand their needs and goals, and fostering teamwork among our
                            employees to deliver exceptional media solutions.</p>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- end of services -->
    <!-- Newsletter -->
    <section class="newsletter text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center text-lg-start" data-aos="fade-right">
                    <h4 class="py-1">Call To Action</h4>
                    <p class="para-light">we invite you to experience the benefits of our innovative, high-quality, and
                        reliable media solutions. Contact us today to learn more about how we can help your business
                        grow and thrive in today's competitive media landscape. Let us work together to explore
                        unlimited possibilities and achieve your goals.</p>
                </div>
                <div class="col-lg-4 d-flex align-items-center" data-aos="fade-down">
                    {{-- <div class="input-group my-3">
                        <input type="text" class="form-control p-2" placeholder="Enter your email address"
                            aria-label="Recipient's email"> --}}
                    <a class="btn-secondary text-light" style="padding-right: 12rem;" type="button"
                        href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>
        </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of newsletter -->

    {{-- <!-- Plans -->
    <section class="plans d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <p>OUR PLANS</p>
                <h2 class="py-2">Explore unlimited possibilities</h2>
                <p class="para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae asperiores, quia
                    accusantium sunt corporis optio recusandae? Nostrum libero pariatur cumque, ipsa dolores
                    voluptatibus voluptate alias sit fuga. Itaque, ea quo.</p>
            </div>
            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">BASIC BUNDLE</h4>
                        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <h4 class="py-3">$24/Month</h4>
                        <div class="my-3">
                            <a class="btn" href="#your-link">View Plans</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">BUSINESS BUNDLE</h4>
                        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <h4 class="py-3">$99/Month</h4>
                        <div class="my-3">
                            <a class="btn" href="#your-link">View Plans</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">PREMIUM BUNDLE</h4>
                        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <h4 class="py-3">$199/Month</h4>
                        <div class="my-3">
                            <a class="btn" href="#your-link">View Plans</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans --> --}}


    <!-- Work -->
    <section class="work d-flex align-items-center py-5">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                    <img class="img-fluid" src="./assets/images/work.jpg" alt="work">
                </div>
                <div class="col-lg-5 d-flex align-items-center px-4 py-3" data-aos="">
                    <div class="row">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <p>OUR WORK</p>
                            <h2 class="py-2">Explore unlimited possibilities</h2>
                            <p class="para-light">JT Servic specializes in creating compelling digital content for
                                businesses and individuals. Our team of experts works tirelessly to ensure that your
                                message reaches your intended audience, whether through social media, video production
                                and more, check our Services, Let us help you tell your story today.</p>
                        </div>
                        <div class="container" data-aos="fade-up">
                            <div class="row g-5">
                                <div class="col-6 text-start">
                                    <i class="fas fa-briefcase fa-2x text-start"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1258"
                                        data-purecounter-duration="3">1</h2>
                                    <p>PROJECTS COMPLETED</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-award fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="150"
                                        data-purecounter-duration="3">1</h2>
                                    <p>AWARDS</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-users fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1255"
                                        data-purecounter-duration="3">1</h2>
                                    <p>CUSTOMER ACTIVE</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-clock fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1157"
                                        data-purecounter-duration="3">1</h2>
                                    <p>GOOD REVIEWS</p>
                                </div>
                            </div>
                        </div> <!-- end of container -->
                    </div> <!-- end of row -->
                </div> <!-- end of col-lg-5 -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of work -->


    <!-- Testimonials -->
    <div class="slider-1 testimonial text-light d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                    <p>TESTIMONIALS</p>
                    <h2 class="py-2">What Our Clients Says</h2>
                    <p class="para-light">At JT Service media company, we take pride in delivering exceptional service
                        and results to our clients. Don't just take our word for it, here are some reviews from our
                        satisfied clients who have trusted us with their digital content needs.</p>
                </div>
            </div> <!-- end of row -->
            <div class="row p-2" data-aos="zoom-in">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <p>JT Service media company brought my vision to life, their expertise and
                                            attention to detail is unmatched.</p>

                                        <div class="d-flex pt-4">
                                            <div>
                                                <img class="avatar" src="./assets/images/testimonial-1.jpg"
                                                    alt="testimonial">
                                            </div>
                                            <div class="ms-3 pt-2">
                                                <h6>Marlene Visconte</h6>
                                                <p>General Manager - Scouter</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <p>Their social media management has significantly increased my online presence
                                            and engagement, I highly recommend JT Service</p>
                                        <div class="d-flex pt-4">
                                            <div>
                                                <img class="avatar" src="./assets/images/testimonial-2.jpg"
                                                    alt="testimonial">
                                            </div>
                                            <div class="ms-3 pt-2">
                                                <h6>John Spiker</h6>
                                                <p>Team Leader - Vanquish</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <p>The video production they did for my business exceeded my expectations, I
                                            couldn't be happier with the final product.</p>
                                        <div class="d-flex pt-4">
                                            <div>
                                                <img class="avatar" src="./assets/images/testimonial-3.jpg"
                                                    alt="testimonial">
                                            </div>
                                            <div class="ms-3 pt-2">
                                                <h6>Stella Virtuoso</h6>
                                                <p>Design Chief - Upscale</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <p>"Their team is professional, responsive, and easy to work with. I'll
                                            definitely be using JT Service again for future projects.</p>
                                        <div class="d-flex pt-4">
                                            <div>
                                                <img class="avatar" src="./assets/images/testimonial-4.jpg"
                                                    alt="testimonial">
                                            </div>
                                            <div class="ms-3 pt-2">
                                                <p>Mike tim</p>
                                                <p>Investor - TechGroww</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of testimonials -->


    @include('inc.footer')

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6411814e4247f20fefe5fda0/1gri627ar';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>
