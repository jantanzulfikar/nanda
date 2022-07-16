<?php
  session_start(); 
  $test = null;
  if (!empty($_SESSION["username"])) {
    $test = $_SESSION["username"];
  }
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Phone Review</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="assets/css/coment-box.css">
    <style>
        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}
        </style>
    
</head>

<body id="page-top" data-bs-target="#mainNav" data-bs-offset="56">
    <header class="header-blue">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container-fluid"><a class="navbar-brand" href="#">GadgetIn</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">galery</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Dropdown </a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                        </li>
                    </ul>
                    <!-- pengaturan nav bar login dikanan         -->
                    <form class="d-flex me-auto navbar-form" target="_self">                
                    </form>
                      <?php
                        if(is_null($test)){
                        echo("<span class='navbar-text'> <a class='login' href='login.php'>Log In</a></span><a class='btn btn-light action-button' role='button' href='registration.php'>Sign Up</a>");
                        } else {
                          echo $test .' , <a class="login" href="index.php" onclick="logout()">logout</a>';
                        }
                      ?>
                </div>
            </div>
        </nav>
        <div class="container hero">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <h1>Get ready.</h1>
                    <p>iPhone 14 will be released next year </p>
                    <button class="btn btn-light btn-lg action-button" type="button" href="index.html#app">Start discussion</button>
                </div>
                <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                    <div class="phone-mockup"><img class="device" src="assets/img/img5.png">
                        <div class="screen"></div>
                    </div>
                </div>
            </div>
        </div>
        
      
        <div class="container hero" style="margin-top: 280px;">                        
          <div class="w3-content w3-display-container" style="max-width:500px">            
            <div class="row">
                 <h1>Chosee Your Color</h1>
            </div>
            <img class="mySlides" src="assets/img/img1.png">
            <img class="mySlides" src="assets/img/img3.png">
            <img class="mySlides" src="assets/img/img1.png">
            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
              <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
              <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
              <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
              <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
              <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
            </div>
         </div>
        </div>

        <section id="app" style="padding-top: 100px;">
            <div class="container hero">
                <h1>discussion Box</h1>             
           </div>
          <div class="container-comment">
            <div class="row">
              <div class="col-6">
                <div class="comment">
              <p v-for="items in item" v-text="items"></p>
                </div><!--End Comment-->
                </div><!--End col -->
                </div><!-- End row -->
            <div class="row">
              <div class="col-6">
            <textarea type="text" class="input" placeholder="Write a comment" v-model="newItem" @keyup.enter="addItem()"></textarea>
                <button v-on:click="addItem()" class='primaryContained float-right' type="submit">Add Comment</button>
              </div><!-- End col -->
            </div><!--End Row -->
          </div><!--End Container -->
        </section><!-- end App -->

    
    </header>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script>
         var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs(n) {
      showDivs(slideIndex += n);
    }
    
    function currentDiv(n) {
      showDivs(slideIndex = n);
    }
    
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " w3-white";
    }

    function logout() {
      console.log("hay");
      session_start();
      session_destroy();
      header("refresh: 3;");
    
    }

    $(document).ready(function(){ 
    $(".primaryContained").on('click', function(){
    $(".comment").addClass("commentClicked");
    });
    $("textarea").on('keyup.enter', function(){
    $(".comment").addClass("commentClicked");
    });
    });

    new Vue({
    el: "#app",
    data:{
        title: 'Add a comment',
      newItem: '',
      item: [],
    },
    methods:{
      addItem  (){
      this.item.push(this.newItem);
        this.newItem = "";
      }
    }
    });

    </script>

</body>

</html>