  <!-- Navigation -->
  <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
      <div class="container">

          <!-- Image Logo -->
          <a class="navbar-brand logo-image" href="{{ route('home') }}"><img src="assets/images/Jts-logo.jpeg"
                  alt="alternative" style="width: 130px ; height:50px; border-radius:5px"></a>

          <!-- Text Logo - Use this if you don't have a graphic logo -->
          {{-- <a class="navbar-brand logo-text" href="index.html">Mirko</a> --}}

          <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
              <ul class="navbar-nav ms-auto navbar-nav-scroll">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('about') }}">About</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="dropdown01" aria-expanded="true"
                          href="{{ route('services') }}">Services</a>

                      <ul class="dropdown-menu" aria-labelledby="dropdown01">
                          <li><a class="dropdown-item" href="{{ route('livecoverage') }}">Live Coverage</a></li>
                          <li>
                              <div class="dropdown-divider"></div>
                          </li>
                          <li><a class="dropdown-item" href="{{ route('studio') }}">Studio services</a></li>
                          <li>
                              <div class="dropdown-divider"></div>
                          </li>
                          <li><a class="dropdown-item" href="{{ route('hiring') }}">Hiring PA System</a></li>
                          <li>
                              <div class="dropdown-divider"></div>
                          </li>
                          <li><a class="dropdown-item" href="{{ route('dj') }}">DJ Services</a></li>
                          <li>
                              <div class="dropdown-divider"></div>
                          </li>
                          <li><a class="dropdown-item" href="{{ route('photography') }}">Photography Services</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#plans">Plans</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                  </li>
              </ul>
              <span class="nav-item social-icons">
                  <span class="fa-stack">
                      <a href="#your-link">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-facebook-f fa-stack-1x"></i>
                      </a>
                  </span>
                  <span class="fa-stack">
                      <a href="#your-link">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-twitter fa-stack-1x"></i>
                      </a>
                  </span>
              </span>
          </div> <!-- end of navbar-collapse -->
      </div> <!-- end of container -->
  </nav> <!-- end of navbar -->
  <!-- end of navigation -->
