<?php 
use yii\helpers\Html;
?>

<a id="start"></a>
 <div class="nav-container ">
      <div class="bar bar--sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-md-2">

                            <a href="index.php">
                                    <img class="logo logo-dark" alt="logo" src="<?php echo Yii::getAlias('@imageurl/logo-dark.png'); ?>" />
                                   
                                </a>

                                            
                           
                        </div>
                        <div class="col-9 col-md-10 text-right">
                            <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs">
                                <i class="icon icon--sm stack-interface stack-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </div>
            <!--end bar-->

           
            <nav id="menu1" class="bar bar--sm bar-1 hidden-xs " data-scroll-class='366px:pos-fixed'>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-md-2 hidden-xs">
                            <div class="bar__module">
                                 
                                <a href="index.php" id="home">
                                    <img class="logo logo-dark" alt="logo" src="<?php echo Yii::getAlias('@imageurl/logo-dark.png'); ?>" />
                                   
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                            <div class="bar__module">
                                 <ul class="menu-horizontal text-left">
                                       <li class="">
                                        <a href="#about" class="inner-link" data-title="Thisevent">ABOUT THIS EVENT</a>
                                     
                                    </li>
                                     <li class="">
                                    
                                        <a href="#speakers" class="inner-link" data-title="Speakers">SPEAKERS</a>
                                     
                                    </li>
                                      <li class="">
                                        <a href="#agenda" class="inner-link" data-title="Agenda">AGENDA</a>
                                        
                                     
                                    </li>
                                   <!--  <li class="">
                                        <span class="dropdown__trigger">DIGITAL CONFERENCE</span>
                                     
                                    </li> -->
                                     <!--  <li class="">
                                        <span class="dropdown__trigger">STARTUP COMPETITION</span>
                                     
                                    </li> -->
                                     <li class="">
                                        <a href="#sponsor" class="inner-link" data-title="Sponsor">SPONSOR & EXHIBITION</a>
                                        
                                     
                                    </li>
                                    <li class="">
                                        <a href="#contact" class="inner-link" data-title="Contact">CONTACT</a>
                                        
                                     
                                    </li>
                                </ul>
                            </div>
                            <!--end module-->
                            <div class="bar__module">
                               
                                <?php echo Html::a('<span class="btn__text">APPLY COMPETITION</span>', ['/registration'], ['class'=>'btn btn--sm type--uppercase']); ?>
                                <?php echo Html::a('<span class="btn__text">RESERVATION</span>', ['/reservation'], ['class'=>'btn btn--sm btn--primary type--uppercase']); ?>
                             
                            </div>
                            <!--end module-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </nav>
            <!--end bar-->
        </div>

