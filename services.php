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
              
                      <li class="nav-item dropdown active">
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
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/8.png)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title"><a href="#"><?php echo $lang['service']; ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.php"><?php echo $lang['about']; ?></a></li>
                      <li class="breadcrumb-item"><a href="#"><?php echo $lang['service']; ?></a></li>
                      <li class="breadcrumb-item active" aria-current="page"><?php echo $lang['service2']; ?></li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
        <div class="ts-service-image-wrapper">

        <div class="slider">
  <div class="slide" id="slide-1">
  <img  loading="lazy" class="w-100" src="images/af/s1.png">    
  </div>
  <div class="slide" id="slide-2">                
  <img  loading="lazy" class="w-100" src="images/services/cc.jpg">    
  </div>
  </div>
  </div>

            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/ic2.png" width="40" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html"><a href="#"><?php echo $lang['s1']; ?></a></h3>
                  <p><a href="#"><?php echo $lang['s1i']; ?></p>
              </div>
            </div>
        </div><!-- Service1 end -->
      </div><!-- Col 1 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
        <div class="ts-service-image-wrapper">

<div class="slider">
<div class="slide" id="slide-1">
<img  loading="lazy" class="w-100" src="images/services/3.jpg">    </div>
<div class="slide" id="slide-2">       
<img  loading="lazy" class="w-100" src="images/af/s2.png">             
</div><div class="slide" id="slide-2">                
<img  loading="lazy" class="w-100" src="images/services/2.jpg">    
</div>
</div>
</div>


            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/ic33.png" width="40"  alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href=""><a href="#"><?php echo $lang['s2']; ?></a></h3>
                  <p><a href="#"><?php echo $lang['s2i']; ?></p>
              </div>
            </div>
        </div><!-- Service2 end -->
      </div><!-- Col 2 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
        <div class="ts-service-image-wrapper">

<div class="slider">
<div class="slide" id="slide-1">
<img  loading="lazy" class="w-100" src="images/services/5.jpg">    
</div>
<div class="slide" id="slide-2">    
<img  loading="lazy" class="w-100" src="images/services/4.jpg">             
</div><div class="slide" id="slide-2">                
<img  loading="lazy" class="w-100" src="images/af/s3.png">    

</div>
</div>
</div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/ic6.png" width="40" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href=""><a href="#"><?php echo $lang['s3']; ?></a></h3>
                  <p><a href="#"><?php echo $lang['s3i']; ?></p>
              </div>
            </div>
        </div><!-- Service3 end -->
      </div><!-- Col 3 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">

            <div class="slider">
<div class="slide" id="slide-1">
<img loading="lazy" class="w-100" src="images/af/pis.jpg" alt="service-image">
</div>
<div class="slide" id="slide-2">    
<img  loading="lazy" class="w-100" src="images/af/50.jpg">             
</div>
</div>
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/ic44.png" width="40" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html"><a href="#"><?php echo $lang['s4']; ?></a></h3>
                  <p><a href="#"><?php echo $lang['s4i']; ?></p>
              </div>
            </div>
        </div><!-- Service1 end -->
      </div><!-- Col 4 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
            <div class="slider">
<div class="slide" id="slide-1">
<img loading="lazy" class="w-100" src="images/af/55.png" alt="service-image">
</div>
<div class="slide" id="slide-2">    
<img  loading="lazy" class="w-100" src="images/af/33.png">             
</div>
<div class="slide" id="slide-2">                
<img  loading="lazy" class="w-100" src="images/af/7.png">    
</div>
</div>
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/ic55.png" width="40"  alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html"><a href="#"><?php echo $lang['s5']; ?></a></h3>
                  <p><a href="#"><?php echo $lang['s5i']; ?></p>
              </div>
            </div>
        </div><!-- Service2 end -->
      </div><!-- Col 5 end -->
      
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
            <div class="slider">
<div class="slide" id="slide-1">
<img loading="lazy" class="w-100" src="images/services/x.jpg" alt="service-image">
</div>
<div class="slide" id="slide-2">    
<img  loading="lazy" class="w-100" src="images/services/rrr.jpg">             
</div>
<div class="slide" id="slide-2">                
<img  loading="lazy" class="w-100" src="images/services/x2.jpg">    
</div>
</div>            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/i.png" width="40"  alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html"><a href="#"><?php echo $lang['s7']; ?></a></h3>
                  <p><a href="#"><?php echo $lang['s7i']; ?></p>
              </div>
            </div>
        </div><!-- Service2 end -->
      </div><!-- Col 5 end -->
      
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
            <div class="slider">
<div class="slide" id="slide-1">
<img loading="lazy" class="w-100" src="images/services/s1.png" alt="service-image">
</div>
<div class="slide" id="slide-2">    
<img  loading="lazy" class="w-100" src="images/services/s2.jpg">             
</div>
<div class="slide" id="slide-2">                
<img  loading="lazy" class="w-100" src="images/services/s.jpg">    
</div>
</div>              </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/i2.png" width="40"  alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html"><a href="#"><?php echo $lang['s8']; ?></a></h3>
                  <p><a href="#"><?php echo $lang['s8i']; ?></p>
              </div>
            </div>
        </div><!-- Service2 end -->
      </div><!-- Col 5 end -->

     


    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->



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
 
<?php
include('footer.php');
?>