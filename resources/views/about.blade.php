@extends('layout.master')
@section('about')


    <section class="section why-us" data-section="section2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 px-5 py-5">
                   @include('vertical-nav')
                </div>
                <div class="col-md-10 px-5">
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
                            <div class="section-heading">
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
        
                                            </div>
                                            <div class="col-md-6">
                                                <img src="images/uni2.jpg" alt="">
        
                                            </div>
                                            <div class="col-md-6">
                                                <p style="text-align: justify">
                                                    The Gauhati university Centre for Distance and Online Education (GUCDOE)
                                                    completed 25 years of successful existence in May 2023 and aims to continue
                                                    the mission of spreading and providing quality education to the students.
                                                    Starting with 514 students and 6 courses in May 1998, GUCDOE now witnesses
                                                    its growth in all capacities with an enrollment of more than fifteen
                                                    thousand students several programmes in a \learning environment equipped with
                                                    latest technologies. Apart from self-learning materials and counselling
                                                    services, GUCDOE aims to maximize learning opportunities and the first
                                                    E-learning portal of the North-East, http://bodhidroom.net/, developed by
                                                    GUCDOE and Radio Luit, the CommunityRadioCenterare latest modes in student
                                                    support services. With the commitment to ensure quality education to the
                                                    masses the journey from Correspondence School to Gauhati university Centre
                                                    for Distance and Online Education is not only a leap in quantity but also in
                                                    quality.
                                                </p>
        
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

            </div>

           
        </div>
    </section>
@endsection
