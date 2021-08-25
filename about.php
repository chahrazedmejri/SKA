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

                      <li class="nav-item dropdown active">
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



<div id="banner-area" class="banner-area" style="background-image:url(images/banner/1.png)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title"><?php echo $lang['about'] ; ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.php"><?php echo $lang['home'] ; ?></a></li>
                      <li class="breadcrumb-item"><a href="#"><?php echo $lang['about'] ; ?></a></li>
                      <li class="breadcrumb-item active" aria-current="page">ska fluides</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
         <h3 class="column-title"  style="color:#0033cc;"  ><img src="images/log.png" width="70">  <?php echo $lang['wel'] ; ?></h3>
          <p><?php echo $lang['def'] ; ?></p>
          <blockquote><p><?php echo $lang['ska3'] ; ?></p></blockquote>
          <p><?php echo $lang['ska2'] ; ?></p>

        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">
          
          <div id="page-slider" class="page-slider small-bg">

              <div class="item" style="background-image:url(images/slider-pages/1.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['ska'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(images/slider-pages/3.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['sk1'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(images/slider-pages/2.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                       <center>   <h2 class="box-slide-title"><?php echo $lang['sk2'] ; ?></h2></center>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->
          </div><!-- Page slider end-->          
        

        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
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
