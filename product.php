<?php require 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/corosel.css">
  <link rel="stylesheet" href="css/index.css" />
  <!-- <link rel="stylesheet" href="css/accordian.css" /> -->
  <link rel="stylesheet" href="css/hamburger.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/product.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <title>PRODUCT</title>
</head>

<body>
  <nav class="prinav">
    <div class="left">
      <a href="index.php">HOME</a>
      <a href="products.php">PRODUCTS</a>
      <a href="index.html">EDUCATION</a>
      <a href="contact.html">CONTACT US</a>
    </div>
    <div class="right">
      <a href=""><i class="fa fa-phone" style="position: absolute; margin-right: 25px; font-size: 14px" aria-hidden="true"></i></a><a href="#"> 011454525687</a>
      <a href="#">PRODUCTS</a>
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
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="search" id="#input-container" class="searchbox secnav_item" placeholder="search" />
      </div>
    </div>
  </div>
  <!--THIS INCLUDES THE MAIN BODY OF THE PRODUCT LISTINGS-->
  <!-- <div class="main"> -->
  <?php if (isset($_GET["id"])) {
    $pid = $_GET["id"];

    $productrs = database::search("SELECT * FROM `product` WHERE `product_ID`='$pid' ");

    $pn = $productrs->num_rows;
    if ($pn == 1) {

      $product = $productrs->fetch_assoc();

      // getting the category of the product
      $category = database::search("SELECT * FROM `category` WHERE `category_ID`='$product[category_ID]' ")->fetch_assoc();

      // getting the stock of the product
      if ($product['stock'] > 0) {
        $stock = "In Stock";
      } else {
        $stock = "Out of Stock";
      }

      // getting the images of the product
      $images = database::search("SELECT * FROM `image` WHERE `product_id`='$pid' ");
      $img_array = array();
      while ($image = $images->fetch_assoc()) {
        array_push($img_array, $image['path']);
      }

      //getting reviews
      $reviews = database::search("SELECT * FROM `review` WHERE `product_ID`='$pid' ");
      $rn = $reviews->num_rows;

      //getting average rating
      $rating = 0;
      if ($rn > 0) {
        while ($review = $reviews->fetch_assoc()) {
          $rating += $review['rating'];
        }
        $rating = $rating / $rn;
      }

  ?>

      <div class="card-wrapper">
        <div class="card">
          <!-- card left -->
          <div class="product-imgs">
            <div class="img-display">
              <div class="img-showcase">
                <?php
                foreach ($img_array as $img) {
                  echo "<img src='$img' alt='product' />";
                }
                ?>
              </div>
            </div>
            <div class="img-select">
              <?php
              $id = 1;
              //this image categor is related to the small image boxes
              foreach ($img_array as $img) {
              ?>
                <div class="img-item">
                  <a href="#" data-id="<?php echo $id++ ?>">
                    <img src="<?php echo $img ?>" alt="product" />
                  </a>
                </div>
              <?php } ?>
            </div>
          </div>
          <!-- card right -->
          <div class="product-content">
            <h2 class="product-title"><?php echo $product["name"] ?></h2>
            <div class="product-rating">
              <?php for ($i = 0; $i < $rating; $i++) { ?>
                <i class="fa fa-star"></i>
              <?php } ?>
              <?php
              echo $rating;
              ?>
            </div>

            <div class="product-price">
              <p class="last-price">Price: <span>Rs. <?php echo $product["price"] ?></span></p>
              <!-- <p class="new-price">Discount Price: <span>$249.00 (5%)</span></p> -->
            </div>

            <div class="product-detail">
              <h2>Item Description: </h2>
              <p><?php echo $product["description"] ?></p>
              <ul>
                <li><img src="IMG/chhh.png" alt=""> Color: <?php echo $product["color"] ?></li>
                <li><img src="IMG/chhh.png" alt="">Available:<?php echo $product["stock"] ?></li>
                <li><img src="IMG/chhh.png" alt="">Category: <?php echo $category["name"] ?></li>
                <li><img src="IMG/chhh.png" alt="">Design:<?php echo $product["design"] ?> </li>
                <li><img src="IMG/chhh.png" alt="">Weight:<?php echo $product["weight"] ?> </li>
              </ul>
            </div>

            <div class="purchase-info">
              <input type="number" min="0" value="1">
              <a href="My Shopping Cart.html">
                <button type="button" class="btn">
                  Add to Cart <i class="fas fa-shopping-cart"></i>
                </button>
              </a>

              <a href="Cart.html"><button type="button" class="btn">Buy Now</button></a>
            </div>
          </div>
        </div>
      </div>


      <!-- </div> -->
      <!--THE OTHER RELATED PRODUCTS WILL BE SHOWN GERE-->

      <span class="h2">
        <h2>REVIEWS AND FEEDBACKS</h2>
      </span>

      <div class="othersecs">
        <?php

        //getting the reviews of the product
        $reviews = database::search("SELECT * FROM `review` WHERE `product_ID`='$pid' ");
        if ($reviews->num_rows > 0) {
          while ($review = $reviews->fetch_assoc()) {
            $user = database::search("SELECT * FROM `users` WHERE `useremail`='{$review['useremail']}' ")->fetch_assoc();
        ?>
            <div class="reviews">
              <div class="photo">
                <img class="per1" src="<?php echo $user['image']?>" alt="">
              </div>
              <div class="texty">
                <!--the shows the names and emails-->
                <h3><?php echo $user['username'] ?> at <?php echo $review['date'] ?>
                  <span class="product-rating" style="margin-left: 2%;">
                    <?php
                    if ($review['rating'] == 1) {
                      echo "<i class='fa fa-star'></i>";
                    } else if ($review['rating'] == 2) {
                      echo "<i class='fa fa-star'></i><i class='fa fa-star'></i>";
                    } else if ($review['rating'] == 3) {
                      echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                    } else if ($review['rating'] == 4) {
                      echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                    } else if ($review['rating'] == 5) {
                      echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                    } ?>
                  </span>
                </h3>
                <p><?php echo $review['description'] ?></p>
              </div>
            </div>
          <?php }
        } 
        //executes the else block
        else { ?>  
          <div class="text-center">
            <div class="texty">
              <h3>No Reviews Yet</h3>
            </div>
          </div>
          <style>
            .othersecs {
              display: inline;
              text-align: center;

            }

            .texty {
              margin-bottom: 50px !important;
            }
          </style>
        <?php } ?>
        <!-- end of the else block -->

      </div>
  <?php
    } else {
      echo "incorrect product id";
    }
  } ?>
  <!--THE FOOTER BEGINS HERE-->
  <footer style="width: 100%">
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
              <a href="index.php"><li>Home</li></a>
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
          WE ACCEPT<i class="fa-brands fa-cc-visa"></i><i class="fa-brands fa-cc-mastercard"></i><i class="fa-solid fa-building-columns"></i><i class="fa-solid fa-money-bill"></i></span>
        <div class="email">
          <label for="">ENTER E-MAIL</label>
          <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
          <input class="intouch" type="text" placeholder="Get In Touch" />
        </div>
      </div>
    </div>
  </footer>
  <!--THE SCRIPT TAG FOR THE IMAGE SLIDERS AND MORE ON-->
  <script>
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
      imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
      });
    });

    function slideImage() {
      const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

      document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
  </script>

</body>

</html>