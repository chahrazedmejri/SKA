<?php
include('header.php');
?>
 <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item dropdown ">
                          <a href="index.php" class="nav-link dropdown-toggle" ><?php echo $lang['home']; ?> </a>
                        
                      </li>

                      <li class="nav-item dropdown">
                          <a href="about.php" class="nav-link dropdown-toggle" ><?php echo $lang['about']; ?></a>
                       
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="services.php" class="nav-link dropdown-toggle" ><?php echo $lang['service']; ?> </a>

                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $lang['project']; ?> <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.php"><?php echo $lang['tt']; ?></a></li>
                            <li><a href="projects2.php"><?php echo $lang['tt2']; ?></a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown active">
                          <a href="part.php" class="nav-link dropdown-toggle" ><?php echo $lang['part']; ?> </a>
                          
                      </li>
              
              
                      <li class="nav-item"><a class="nav-link" href="contact.php"><?php echo $lang['contact']; ?></a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">

           
<span id="search"><a href="index.php?lang=fr"><img src="images/fr.png" width="25"></a>
        </span>
        <span id="search"><a href="index.php?lang=en"><img src="images/flag.png" width="25"></a>
        </span>
        <span id="search"><a href="index.php?lang=ar"><img src="images/ar.png" width="25"></a>
        </span>

        </div><!-- Search end -->

    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->



<?php
include('part2.php');
?>



<section id="ts-team" class="ts-team">
  <div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
          <h2 class="section-title"><?php echo $lang['ps'] ; ?></h2>
          <h3 class="section-sub-title"  style="color:#0033cc;"><?php echo $lang['part3'] ; ?></h3>
        </div>
    </div><!--/ Title row end -->

    <div class="row">
        <div class="col-lg-12">
          <div id="team-slide" class="team-slide">
              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="images/part/b2.png" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Building Design, Engineering and Consulting (BDEC)</h3>
                      <p class="ts-designation"><a href='http://www.bdec.com.tn/index.html' >http://www.bdec.com.tn/index.html</a></p>
                      <div class="team-social-icons">
                          <a target="_blank" href="http://www.bdec.com.tn/index.html"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="http://www.bdec.com.tn/index.html"><i class="fab fa-twitter"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="images/part/44.png" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Domus architect</h3>
                      <p class="ts-designation"><a href='https://www.facebook.com/domus.architect/photos/?tab=album&ref=page_internal' >https://www.facebook.com/domus.architect/photos/?tab=album&ref=page_internal</a></p>
                     
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 2 end -->

              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="images/part/22.png" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Energy X</h3>
                      <p class="ts-designation"><a href='http://energyx-fluide.com/' >http://energyx-fluide.com/</a></p>
                      <div class="team-social-icons">
                          <a target="_blank" href="http://energyx-fluide.com/"><i class="fab fa-facebook-f"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 3 end -->
              
              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="images/part/33.png" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Ingénieur conseil (fluides & énergétiques ) </h3>
                      <p class="ts-designation"><a href='https://www.linkedin.com/in/tarek-naouali-311b0062/' >https://www.linkedin.com/in/tarek-naouali-311b0062/</a></p>
                      <div class="team-social-icons">
                          <a target="_blank" href="https://www.linkedin.com/in/tarek-naouali-311b0062/"><i class="fab fa-linkedin"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 3 end -->
              
              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="images/part/bt.png" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">bureau d'études BETEX</h3>
                      <p class="ts-designation"><a href='' > BETEX</a></p>
                      
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 3 end -->
              
              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="images/part/arch.png" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Archigroup Design</h3>
                      <p class="ts-designation"><a href='https://www.facebook.com/archigroupd/?referrer=services_landing_page%20touil-' >https://www.facebook.com/archigroupd/?referrer=services_landing_page%20touil-</a></p>
                      <div class="team-social-icons">
                          <a target="_blank" href="https://www.facebook.com/archigroupd/?referrer=services_landing_page%20touil-"><i class="fab fa-facebook"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 3 end -->

              
              
              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="images/part/abd.png" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">bureau d'étude Touil Abdelhamid </h3>
                      <p class="ts-designation"><a href='https://www.linkedin.com/in/abdelhamid-touil-77863587/?originalSubdomain=tn' >https://www.linkedin.com/in/abdelhamid-touil-77863587/?originalSubdomain=tn</a></p>
                      <div class="team-social-icons">
                          <a target="_blank" href="https://www.linkedin.com/in/abdelhamid-touil-77863587/?originalSubdomain=tn"><i class="fab fa-linkedin"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 3 end -->

              
              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="images/part/ceta.png" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">CETA</h3>
                      <p class="ts-designation"><a href='https://www.ceta.com.tn/fr/propos' >https://www.ceta.com.tn/fr/propos</a></p>
 
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 3 end -->


              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="images/part/fth.png" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">ingenieur conseil fluides FATHI AYARI</h3>
 
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 3 end -->
















              </div><!-- Team slide end -->
        </div>
        


        
    </div><!--/ Content row end -->
    <div class="quote-item quote-border mt-5">
               <div class="quote-text-border">
               <?php echo $lang['p1']; ?>

               </div>
               <div class="quote-item-footer">
                  <img loading="lazy" class="testimonial-thumb" src="images/log.png" alt="testimonial">
                  <div class="quote-item-info">
                     <h3 class="quote-author">SKA FLUIDES</h3>
                  </div>
               </div>
            </div><!-- Quote item end -->
         </div><!-- End col md 4 -->
  </div><!--/ Container end -->
</section><!--/ Team end -->











<?php
include('footer.php');
?>
