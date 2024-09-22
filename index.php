<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <link rel="stylesheet" href="style.css">
      <!-- <link rel="stylesheet" href="index.css"> -->
      <!-- <link rel="stylesheet" href="script.js"> -->
      
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> -->
  </head>
<body>
<!-- <div class="preloder" id="preloder">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
    </div> -->

    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
<div class="container-fluid">                
    <a class="navbar-brand" href="#">
    <img class="mylogo" src="Image/others/logo.jpg" width="40px" alt="">&nbsp;&nbsp;Techzentech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li><li class="nav-item">
          <a class="nav-link" href="#services">Service</a>               
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blogs
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
            <li><a class="dropdown-item" href="#">Boostrap</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Php</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#faq">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
     <!-- End Navbar -->

     <!-- Start Carouel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item bg1 active">
      <div class="mycaption">
        <h1>Create Amazing Business Websites</h1>
        <p>“Techzen Tech – Your one-stop-shop for all your tech needs. We offer innovative and 
          reliable solutions to help you achieve your business goals. Contact us today and take your business to the next level!”</p>
        <a href="#" class="getstarted">Get started</a>
      </div>
    </div>
    <div class="carousel-item bg2">
    <div class="mycaption">
        <h1>Create Amazing Business Websites</h1>
        <p>“Techzen Tech – Your one-stop-shop for all your tech needs. We offer innovative and 
          reliable solutions to help you achieve your business goals. Contact us today and take your business to the next level!”</p>
        <a href="#" class="getstarted">Get started</a>
      </div>
    </div>
   <div class="carousel-item bg3"> 
    <div class="mycaption">
        <h1>Create Amazing Business Websites</h1>
        <p>“Techzen Tech – Your one-stop-shop for all your tech needs. We offer innovative and
         reliable solutions to help you achieve your business goals. Contact us today and take your business to the next level!”</p>
        <a href="#" class="getstarted">Get started</a>
      </div>  
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      <!-- End Carouel -->
       <!-- Start About section -->
        <section id="about" class="about">
          <div class="container">
            <div class="row mb-5">

              <div class="col-md-12 mb-5">
                <span class="mainheading">About</span>
                <span class="subheading">Read more about us</span>
             </div>

              <div class="col-md-6">
              <p>Our vision is to help businesses in leveraging technology to achieve their goals and thrive in a competitive market.</p>
                <ul>
                  <li><i class="bi bi-check-circle"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                  <li><i class="bi bi-check-circle"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                  <li><i class="bi bi-check-circle"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                </ul>
              </div>

                <div class="col-md-6 aboutus">
                
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga aliquid repellendus ea quasi nesciunt 
                  sit quas animi quos perspiciatis, alias natus quaerat sapiente hic obcaecati suscipit itaque, accusantium vel error!</p>
              <a href="" class="aboutlearnmore">Learn more</a>
               
              </div>

              </div>

              <!-- Cards start -->
                  
                
                <div class="row mt-5">
                  <div class="col-md-4 col-sm-12">
                    <div class="mycard">
                      <span><i class="bi bi-pencil-fill"></i></span>
                      <span class="counter">Design</span>
                      <hr>
                      <p>For websites, apps, and other digital platforms, our design service offers visually 
                        appealing and user-friendly designs. To produce unique designs that complement your brand identity and resonate
                       with your target market, we use the most up-to-date design tools and methods.</p>
                    </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                    <div class="mycard">
                      <span><i class="bi bi-bar-chart-line-fill"></i></span>
                      <span class="counter">Development</span>
                      <hr>
                      <p>Our Development service offers full-stack development solutions for web and mobile applications, 
                        using cutting-edge technologies to build scalable, secure, and reliable applications that meet business 
                        needs. We ensure delivery on time and within budget.</p>
                    </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                    <div class="mycard">
                      <span><i class="bi bi-rocket-takeoff-fill"></i></span>
                      <span class="counter">Marketing</span>
                      <hr>
                      <p>To assist businesses in reaching their target market and achieving their objectives, our 
                        marketing service provides all-inclusive digital marketing solutions. We create and carry out
                       campaigns that get results using the most modern tools and techniques.</p>
                    </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                    <div class="mycard">
                      <span><i class="bi bi-microsoft-teams"></i></span>
                      <span class="counter">Social Media</span>
                      <hr>
                      <p>From content production to community administration, our social media solution assists 
                        businesses in engaging with their target audience to raise brand awareness and enhance
                         website traffic.</p>
                    </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                    <div class="mycard">
                      <span><i class="bi bi-wallet-fill"></i></i></span>
                      <span class="counter">eCommerce</span>
                      <hr>
                      <p>By combining them with secure payment gateways, management of stock programs, and shipping 
                        options, our e-commerce service offers end-to-end solutions for businesses wishing to launch 
                        or improve their online store.</p>
                    </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                    <div class="mycard">
                      <span><i class="bi bi-person-raised-hand"></i></span>
                      <span class="counter">Help & Support</span>
                      <hr>
                      <p>To make sure that digital assets are available around-the-clock, our Help & help service offers 
                        dependable and rapid technical help. Our support staff is available to respond to inquiries and 
                        offer fixes for any technical issues.</p>
                    </div>
                   </div>
                  
                 </div>
              
               <!-- Cards end -->
           </div>
      
        </section>
        <!-- End About section -->
         
         <!-- Help -->
         <div class="container-fluid">
          <div class="row p-5 help"> 
            <h1>Call for help</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis consequuntur sequi blanditiis tempora 
              ullam voluptas nisi quidem recusandae accusantium placeat expedita reiciendis a ea dolorem quaerat inventore
               dicta fuga illo nemo, ipsum vero fugit. Sunt deserunt illo aspernatur</p>
               <p class="help-phone"><i class="bi bi-telephone-fill"></i>+91 9090909090</p>


          </div>
         </div>
          <!--End Help -->
          <!-- Service -->
<section id="services" class="services">
  <div class="container">
    <div class="row">
    <div class="col-md-12 mb-5">
                <span class="mainheading">Service</span>
                <span class="subheading">Look at our service</span>
             </div>
             <div class="col-md-6">
              <div class="service-card">
                <span>
                <h3><i class="bi bi-briefcase-fill"></i><br>Service 1</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  Modi corrupti aliquid expedita cum obcaecati eligendi sint eos dolorum 
                  voluptas. Qui?</p>
                  <a href="">Read more</a>
              </span>
            
              </div>
             </div>
             <div class="col-md-6">
              <div class="service-card">
                <span>
                <h3><i class="bi bi-cpu-fill"></i><br>Service 2</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  Modi corrupti aliquid expedita cum obcaecati eligendi sint eos dolorum voluptas. Qui?</p>
                  <a href="">Read more</a>
                </span>
            
              </div>
             </div>
             <div class="col-md-6">
              <div class="service-card">
                <span>
                <h3><i class="bi bi-bank2"></i><br>Service 3</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  Modi corrupti aliquid expedita cum obcaecati eligendi sint eos dolorum voluptas. Qui?</p>
                  <a href="">Read more</a>
                </span>
            
              </div>
             </div>
             <div class="col-md-6">
              <div class="service-card">
                <span>
                <h3><i class="bi bi-box-seam-fill"></i><br>Service 4</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  Modi corrupti aliquid expedita cum obcaecati eligendi sint eos dolorum voluptas. Qui?</p>
                  <a href="">Read more</a>
                </span>
            
              </div>
             </div>
           
             </div>
            </div>
             
    </div>
  </div>

</section>
           <!-- End Service -->

           <!-- Start Team -->
<section id="team" class="team">
   <div class="container">
      <div class="row">
          <div class="col-md-12 mb-5">
                <span class="mainheading">Team</span>
                <span class="subheading">Your Vision, Our Design</span>
          </div>
            <div class="col-md-4 col-sm-12">
              <div class="teamcard">
                <img src="Image/team/ashok.jpeg" class="img-fluid" alt="">
                    <h3>Ashok</h3>
                    <p>Director / Senior Web Developer</p>
                    <div class="socialmedia">
                       <ul>
                          <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                          <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                          <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                          <li><a href="#"><i class="bi bi-envelope"></i></a></li>
                          </ul>
                     </div>
             </div>
              </div>
          <div class="col-md-4 col-sm-12">
            <div class="teamcard">
                    <img src="Image/team/haree.jpeg" class="img-fluid" alt="">
                    <h3>Hareesh</h3>
                    <p>Web Developer (Front-end)</p>
                <div class="socialmedia">
                      <ul>
                   <li> <a href="#"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-envelope"></i></a></li>
                    </ul>
               </div>
             </div>
             </div>

        <div class="col-md-4 col-sm-12">
          <div class="teamcard">
                    <img src="Image/team/aalaya.jpeg" class="img-fluid" alt="">
                    <h3>Aalayam</h3>
                    <p>Web Developer (Back-end)</p>
                <div class="socialmedia">
                      <ul>
                   <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
          </div>

    </div>
   </div>

 </section>
           <!-- End Team -->

<!-- Start FAQ -->  

<section id="faq" class="faqs">
   <div class="container">
     <div class="row">
          <div class="col-md-12 mb-5">
             <span class="mainheading">FAQs</span>
            <span class="subheading">Freqently asked questions</span>
          </div>
          <div class="col-md-4">
            <img src="Image/others/team-prorit.jpg" width="350px" height="450px" alt="">
          </div>
          <div class="col-md-8">
            <p>FAQs (Frequently Asked Questions) content serves as a centralized place on a website where visitors can find answers to common queries. 
              The main purpose of FAQ content is to address questions that customers or users might have about your products, services, or processes, which reduces the need for direct communication and improves the user experience.</p>
               <div class="accordion" id="accordionExample">
                 <div class="accordion-item">
                   <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                     What is the difference between web design and web development?
                     </button>
                   </h2>
                   <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                       <strong>Web design vs Web development</strong> Web design focuses on the visual and user-experience aspects of 
                       a website, while web development is concerned with the functionality, coding, and programming 
                       that make the website operate.
                     </div>
                   </div>
                 </div>
                 <div class="accordion-item">
                   <h2 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     What are responsive web designs?
                     </button>
                   </h2>
                   <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                       <strong>Responsive web design</strong> Responsive web design ensures that your website adjusts seamlessly to different devices like desktops, tablets, and smartphones. It improves usability and accessibility across various screen sizes.
                     </div>
                   </div>
                 </div>
                 <div class="accordion-item">
                   <h2 class="accordion-header" id="headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     What is a CMS (Content Management System)?
                     </button>
                   </h2>
                   <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                       <strong>Content Management System</strong> A CMS is a platform like WordPress, Joomla, or Drupal that allows you to manage and update your website content easily without needing extensive coding knowledge.
                     </div>
                   </div>
                 </div>
                 <div class="accordion" id="accordionExample">
                 <div class="accordion-item">
                   <h2 class="accordion-header" id="headingFour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                     Can I update my website after it's designed?
                     </button>
                   </h2>
                   <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                       <strong>Yes,</strong> If your website is built with a CMS, you can update the content, images, and layout without needing technical expertise. Many web designers also offer ongoing maintenance packages.
                     </div>
                   </div>
                 </div>
               </div>
          </div>
       </div>
    </div>
</section>
           
<!-- END FAQ -->

<!-- Start gallery -->

<section id="gallery" class="gallery">
  <div class="container">
    <div class="row">
    <div class="col-md-12 mb-5">
             <span class="mainheading">Gallery</span>
            <span class="subheading">Where Every Piece Tells a Stroy</span>
          </div>
          <div class="col-md-12">
            <!-- Start tab -->
          <nav>
  <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
    <button class="nav-link active"
     id="nav-home-tab" 
     data-bs-toggle="tab" 
     data-bs-target="#nav-photos" 
     type="button" role="tab" 
     aria-controls="nav-home" 
     aria-selected="true">Photos</button>
    <button class="nav-link" 
    id="nav-profile-tab" 
    data-bs-toggle="tab" 
    data-bs-target="#nav-videos" 
    type="button" role="tab" 
    aria-controls="nav-profile" 
    -selected="false">Videos</button>
    
  </div>
</nav>
<!-- End Tab -->
 <!-- Tab content -->
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" 
  id="nav-photos" role="tabpanel" 
  aria-labelledby="nav-home-tab">
  Photos content</div>
  <div class="tab-pane fade" 
  id="nav-videos" role="tabpanel" 
  aria-labelledby="nav-profile-tab">
Videos content</div>
 
</div>
          </div>
    </div>
  </div>
</section>

<!-- End gallery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>