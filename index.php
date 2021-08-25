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
                      <li class="nav-item dropdown active">
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
              
                      <li class="nav-item dropdown">
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


<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url(images/af/11.png)">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-title" data-animation-in="slideInLeft"><?php echo $lang['1'] ; ?></h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight">SKA FLUIDES</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="services.php" class="btn btn-primary" ><?php echo $lang['service2'] ; ?></a>
                    <a href="contact.php" class="btn btn-primary"><?php echo $lang['contact2'] ; ?></a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(images/af/55.png)">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown"><?php echo $lang['soc'] ; ?></h2>
                <h3 class="slide-title" data-animation-in="fadeIn"><?php echo $lang['x2'] ; ?></h3>
                <p data-animation-in="slideInRight">
                    <a href="services.php" class="btn btn-primary"><?php echo $lang['service2'] ; ?></a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(images/af/5.png)">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title" data-animation-in="slideInDown">ska fluides</h2>
                <h3 class="slide-sub-title" data-animation-in="fadeIn"><?php echo $lang['forum2'] ; ?></h3>
                <p class="slider-description lead" data-animation-in="slideInRight"><?php echo $lang['2'] ; ?></p>
                <div data-animation-in="slideInLeft">
                    <a href="contact.php" class="btn btn-primary" aria-label="contact-with-us"><?php echo $lang['contact2'] ; ?></a>
                    <a href="about.php" class="btn btn-primary" aria-label="learn-more-about-us"><?php echo $lang['about'] ; ?></a>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box" style="background-color: #6666ff;">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title"><?php echo $lang['x2']; ?></h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="contact.php"><?php echo $lang['contact2'] ; ?></a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <div class="ts-intro">
              <h2 class="into-title" style="color: #0033cc;"><?php echo $lang['wel']; ?></h2>
              <h3 class="into-sub-title">SKA FLUIDES</h3>
              <p><?php echo $lang['def']; ?></p>
          </div><!-- Intro box end -->

          <div class="gap-20"></div>

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-trophy"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title"> <?php echo $lang['service3']; ?>  </h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-sliders-h"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title"> <?php echo $lang['ps']; ?></h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-thumbs-up"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title"><?php echo $lang['forum2']; ?></h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-users"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title" ><?php echo $lang['ps2']; ?></h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-4 mt-lg-0">
          <h3 class="into-sub-title" ><?php echo $lang['val']; ?></h3>
          <p><?php echo $lang['ska2']; ?></p>

          <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <?php echo $lang['ska']; ?>                      </button>
                    </h2>
                </div>
              
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                    
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <?php echo $lang['sk1']; ?>                      </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                  
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <?php echo $lang['sk2']; ?>                      </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                  
                </div>
              </div>
          </div>
          <!--/ Accordion end -->

        </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
       
              <div class="ts-facts-content">
                <img src="images/icon-image/pr.png" width="70" alt="icon">
                <h2 class="ts-facts-num" ><span class="counterUp" data-count="1020">0</span></h2>
                <h3 class="ts-facts-title" style="color: #4db8ff;"><?php echo $lang['project']; ?></h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
           
              <div class="ts-facts-content">
              <img src="images/icon-image/mem.png" width="70" alt="icon">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="50">0</span></h2>
                <h3 class="ts-facts-title" style="color: #4db8ff;"> <?php echo $lang['news']; ?> </h3>
              </div>
          </div><!-- Col end -->


          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
             
              <div class="ts-facts-content">
              <img src="images/icon-image/ad.png" width="70" alt="icon">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="12">0</span></h2>
                <h3 class="ts-facts-title" style="color: #4db8ff;"> <?php echo $lang['b']; ?> </h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
            
              <div class="ts-facts-content">
              <img src="images/icon-image/hr.png" width="70" alt="icon">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="8">0</span></h2>
                <h3 class="ts-facts-title" style="color: #4db8ff;"><?php echo $lang['un']; ?> / 24 </h3>
              </div>
          </div><!-- Col end -->
        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->

<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title"style="color: #0033cc;" ><?php echo $lang['se']; ?> </h2>
          <h3 class="section-sub-title"><?php echo $lang['service2']; ?> </h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/ic2.png" width="40" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="services.php"><?php echo $lang['s1']; ?></a></h3>
                <p><?php echo $lang['s1i']; ?></p>
              </div>
          </div><!-- Service 1 end -->


          
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/ic6.png" width="40"  alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="services.php"><?php echo $lang['s3']; ?></a></h3>
                <p><?php echo $lang['s3i']; ?></p>
              </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/ic55.png" width="40" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="services.php"><?php echo $lang['s5']; ?></a></h3>
                <p><?php echo $lang['s5i']; ?></p>
              </div>
          </div><!-- Service 3 end -->

        </div><!-- Col end -->

        <div class="col-lg-4 text-center">
        <img loading="lazy" class="img-fluid" src="images/af/a1.png" height="1300" alt="service-avater-image">
        <img loading="lazy" class="img-fluid" src="images/af/a2.png" height="1300" alt="service-avater-image">
        </div><!-- Col end -->

        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/ic33.png" width="40"  alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="services.php"><?php echo $lang['s2']; ?></a></h3>
                <p><?php echo $lang['s2i']; ?></p>
              </div>
          </div><!-- Service 4 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/ic44.png" width="40" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="services.php"><?php echo $lang['s4']; ?></a></h3>
                <p><?php echo $lang['s4i']; ?></p>
              </div>
          </div><!-- Service 5 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/i.png" width="40"  alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="services.php"><?php echo $lang['s6']; ?></a></h3>
                <p><?php echo $lang['s6i']; ?><br><?php echo $lang['s7']; ?><br><?php echo $lang['s8']; ?></p>
              </div>
          </div><!-- Service 6 end -->

        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->
         <?php
        include('project_list.php');

        ?>






<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
       
              <div class="ts-facts-content">
                <img src="images/icon-image/fix.png" width="50" alt="icon">
                <h3  class="widget-title" >+216 <span class="counterUp" data-count="31401447">10000000</span></h3>
                
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
           
              <div class="ts-facts-content">
              <img src="images/icon-image/fax.png" width="50" alt="icon">
              <h3  class="widget-title" >+216 <span class="counterUp" data-count="32401447">10000000</span></h3>
              </div>
          </div><!-- Col end -->


          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
             
              <div class="ts-facts-content">
              <img src="images/icon-image/tel.png" width="50" alt="icon">
              <h3  class="widget-title" >+216 <span class="counterUp" data-count="53084671">10000000</span></h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
            
              <div class="ts-facts-content">
              <img src="images/icon-image/tel2.png" width="50" alt="icon">
              <h3  class="widget-title" >216 <span class="counterUp" data-count="25661207">10000000</span></h3>
              </div>
          </div><!-- Col end -->
        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->
 



<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">

          <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                    <?php echo $lang['2']; ?>
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/log.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Ska fluides</h3>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                    <?php echo $lang['ska3']; ?>
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/log.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Ska fluides</h3>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 2 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                    <?php echo $lang['of2']; ?>
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/log.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Ska fluides</h3>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 3 end -->

          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">  <?php echo $lang['ps']; ?>
</h3>

          <div class="row all-clients">
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/part/1.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 1 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/part/9.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 2 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/part/7.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 3 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/part/8.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 4 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/part/5.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 5 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/part/6.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 6 end -->
              <div class="col-sm-4 col-6">

        <div class="general-btn text-center">
          <a class="btn btn-primary" href="part.php"><?php echo $lang['v2']; ?></a>
          </div>
          </div>
          </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->












<?php
include('footer.php');
?>