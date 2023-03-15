<!DOCTYPE html>
<html lang="en">

<body>
    @include('inc.header')
    @include('inc.nav')
    <!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <br>
        <br>
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
                    <p class="py-2 para-light">Our media services company, we provide a range of innovative solutions to
                        help businesses stand out in a crowded market. From captivating branding to creative content and
                        targeted advertising, we're here to help you reach your audience and achieve your goals.</p>

                    {{-- <div class="my-3">
                        <a class="btn" href="{{ route('about') }}">Learn More</a>
                    </div> --}}
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

    @include('inc.footer')
</body>

</html>
