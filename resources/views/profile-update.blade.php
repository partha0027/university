@extends('layout.master')
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
                            <h2>Student Indormation Update</h2>
                        </div>
        
        
                    </div>
        
                </div>
                <div class="row" id="main">
        
        
                    <div class="col-md-12">
        
                        <!-- Do you need a working HTML contact-form script?
                                    
                                        Please visit https://templatemo.com/contact page -->
        
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <p style="font-weight: bold">All [<span style="color: red">*</span>] marked fields are Mandatory.</p>
                                    <p style="font-weight: bold">
                                        This page is designed to enable bonified learners/students of GUIDOL to update/correct
                                        their name /mobile No/ email/ date of birth/photograph. Unless a valid certificate is
                                        uploaded the correction will not be carried out.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="" style="font-weight: bold">Date of birth<span style="color: red">*</span></label>
                                        <input name="dob" type="date" class="form-control" id="dob"
                                            placeholder="Your Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="" style="font-weight: bold">Birth Certificate/10th Admit Card(Size: Less then 100KB )<span style="color: red">*</span></label>
                                        <input name="b_certificate" type="file" class="form-control" id="b_certificate"
                                            placeholder="Your Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="" style="font-weight: bold">Email<span style="color: red">*</span></label>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="Your Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="" style="font-weight: bold">Phone Number<span style="color: red">*</span></label>
                                        <input name="phone" type="text" class="form-control" id="email"
                                            placeholder="Your phone Number" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <fieldset>
                                        <label for="" style="font-weight: bold">Upload GUIDOL Identity Card (Size: Less then 100KB )<span style="color: red">*</span></label>
                                     
                                        <input name="b_certificate" type="file" class="form-control" id="b_certificate"
                                            placeholder="Your Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="" style="font-weight: bold">Aadhaar Card/Driving Licence/Pan Card/Passport (Size: Less then 100KB )<span style="color: red">*</span></label>
                                       
                                        <input name="b_certificate" type="file" class="form-control" id="b_certificate"
                                            placeholder="Your Email" required="">
                                            <select name="" id="" class="form-control">  <option selected>Select Identity Card Type</option>
                                                <option value="Adhaar">Adhaar</option>
                                                <option value="Driving Licennce">Driving Licennce</option>
                                                <option value="Pan Card">Pan Card</option>
                                                <option value="Passport">Passport</option>
                                            
                                            </select>
                                    </fieldset>
                                </div>
        
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="" style="font-weight: bold">Upload recent Passport size Photograph (Size: Less then 100KB )<span style="color: red">*</span></label>
                                        <input name="b_certificate" type="file" class="form-control" id="b_certificate"
                                            placeholder="Your Email" required="">
                                    </fieldset>
                                </div>
                              
                            </div>
                            <div class="row">
                                <div class="col-md-12  justify-content-center">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button  btn btn-sm">Submit</button>
                                        <button type="reset" id="form-submit" class="button btn btn-sm">Reset</button>
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
