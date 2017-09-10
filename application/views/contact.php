<!DOCTYPE html>
<html class="no-js">
   <!-- Head Start -->
        <?php $this->load->view("head");?>
    <!-- head close -->
  <body>
    <!-- Header Start -->
      <?php $this->load->view("header");?>  
    <!-- header close -->
        
        <!-- Slider Start -->
        <section id="global-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h1>Drop Us A Note</h1>
                  <p>Don’t just take our word for it. Check out some of our latest work.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact form start -->
        <section id="contact-form">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Subject">
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <form>
                    <div class="form-group-2">
                      <textarea class="form-control" rows="3" placeholder="Your Message"></textarea>
                    </div>
                    <button class="btn btn-default" type="submit">Send Message</button>
                  </form>
                </div>
              </div>
            </div>
            <div id="contact-box" class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>Stop By For A visit</h2>
                  <ul class="address-block">
                    <li>
                      <i class="fa fa-map-marker"></i>North Main Street,Brooklyn Australia
                    </li>
                    <li>
                      <i class="fa fa-envelope-o"></i>Email: contact@mail.com
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>Phone:+88 01672 506 744
                    </li>
                  </ul>

                  <ul class="social-icons">
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>We Also Count In Google Map</h2>
                    <div class="google-map">
                      <div id="map"></div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Call to action Start -->
        <section id="call-to-action">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h2>We design delightful digital experiences.</h2>
                  <p>Read more about what we do and our philosophy of design. Judge for yourself The work and results we’ve achieved for other clients, and meet our highly experienced Team who just love to design.</p>
                  <a class="btn btn-default btn-call-to-action" href="#" >Tell Us Your Story</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- footer Start -->
        <?php $this->load->view("footer");?> 
      </body>
    </html>