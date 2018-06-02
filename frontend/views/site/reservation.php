<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;

?>
  <section class=" " style="padding-bottom: 4em;padding-top:6em; background:#272361;"">
                                <div class="container">
                                    <div class="row justify-content-center">
                                         <div class="col-md-12 col-lg-11">
                                            <div class="row">
                                                <div class="boxed boxed--border">
                                                     <center>    <h2 style="font-weight:800;">Reservation Form</h2>
                                 <div style="width:10%;border-bottom: 2px solid #f18f01;margin-bottom:20px;"></div></br></center>
                                                    <form style="margin-left: 0px" class="text-left form-email row" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly.">
                                                    	<div class="col-md-12">
                                                             <span><b>Name:</b></span>
                                                           
                                                        </div>
                                                        <div class="col-md-6">
                                                           
                                                            <input type="text" name="firstname" class="validate-required" />
                                                            <span style="font-size: 12px;">First Name</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span></span>
                                                            <input type="text" name="lastname" class="validate-required" />
                                                            <span style="font-size: 12px;">Last Name</span>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <span><b>Gender:</b></span>
                                                           
                                                        </div>
                                                       <div class="col-md-3 col-3 ">
                                                             <span class="block">Male</span>
                                                            <div class="input-radio">
                                                                <input type="radio" name="sex" value="male"/>
                                                                <label></label>
                                                            </div> 

                                                        </div>
                                                       <div class="col-md-3 col-3 ">
                                                             <span class="block">Female</span>
                                                            <div class="input-radio">
                                                                <input type="radio" name="sex" value="female"/>
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                    
                                                        
                                                        <div class="col-md-12">
                                                            <span><b>Job Title:</b></span>
                                                            <input type="text" name="job" class="validate-required validate-email" />
                                                        </div>
                                                        <div class="col-md-12">
                                                            <span><b>Company:</b></span>
                                                            <input type="tel" name="company" class="validate-required" />
                                                        </div>
                                                        <div class="col-md-12">
                                                            <span><b>Industry:</b></span>
                                                            <input type="tel" name="industry" class="validate-required" />
                                                        </div> 
                                                       
                                                        <div class="col-md-12">
                                                            <span><b>Address:</b></span>
                                                            <textarea rows="2" name="address" class="validate-required"></textarea>
                                                        </div>

                                                         <div class="col-md-6">
                                                           
                                                            <input type="text" name="city" class="validate-required" />
                                                            <span style="font-size: 12px;">City</span>
                                                        </div>
                                                         <div class="col-md-4">
                                                           
                                                            <input type="text" name="state" class="validate-required" />
                                                            <span style="font-size: 12px;">State</span>
                                                        </div>
                                                         <div class="col-md-2">
                                                           
                                                            <input type="text" name="zipcode" class="validate-required" />
                                                            <span style="font-size: 12px;">Zip code</span>
                                                        </div>

                                                         <div class="col-md-6">
                                                            <span><b>Phone:</b></span>
                                                            <input type="text" name="tlp" class="validate-required" />
                                                        </div>
                                                         <div class="col-md-6">
                                                            <span><b>Fax:</b></span>
                                                            <input type="text" name="fax" class="validate-required validate-email" />
                                                        </div>
                                                          <div class="col-md-12">
                                                            <span><b>Mobile Phone:</b></span>
                                                            <input type="text" name="mobiletlp" class="validate-required" />
                                                        </div>
                                                         <div class="col-md-12">
                                                            <span><b>Email:</b></span>
                                                            <input type="text" name="email" class="validate-required validate-email" />
                                                        </div>
                                                      
                                                        <div class="col-md-12 boxed">
                                                            <button type="submit" class="btn btn--primary type--uppercase">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--end of row-->
                                        </div>
                                    </div>
                                    <!--end of row-->
                                </div>
                                <!--end of container-->
                            </section>
            