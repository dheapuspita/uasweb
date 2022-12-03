<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faverse</title>
    <link rel="stylesheet" href="landingpage.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="icon" href="faverse.png">
</head>
    <body>
    <nav>
      <div class="logo">
        <a href="landingpage.php">Faverse</a>
      </div>
      <div class="right">
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
      </div>
    </nav>
    <div class="slides">
      <div class="slide">
        <img src="page1.png" alt="">
      </div>
      <div class="slide">
        <img src="page2.png" alt="">
      </div>
      <div class="slide">
        <img src="page3.png" alt="">
      </div>
      <div class="navigation">
        <a class = "prev" onclick = "plusSlides(-1)">&#10094;</a>
        <a class = "next" onclick = "plusSlides(-1)">&#10095;</a>
      </div>
    </div>
    <section id="artist">
      <div class="inside-screen artist">
        <div>
          <img src="enhypen.jpg" />
            <h6>Enhypen</h6>
        </div>
        <div>
          <img src="txt.jpg" />
            <h6>Txt</h6>
        </div>
        <div>
          <img src="&team.jpg" />
            <h6>&Team</h6>
        </div>
      </div>
      <div><br><br>
        <br><br><a href="login.php">See More Artist</a>
      </div>
    </section>
    <section id="aboutus">
      <div class="inside-screen">
        <h3>About Us</h3>
        <div class="content">
          <p>
            “We are an online website who’s presenting you all goodies of your favorite artist to purchase in easier way”.
          </p><br><br>
          <a href="login.php">Learn More</a>
        </div>
      </div>
    </section>
    <footer id="contact">
        <div class="inside-screen">
          <div>
            <h5>Contact</h5><br>
            <div class="social-media">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-solid fa-envelope"></i></a>
            </div> 
          </div>
        </div>
        <div class="inside-screen">
          <div class="copyright">&copy; 2022 Faverse</div>
        </div>
      </footer>
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide");
        if (n > slides.length){
          slideIndex = 1;
        }
        if (n < 1){
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++){
          slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
      }
    </script>
    </body>
</html>