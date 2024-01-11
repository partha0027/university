@extends('layout.master')
@section('content')
    <section class="section main-banner" id="top" data-section="section1">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
           
              
  
     
            <ol class="carousel-indicators">
                <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExample" data-slide-to="1"></li>
                <li data-target="#carouselExample" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/s-1.jpg" alt="Image 1" class="d-block w-100 ">
                    <div class="video-overlay header-text">
                        <div class="caption">
                            <h2>WELCOME TO</h2>
                            <h6>Gauhati University Center For Distance And Online Education</h6>
                       
                            
                            <div class="main-button">
                                <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/s-2.jpg" alt="Image 2" class="d-block w-100">
                    <div class="video-overlay header-text">
                        <div class="caption">
                            <h2>Another Slide Title</h2>
                            <h6>Another Slide Description</h6>
                            <div class="main-button">
                                <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/s-3.jpg" alt="Image 2" class="d-block w-100">
                    <div class="video-overlay header-text">
                        <div class="caption">
                            <h2>Another Slide Title</h2>
                            <h6>Another Slide Description</h6>
                            <div class="main-button">
                                <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more carousel items with images as needed -->
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="features-post">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-pencil"></i>All Courses</h4>
                            </div>
                            <div class="content-hide">
                                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a
                                    posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet
                                    libero eu, vehicula libero.</p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a posuere imperdiet.</p>
                                <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="features-post second-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-graduation-cap"></i>Virtual Class</h4>
                            </div>
                            <div class="content-hide">
                                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a
                                    posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet
                                    libero eu, vehicula libero.</p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a posuere imperdiet.</p>
                                <div class="scroll-to-section"><a href="#section3">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="features-post third-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-book"></i>Real Meeting</h4>
                            </div>
                            <div class="content-hide">
                                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a
                                    posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet
                                    libero eu, vehicula libero.</p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a posuere imperdiet.</p>
                                <div class="scroll-to-section"><a href="#section4">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

  <div class="container">
    <div class="row">
        {{-- <div class="col-sm-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>

        </div> --}}
    
        <div class="col-md-12">
            <div class="section-heading contact">
                <h2> Why Choose GUCDOE</h2>
            </div>
        </div>
        <div class="col-md-12">
            <div id='tabs'>
                <ul>
                    <li><a href='#tabs-1'>About GUCDOE</a></li>
                    <li><a href='#tabs-2'>Top Management</a></li>
                    <li><a href='#tabs-3'>Quality Meeting</a></li>
                </ul>
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/uni1.jpg" alt="">

                            </div>
                            <div class="col-md-6">
                                <h4>About GUCDOE</h4>
                                <p style="text-align: justify">The Gauhati University Centre for Distance and Online
                                    Education (GUCDOE),
                                    formerly known as Institute of Distance and Open Learning (IDOL) and Post
                                    Graduate Correspondence School (PGCS) was established in May 1998 with the
                                    objective to ensure the opportunity to pursue quality higher education to
                                    the large number of students who could not pursue higher education through
                                    conventional mode of education. GUCDOE strives to accommodate the students
                                    who cannot enroll in the conventional system of higher education due to
                                    various factors like limited number of seats in Post Graduate classes,
                                    livelihood compulsion etc. and aims to impart quality education in an
                                    intellectually challenging learning environment.</p>
                                     
                            <div class="main-button">
                                <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
                            </div>
                            </div>
                       

                        </div>

                    </article>
                    <article id='tabs-2'>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/choose-us-image-02.png" alt="">
                            </div>
                            <div class="col-md-6">
                                <h4>Top Level</h4>
                                <p>You can modify this HTML layout by editing contents and adding more pages as
                                    you needed. Since this template has options to add dropdown menus, you can
                                    put many HTML pages.</p>
                                <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio,
                                    nec interdum quam felis non ante.</p>
                            </div>
                        </div>
                    </article>
                    <article id='tabs-3'>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/choose-us-image-03.png" alt="">
                            </div>
                            <div class="col-md-6">
                                <h4>Quality Meeting</h4>
                                <p>You are NOT allowed to redistribute this template ZIP file on any template
                                    collection website. However, you can use this template to convert into a
                                    specific theme for any kind of CMS platform such as WordPress. For more
                                    information, you shall <a rel="nofollow" href="https://templatemo.com/contact"
                                        target="_parent">contact
                                        TemplateMo</a> now.</p>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>

  </div>

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      
           
        
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Choose Your Course</h2>
                        </div>
                    </div>
                  
    
                    <div class="owl-carousel owl-theme mt-5">
                        <div class="item">
                            <img src="images/courses-01.jpg" alt="Course #1">
                            <div class="down-content">
                                <h4>Digital Marketing</h4>
                                <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and
                                    Pexels.</p>
                                <div class="author-image">
                                    <img src="images/author-01.png" alt="Author 1">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Learn More.. <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/courses-02.jpg" alt="Course #2">
                            <div class="down-content">
                                <h4>Business World</h4>
                                <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac
                                    ipsum porta.</p>
                                <div class="author-image">
                                    <img src="images/author-02.png" alt="Author 2">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Learn More.. <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/courses-03.jpg" alt="Course #3">
                            <div class="down-content">
                                <h4>Media Technology</h4>
                                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                    lobortis enim.</p>
                                <div class="author-image">
                                    <img src="images/author-03.png" alt="Author 3">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Learn More.. <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/courses-04.jpg" alt="Course #4">
                            <div class="down-content">
                                <h4>Communications</h4>
                                <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and
                                    Pexels.</p>
                                <div class="author-image">
                                    <img src="images/author-04.png" alt="Author 4">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Learn More.. <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/courses-05.jpg" alt="">
                            <div class="down-content">
                                <h4>Business Ethics</h4>
                                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                    lobortis enim.</p>
                                <div class="author-image">
                                    <img src="images/author-05.png" alt="">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Learn More.. <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/courses-01.jpg" alt="">
                            <div class="down-content">
                                <h4>Photography</h4>
                                <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac
                                    ipsum porta.</p>
                                <div class="author-image">
                                    <img src="images/author-01.png" alt="">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Learn More.. <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/courses-02.jpg" alt="">
                            <div class="down-content">
                                <h4>Web Development</h4>
                                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                    lobortis enim.</p>
                                <div class="author-image">
                                    <img src="images/author-02.png" alt="">
                                </div>
                                <div class="text-button-free">
                                    <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/courses-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Learn HTML CSS</h4>
                                <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and
                                    Pexels.</p>
                                <div class="author-image">
                                    <img src="images/author-03.png" alt="">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Learn More.. <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/courses-04.jpg" alt="">
                            <div class="down-content">
                                <h4>Social Media</h4>
                                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                    lobortis enim.</p>
                                <div class="author-image">
                                    <img src="images/author-04.png" alt="">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Learn More.. <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/courses-05.jpg" alt="">
                            <div class="down-content">
                                <h4>Digital Arts</h4>
                                <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac
                                    ipsum porta.</p>
                                <div class="author-image">
                                    <img src="images/author-05.png" alt="">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Learn More.. <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/courses-01.jpg" alt="">
                            <div class="down-content">
                                <h4>Media Streaming</h4>
                                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                    lobortis enim.</p>
                                <div class="author-image">
                                    <img src="images/author-01.png" alt="">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Learn More.. <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
    
      



    </div>
</section>


<section class="section video section contact" data-section="section5">

    <div class="container">
        
   
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Let’s Keep In Touch</h2>
                        </div>
    
    
                    </div>
    
                </div>
                <div class="row" id="main">
    
                    <div class="col-md-6 align-self-center">
                        <div class="left-content">
                            <h4 style="font-size: 20px; color: rgba(51, 124, 207, 0.7);"">Contact Us</h4>
    
                            <h4>Gauhati University Centre for Distance and Online Education (GUCDOE)</h4>
    
                            <p>Gauhati University </p>
                            <p>Gopinath Bordoloi Nagar</p>
                            <p>Jalukbari, Guwahati - 781014</p>
                            <p>Toll Free No. 1800-345-3614 </p>
                            <p>Phone : (0361) 2673728</p>
                            <p>Fax: (0361) 2573887</p>
                            <p>Email: university.university@gmail.com</p>
    
    
    
                            <h4>Public Information Officer (PIO):</h4>
                            <p>Mr. Goutam Sarma</p>
                            <p>Asst. Director (Evaluation)</p>
                            <p>Mob. No. 9435097507</p>
                            <p>Email: g.deka@gauhati.ac.in</p>
    
    
                            <h4>GUCDOE Office Numbers:</h4>
                            <p> Director : +91 88110 92694</p>
                            <p>Asst. Director (Evaluation): + 9188110 92688, + 9188110 92693</p>
                            <p> Editor Study Material: +9188110 92681</p>
                            <p>PA to the Director: +91 88888 92694</p>
                            <p>Examination Section: +918888 92679</p>
                            <p>Study Center Correspondance: +918888 92677</p>
                            <p>Radio Luit: +9188110 92674</p>
                        </div>
                    </div>
    
    
    
    
    
    
    
    
    
                    <div class="col-md-6">
    
                        <!-- Do you need a working HTML contact-form script?
                                        
                                            Please visit https://templatemo.com/contact page -->
    
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Your Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            placeholder="Your Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..."
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Send Message Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    

            </div>
        

       


    </div>


</section>



@section('keep')
@include('news')
    
@endsection
@section('title', 'Home Page ')
