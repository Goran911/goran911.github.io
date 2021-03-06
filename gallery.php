<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Goran Jankovic</title>
  <link rel="shortcut icon" type="image/png" href="slike/loznica-grb.png"/>

  <link rel="stylesheet" href="css/demo-styles.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/css.css" />

</head>

<body>

		<nav>
        <a href="#" id="ikonicameni"></a>
      <ul>
        <li><a href="index.php"><?php echo $lang['home'] ?></a></li>
        <li><a href="about.php"><?php echo $lang['about'] ?></a></li>
        <li><a href="skills.php"><?php echo $lang['skills'] ?></a></li>
        <li><a href="gallery.php"><?php echo $lang['gallery'] ?></a></li>
        <li><a href="contact.php"><?php echo $lang['contact'] ?></a></li>      
      </ul>
    </nav>
		<h1><?php echo $lang['titleg'] ?></h1>

<div class="demo-wrapper">

  <!--// Gallery Markup: A container that the plugin is called upon, and two lists for the images (use images with same aspect ratio) //-->
  <div id="gallery-container">
    
    <ul class="items--small">
      <li class="item"><a href="#"><img src="images/1.jpg" alt="" width="180px" height="146px" /></a></li>
      <li class="item"><a href="#"><img src="images/2.jpg" alt="" width="180px" height="146px" /></a></li>
      <li class="item"><a href="#"><img src="images/3.jpg" alt="" width="180px" height="146px" /></a></li>
      <li class="item"><a href="#"><img src="images/4.jpg" alt="" width="180px" height="146px" /></a></li>
      <li class="item"><a href="#"><img src="images/5.jpg" alt="" width="180px" height="146px" /></a></li>
      <li class="item"><a href="#"><img src="images/6.jpg" alt="" width="180px" height="146px" /></a></li>
      <li class="item"><a href="#"><img src="images/7.jpg" alt="" width="180px" height="146px" /></a></li>
      <li class="item"><a href="#"><img src="images/8.jpg" alt="" width="180px" height="146px" /></a></li>
      <li class="item"><a href="#"><img src="images/10.jpg" alt="" width="180px" height="146px" /></a></li>
      <li class="item"><a href="#"><img src="images/11.jpg" alt="" width="180px" height="146px" /></a></li>
      <li class="item"><a href="#"><img src="images/12.jpg" alt="" width="180px" height="146px" /></a></li>
      <li class="item"><a href="#"><img src="images/9.jpg" alt="" width="180px" height="146px" /></a></li>
    </ul>
    <ul class="items--big">
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/1.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/2.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/3.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/4.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/5.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/6.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/7.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/8.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/9.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/10.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/11.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/12.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      </li>
    </ul>
    <div class="controls">
      <span class="control icon-arrow-left" data-direction="previous"></span> 
      <span class="control icon-arrow-right" data-direction="next"></span> 
      <span class="grid icon-grid"></span>
      <span class="fs-toggle icon-fullscreen"></span>
    </div>
    
 <footer>
          <div class="container">
            <p class="center nounderline links">
              <a title="Find me on Github"
                 href="https://github.com/kapetan91"
                 target="_blank">
                <img class="images" src="slike/github.png">
              </a>
              <a title="Find me on Facebook"
                 href="https://www.facebook.com/goran.jankovic.146"
                 target="_blank">
                <img class="images" src="slike/facebook.png">
              </a>
              <a title="Find me on Linkedin"
                 href="https://www.linkedin.com/in/goran-jankovi%C4%87-0819b4155/"
                 target="_blank">
                <img class="images" src="slike/linkedin.png">
              </a>
              <a title="Find me on Instagram"
                 href="https://www.instagram.com/kapetan91/"
                 target="_blank">
                <img class="images" src="slike/instagram.png">
              </a>
            </p>
            
          </div>
        </footer>

  <script src="js/jquery-1.8.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/scripts.js"></script>
  <script>
    $(document).ready(function(){
     $('#gallery-container').sGallery({
        fullScreenEnabled: true
      });
    });
  </script>

</body>
</html>