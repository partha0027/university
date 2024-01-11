@extends('layout.master')

@section('staff')
@section('title', 'staff')
    

<section class="section why-us" data-section="section2">
    
    <div class="container-fluid faculty-font">
        <div class="row">
            <div class="col-md-2 px-5 py-5">
                @include('vertical-nav')

            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2> Staff</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-3">
                        <img src="images/male.jpg" style="width: 100px;border:1px solid black;">
                    </div>
                    <div class="col-md-4">
        
                        <h5>Chandan Saikia</em></h5>
                        <p>System Analyst</p>
                        <p> Date of joining :24.07.2017</p>
                        <p>Email :systemanalystidol@gmail.com</p>
        
                    
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-3">
                        <img src="images/female.jpg" style="width: 100px; border:1px solid black;">
                    </div>
                    <div class="col-md-4">
        
                        <h5>Dr. Rabindra Sarma</em></h5>
                        <p>PA to Director</p>
                        <p>Date of joining :09.03.2015</p>
                        <p>Email :rabindrasarma2014@gmail.com</p>
        
                        
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-3">
                        <img src="images/female.jpg" style="width: 100px; border:1px solid black;">
                    </div>
                    <div class="col-md-4">
        
                        <h5>Mr. Manab Kashyap</em></h5>
                        <p>Office Superintendent</p>
                        <p>Date of joining :06.01.1999</p>
                        <p>Contact : +913612673728</p>
        
                    </div>
                </div>
            </div>
        </div>
        
    

    </div>

</section>
    
@endsection

