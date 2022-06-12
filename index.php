<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Weena Naada Online Store</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/corosel.css" />
    <link rel="stylesheet" href="css/index.css" />
    <!-- <link rel="stylesheet" href="css/accordian.css" /> -->
    <link rel="stylesheet" href="css/hamburger.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/product.css" />
    <link rel="stylesheet" href="css/bhanuka.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
  </head>
  <body>
    <!-- header section starts  -->

    <nav class="prinav">
      <div class="left">
      <a href="index.php">HOME</a>
      <a href="products.php">PRODUCTS</a>
      <a href="index.html">EDUCATION</a>
      <a href="contact.html">CONTACT US</a>
      </div>
      <div class="right">
        <a href=""
          ><i
            class="fa fa-phone"
            style="position: absolute; margin-right: 25px; font-size: 14px"
            aria-hidden="true"
          ></i></a
        ><a href="#"> 011454525687</a>
        <a href="#">PRODUCTS</a>
        <a href="#">SIGN-UP</a>
        <a href="#">SIGN-IN</a>
      </div>
    </nav>

    <!--  NAV BAR BEGINS-->
    <div class="secnav">
      <div class="image">
        <img src="IMG/logo.png" alt="logo" />
      </div>
      <div class="details">
        <div class="hamburger-menu">
          <input id="menu__toggle" type="checkbox" />
          <label class="menu__btn" for="menu__toggle">
            <span></span>
          </label>

          <ul class="menu__box">
            <li><a class="menu__item" href="#">HOME</a></li>
            <li><a class="menu__item" href="#">SIGN-UP</a></li>
            <li><a class="menu__item" href="#">SIGN-IN</a></li>
            <li><a class="menu__item" href="#">EDUCATION</a></li>
            <li><a class="menu__item" href="#">PRODUCTS</a></li>
          </ul>
        </div>
        <a class="secnav_item" href="#">STRINGS</a>
        <a class="secnav_item" href="#">DRUMS</a>
        <a class="secnav_item" href="#">FLUTES</a>
        <div id="input-container">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input
            type="search"
            id="#input-container"
            class="searchbox secnav_item"
            placeholder="search"
          />
        </div>
      </div>
    </div>

    <!--home -->

    <!-- this slider can be used multiple times on the same page -->
    <!-- don't change class names because slider will not work -->
    <div class="slider">
      <div class="imgs">
        <!-- you can add divs with class img here and they will be 
		   automatically added to slider -->
        <!-- style="left: 0;" in case JS is disabled -->
        <div class="img" style="left: 0">
          <span>Weena Naada</span>
        </div>
        <div class="img">
          <span>Weena Naada</span>
        </div>
        <div class="img">
          <span>Weena Naada</span>
        </div>
        <div class="img">
          <span>Weena Naada</span>
        </div>
      </div>
      <div class="dots"></div>
    </div>
    <!-- <br /> -->

    <section class="home" id="home">
      <div class="content">
        <h3>Welcome to Store..</h3>
        <p>
          This is a SLIIT's best and largest
           <br>online musical instrument store.<br> 
           This website was created by <b>KGL_04</b> students.
        </p>
        <a href="products.php" class="btn2">Shop Now</a>
      </div>
    </section>

  

    <section class="popular one" id="popular">
      <h1 class="heading">Flash Deals</h1>

      <div class="box-container">
        <div class="box">
          <img src="IMG/iimg/1.jpg" alt="Saxophone" />
          
          <h3>Saxophone</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>

          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART <i class="fa fa-shopping-cart"></i>
          </button>
        </div>

        <div class="box">
          <img src="IMG/iimg/3.jpg" alt="Trumpet" />
          
          <h3>Trumpet</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART <i class="fa fa-shopping-cart"></i>
          </button>
        </div>

        <div class="box">
          <img src="IMG/iimg/4.jpg" alt="" />
          
          <h3>Flute #3</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART <i class="fa fa-shopping-cart"></i>
          </button>
        </div>

        <div class="box">
          <img src="IMG/2.jpg" alt="Drum" />
         
          <h3>Drum</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART <i class="fa fa-shopping-cart"></i>
          </button>
        </div>
		</div>
	  </section>
	  <section class="popular" id="popular">
      <!-- LImited editions starts here -->
		<h1 class="heading">Limited Edition</h1>
  
		<div class="box-container">
		  <div class="box">
			<img src="IMG/iimg/ess.jpg" alt="Sithar" />
			
			<h3>Sithar</h3>
			<div class="stars">
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="far fa-star"></i>
			  <i class="far fa-star"></i>
			  <i class="far fa-star"></i>
			</div>
  
			<a href="#" class="btn2">BUY</a>
			<button class="btn3">
			  CART <i class="fa fa-shopping-cart"></i>
			</button>
		  </div>
  
		  <div class="box">
			<img src="IMG/iimg/tub.jpg" alt="Tubla" />
			
			<h3>Indian Thabla</h3>
			<div class="stars">
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="far fa-star"></i>
			</div>
			<a href="#" class="btn2">BUY</a>
			<button class="btn3">
			 CART <i class="fa fa-shopping-cart"></i>
			</button>
		  </div>
  
		  <div class="box">
			<img src="IMG/iimg/sab.jpg" alt="Sabian " />
			
			<h3>Sabian SBR1402</h3>
			<div class="stars">
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="far fa-star"></i>
			  <i class="far fa-star"></i>
			</div>
			<a href="#" class="btn2">BUY</a>
			<button class="btn3">
			  CART <i class="fa fa-shopping-cart"></i>
			</button>
		  </div>
  
		  <div class="box">
			<img src="IMG/iimg/keyb.jpg" alt="keybord" />
			
			<h3>Yamaha Keybord</h3>
			<div class="stars">
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			</div>
			<a href="#" class="btn2">BUY</a>
			<button class="btn3">
			  CART <i class="fa fa-shopping-cart"></i>
			</button>
		  </div>
		  </div>
		</section>
       <section class="popular" id="popular">
      <h1 class="heading">New Arrivals</h1>

      <div class="box-container">
        <div class="box">
          <img src="IMG/iimg/gut.png" alt="guitar" />
          
          <h3>guitar</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART <i class="fa fa-shopping-cart"></i>
          </button>
        </div>

        <div class="box">
          <img src="IMG/piano/1/4.jpg" alt="" />
          
          <h3>Piano</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART <i class="fa fa-shopping-cart"></i>
          </button>
        </div>

        <div class="box">
          <img src="IMG/flute/1/jfl710.jpg" alt="" />
          
          <h3>Flute</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART <i class="fa fa-shopping-cart"></i>
          </button>
        </div>

        <div class="box">
          <img src="IMG/Drum/2/5.jpg" alt="" />
         
          <h3>Drum (red)</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART <i class="fa fa-shopping-cart"></i>
          </button>
        </div>
        <div class="box">
          <img src="IMG/Keyboard/3/2.jpg" alt="" />
          
          <h3>Mini Keyboard</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART <i class="fa fa-shopping-cart"></i>
          </button>
        </div>
        <div class="box">
          <img src="IMG/ELECTRIC_GUITAR/3/3.jpg" alt="" />
         
          <h3>Electronic Guitar</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART <i class="fa fa-shopping-cart"></i>
          </button>
        </div>
        <div class="box">
          <img src="IMG/iimg/5.jpg" alt="" />
          
          <h3>Flute #2</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
           CART <i class="fa fa-shopping-cart"></i>
          </button>
        </div>
        <div class="box">
          <img src="IMG/classical/2/4.jpg" alt="" />
         
          <h3>Classical Guitar</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART  <i class="fa fa-shopping-cart"></i>
          </button>
        </div>

        <div class="box">
          <img src="IMG/Drum/2/2.jpg" alt="" />
          
          <h3>Kid's Drum set</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART  <i class="fa fa-shopping-cart"></i>
          </button>
        </div>

        <div class="box">
          <img src="IMG/Keyboard/2/5.jpg" alt="" />
          
          <h3>Keyboard Full set</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn2">BUY</a>
          <button class="btn3">
            CART  <i class="fa fa-shopping-cart"></i>
          </button>
        </div>
      </div>
    </section>

    

    <!--THE FOOTER BEGINS HERE-->
    <footer style="width: 100%">
      <div class="footer">
        <div class="inner-footer">
          <!--  for company name and description -->
          <div class="footer-items">
            <img src="" alt="" />
            <h1>WEENA NAADHA</h1>
            <br><br>
            <p>THE ONE AND ONLY PLACE FOR YOU MUSICAL NEEDS</p>
          </div>

          <!--  for quick links  -->
          <div class="footer-items">
            <h3>USEFUL Links</h3>
            <div class="border1"></div>
            <!--for the underline -->
            <ul>
              <a href="#"><li>Home</li></a>
              <a href="#"><li>Search</li></a>
              <a href="#"><li>Contact</li></a>
              <a href="#"><li>About</li></a>
            </ul>
          </div>

          <!--  for some other links -->
          <div class="footer-items">
            <h3>Categories</h3>
            <div class="border1"></div>
            <!--for the underline -->
            <ul>
              <a href="#"><li>Drums</li></a>
              <a href="#"><li>Flutes</li></a>
              <a href="#"><li>Strings</li></a>
              <a href="#"><li>Columns</li></a>
            </ul>
          </div>

          <!--  for contact us info -->
          <div class="footer-items">
            <h3>Contact us</h3>
            <div class="border1"></div>
            <ul>
              <li>
                <i class="fa fa-map-marker" aria-hidden="true"></i>Find Us Here
              </li>
              <li>
                <i class="fa fa-phone" aria-hidden="true"></i>011454525687
              </li>
              <li>
                <i class="fa fa-envelope" aria-hidden="true"></i>xyz@gmail.com
              </li>
            </ul>

            <!--   for social links -->
            <div class="social-media">
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-google-plus-square"></i></a>
            </div>
          </div>
        </div>

        <!--   Footer Bottom start  -->
        <div class="footer-bottom">
          <span>
            WE ACCEPT <i class="fa-brands fa-cc-visa"></i
            ><i class="fa-brands fa-cc-mastercard"></i
            ><i class="fa-solid fa-building-columns"></i
            ><i class="fa-solid fa-money-bill"></i
          ></span>
          <div class="email" >
            <span id="SubmitError"></span>
            <label for="">ENTER E-MAIL</label>
            <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
            <form action="#" method="post" >
            <input class="intouch" type="text" placeholder="Get In Touch" onkeyup="validateEmail('email')" id="email"/>
            <button onclick="return validateForm()">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/bhanuka.js"></script>
    <script src="js/1.js"></script>
   
    <!-- <script src="js/script.js"></script> -->
  </body>
</html>
