<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Goran Janković</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link rel="stylesheet" type="text/css" href="css/table.css">
		<link rel="shortcut icon" type="image/png" href="slike/loznica-grb.png"/>
		<meta name="keyword" content="goran jankovic, web programiranje">
		
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
		<h1><?php echo $lang['titles'] ?></h1>
					<h2 title="Click me"
					  class="center"
					  id="modalBtn">
					  Goran Janković
					</h2>
		<div class="table-title">
    </div>
      <table class="table-fill">
        <thead>
          <tr>
            <th class="text-left">Program</th>
            <th class="text-left">Nivo</th>
          </tr>
            </thead>
              <tbody class="table-hover">
          <tr>
            <td class="text-left">PHP</td>
            <td class="text-left">Srednji</td>
          </tr>
          <tr>
            <td class="text-left">Laravel</td>
            <td class="text-left">Početni</td>
          </tr>
          <tr>
            <td class="text-left">Javascript</td>
            <td class="text-left">Srednji</td>
          </tr>
          <tr>
            <td class="text-left">Angular</td>
            <td class="text-left">Početni</td>
          </tr>
          <tr>
            <td class="text-left">jQuery</td>
            <td class="text-left">Početni</td>
          </tr>          
          <tr>
            <td class="text-left">Bootstrap</td>
            <td class="text-left">Srednji</td>
          </tr>
            <td class="text-left">HTML</td>
            <td class="text-left">Srednji</td>
          </tr>
          <tr>
            <td class="text-left">CSS</td>
            <td class="text-left">Srednji</td>
          </tr>
          <tr>
            <td class="text-left">MYSQL</td>
            <td class="text-left">Srednji</td>
          </tr>
          <tr>
            <td class="text-left">LINUX</td>
            <td class="text-left">Srednji</td>
          </tr>
          <tr>
            <td class="text-left">AUTOCAD</td>
            <td class="text-left">Početni</td>
          </tr>
          <tr>
            <td class="text-left">MICROSOFT OFFICE</td>
            <td class="text-left">Napredni</td>
          </tr>
          <tr>
            <td class="text-left">GIT</td>
            <td class="text-left">Srednji</td>
          </tr>
          <tr>
            <td class="text-left">IONIC</td>
            <td class="text-left">Početni</td>
          </tr>
        </tbody>
      </table>

      <!-- modal -->
  <div id="simpleModal"
       class="modal">
      <div class="modal-content">
          <span class="closeBtn">&times;</span>
          <img src="slike/2.jpg"
               alt="my picture">
      </div>
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


  <!-- particlesjs -->
<div id="particles-js"></div>
<!--build:js js/main.min.js -->
<script src="./js/lib/particlesjs.js"></script>
<script src="js/main.js"></script>
<!-- endbuild -->
</body>

</html>