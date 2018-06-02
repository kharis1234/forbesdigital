<?php
use yii\helpers\Url;
use common\models\Footer;
use frontend\assets\FrontEndAssetJs;

FrontEndAssetJs::register($this);
?>


<footer class="space--sm footer-2 " style="background-color:#26223e;color:white;" id="contact">
			<div class="container">
			 <div class="row">
					<div class="col-md-12">
						   <h2 style="margin-bottom: 0.5em;font-weight:800;color:white;">CONTACT</h2>
							 <div style="width:10%;border-bottom: 2px solid #f18f01;margin-bottom: 3em;"></div>
					</div>
				</div>
				<div class="row">
					<?php
						$footer = Footer::find()->orderBy('ordercol')->All();
						if(count($footer)>0)
						{	
							for($i=0;$i<count($footer);$i++)
							{		
					?>					
								<div class="col-md-6 col-lg-3 col-6" style="margin-bottom:20px;">
									<h6 class="type--uppercase" style="color:#f18f01;margin-bottom: 0em;"><?php echo $footer[$i]["name"] ?></h6>
									<ul class="list--hover">
										<li>
											<a href="#"><i><?php echo $footer[$i]["title"] ?></i></a>
										</li>
										<li>
											<a href="#">Mobile: <?php echo $footer[$i]["phone"] ?></a>
										</li>
										<li>
											<a href="#"><?php echo $footer[$i]["email"] ?></a>
										</li>
									   
									</ul>
								</div>
					<?php 
							}
						}
					?>
				</div> 
				<div class="row">
					<div class="col-md-12">
						  
							 <div style="border-bottom: 2px solid #fff;margin-bottom: 0.5em;margin-top: 3em;"></div>
					</div>
				</div>
				<!--end of row-->
				<div class="row" style="margin-top: 2em;color:white;">
				
					<div class="col-md-6">
						<span class="type--fine-print">Copyright &copy;
							<span class="update-year"></span>&nbsp;- FORBES INDONESIA DIGITAL CONFERENCE</span>
						<!-- <a class="type--fine-print" href="#">Privacy Policy</a>
						<a class="type--fine-print" href="#">Legal</a> -->
					</div>
					<div class="col-md-6 text-right text-left-xs" >
						<ul class="social-list list-inline list--hover" style="color:white;">
							<li>
								<a href="#">
									<i class="socicon socicon-instagram icon icon--xs"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="socicon socicon-facebook icon icon--xs"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="socicon socicon-twitter icon icon--xs"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="socicon socicon-youtube icon icon--xs"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--end of row-->
			</div>
			<!--end of container-->
</footer>
		


  <!--<div class="loader"></div>-->
       