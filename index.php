<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--    <link rel="stylesheet" href="css/kl.css" type="text/css">-->
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/index.css" type="text/css">

         <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize..js"></script>
<!--   <script type="text/jscript" src="js/kp.js"></script>-->
<!--    <script type="text/javascript" src="css/materialize.css"></script>-->
</head>

<body>





    <nav class="header">
        <div class="nav-wrapper ">
            <!--                <a href="#" class="brand-logobrand-logo">Logo</a>-->
            <img src="img/7wonderlogo.png" id="logo">
            <div class="wondertext" class="grey-text text-lighten-4 right">NEW 7 WONDERS OF THE WORLD</div>
            <!--    
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
-->
        </div>
    </nav>
    
 <script>
        $(document).ready(function(){
      $('.parallax').parallax();
    });
    </script>
      
  <div class="parallax-container">
    <div class="parallax">
        <img src="img/BALLOON_Petra24_high_PRIMEedit-1920x1080.jpg">
        <p class="bigwondertext">NEW 7 WONDERS OF THE WORLD</p>
        <p class="fullwondertext">2000 YEARS AFTER THE ANCIENT 7 WONDERS HAVE BEEN DEFINED, WE CREATE GLOBAL MEMORY AGAIN WITH THE NEW 7 WONDERS OF THE WORLD...</p>
    </div>
      
</div>
    
  <div class="section white">
   <div class="carousel">
       
       <script>
    
    $(document).ready(function(){
      $('.carousel').carousel();
        setInterval(function(){
           $('.carousel').carousel('next');},2000);});
    </script>
  <script>
    
    $('.carousel').carousel('next');
$('.carousel').carousel('next', 3); // Move next n times.
// Previous slide
$('.carousel').carousel('prev');
$('.carousel').carousel('prev', 4); // Move prev n times.
// Set to nth slide
$('.carousel').carousel('set', 4);
      
    </script>

       
    <a class="carousel-item myfirstbox">
        <img src="img/taj.jpg" class="imgtaj">
        
        <div class="onebox">
            <p class="tajtext1">Taj Mahal</p>
            <p class="tajtext2">A White Marble mausoleum</p>
            <p class="tajtext3">in Agra , India</p>
        </div>
    </a>
    <a class="carousel-item myfirstbox">
        <img src="img/china.jpg" class="imgtaj">

        <div class="onebox">
            <p class="chinatext1">Greate Wall Of China</p>
            <p class="chinatext2">series of fortifications built along the</p>
            <p class="chinatext3"> historical border of China</p>
        </div>
    </a>
    <a class="carousel-item myfirstbox">
        <img src="img/machu.jpeg" class="imgtaj">
       
        <div class="onebox">
            <p class="machutext1">Machu Picchu</p>
            <p class="machutext2">15th-century Inca site in Peru</p>
        </div>
      
    </a>
    <a class="carousel-item myfirstbox">
        
        <img src="img/Colosseum.jpeg" class="imgtaj">
       <div class="onebox">
            <p class="Colosseumtext1">Colosseum</p>
            <p class="Colosseumtext2">elliptical amphitheatre in Rome</p>
        </div>
       
       </a>
    <a class="carousel-item myfirstbox">
        <img src="img/cristian.jpg" class="imgtaj">
        <div class="onebox">
            <p class="christtext1">Christ the Redeemer</p>
            <p class="christtext2">statue of Jesus in Río de Janeiro, Brazil</p>
        </div>
       
       </a>
       
    <a class="carousel-item myfirstbox">
        <img src="img/petra.jpg" class="imgtaj">
        <div class="onebox">
            <p class="petratext1">Petra</p>
            <p class="petratext2">Arabian historical and archaeological city, Jordan</p>
        </div>
       
       </a> 
       
        <a class="carousel-item myfirstbox">
        <img src="img/Chich%C3%A9n.jpeg" class="imgtaj">
        <div class="onebox">
            <p class="chichtext1">Chichen Itza</p>
            <p class="chichtext2">Pyramid at Chichen Itza, Yucatan </p>
            <p class="chichtext3">Peninsula, Mexico</p>
        </div>
       
       </a> 
  </div>
  </div>
    
    
<!--
  <div class="parallax-container">
    <div class="parallax"><img src="img/BALLOON_Petra24_high_PRIMEedit-1920x1080.jpg"></div>
  </div>
-->
    
    
    


    <footer class="page-footer">
          <div class="container">
            <div class="row">
<!--              <div class="col l6 s12">-->
<!--                <h5 class="white-text">Footer Content</h5>-->
<!--                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>-->
<!--              </div>-->
<!--
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
-->
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
           © 2000 - 2017 New Open World Corporation, all rights reserved. Terms & Conditions
            <a class="grey-text text-lighten-4 right" href="#!">Join Us</a>
            </div>
          </div>
        </footer>










</body>

</html>
