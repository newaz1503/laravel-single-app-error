 @extends('website.layouts.app')

 @section('title','Welcome Home')

 @section('content')
 <section class="about section-padding prelative" data-scroll-index='1'>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center">
            <h3>About</h3>
            <span class="line"></span>
            <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
          </div>
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-4">
                <div class="icon-box wow fadeInUp" data-wow-delay="0.2s"> <i class="fa fa-life-ring" aria-hidden="true"></i>
                  <h5>Support</h5>
                  <p>Phasellus lobortis justo a magna facilisis, in commodo tellus rutrum. Sed vitae condimentum nulla.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="icon-box wow fadeInUp" data-wow-delay="0.4s"> <i class="fa fa-mobile" aria-hidden="true"></i>
                  <h5>Cross Platform</h5>
                  <p>Phasellus lobortis justo a magna facilisis, in commodo tellus rutrum. Sed vitae condimentum nulla.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="icon-box wow fadeInUp" data-wow-delay="0.6s"> <i class="fa fa-bolt" aria-hidden="true"></i>
                  <h5>Fast</h5>
                  <p>Phasellus lobortis justo a magna facilisis, in commodo tellus rutrum. Sed vitae condimentum nulla.</p>
                </div>
              </div>
            </div>
            <a href="#" class="about-btn">Learn More</a> </div>
        </div>
      </div>
    </div>
  </section>
  <!-------About End------->

  <!-------Video Start------->
  <section class="video-section prelative text-center white">
    <div class="section-padding video-overlay">
      <div class="container">
        <h3>Watch Now</h3>
        <i class="fa fa-play" id="video-icon" aria-hidden="true"></i>
        <div class="video-popup">
          <div class="video-src">
            <div class="iframe-src">
              <iframe src="https://www.youtube.com/embed/Ku52zNnft8k?rel=0&amp;showinfo=0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------Video End------->

  <!-------Features Start------->
  <section class="feature section-padding" data-scroll-index='2'>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center">
            <h3>Features</h3>
            <span class="line"></span>
            <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
          </div>
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                  <div class="media-body text-right media-right-margin">
                    <h5>Fast Processing</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                  </div>
                  <div class="media-right icon-border"> <span class="fa fa-bolt" aria-hidden="true"></span> </div>
                </div>
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                  <div class="media-body text-right media-right-margin">
                    <h5>Low Power Consuming</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                  </div>
                  <div class="media-right icon-border"> <span class="fa fa-battery-full" aria-hidden="true"></span> </div>
                </div>
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                  <div class="media-body text-right media-right-margin">
                    <h5>Wifi Compatibility</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                  </div>
                  <div class="media-right icon-border"> <span class="fa fa-wifi" aria-hidden="true"></span> </div>
                </div>
              </div>
              <div class="col-md-4 d-none d-md-block d-lg-block">
                <div class="feature-mobile"> <img src="images/iphone-screen-with-shadow.png" class="img-fluid wow fadeInUp"/> </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                  <div class="media-left icon-border media-right-margin"> <span class="fa fa-check-double" aria-hidden="true"></span> </div>
                  <div class="media-body text-left">
                    <h5>Regular Updates</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                  </div>
                </div>
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                  <div class="media-left icon-border media-right-margin"> <span class="fa fa-dollar-sign" aria-hidden="true"></span> </div>
                  <div class="media-body text-left">
                    <h5>Save Money</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                  </div>
                </div>
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                  <div class="media-left icon-border media-right-margin"> <span class="fa fa-hdd" aria-hidden="true"></span> </div>
                  <div class="media-body text-left">
                    <h5>Unlimited Storage</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------Features End------->

  <!-------Team Start------->
  <section class="team section-padding" data-scroll-index='3'>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center">
            <h3>Our Team</h3>
            <span class="line"></span>
            <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
          </div>
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-4">
                <div class="team-detail wow bounce" data-wow-delay="0.2s"> <img src="images/user1.jpg" class="img-fluid"/>
                  <h4>Nitu Singh</h4>
                  <p>Marketing Specialist</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="team-detail wow bounce" data-wow-delay="0.4s"> <img src="images/user2.jpg" class="img-fluid"/>
                  <h4>Yogesh Singh</h4>
                  <p>CEO & Founder</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="team-detail wow bounce" data-wow-delay="0.6s"> <img src="images/user3.jpg" class="img-fluid"/>
                  <h4>Nisha Sharma</h4>
                  <p>Web Developer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------Team End------->

  <!-------Testimonial Start------->
  <section class="testimonial section-padding" data-scroll-index='4'>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center white">
            <h3>Testimonials</h3>
            <span class="line"></span>
            <p class="white">Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
          </div>

        <div class="section-content">
          <div class="row">
            <div class="offset-md-2 col-md-8 col-sm-12">
              <div class="slider">
                <div class="slider-item">
                  <div class="test-img"><img src="images/user1.jpg" alt="Placeholder" width="157" height="157"></div>
                  <div class="test-text"><span class="title"><span>John Michal</span> Digital Designer</span> Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam eratvo lutpat.</div>
                </div>
                <div class="slider-item">
                  <div class="test-img"><img src="images/user3.jpg" alt="Placeholder" width="157" height="157"></div>
                  <div class="test-text"><span class="title"><span>Steve Smith</span> App User</span> Euismod tincidunt ut laoreet dolore magna aliquam eratvo lutpat. Ut wisi enim ad minim veniam, quis nostrud v</div>
                </div>
                <div class="slider-item">
                  <div class="test-img"><img src="images/user3.jpg" alt="Placeholder" width="157" height="157"></div>
                  <div class="test-text"><span class="title"><span>Gordon Shaw</span> Blogger</span> Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam eratvo lutpat. Ut wisi enim ad minim veniam, quis nostrud v</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>

  <!-------Testimonial End------->

  <!-------FAQ Start------->
  <section class="faq section-padding prelative" data-scroll-index='5'>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center">
            <h3>Frequently Asked Questions</h3>
            <span class="line"></span>
            <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
          </div>
          <div class="section-content">
            <div class="row">
              <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
                <h4>Nam tellus felis, dignissim quis dui ?</h4>
                <p>Suspendisse fermentum placerat enim, at pellentesque augue. Nullam elit est, ultricies et tellus ac, euismod placerat orci. Donec commodo.</p>
              </div>
              <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
                <h4>Mauris scelerisque, dui non faucibus vulputate ?</h4>
                <p>Sed tempus in neque ac rhoncus. Phasellus vehicula, erat tempor malesuada egestas, mauris tellus malesuada erat, at vestibulum nulla ex et lectus. Nullam elit est, ultricies et tellus ac, euismod placerat orci.</p>
              </div>
              <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
                <h4>Nullam elit est, ultricies et tellus ac ?</h4>
                <p>Ut vestibulum euismod aliquet. Quisque nec malesuada nibh. Vivamus euismod nunc eu leo faucibus, vel elementum justo posuere. In sed varius nisi. Curabitur id porta ipsum, et vestibulum dui.</p>
              </div>
              <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
                <h4>Suspendisse fermentum placerat enim, at pellentesque augue elit est ?</h4>
                <p>Vivamus euismod nunc eu leo faucibus, vel elementum justo posuere. In sed varius nisi.</p>
              </div>
              <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.6s">
                <h4>Ut vestibulum euismod aliquet. Quisque nec malesuada nibh ?</h4>
                <p>Suspendisse fermentum placerat enim, at pellentesque augue. Nullam elit est, ultricies et tellus ac, euismod placerat orci. Donec commodo dapibus congue.</p>
              </div>
              <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.6s">
                <h4>Donec commodo dapibus congue ?</h4>
                <p>Nullam elit est, ultricies et tellus ac, euismod placerat orci fermentum placerat enim, at pellentesque augue. Nullam elit est, ultricies et tellus ac, euismod placerat orci. Donec commodo dapibus congue.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------FAQ End------->

  <!-------Contact Start------->
  @include('website.layouts.contact')

  <!-------Contact End------->

  <!-------Download End------->
  <section class="download section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center white">
            <h3>Download Our App</h3>
            <span class="line"></span>
            <p class="white">Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="section-content text-center">
            <ul>
              <li><a href="#"><img src="images/appstore.png" class="wow fadeInUp" data-wow-delay="0.4s"/></a></li>
              <li><a href="#"><img src="images/playstore.png" class="wow fadeInUp" data-wow-delay="0.7s"/></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
 @endsection
