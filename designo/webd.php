<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Web Design</title>
   <link rel="stylesheet" href="./css/styles.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&display=swap" rel="stylesheet">
</head>
<body class="webd">
   <header class="header">
      <section class="container flex">
      <a class="logo" href="./index.php">
         <img class="logo-header" src="./img/logo_header.png" alt="лого компанії">
      </a>
         <nav>
         <ul class="menu header__menu flex">
            <li><a href="#">OUR COMPANY</a></li>
            <li><a href="#">LOCATIONS</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="./reviews.php">REVIEWS</a></li>
         </ul>
         </nav>
      </section>
   </header>
   <main class="main container-bg">


      <article class="touch  flex">
         <div class="touch__content">
            <h2>Web Design</h2>
            <p>Our mobile designs bring intuitive digital solutions
            to your customers right at their fingertips.</p>
         </div>
      </article>
      <section class="container flex works">
         <article class="works__item flex">
            <img src="./img/w6.png" alt="site" width="350px" height="320px">
            <div class="flex">
            <h3>AIRFILTER</h3>
            <p>Solving the problem of poor indoor air quality by filtering the air</p>
            </div>
         </article>
         <article class="works__item flex">
            <img src="./img/w7.png" alt="site" width="350px" height="320px">
            <div class="flex">
               <h3>CAMP</h3>
               <p>Get expert training in coding, data, design, and digital marketing</p>
            </div>
         </article>
         <article class="works__item flex">
            <img src="./img/w8.png" alt="site" width="350px" height="320px">
            <div class="flex">
               <h3>EYECAM</h3>
               <p>Product that lets you edit your favorite photos and videos at any time</p>
            </div>
         </article>
         
         <article class="works__item flex">
            <img src="./img/w9.png" alt="site" width="350px" height="320px">
            <div class="flex">
               <h3>FACEIT</h3>
               <p>Get to meet your favorite internet superstar with the faceit app</p>
            </div>
         </article>
         <article class="works__item flex">
            <img src="./img/w10.png" alt="site" width="350px" height="320px">
            <div class="flex">
               <h3>TODO</h3>
               <p>A todo app that features cloud sync with light and dark mode</p>
            </div>
         </article>
         <article class="works__item flex">
            <img src="./img/w11.png" alt="site" width="350px" height="320px">
            <div class="flex">
               <h3>LOOPSTUDIOS</h3>
               <p>A VR experience app made for Loopstudios</p>
            </div>
         </article>
      </section>
      <section class="container flex products">
         <div class="products__content">
               <div class="product__content-item">
            <article class="product">
               <div>
                  <h2>app design</h2>
                  <a href="./appd.php">
                     <h3>view projects</h3>
               </a>
               </div>
            </article>
            <article class="product">
               <div>
                  <h2>graphic design</h2>
                  <a href="./graphic.php">
                     <h3>view projects</h3>
                  </a>
               </div>
            </article>
            </div>
         </div>
      </section>
      </main>
   <footer class="footer">
      <section class="container">
         <article class="touch flex">
            <div class="touch__content">
               <h2>Let’s talk about your project</h2>
               <p>Ready to take it to the next level? Contact us today and find out how our expertise can help your business grow.</p>
            </div>
            <a href="#">Get in touch</a>
         </article>
         <section class="container flex bt-line">
            <a class="logo" href="./index.php">
               <img class="logo-footer" src="./img/logo_footer.png" alt="лого компанії">
            </a>
               <ul class="menu footer__menu flex">
                  <li><a href="#">OUR COMPANY</a></li>
                  <li><a href="#">LOCATIONS</a></li>
                  <li><a href="#">CONTACT</a></li>
                  <li><a href="./reviews.php">REVIEWS</a></li>
               </ul>
         </section>
      </section>
      <section>
         <section class="info flex">
            <article class="info__item ">
               <h2>Designo Central Office</h2>
               <p>3886 Wellington Street</p>
               <p>Toronto, Ontario M9C 3J5</p>
               <p>
               <?php
                  $date = date('d.m.Y');
                  echo $date;
                  ?>
               </p>
            </article>
            <article class="info__item fw700">
            <h2>Contact Us (Central Office)</h2>
            <p>P : +1 253-863-8967</p>
            <p>M : contact@designo.co</p>
            </article>
            <article class="info__item social flex">
               <ul class="networks_list">
               <li class="netwoks__item">
                  <a href="https://twitter.com"><img src="./img/twitter.svg" alt="social network"></a>
               </li>
               <li class="netwoks__item">
                  <a href="https://www.facebook.com" ><img src="./img/facebook.svg"
                        alt="social network">
                  </a>
               </li>
               <li class="netwoks__item">
                  <a href="https://www.instagram.com" ><img src="./img/instagram.svg"
                        alt="social network">
                  </a>
               </li>
               <li class="netwoks__item">
                  <a href="https://www.youtube.com" ><img src="./img/youtube.svg"
                        alt="social network">
                  </a>
               </li>
               <li class="netwoks__item">
                  <a href="https://www.pinterest.com" ><img src="./img/pinterest.svg"
                        alt="social network">
                  </a>
               </li>
            </ul>
            </div>
            </article>
         </section>
      </section>
   </footer>
      <div class="scroll__up">⇡</div>
      <script src="./js/script.js"></script>
</body>
</html>