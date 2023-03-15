 <!DOCTYPE html>
 <html lang="en">

 <body>
     <!-- Customized Bootstrap Stylesheet -->
     <link href="css/bootstrap.min.css" rel="stylesheet" />

     @include('inc.header')
     @include('inc.nav')


     {{-- log services --}}
     <!-- Service Start -->
     <div class="newsletter text-light py-5">
         <div class="container py-5">
             <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                 <h6 class="text-secondary text-uppercase">Our Services</h6>
                 <h1 class="mb-5">Explore Our Services</h1>
             </div>
             <div class="row g-4">
                 <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                     <div class="service-item p-4">
                         <div class="overflow-hidden mb-4">
                             <img class="img-fluid" src="/assets/images/live-c.jpg" alt="">
                         </div>
                         <h4 class="mb-3">Live Coverage</h4>
                         <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                         <a class="btn-slide mt-2" href="{{ route('livecoverage') }}"><i
                                 class="fa fa-arrow-right"></i><span>Read
                                 More</span></a>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                     <div class="service-item p-4">
                         <div class="overflow-hidden mb-4">
                             <img class="img-fluid" src="/assets/images/photog.jpg" alt="" style="">
                         </div>
                         <h4 class="mb-3">Studio Services</h4>
                         <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                         <a class="btn-slide mt-2" href="{{ route('studio') }}"><i
                                 class="fa fa-arrow-right"></i><span>Read
                                 More</span></a>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                     <div class="service-item p-4">
                         <div class="overflow-hidden mb-4">
                             <img class="img-fluid" src="/assets/images/hiring.jpg" alt="">
                         </div>
                         <h4 class="mb-3">Hiring PA System</h4>
                         <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                         <a class="btn-slide mt-2" href="{{ route('hiring') }}"><i
                                 class="fa fa-arrow-right"></i><span>Read
                                 More</span></a>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                     <div class="service-item p-4">
                         <div class="overflow-hidden mb-4">
                             <img class="img-fluid" src="/assets/images/dj.jpg" alt="">
                         </div>
                         <h4 class="mb-3">Dj Services</h4>
                         <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                         <a class="btn-slide mt-2" href="{{ route('dj') }}"><i
                                 class="fa fa-arrow-right"></i><span>Read
                                 More</span></a>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                     <div class="service-item p-4">
                         <div class="overflow-hidden mb-4">
                             <img class="img-fluid" src="/assets/images/photography2.jpg" alt=""
                                 style="height:19rem;">
                         </div>
                         <h4 class="mb-3">Photography Service</h4>
                         <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                         <a class="btn-slide mt-2" href="{{ route('photography') }}"><i
                                 class="fa fa-arrow-right"></i><span>Read
                                 More</span></a>
                     </div>
                 </div>
                 {{-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                     <div class="service-item p-4">
                         <div class="overflow-hidden mb-4">
                             <img class="img-fluid" src="img/service-6.jpg" alt="">
                         </div>
                         <h4 class="mb-3">Warehouse Solutions</h4>
                         <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                         <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read
                                 More</span></a>
                     </div>
                 </div> --}}
             </div>
         </div>
     </div>
     <!-- Service End -->
     {{-- end of log services --}}

     <!-- Services -->
     <section class="services d-flex align-items-center py-5" id="services">
         <div class="container text-light">
             <br>
             <br>
             <br>
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
                         <p class="para-light">Jt Services values innovation in media solutions. By staying on top of
                             the
                             latest technologies and trends, Jt offers clients cutting-edge media solutions to stay
                             ahead
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
                             that thinking outside the box is essential to finding unique and effective solutions for
                             our
                             clients. By fostering a culture of creativity and innovation.</p>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="card bg-transparent">
                         <i class="fas fa-home fa-2x"></i>
                         <h4 class="py-2">DIVERSITY & INCLUSIONS</h4>
                         <p class="para-light">We celebrate diversity and promote an inclusive work environment that
                             values and respects all individuals. By embracing different perspectives and backgrounds,
                             we
                             create a more creative and innovative team that better understands and serves our clients.
                         </p>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="card bg-transparent">
                         <i class="fas fa-tv fa-2x"></i>
                         <h4 class="py-2">COLLABORATION</h4>
                         <p class="para-light">Collaboration is a key value at Jt Services. We believe in working
                             closely
                             with our clients to understand their needs and goals, and fostering teamwork among our
                             employees to deliver exceptional media solutions.</p>
                     </div>
                 </div>
             </div> <!-- end of row -->
         </div> <!-- end of container -->
     </section>
     <!-- end of services -->



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
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="lib/wow/wow.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/counterup/counterup.min.js"></script>
 </body>

 </html>
