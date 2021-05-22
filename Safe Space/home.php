<?php
// connect to the database
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 $email=$_SESSION['user'];
?>

<html>
<head>
<link href="scrolling-nav.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

<style>
@import 'https://fonts.googleapis.com/css?family=Ubuntu:300, 400, 500, 700';

.ss{
	text-size:20px;
}
*, *:after, *:before {
  margin: 0;
  padding: 0;
}

.svg-container {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: -1;
}

svg {
  path {
    transition: .1s;
  }

  &:hover path {
    d: path("M 800 300 Q 400 250 0 300 L 0 0 L 800 0 L 800 300 Z");
  }
}

body {
    
  color: #333;
  font-family: 'Ubuntu', sans-serif;
  position: relative;
  
}

h3 {
  font-weight: 400;
}

header {
  color: #fff;
  padding-top: 10vw;
  padding-bottom: 30vw;
  text-align: center;
}

main {
  background: linear-gradient(to bottom, #ffffff 0%, #dddee1 100%);
  border-bottom: 1px solid rgba(0, 0, 0, .2);
  padding: 10vh 0 80vh;
  position: relative;
  text-align: center;
  overflow: hidden;
 

  &::after {
    border-right: 2px dashed #eee;
    content: '';
    position: absolute;
    top: calc(10vh + 1.618em);
    bottom: 0;
    left: 50%;
    width: 2px;
    height: 100%;
  }
}

footer {
  background: #dddee1;
  padding: 5vh 0;
  text-align: center;
  position: relative;
}

small {
  opacity: .5;
  font-weight: 300;

  a {
    color: inherit;
  }
}
.ml9 {
  position: relative;
  font-weight: 200;
  font-size: 4em;
}

.ml9 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.2em;
  padding-right: 0.05em;
  padding-bottom: 0.1em;
  overflow: hidden;
}

.ml9 .letter {
  transform-origin: 50% 100%;
  display: inline-block;
  line-height: 1em;
}


.icon-red {
        color: light-blue;
      }

</style>
</head>


<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><span style="font-size:20px">Safe Space</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
		
		<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home"><span class="glyphicon glyphicon-user icon-red"></span></a>
          </li>
          
		<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home"><span style="font-size:14px"><?php echo $email?></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home.php"><span style="font-size:14px">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php"><span style="font-size:14px">Logout</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact"><span style="font-size:14px">Contact Us</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="svg-container">
    <!-- I crated SVG with: https://codepen.io/anthonydugois/pen/mewdyZ -->
    <svg viewbox="0 0 800 400" class="svg">
      <path id="curve" fill="#50c6d8" d="M 800 300 Q 400 350 0 300 L 0 0 L 800 0 L 800 300 Z">
      </path>
    </svg>
  </div>

  <header>
  
	<h1 class="ml9">
  <span class="text-wrapper">
    <span class="letters">Safe Space</span>
  </span>
</h1>

    
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

  </header>

  <main id="ss">
     
      <h2><span style="font-size:50px">Why Safe space?</h2>
      <br>
    <p><span style="font-size:20px">How you take notes is a very personal thing.<br> <br>Similarly,your notebook is something that needs to be always available,Whether you're at your desk or midair flying coast-to-coast.<br><br>You can write notes on anything, the back of a napkin, an envelope, a ticket stub, and, yes, a notebook.<br><br>It's the same with us:you can write,delete,edit and store your notes.<br><br>Which are quick and easy to use.</p>
    <br>
    <br>
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-4 mb-3"> 
                <div class="card"> 
                    <h5 class="card-title">
       <br><br><span style="font-size:25px">                 Are you text only?</h5>
                    <img class="card-img-top" src="text.png" alt=""> 
  
                    <div class="card-body"> 
                         
                        <p class="card-text"> 
                            <span style="font-size:25px">Our Notes taker will provide you with enough space that you need.
                        </p> 
  <br><br><br>
                    <center>    <a href="notestable1.php" class="btn btn-outline-primary btn-sm"> 
                            <span style="font-size:20px">Text Notes
                        </a> 
                         </center>
                    </div> 
                </div> 
            </div> 
            <div class="col-lg-4 mb-3"> 
                <div class="card"> 
                    <h5 class="card-title"><br><br><span style="font-size:25px">Do You need a Space for your photos?</h5> 
                    <img class="card-img-top" src="photos.jpg" alt=""> 
  <br><br>
                    <div class="card-body"> 
                        
                        <p class="card-text"> 
                            <span style="font-size:25px">Our Photos manager will help you in the best organisation and retriveal of your photos.
  <br><br>
                            <center><a href="list_image.php" class="btn btn-outline-primary btn-sm"> 
                            <span style="font-size:20px">  Images
                          </a> 
                         </center>
                      </div> 
                  </div> 
              </div>
  <div class="col-lg-4 mb-3"> 
                  <div class="card"> 
                      <h5 class="card-title">
                          <br><br><span style="font-size:25px">Do you want your files to be Safe?</h5> 
                      <img class="card-img-top" src="files icon.png" alt=""> 
                      
                      <div class="card-body"> 
                          
                          <p class="card-text"> 
                             <span style="font-size:25px"> Our Files Manager will help in the best handling of your files.
                          </p> 
                            <br>
                          <center><a href="list_file.php" class="btn btn-outline-primary btn-sm">
                             <span style="font-size:20px"> Files
                          </a> 
                          </center>
                        </div> 
                    </div> 
                </div>			
            </div> 
        </div>
  </main>

  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

   
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
		  </div>
		  
          <div class="col-lg-4 col-md-6 footer-contact">
            <h4><span style="font-size:25px"> Contact Us</h4>
            <p>
              <span style="font-size:25px"> PSG College of Technology<br>
              <span style="font-size:25px"> Peelamedu,Coimbatore<br>
              <span style="font-size:25px"> TamilNadu <br><br>
            <span style="font-size:25px">   <strong>Phone:</strong> 9944846590<br>
             <span style="font-size:25px">  <strong>Email:</strong> deepibhuvi@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
           
            <div class="social-links mt-3">
              <span style="font-size:25px"> <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    
  </footer>

  <script>
(function() {
  // Variables
  var $curve = document.getElementById("curve");
  var last_known_scroll_position = 0;
  var defaultCurveValue = 350;
  var curveRate = 3;
  var ticking = false;
  var curveValue;

  // Handle the functionality
  function scrollEvent(scrollPos) {
    if (scrollPos >= 0 && scrollPos < defaultCurveValue) {
      curveValue = defaultCurveValue - parseFloat(scrollPos / curveRate);
      $curve.setAttribute(
        "d",
        "M 800 300 Q 400 " + curveValue + " 0 300 L 0 0 L 800 0 L 800 300 Z"
      );
    }
  }

  // Scroll Listener
  // https://developer.mozilla.org/en-US/docs/Web/Events/scroll
  window.addEventListener("scroll", function(e) {
    last_known_scroll_position = window.scrollY;

    if (!ticking) {
      window.requestAnimationFrame(function() {
        scrollEvent(last_known_scroll_position);
        ticking = false;
      });
    }

    ticking = true;
  });
})();
var textWrapper = document.querySelector('.ml9 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.ml9',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });</script>
</body>
</html>