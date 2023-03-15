  <!DOCTYPE html>
  <html lang="en">

  <body>
      @include('inc.header')
      @include('inc.nav')
      <!-- Contact -->
      <section class="contact d-flex align-items-center py-5 " id="contact">
          <div class="container-fluid text-light">
              <div class="row">
                  <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5"
                      data-aos="fade-right">
                      <div style="width:90%">
                          <div class="text-center text-lg-start py-4 pt-lg-0">
                              <p>CONTACT US</p>
                              <h2 class="py-2">Send your query</h2>
                              <p class="para-light">If you have any inquiries or feedback regarding JT, our media
                                  company, please don't hesitate to contact us. We're happy to hear from our audience
                                  and always strive to improve our services.</p>
                              @if (session('success_message'))
                                  <div class="alert alert-success">
                                      {{ session('success_message') }}
                                  </div>
                              @endif
                          </div>
                          <div>
                              <form action="{{ route('contact.send') }}" method="POST">
                                  @csrf
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-group py-2">
                                              <input type="text" class="form-control form-control-input"
                                                  id="exampleFormControlInput1" name="name" placeholder="Enter name">
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group py-2">
                                              <input type="phone" class="form-control form-control-input"
                                                  id="exampleFormControlInput2" name="phone"
                                                  placeholder="Enter phone number">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group py-1">
                                      <input type="email" class="form-control form-control-input"
                                          id="exampleFormControlInput3" name="email" placeholder="Enter email">
                                  </div>
                                  <div class="form-group py-2">
                                      <textarea class="form-control form-control-input" name="message" id="exampleFormControlTextarea1" rows="6"
                                          placeholder="Message">
                                    </textarea>
                                  </div>

                          </div>
                          <div class="my-3">
                              <input class="btn form-control-submit-button" type="submit" />
                          </div>
                          </form>
                      </div> <!-- end of div -->
                  </div> <!-- end of col -->
                  <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down">
                      <img class="img-fluid d-none d-lg-block" src="./assets/images/contact.jpg" alt="contact">
                  </div> <!-- end of col -->
              </div> <!-- end of row -->
          </div> <!-- end of container -->
      </section> <!-- end of contact -->


      <!-- Location -->
      <section class="location text-light py-5">
          <div class="container" data-aos="zoom-in">
              <div class="row">
                  <div class="col-lg-3 d-flex align-items-center">
                      <div class="p-2"><i class="far fa-map fa-3x"></i></div>
                      <div class="ms-2">
                          <h6>ADDRESS</h6>
                          <p>Teuku Umar ST. 1919</p>
                      </div>
                  </div>
                  <div class="col-lg-3 d-flex align-items-center">
                      <div class="p-2"><i class="fas fa-mobile-alt fa-3x"></i></div>
                      <div class="ms-2">
                          <h6>CALL FOR QUERY</h6>
                          <p>(800) 265 216 2020</p>
                      </div>
                  </div>
                  <div class="col-lg-3 d-flex align-items-center">
                      <div class="p-2"><i class="far fa-envelope fa-3x"></i></div>
                      <div class="ms-2">
                          <h6>SEND US MESSAGE</h6>
                          <p>info@jtsservice.com</p>
                      </div>
                  </div>
                  <div class="col-lg-3 d-flex align-items-center">
                      <div class="p-2"><i class="far fa-clock fa-3x"></i></div>
                      <div class="ms-2">
                          <h6>OPENING HOURS</h6>
                          <p>09:00 AM - 18:00 PM</p>
                      </div>
                  </div>
              </div>
              <!-- end of row -->
          </div>
          <!-- end of container -->
      </section>
      <!-- end of location -->
      @include('inc.footer')
  </body>

  </html>
