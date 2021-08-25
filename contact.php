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
              
                      <li class="nav-item dropdown">
                          <a href="part.php" class="nav-link dropdown-toggle" ><?php echo $lang['part']; ?> </a>
                          
                      </li>
              
              
                      <li class="nav-item active"><a class="nav-link" href="contact.php"><?php echo $lang['contact']; ?></a></li>
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

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.5214020481394!2d10.24486021528797!3d36.73405397996225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd37a672832d6f%3A0xbfb4eac3bb5522d3!2zU29jacOpdMOpIFNLQSBGbHVpZGVz!5e0!3m2!1sfr!2stn!4v1626879046639!5m2!1sfr!2stn" width="1600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>




<section id="main-container" class="main-container">
  <div class="container">

    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title" style="color: #0033cc;"><?php echo $lang['forum1']; ?></h2>
        <h3 class="section-sub-title" ><?php echo $lang['contact']; ?></h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
          <div class="ts-service-box-content">
          <h4><?php echo $lang['location']; ?></h4>
            <p><?php echo $lang['b2']; ?></p>
          </div>
        </div>
      </div><!-- Col 1 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4><?php echo $lang['email']; ?></h4>
            <p><?php echo $lang['email2']; ?></p>
          </div>
        </div>
      </div><!-- Col 2 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4><?php echo $lang['call']; ?></h4>
            <p><?php echo $lang['call2']; ?></p>
          </div>
        </div>
      </div><!-- Col 3 end -->

    </div><!-- 1st row end -->


    <div class="gap-40"></div>

    <div class="row">


      <div class="col-md-12">

        <h3 class="column-title" style="color: #0033cc;"><?php echo $lang['forum2']; ?></h3>
        <!-- contact form works with formspree.io  -->
        <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
          
		
    
        <form id="contact-form" action="sendmail.php"  method="POST">
          <div class="error-container"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="nom"><?php echo $lang['name']; ?></label>
                <input class="form-control form-control-name" name="nom"  id="nom" placeholder="" type="text" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="mail"><?php echo $lang['mail']; ?></label>
                <input class="form-control form-control-email" name="mail" id="mail" placeholder="" type="email"
                  required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="subject"><?php echo $lang['subj']; ?></label>
                <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="message"><?php echo $lang['msg']; ?></label>
            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
              required></textarea>
          </div>
          

          <div class="text-right"><br>
            <button class="btn btn-primary solid blank" type="submit"><?php echo $lang['env']; ?></button>
          </div>
          <center  >
           
      <?php if (! empty($s)) { ?>
        <h3 style="color:red;" class="column-title" ><?php echo $s; ?></h3>
            <?php } ?>
          </center>
        </form>
      </div>

    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->
<?php
include('footer.php');
?>