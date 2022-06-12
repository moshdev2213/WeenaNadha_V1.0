<?php require 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/index.css" />
  <!--THE MAIN STYLES FILE-->
  <link rel="stylesheet" href="css/CARDstyles.css" />
  <!-- <link rel="stylesheet" href="footer.css"> -->
  <link rel="stylesheet" href="css/accordian.css" />
  <link rel="stylesheet" href="css/hamburger.css" />
  <link rel="stylesheet" href="css/ratings.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <!--FONT AWESOME STYLES FILE-->
  <title>PRODUCT_PROFILE</title>
  <!--THE MAIN JS FILE-->
</head>

<body>
  <!--THE MAIN TYPE OF NAV BAR BEGINS-->
  <nav class="prinav">
    <div class="left">
      <a href="index.php">HOME</a>
      <!-- <a href="products.php">PRODUCTS</a> -->
      <a href="index.html">EDUCATION</a>
      <a href="contact.html">CONTACT US</a>
    </div>
    <div class="right">
      <a href=""><i class="fa fa-phone" style="position: absolute; margin-right: 25px; font-size: 14px" aria-hidden="true"></i></a><a href="#"> 011454525687</a>
      <!-- <a href="#">PRODUCTS</a> -->
      <a href="adminlogs.html" target="_blank">SIGN-IN/UP</a>

    </div>
  </nav>

  <!--THE SECOND TYPE OF NAV BAR BEGINS-->
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
          <li><a class="menu__item" href="index.php">HOME</a></li>
          <li><a class="menu__item" href="adminlogs.html">SIGN-UP</a></li>
          <li><a class="menu__item" href="adminlogs.html">SIGN-IN</a></li>
          <li><a class="menu__item" href="index.html">EDUCATION</a></li>
          <li><a class="menu__item" href="products.php">PRODUCTS</a></li>
        </ul>
      </div>
      <a class="secnav_item" href="#">STRINGS</a>
      <a class="secnav_item" href="#">DRUMS</a>
      <a class="secnav_item" href="#">FLUTES</a>
      <div id="input-container">
        <i class="fa-solid fa-magnifying-glass filter"></i>
        <input type="search" id="search-input" class="searchbox secnav_item" placeholder="search" />
      </div>
    </div>
  </div>

  <!--THE MAIN CONTINER OF PRODUCT,FOOTER,SIDEBAR-->
  <div class="main">
    <div class="filters">
      <h2>FILTERS<i class="fa-solid fa-filter"></i></h2>
      <br /><br />
      <button class="accordion">
        PRICE<i class="fa-solid fa-sort-down"></i>
      </button>
      <div class="panel price_ranger">
        <input id="pricemin" type="number" min="0" placeholder="Min" />
        <span>-</span>
        <input id="pricemax" type="number" min="0" placeholder="Max" />
        <button class="filter playbtn"><i class="fa-solid fa-play"></i></button>
        <br />
      </div>

      <button class="accordion">
        SHIPPING<i class="fa-solid fa-sort-down"></i>
      </button>
      <div class="panel">
        <label for="">FREE SHIPPING</label>
        <input id="freeshipping" class="filter check" type="checkbox" />
        <label for="">PAID</label>
        <input id="shipping" class="filter check" type="checkbox" />
      </div>

      <button class="accordion">
        RATINGS<i class="fa-solid fa-sort-down"></i>
      </button>
      <div id="div" class="panel">
        <!--THE STAR RATINGS CATEGOEY STARTS HERE-->
        <fieldset class="rating">
          <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>

          <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>

          <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>

          <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>

          <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
        </fieldset>
      </div>

      <button class="accordion">
        WARRANTY<i class="fa-solid fa-sort-down"></i>
      </button>
      <div class="panel">
        <label for="">3 MONTHS</label>
        <input id="3m" class="filter check warranty" type="checkbox" /><br />
        <label for="">6 MONTHS</label>
        <input id="6m" class="filter check warranty" type="checkbox" /><br />
        <label for="">1 YEAR</label>
        <input id="1y" class="filter check warranty" type="checkbox" /><br />
      </div>
      <button id="clear-filters">Clear filters</button>
      <script src="script.js"></script>
    </div>
    <div id="products" class="products">
      <div id="p_list" class="products_list">
        <!--THE PRODUCT CARD CATEGORY STARTS HERE-->
        <?php
        $query = "SELECT * FROM product ";
        $pricemin = 0;
        $pricemax = pow(10, 10);
        $warranty_in = '0';
        $shipping_in = '5';

        if (isset($_GET['3m'])) {
          $warranty_in .= ",'3m'";
        }
        if (isset($_GET['6m'])) {
          $warranty_in .= ",'6m'";
        }
        if (isset($_GET['1y'])) {
          $warranty_in .= ",'1y'";
        }

        //Using free shipping to filter the products
        if (isset($_GET['freeshipping'])) {
          $shipping_in .= ",'0'";
        }
        if (isset($_GET['shipping'])) {
          $shipping_in .= ",'1'";
        }

        if (!isset($_GET['freeshipping']) && !isset($_GET['shipping'])) {
          $shipping_in .= ",'0','1'";
        }

        if (!isset($_GET['3m']) && !isset($_GET['6m']) && !isset($_GET['1y'])) {
          $warranty_in .= ",'0','3m','6m','1y'";
        }


        //SETTING THE PRICE RANGE
        if (isset($_GET['pricemax'])) {
          $pricemax = $_GET['pricemax'];
        }

        if (isset($_GET['pricemin'])) {
          $pricemin = $_GET['pricemin'];
        }

        //Using average rating to filter the products
        if (isset($_GET['rating'])) {
          $query = "SELECT product.*,r.avg_rating
            FROM product 
            INNER JOIN (
              SELECT product_ID, AVG(rating) avg_rating
              FROM review 
              GROUP BY product_ID
            ) r ON r.product_ID = product.product_ID
            
            where r.avg_rating >={$_GET['rating']} and warranty IN ($warranty_in)";
        } else {
          $query .= " where warranty IN ($warranty_in)";
        }

        $query .= " and  shipping IN ($shipping_in) ";

        $query .= "and price BETWEEN $pricemin AND $pricemax ";

        if (isset($_GET['search'])) {
          $query .= " AND name LIKE '%{$_GET['search']}%'";
        }
        // echo $query;
        $products = database::search($query);
        $product_count = $products->num_rows;

        while ($product = $products->fetch_assoc()) {
          //this fetches the image from the database with compraing to the product id   
          $img = database::search("SELECT * FROM `image` WHERE `product_id` = '{$product['product_ID']}' ")->fetch_assoc()['path'];
          //this fetch the category specification from the database and query enables here
          $category = database::search("SELECT * FROM `category` WHERE `category_ID` = '" . $product['category_ID'] . "' ");
          $category = $category->fetch_assoc()['name'];
        ?>
          <div class="product-card">
            <div class="badge"><?php echo $product['deal'] ?></div>
            <div class="product-tumb">
              <!--this href makes the thumbnail direct to the relevant product-->
              <a href="product.php?id=<?php echo $product['product_ID'] ?>""><img style=" width: 350px; object-fit:contain;" src=" <?php echo $img ?>" alt="" srcset="" /></a>
            </div>
            <div class="product-details">
              <span class="product-catagory"><?php echo $category ?></span>
              <!--this href makes title text to re-direct to the relevant product-->
              <h4><a href="product.php?id=<?php echo $product['product_ID'] ?>"><?php echo $product['name'] ?></a></h4>
              <p>
                <?php echo $product['description'] ?>
              </p>
              <div class="product-bottom-details">
                <div class="product-price"><small>Rs<?php echo $product['mrp'] ?></small>Rs<?php echo $product['price'] ?></div>
                <div class="product-links">
                  <button class="btnbuy">BUY NOW</button>
                  <a href=""><i class="fa fa-heart"></i></a>
                  <a href=""><i class="fa fa-shopping-cart"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!--tHE CARD DIV ENDS HERE-->
        <?php }

        if ($product_count == 0) {
        ?>
          <h1>No Product Found</h1>
        <?php
        }
        ?>
      </div>
    </div>
    <footer>
      <div class="footer">
        <div class="inner-footer">
          <!--  for company name and description -->
          <div class="footer-items">
            <img src="" alt="" />
            <h1>WEENA NAADHA</h1>
            <p>THE ONE AND ONLY PLACE FOR YOU MUSICAL NEEDS</p>
          </div>

          <!--  for quick links  -->
          <div class="footer-items">
            <h3>USEFUL Links</h3>
            <div class="border1"></div>
            <!--for the underline -->
            <ul>
              <a href="#">
                <li>Home</li>
              </a>
              <a href="#">
                <li>Search</li>
              </a>
              <a href="#">
                <li>Contact</li>
              </a>
              <a href="#">
                <li>About</li>
              </a>
            </ul>
          </div>

          <!--  for some other links -->
          <div class="footer-items">
            <h3>Categories</h3>
            <div class="border1"></div>
            <!--for the underline -->
            <ul>
              <a href="#">
                <li>Drums</li>
              </a>
              <a href="#">
                <li>Flutes</li>
              </a>
              <a href="#">
                <li>Strings</li>
              </a>
              <a href="#">
                <li>Columns</li>
              </a>
            </ul>
          </div>

          <!--  for contact us info -->
          <div class="footer-items">
            <h3>Contact us</h3>
            <div class="border1"></div>
            <ul>
              <li>
                <!-- <i class="fa fa-map-marker" aria-hidden="true"></i>--> <a href="#zzz"> Find Us Here</a>
              </li>
              <li>
                <!-- <i class="fa fa-phone" aria-hidden="true"></i>-->011454525687
              </li>
              <li>
                <!-- <i class="fa fa-envelope" aria-hidden="true"></i>-->xyz@gmail.com
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
            WE ACCEPT<i class="fa-brands fa-cc-visa"></i><i class="fa-brands fa-cc-mastercard"></i><i class="fa-solid fa-building-columns"></i><i class="fa-solid fa-money-bill"></i>
          </span>
          <div class="email">
            <label for="">ENTER E-MAIL</label>
            <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
            <input class="intouch" type="text" placeholder="Get In Touch" />
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/accordian.js"></script>
  <script>
    var search = document.getElementById("search-input");
    var pmax = document.getElementById("pricemax");
    var pmin = document.getElementById("pricemin");
    var warranty3m = document.getElementById("3m");
    var warranty6m = document.getElementById("6m");
    var warranty1y = document.getElementById("1y");
    var freeshiping = document.getElementById("freeshipping");
    var shipping = document.getElementById("shipping");
    var rating = 0;
    const radioButtons = document.querySelectorAll('input[name="rating"]');


    //set values using url
    if (location.search.length > 0) {
      let url_string = location.href;
      url = new URL(url_string);
      if (url.searchParams.get("pricemax") != null) {
        pmax.value = url.searchParams.get("pricemax");
      }
      if (url.searchParams.get("pricemin") != null) {
        pmin.value = url.searchParams.get("pricemin");
      }
      if (url.searchParams.get("3m") != null) {
        warranty3m.checked = true;
      }
      if (url.searchParams.get("6m") != null) {
        warranty6m.checked = true;
      }
      if (url.searchParams.get("1y") != null) {
        warranty1y.checked = true;
      }
      if (url.searchParams.get("freeshipping") != null) {
        freeshiping.checked = true;
      }
      if (url.searchParams.get("shipping") != null) {
        shipping.checked = true;
      }
      if (url.searchParams.get("rating") != null) {
        rating = url.searchParams.get("rating");
      }
      if (rating > 0) {
        radioButtons.forEach(function(radioButton) {
          if (radioButton.value == rating) {
            radioButton.checked = true;
          }
        });
      }
    }

    for (const radioButton of radioButtons) {
      radioButton.addEventListener("click", getRating);
    }
    document.getElementById('clear-filters').addEventListener("click", () => {

      location.href = "products.php";
    });

    function getRating() {
      for (const radioButton of radioButtons) {
        if (radioButton.checked) {
          rating = radioButton.value;
          setGetParams();
        }
      }
    }
    let filter_elements = document.getElementsByClassName("filter");
    for (var i = 0; i < filter_elements.length; i++) {
      filter_elements[i].addEventListener('click', setGetParams, false);
    }

    pmin.oninput = function() {
      pmax.min = this.value;
    };

    pmax.oninput = function() {
      pmin.max = this.value;
    };

    function setGetParams() {
      let url = "products.php?";
      if (pmax.value != "") {
        url = url + "&pricemax=" + pmax.value;
      }
      if (pmin.value != "") {
        url = url + "&pricemin=" + pmin.value;
      }
      if (rating != "") {
        url = url + "&rating=" + rating;
      }

      if (warranty3m.checked) {
        url = url + "&3m=true";
      }
      if (warranty6m.checked) {
        url = url + "&6m=true";
      }
      if (warranty1y.checked) {
        url = url + "&1y=true";
      }

      if (freeshiping.checked) {
        url = url + "&freeshipping=true";
      }
      if (shipping.checked) {
        url = url + "&shipping=true";
      }
      url = url + "&search=" + search.value;
      window.location.href = url;
    }
  </script>
</body>

</html>

<!--<i class="fa-solid fa-caret-up"></i>-->