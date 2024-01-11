@extends('layout.master')
@section('title', 'contact')



@section('contact')

    <section class="section video section contact" data-section="section5">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 px-5 py-5">
                   @include('vertical-nav')

                </div>
                <div class="col-md-10 px-5">
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
                                <p>Email: idol.gauhatiuniversity@gmail.com</p>
        
        
        
                                <h4>Public Information Officer (PIO):</h4>
                                <p>Mr. Goutam Sarma</p>
                                <p>Asst. Director (Evaluation)</p>
                                <p>Mob. No. 9435097507</p>
                                <p>Email: goutam.sarma@gauhati.ac.in</p>
        
        
                                <h4>GUCDOE Office Numbers:</h4>
                                <p> Director : +91 88110 92694</p>
                                <p>Asst. Director (Evaluation): + 9188110 92688, + 9188110 92693</p>
                                <p> Editor Study Material: +9188110 92681</p>
                                <p>PA to the Director: +91 88110 92694</p>
                                <p>Examination Section: +9188110 92679</p>
                                <p>Study Center Correspondance: +9188110 92677</p>
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

           


        </div>


    </section>






@endsection
