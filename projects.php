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
                          <ul class="dropdown-menu " role="menu">
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
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/9.png)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title"><?php echo $lang['project']; ?></h1>
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


<?php
        include('project_list.php');

        ?>
        <section  class="project-area solid-bg">

<div class="container">
    <div class="row text-center">
      <div class="col-lg-12">

<div class="quote-item quote-border mt-5">
               <div class="quote-text-border">
               <?php echo $lang['of2']; ?>
               </div>
                <div class="quote-item-footer">
                  <img loading="lazy" class="testimonial-thumb" src="images/log.png" alt="testimonial">
                  <div class="quote-item-info">
                     <h3 class="quote-author">SKA FLUIDES</h3>
                  </div>
               </div>
            </div><!-- Quote item end -->



            </div><!-- End col md 4 -->
            </div><!-- End col md 4 -->
            </div><!--/ Container end -->
</section>


<?php
include('footer.php');
?>