<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>GUCDOE-@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-grad-school.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flex-slider.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css">

    <!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
</head>

<body>


    @include('layout.header')
    <!-- ***** Main Banner Area Start ***** -->
    {{-- @include('layout.main-banner') --}}
    <!-- ***** Main Banner Area End ***** -->
    @yield('content')
    @yield('about')
    @yield('about1')


    @yield('course')
    @yield('course-details')


    @yield('register')




    {{-- <section class="section video section contact" data-section="section5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="left-content">
                        <p style="font-size: 20px;">Contact Us</p>

                        <h4><em>Gauhati University Centre for Distance and Online Education (GUCDOE)</em></h4>
                        <div>
                            <p style="font-size: 20px;">Gauhati University </p>
                            <p style="font-size: 20px;">Gopinath Bordoloi Nagar</p> 
                             
                             <p style="font-size: 20px;">Jalukbari, Guwahati - 781014</p>
                         </p style="font-size: 20px;">
                        </div>
                        <div>
                            <p style="font-size: 20px;">Toll Free No. 1800-345-3614 </p>
                            <p style="font-size: 20px;">Phone : (0361) 2673728</p> 
                             
                             <p style="font-size: 20px;">Fax: (0361) 2573887</p>
                             <p style="font-size: 20px;">Email: idol.gauhatiuniversity@gmail.com</p>
                         </p>
                        </div>
                     
                        <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo"
                                target="_parent">External URL</a></div>
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
    </section> --}}
    @yield('contact')
    @yield('faculty')
    @yield('feedback')

    @yield('keep-in-touch')
    @yield('study-center')
    @yield('exam-center')
    @yield('student-support')
    @yield('staff')
    @yield('gallery')

    @include('layout.footer')


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src=" {{ asset('js/jquery.min.js') }}"></script>
    <script src=" {{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    <script src="{{ asset('js/video.js') }}"></script>
    <script src="{{ asset('js/slick-slider.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    {{-- <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
            if ($(e.target).hasClass('external')) {
                return;
            }
            e.preventDefault();
            $('#menu').removeClass('active');
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script> --}}
</body>

</html>
