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
              
                      <li class="nav-item dropdown active">
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

<div id="banner-area" class="banner-area" style="background-image:url(images/banner/5.png)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title"><?php echo $lang['tt2']; ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.php"><?php echo $lang['home']; ?></a></li>
                      <li class="breadcrumb-item"><a href="projects.php"><?php echo $lang['project']; ?></a></li>
                      <li class="breadcrumb-item active" aria-current="page"><?php echo $lang['tt']; ?></li>
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

  <div class="sidebar sidebar-left">
          <div class="widget">
            <h3 class="widget-title"><?php echo $lang['tt3']; ?></h3>
          
            </div>
          </div>
    <div class="row">
      <div class="col-lg-8">
        <div id="page-slider" class="page-slider small-bg">
          
        <div class="item" style="background-image:url(images/re/1.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['pe2'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->



              <div class="item" style="background-image:url(images/re/2.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['pe8'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(images/re/3.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['pe3'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->




              <div class="item" style="background-image:url(images/re/4.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['pe4'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->



              <div class="item" style="background-image:url(images/re/5.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['pe5'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->


              <div class="item" style="background-image:url(images/re/6.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['pe6'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              
              <div class="item" style="background-image:url(images/re/7.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['pe7'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->


              
              <div class="item" style="background-image:url(images/re/9.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['pe9'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              
              <div class="item" style="background-image:url(images/re/10.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['pe10'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              
              <div class="item" style="background-image:url(images/re/11.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['pe11'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              
              <div class="item" style="background-image:url(images/re/12.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['pe12'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              
              <div class="item" style="background-image:url(images/re/13.png)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo $lang['pe13'] ; ?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->




        </div><!-- Page slider end -->
      </div><!-- Slider col end -->

      <div class="col-lg-4 mt-5 mt-lg-0">

        <ul class="project-info list-unstyled">
        <li>
            <p class="project-info-label" style="color: #4db8ff;"><centre><?php echo $lang['of2'];?></centre></p>
          </li>
          <li>
            <p class="project-info-label"><?php echo $lang['defre3'];?></p>
            <p class="project-info-content">80 000 DT</p>
          </li>
          <li>
            <p class="project-info-label"><?php echo $lang['defre1'];?></p>
            <p class="project-info-content"><?php echo $lang['defre2'];?>  <img src="images/t.png" width="20"> </p>
          </li>
      
      
        
        </ul>

      </div><!-- Content col end -->

    </div><!-- Row end -->
  
  </div><!-- Conatiner end -->

  
</section><!-- Main container end -->

  <div class="container">
<div class="row">
      <div class="col-lg-8">
        <div class="accordion accordion-group accordion-classic" id="construction-accordion">
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  <?php echo $lang['defre0'];?>
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
              data-parent="#construction-accordion">
              <div class="card-body">
              <?php echo $lang['defre'];?>
              </div>
            </div>
          </div>
          </div>
        </div>
</div>
</div>
<br>
<br>

<?php
include('footer.php');
?>


