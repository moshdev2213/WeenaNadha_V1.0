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
        <!-- <a href="#">PRODUCTS</a> -->
        <!-- <a href="#">SIGN-UP</a> -->
        <a href="adminlogs.html" target="_blank">SIGN-IN/UP</a>
      </div>
    </nav>

    <!--  NAV BAR BEGINS-->
    <div class="secnav">
      <div class="image">
        <a href="index.php"> <img src="IMG/logo.png" alt="logo" /></a>
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
          <a href="product.php?id=20"><img src="IMG/iimg/1.jpg" alt="Saxophone" /></a> 
          
          <h3>Clary C-90</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>

          <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
        </div>

        <div class="box">
          <a href="product.php?id=4"> <img src="IMG/keyboard/4/1.jpg" alt="Trumpet" /></a>
          
          <h3>Red Magic</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
        </div>

        <div class="box">
        <a href="product.php?id=21"><img src="IMG/saxaphone/2/4.jpg" alt="Saxophone" /></a> 
          
          <h3>CLARY C-90_G</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
        </div>

        <div class="box">
        <a href="product.php?id=24"><img src="IMG/tabla/1/4.jpg" alt="Saxophone" /></a> 
         
          <h3>Drum BI</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
        </div>
		</div>
	  </section>
	  <section class="popular" id="popular">
      <!-- LImited editions starts here -->
		<h1 class="heading">Limited Edition</h1>
  
		<div class="box-container">
		  <div class="box">
      <a href="product.php?id=16"><img src="IMG/piano/4/2.webp" alt="Saxophone" /></a> 
			
			<h3>Tabla</h3>
			<div class="stars">
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="far fa-star"></i>
			  <i class="far fa-star"></i>
			  <i class="far fa-star"></i>
			</div>
  
      <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
		  </div>
  
		  <div class="box">
      <a href="product.php?id=11"><img src="IMG/ELECTRIC_GUITAR/3/4.jpg" alt="Saxophone" /></a> 
			
			<h3>Jazz Hiphop</h3>
			<div class="stars">
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="far fa-star"></i>
			</div>
      <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
		  </div>
  
		  <div class="box">
      <a href="product.php?id=23"><img src="IMG/saxaphone/4/42.jpg" alt="Saxophone" /></a> 
			
			<h3>Casio C-11A</h3>
			<div class="stars">
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="far fa-star"></i>
			  <i class="far fa-star"></i>
			</div>
			<a href="#" class="btn2">BUY</a>
      <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
		  </div>
  
		  <div class="box">
      <a href="product.php?id=1"><img src="IMG/Keyboard/1/2.jpg" alt="Saxophone" /></a> 
			
			<h3>RockJam 61</h3>
			<div class="stars">
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			</div>
      <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
		  </div>
		  </div>
		</section>
       <section class="popular" id="popular">
      <h1 class="heading">New Arrivals</h1>

      <div class="box-container">
        <div class="box">
        <a href="product.php?id=8"><img src="IMG/classical/2/0.webp" alt="Saxophone" /></a> 
          
          <h3>Yamaha - dark</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
        </div>

        <div class="box">
        <a href="product.php?id=13"><img src="IMG/ELECTRIC_GUITAR/5/3.jpg" alt="Saxophone" /></a> 
          
          <h3>Casio Travellar T-89</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
        </div>

        <div class="box">
        <a href="product.php?id=18"><img src="IMG/piano/3/3.jpg" alt="Saxophone" /></a> 
          
          <h3>Piano Royal W</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
        </div>

        <div class="box">
        <a href="product.php?id=25"><img src="IMG/tabla/2/2.jpg" alt="Saxophone" /></a> 
         
          <h3>Drum BI large</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
        </div>
        <div class="box">
        <a href="product.php?id=3"><img src="IMG/Keyboard/3/1.jpg" alt="Saxophone" /></a> 
          
          <h3>Zur Musik</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
        </div>
        <div class="box">
        <a href="product.php?id=14"><img src="IMG/ELECTRIC_GUITAR/6/4.jpg" alt="Saxophone" /></a> 
         
          <h3>Electronic Guitar</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
        </div>
        <div class="box">
        <a href="product.php?id=22"><img src="IMG/saxaphone/3/2.jpg" alt="Saxophone" /></a> 
          
          <h3>Clary C-19 Pro</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>
        </div>
        <div class="box">
        <a href="product.php?id=15"><img src="IMG/flute/1/jfl710.jpg" alt="Saxophone" /></a> 
         
          <h3>F1 Flute</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <a href="Cart.html" class="btn2">BUY</a>
          <a href="My Shopping Cart.html">
            <button class="btn3">
              CART  <i class="fa fa-shopping-cart"></i>
            </button>
          </a>

        </div>

        <!-- <div class="box">
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
        </div> -->

        <!-- <div class="box">
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
        </div> -->
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
              <a href="products.php"><li>Shop Now</li></a>
              <a href="index.html"><li>Education</li></a>
              <a href="contact.html"><li>Contact us</li></a>
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
