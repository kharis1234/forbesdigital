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
                                                     <center>    <h2 style="font-weight:800;">Startup Competition Form</h2>
                                 <div style="width:10%;border-bottom: 2px solid #f18f01;margin-bottom:20px;"></div></br></center>
                                                    <form style="margin-left: 0px" class="text-left form-email row" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly.">
                                                        <div class="col-md-12">
                                                            <span><b>Startup Name:</b></span>
                                                            <input type="text" name="name" class="validate-required" />
                                                        </div>
                                                        <div class="col-md-12">
                                                            <span><b>Registered Business Name:</b></span>
                                                            <input type="text" name="registered" class="validate-required" />
                                                        </div>
                                                        <div class="col-md-12">
                                                            <span><b>Founded in:</b></span>
                                                           
                                                        </div>
                                                       <div class="col-md-4">
                                                            
                                                            <input type="text" name="foundedinmonth" class="" />
                                                            <span style="font-size: 12px;">Month</span>
                                                        </div>
                                                         <div class="col-md-4">
                                                            
                                                            <input type="text" name="foundedinday" class="" />
                                                            <span style="font-size: 12px;">Day</span>
                                                        </div>
                                                         <div class="col-md-4">
                                                            
                                                            <input type="text" name="foundedinyear" class="" />
                                                            <span style="font-size: 12px;">Year</span>
                                                        </div>

                                                       
  													<div class="col-md-12">
                                                            <h5>Category:</h5>
                                                        </div>
                                                       <div class="col-md-4 col-6 ">
                                                             <span class="block">Fintech</span>
                                                            <div class="input-checkbox">
                                                                <input type="checkbox" name="fintech" />
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                       <div class="col-md-4 col-6 ">
                                                            <span class="block">Ecommerce</span>
                                                            <div class="input-checkbox">
                                                                <input type="checkbox" name="ecommerce" />
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                      <div class="col-md-4 col-6 ">
                                                            <span class="block">Travel</span>
                                                            <div class="input-checkbox">
                                                                <input type="checkbox" name="travel" />
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                      <div class="col-md-4 col-6 ">
                                                            <span class="block">Media</span>
                                                            <div class="input-checkbox">
                                                                <input type="checkbox" name="media" />
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                   <div class="col-md-4 col-6 ">
                                                             <span class="block">Social or Impact</span>
                                                            <div class="input-checkbox">
                                                                <input type="checkbox" name="social" />
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                    <div class="col-md-4 col-6 ">
                                                            <span class="block">Data Analytics</span>
                                                            <div class="input-checkbox">
                                                                <input type="checkbox" name="analytics" />
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                      <div class="col-md-4 col-6 ">
                                                            <span class="block">Healthcare</span>
                                                            <div class="input-checkbox">
                                                                <input type="checkbox" name="healthcare" />
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                       <div class="col-md-4 col-6 ">
                                                            <span class="block">Education</span>
                                                            <div class="input-checkbox">
                                                                <input type="checkbox" name="education" />
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                          <div class="col-md-4 col-6 ">
                                                            <span class="block">Others</span>
                                                            <div class="input-checkbox">
                                                                <input type="checkbox" name="others" />
                                                                <label></label>
                                                            </div>
                                                        </div>

                                                           <div class="col-md-12">
                                                            <span><b>Address:</b></span>
                                                            <input type="text" name="address" class="validate-required" />
                                                        </div>
                                                      

                                                        <div class="col-md-12">
                                                            <span><b>Telephone:</b></span>
                                                            <input type="text" name="tlp" class="validate-required" />
                                                        </div>
                                                   
                                                      
                                                       <div class="col-md-12">
                                                            <span><b>Email:</b></span>
                                                            <input type="text" name="email" class="validate-required validate-email" />
                                                        </div>
                                                         <div class="col-md-12">
                                                            <span><b>Website:</b></span>
                                                            <input type="text" name="website" class="" />
                                                        </div>
 														<div class="col-md-12">
                                                         <center><h3 style="padding-top:30px;font-weight:800;color:#f18f01;">Founder/Co-Founder</h3></center>
                                                        </div>

														<div class="col-md-12">
                                                            <h5>Title:</h5>
                                                        </div>
                                                       <div class="col-md-4 col-6 ">
                                                             <span class="block">Mr</span>
                                                            <div class="input-radio">
                                                                <input type="radio" name="title" value="mr"/>
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                       <div class="col-md-4 col-6 ">
                                                            <span class="block">Ms</span>
                                                            <div class="input-radio">
                                                                <input type="radio" name="title" value="ms"/>
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                      <div class="col-md-4 col-6 ">
                                                            <span class="block">Mrs</span>
                                                            <div class="input-radio">
                                                                <input type="radio" name="title" value="mrs"/>
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                    <div class="col-md-12">
                                                            <span><b>First Name:</b></span>
                                                            <input type="text" name="firstname" class="validate-required" />
                                                        </div>
                                                      

                                                        <div class="col-md-12">
                                                            <span><b>Last Name:</b></span>
                                                            <input type="text" name="lastname" class="validate-required" />
                                                        </div>
                                                     <div class="col-md-12">
                                                            <span><b>Date of Birth:</b></span>
                                                           
                                                        </div>
                                                       <div class="col-md-4">
                                                            
                                                            <input type="text" name="month" class="" />
                                                            <span style="font-size: 12px;">Month</span>
                                                        </div>
                                                         <div class="col-md-4">
                                                            
                                                            <input type="text" name="day" class="" />
                                                            <span style="font-size: 12px;">Day</span>
                                                        </div>
                                                         <div class="col-md-4">
                                                            
                                                            <input type="text" name="year" class="" />
                                                            <span style="font-size: 12px;">Year</span>
                                                        </div>
                                                      <div class="col-md-12">
                                                            <span><b>Position:</b></span>
                                                            <input type="text" name="position" class="" />
                                                        </div>
                                                     <div class="col-md-12">
                                                             <span><b>Whats Is History of your Startup?</b></span>
                                                            <textarea rows="5" name="description1" class=""></textarea>
                                                        </div>
                                                        <div class="col-md-12">
                                                              <span><b>What is the problem taht your startup tries to solve?</b></span>
                                                            <textarea rows="5" name="description2" class=""></textarea>
                                                        </div>
                                                        <div class="col-md-12">
                                                             <span><b>What is the chalange and oppourtunity of your bussiness?</b></span>
                                                            <textarea rows="5" name="description3" class=""></textarea>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <span><b>Tell us how your startup has been growing so far (for example term of transaction, number of user, product and service management, etc) and what its your future goal for it ?</b></span>
                                                            <textarea rows="5" name="description4" class="validate-required"></textarea>
                                                        </div>
                                                        <div class="col-md-12">
                                                          <span><b>What receive financings and what did you use it ?</b></span>
                                                            <textarea rows="5" name="description5" class=""></textarea>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <span><b>Are you planning or currently raising series B or C, or in search for strategic partner of investor? what will the funds be used and what is your criteria of strategic investor?</b></span>
                                                            <textarea rows="5" name="description6" class=""></textarea>
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
			