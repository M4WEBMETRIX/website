@include('partials.head')

<body>

  <!--==========================
  Header
  ============================-->
  @include('partials.navbar')
><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  @include('partials.intro')
  <!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <!-- <p>We are a leading provider of innovative software solutions. Our company specializes in delivering custom-made software to meet the unique needs of our clients. We offer a wide range of services, including web development, mobile app development, e-commerce solutions, and software consulting.</p> -->
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2" style="text-align: justify;line-height: 10px">
            <h4 style="font-weight: bold;">Our Goal</h4>
            <p>
                Our goal is to help businesses of all sizes understand and improve their online performance, by providing actionable insights and powerful tools that can help them drive more traffic, increase conversions, and grow their revenue.
            </p>
            <p style="text-indent: 30px">
                We understand that every business is unique, and that's why we offer a customized approach to each of our clients. Our team of experienced professionals will work closely with you to understand your specific needs and goals, and then develop a tailored solution that is designed to meet those needs.
            </p>
          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="{{asset('asset/img/about-img.svg')}}" class="img-fluid" alt="">
          </div>
        </div>
        <div class="row about-extra">
            <div class="col-lg-6 wow fadeInUp">
              <img src="{{asset('asset/img/about-extra-1.svg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" style="text-align: justify;line-height: 20px">
              <h4>So why choose us?</h4>
              <p>
                Because we're committed to providing you with the best service possible, and we're dedicated to helping you achieve your business goals.
              </p>
              <p style="text-indent: 30px">
                Whether you're looking to improve your website's search engine rankings, increase conversions, or gain a deeper understanding of your customers, M4WebMetrix has the expertise and tools to help you succeed.
             </p>
            </div>
          </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container-fluid ">

        <header class="section-header">
          <h3>Services</h3>
          <p>We deliver the following services to our clients and much more.</p>
        </header>

        <div class="row" >

          <div class="col-md-4 col-lg-4  wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Web Development</a></h4>
              <p class="description"  style="text-align: justify;">Our web development team which is made of the UI/UX, Front-End, Back-End, System Analyst and other members, come together to make your web applications the best.</p>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Mobile Application Development</a></h4>
              <p class="description" style="text-align: justify;">We develop Mobile Software applications for your businesses and services, using hybrid development tools such as React Native and Flutter.</p>
            </div>
          </div>

          <div class="col-md-4 col-lg-4  wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">SEO Services</a></h4>
              <p class="description" style="text-align: justify;">We help your business get the right audience, by developing the right strategies to help boost your business visibilty.</p>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Content Writing</a></h4>
              <p class="description" style="text-align: justify;">Here at M4 Webmetrixs we provide quality and scaleable writeups for businesses, organizations, etc, that will boost the productivity of the business or company.</p>
            </div>
          </div>

          <div class="col-md-4 col-lg-4  wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Advertisement</a></h4>
              <p class="description" style="text-align: justify;">We help you move your business to the next level, by scaling up your business and connecting your business to the right audience. </p>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Graphics Design</a></h4>
              <p class="description" style="text-align: justify;">We offer high quality graphics designs for your businesses, schools, events and anything you can think of, quickly. We bring your dreams to reality</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach ($types as $type)
              <li data-filter=".filter-{{$type}}">{{$type}}</li>
              @endforeach
              {{-- <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li> --}}
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
            @foreach ($projects as $project)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$project["filter"]}}">
                <div class="portfolio-wrap">
                  <img src="{{$project["img"]}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><a href="#">{{$project["name"]}}</a></h4>
                    <p>{{$project["description"]}}</p>
                    <div>
                      <a href="{{$project["img"]}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    @include('partials.testimonials')
<!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
{{--    @include('partials.team')--}}
      <!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
{{--    @include('partials.clients')--}}
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Contact us today to learn more about how we can help you take your business to the next level.</p>
        </div>
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>12B Adolphus Plaza, Off Ibagwa Road, Nsukka, Nigeria.</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p><a href="mailto:info@m4webmetrix.com" style="color:black">info@m4webmetrix.com</a></p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <a href="tel:+234 811 808 5789" style="color:black"><p>+234 811 808 5789</p></a>
              </div>
            </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-6">

            <div class="form">
              <div id="sendmessage" @class('text-center') style="border: 1px solid #1e7e34!important; color: #1c7430!important;margin: 10px 0;">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  @include('partials.footer')
 <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  {{-- <div id="preloader"></div> --}}

  <!-- JavaScript Libraries -->
  @include('partials.scripts')

</body>
</html>
