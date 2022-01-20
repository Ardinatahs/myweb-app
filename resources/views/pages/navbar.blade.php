    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#navhome">
              <img src="{{ asset('img/my-logoprofile.png') }}" width="134" height="57" alt="my-logo" loading="lazy">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item navhome">
                <a class="nav-link active" href="#navhome">Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item navaboutme">
                <a class="nav-link" href="#navaboutme">About</a>
              </li>
              <li class="nav-item navexperience">
                <a class="nav-link" href="#navexperience">Experience</a>
              </li>
              <li class="nav-item navportfolio">
                <a class="nav-link" href="#navportfolio">Portfolio</a>
              </li>
              <li class="nav-item naveducation">
                <a class="nav-link" href="#naveducation">Education</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Skills</a>
              </li>
            </ul>

            <!-- Mobile Button -->
          <from class="from-inline d-sm-block d-md-none">
            <button class="btn-kontak my-2 my-sm-0">Contact Me <img src="{{ asset('img/send_24px.svg') }}" alt="iconsend"></button>
          </from>

          <!-- Deskton Button -->
          <from class="from-inline my-2 my-lg-0 d-none d-md-block">
            <button class="btn-kontak btn-navbar-right my-2 my-sm-0 px-4">Contact Me <img src="{{ asset('img/send_24px.svg') }}" alt="iconsend"></button>
          </from>
          </div>
        </div>
      </nav>