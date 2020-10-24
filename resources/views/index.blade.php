@extends('layouts.app')

@section('home')
<div id="home" class="intro route bg-image" style="background-image: url(img/intro-bg.jpg)">
    <!--/ Intro Skew Star /-->
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">I am Askarbek Makhmedov</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Web Developer,Web Designer,Frontend Developer</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll btn-lg" href="CVexample.txt" download style="background-color: #be3131">Download CV</a></p> -->
        </div>
      </div>
    </div>
</div>
<!--/ Intro Skew End /-->
@endsection
@section('about')
<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="img/about.jpg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span>Askarbek Makhmedov</span></p>
                      <p><span class="title-s">Profile: </span> <span>Freelancer, student</span></p>
                      <p><span class="title-s">Email: </span> <span>askarbek101@gmail.com</span></p>
                      <p><span class="title-s">Phone: </span> <span>+7(700)302-9701</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Skills</p>
                  <span>HTML</span> <span class="pull-right">85%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>CSS3</span> <span class="pull-right">65%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="65" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>PHP</span> <span class="pull-right">80%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>JAVASCRIPT</span> <span class="pull-right">50%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  <p class="lead">
                    An ambitious problem solver with a passion for online businesses, and who would like to join into a team of open minded developers.
                    Skills include computer networking, analytical thinking and creative problem solving.

                  </p>
                  <p class="lead">
                    +3 years study in BCIT in Vancouver,Canada brought him irreplaceable experience in C++, in X-code(Macbook) program and high english level as a bonus.
                  </p>
                  <p class="lead">
                    Last 2 years (web development, web design, ) more or less info?
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
@section('service')
<section id="service" class="services-mf route">
    <!--/ Section Services Star /-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Services
            </h3>
            <p class="subtitle-a">
              Main directions
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-monitor"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">C++ problem solving</h2>
              <p class="s-description text-center">
                  Askarbek has started his carrier when he was 16 solving competitive problems, what makes his critical thinking be on the top level
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-code-working"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Web Development</h2>
              <p class="s-description text-center">
                Web development bla bla bla
                  PHP Laravel backend
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Responsive Design</h2>
              <p class="s-description text-center">
                creating and editing design of websites working with css scss files... bla bla bla
                  frontend
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>    <!--/ Section Services End /-->
@endsection
@section('counter')
<div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">50</p>
              <span class="counter-text">WORKS</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">7</p>
              <span class="counter-text">YEARS OF EXPERIENCE</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-people"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">8</p>
              <span class="counter-text">TOTAL CLIENTS</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-lightbulb"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">15</p>
              <span class="counter-text">IDEAS ACCEPTED</span>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
@section('portfolio')
<section id="work" class="portfolio-mf sect-pt4 route">
    <!--/ Section Portfolio Star /-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portfolio
            </h3>
            <p class="subtitle-a">
              I know some of you are visuals, so here is my portfolio. Enjoy!
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/img1.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/img1.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Those are just random guys :D only few of them are my friends</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Football</span> / <span class="w-date">18 Sep. 2020</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/img2.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/img2.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">I love snowboarding <3</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Shymbulak Resort</span> / <span class="w-date">24 Feb. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/img3.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/img3.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Sunday - Family day!</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Farrel farm</span> / <span class="w-date">17 Oct. 2020</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
              <div class="work-box">
                  <a href="img/img4.jpg" data-lightbox="gallery-mf">
                      <div class="work-img">
                          <img src="img/img4.jpg" alt="" class="img-fluid">
                      </div>
                      <div class="work-content">
                          <div class="row">
                              <div class="col-sm-8">
                                  <h2 class="w-title">Hiking is my passion</h2>
                                  <div class="w-more">
                                      <span class="w-ctegory">Kok Zhailay</span> / <span class="w-date">30 May. 2020</span>
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="w-like">
                                      <span class="ion-ios-plus-outline"></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
          </div>
          <div class="col-md-4">
              <div class="work-box">
                  <a href="img/img5.jpg" data-lightbox="gallery-mf">
                      <div class="work-img">
                          <img src="img/img5.jpg" alt="" class="img-fluid">
                      </div>
                      <div class="work-content">
                          <div class="row">
                              <div class="col-sm-8">
                                  <h2 class="w-title">MORE HIKING, now its beyond the "Kok Zhailau"</h2>
                                  <div class="w-more">
                                      <span class="w-ctegory">3 brother peak</span> / <span class="w-date">21 June. 2019</span>
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="w-like">
                                      <span class="ion-ios-plus-outline"></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
          </div>
          <div class="col-md-4">
              <div class="work-box">
                  <a href="img/img6.jpg" data-lightbox="gallery-mf">
                      <div class="work-img">
                          <img src="img/img6.jpg" alt="" class="img-fluid">
                      </div>
                      <div class="work-content">
                          <div class="row">
                              <div class="col-sm-8">
                                  <h2 class="w-title">Lovely backyard BBQ</h2>
                                  <div class="w-more">
                                      <span class="w-ctegory">Friends house</span> / <span class="w-date">1 Oct. 2019</span>
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="w-like">
                                      <span class="ion-ios-plus-outline"></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
          </div>
      </div>
</div> <!--/ Section Portfolio End /-->
@endsection
@section('testimonial')
<div class="testimonials paralax-mf bg-image""><!--/ Section Testimonials Star /-->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">
                  <img src="img/oogway.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author" style ="color: #671a1a">Oogway</span>
              </div>
              <div class="content-test">
                  <p class="description lead" style ="color: #671a1a">
                      Yesterday is history, tomorrow is a mystery, but today is a gift. That is why it is called the present.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/kitty.jpg" alt="" class="rounded-circle b-shadow-a">
                <span class="author" style ="color: #671a1a">Kitty</span>
              </div>
              <div class="content-test">
                <p class="description lead" style ="color: #671a1a">
                  Meow meeeeeow, meow meow!
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                <span class="author" style ="color: #671a1a">MUM</span>
              </div>
              <div class="content-test">
                <p class="description lead" style ="color: #671a1a">
                  aougewlgkdfjho;nlt;lmerdthj;l'ek;yreujp;g
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection


