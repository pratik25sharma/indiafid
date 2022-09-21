<?php
    require "lessphp/lessc.inc.php";
    $inputFile = "../assets/react_css/plp.less";
    $outputFile = "../assets/react_css/plp.css";
    $less = new lessc;
    $cache = $less->cachedCompile($inputFile);
    file_put_contents($outputFile, $cache["compiled"]);
    $last_updated = $cache["updated"];
    $cache = $less->cachedCompile($cache);
    if ($cache["updated"] > $last_updated) {
        file_put_contents($outputFile, $cache["compiled"]);
    }
?>
<html>
<head>
<meta charset="UTF-8">
<title>PlP</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="../assets/react_css/plp.css">

<script src="https://kit.fontawesome.com/d7c0542bb1.js" crossorigin="anonymous"></script>
</head>
<body>

<header>
  <div class="headInfoRow">
    <div class="wrapper">
      <div class="officeInfo">
        <p>
          <i class="fa-solid fa-clock"></i> Opening time: Mon-Fri 08:00 - 18:00
        </p>
        <p>
          <i class="fa-solid fa-at"></i> Email: info@fidusindia.com
        </p>
      </div>
      <div class="headSocial">
        <a href="javascript:void(0);">Call Us</a>
        <a href="javascript:void(0);">Social Icons</a>
        <ul>
          <li>
            <a href="javascript:void(0);">
              <i class="fa-brands fa-square-facebook"></i>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <i class="fa-brands fa-square-instagram"></i>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <i class="fa-brands fa-square-google-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="mnHeader">
    <div class="wrapper">
      <p class="logo">
        <a href="javascript:void(0);">
          <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/image-7.png" alt="">
        </a>
      </p>
      <div class="fiSearch">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="search by products">
        <input type="submit" value="Search">
      </div>
      <div class="fiRLinks">
        <ul>
          <li class="cart hasProd">
            <a href="javascript:void(0);">
              <i class="fa-solid fa-cart-shopping"></i>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">SignIn / Register</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <nav>
    <div class="wrapper">
      <ul>
        <li>
          <a href="javascript:void(0);">Home</a>
        </li>
        <li>
          <a href="javascript:void(0);">Our Products <i class="fa-solid fa-angle-down"></i></a>
          <div class="navWrap">
            <ul>
              <li>
                <div class="column">
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                </div>
                <div class="column">
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                </div>
              </li>
              <li>
                <div class="column">
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                </div>
                <div class="column">
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                </div>
              </li>
              <li>
                <div class="column">
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                </div>
                <div class="column">
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                </div>
              </li>
              <li>
                <div class="column">
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                  <a href="javascript:void(0);">Menu 1</a>
                </div>
                <div class="column">
                  <a href="javascript:void(0);">Menu 1</a>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="javascript:void(0);">Top brands <i class="fa-solid fa-angle-down"></i></a>
        </li>
        <li>
          <a href="javascript:void(0);">Authorised Distributor <i class="fa-solid fa-angle-down"></i></a>
        </li>
        <li>
          <a href="javascript:void(0);">About Us</a>
        </li>
        <li>
          <a href="javascript:void(0);">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<section class="plp">
  <div class="wrapper">
    <aside class="filter">
      <div class="filterBlocks categories">
        <h2>Categories</h2>
        <ul>
          <li>
            <a href="javascript:void(0);">Link 1</a>
            <ul>
              <li>
                <a href="javascript:void(0);">Sub Link 1</a>
              </li>
              <li>
                <a href="javascript:void(0);">Sub Link 1</a>
              </li>
              <li>
                <a href="javascript:void(0);">Sub Link 1</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="filterBlocks sorting">
        <h2>Sorting</h2>
        <ul>
          <li>
            <a href="javascript:void(0);">Recommended</a>
          </li>
          <li>
            <a href="javascript:void(0);">Price: High to Low</a>
          </li>
          <li>
            <a href="javascript:void(0);">Price: Low to High</a>
          </li>
          <li>
            <a href="javascript:void(0);">Popularity</a>
          </li>
        </ul>
      </div>
      <div class="filterBlocks priceRange">
        <h2>Price Range</h2>
        <ul>
          <li>
            <a href="javascript:void(0);">Rs.100 - Rs.999</a>
          </li>
          <li>
            <a href="javascript:void(0);">Rs.100 - Rs.999</a>
          </li>
          <li>
            <a href="javascript:void(0);">Rs.100 - Rs.999</a>
          </li>
          <li>
            <a href="javascript:void(0);">Rs.100 - Rs.999</a>
          </li>
          <li>
            <a href="javascript:void(0);">Rs.100 - Rs.999</a>
          </li>
        </ul>
      </div>
      <div class="filterBlocks priceRange">
        <h2>Discounted Products</h2>
        <ul>
          <li>
            <a href="javascript:void(0);">5% off</a>
          </li>
          <li>
            <a href="javascript:void(0);">15% off</a>
          </li>
          <li>
            <a href="javascript:void(0);">20% off</a>
          </li>
          <li>
            <a href="javascript:void(0);">25% off</a>
          </li>
          <li>
            <a href="javascript:void(0);">30% off</a>
          </li>
        </ul>
      </div>

      <div class="filterBlocks">
        <h2>Brands</h2>
        <ul>
          <li>
            <a href="javascript:void(0);">
              <input type="checkbox" id="brand">
              <label for="brand">Brand 1</label>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <input type="checkbox">
              <label for="brand">Brand 1</label>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <input type="checkbox">
              <label for="brand">Brand 1</label>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <input type="checkbox">
              <label for="brand">Brand 1</label>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <input type="checkbox">
              <label for="brand">Brand 1</label>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <input type="checkbox">
              <label for="brand">Brand 1</label>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <input type="checkbox">
              <label for="brand">Brand 1</label>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <input type="checkbox">
              <label for="brand">Brand 1</label>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <input type="checkbox">
              <label for="brand">Brand 1</label>
            </a>
          </li>
        </ul>
      </div>
    </aside>

    <section class="prod-items">
      <h1>KOYO Spherical Roller Bearings <span>(1-60 products of 195)</span></h1>
      <ul>
        <li>
          <a href="javascript:void(0);">
            <img src="//cdn1.industrybuying.com/products/abrasives/cut-off-wheels/ABR.CUT.36198925_1654583078724.jpg" alt="">
            <div class="prodInfo">
              <h4>Product Name Goes Here</h4>
              <div class="prodPrice">
                <p class="price">₹2200</p>
                <p class="oldPrice">₹3999</p>
              </div>
              <p class="discount">40% OFF <span>You save ₹1799</span></p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0);">
            <img src="//cdn1.industrybuying.com/products/abrasives/cut-off-wheels/ABR.CUT.36198925_1654583078724.jpg" alt="">
            <div class="prodInfo">
              <h4>Product Name Goes Here</h4>
              <div class="prodPrice">
                <p class="price">₹2200</p>
                <p class="oldPrice">₹3999</p>
              </div>
              <p class="discount">40% OFF <span>You save ₹1799</span></p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0);">
            <img src="//cdn1.industrybuying.com/products/abrasives/cut-off-wheels/ABR.CUT.36198925_1654583078724.jpg" alt="">
            <div class="prodInfo">
              <h4>Product Name Goes Here</h4>
              <div class="prodPrice">
                <p class="price">₹2200</p>
                <p class="oldPrice">₹3999</p>
              </div>
              <p class="discount">40% OFF <span>You save ₹1799</span></p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0);">
            <img src="//cdn1.industrybuying.com/products/abrasives/cut-off-wheels/ABR.CUT.36198925_1654583078724.jpg" alt="">
            <div class="prodInfo">
              <h4>Product Name Goes Here</h4>
              <div class="prodPrice">
                <p class="price">₹2200</p>
                <p class="oldPrice">₹3999</p>
              </div>
              <p class="discount">40% OFF <span>You save ₹1799</span></p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0);">
            <img src="//cdn1.industrybuying.com/products/abrasives/cut-off-wheels/ABR.CUT.36198925_1654583078724.jpg" alt="">
            <div class="prodInfo">
              <h4>Product Name Goes Here</h4>
              <div class="prodPrice">
                <p class="price">₹2200</p>
                <p class="oldPrice">₹3999</p>
              </div>
              <p class="discount">40% OFF <span>You save ₹1799</span></p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0);">
            <img src="//cdn1.industrybuying.com/products/abrasives/cut-off-wheels/ABR.CUT.36198925_1654583078724.jpg" alt="">
            <div class="prodInfo">
              <h4>Product Name Goes Here</h4>
              <div class="prodPrice">
                <p class="price">₹2200</p>
                <p class="oldPrice">₹3999</p>
              </div>
              <p class="discount">40% OFF <span>You save ₹1799</span></p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0);">
            <img src="//cdn1.industrybuying.com/products/abrasives/cut-off-wheels/ABR.CUT.36198925_1654583078724.jpg" alt="">
            <div class="prodInfo">
              <h4>Product Name Goes Here</h4>
              <div class="prodPrice">
                <p class="price">₹2200</p>
                <p class="oldPrice">₹3999</p>
              </div>
              <p class="discount">40% OFF <span>You save ₹1799</span></p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0);">
            <img src="//cdn1.industrybuying.com/products/abrasives/cut-off-wheels/ABR.CUT.36198925_1654583078724.jpg" alt="">
            <div class="prodInfo">
              <h4>Product Name Goes Here</h4>
              <div class="prodPrice">
                <p class="price">₹2200</p>
                <p class="oldPrice">₹3999</p>
              </div>
              <p class="discount">40% OFF <span>You save ₹1799</span></p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0);">
            <img src="//cdn1.industrybuying.com/products/abrasives/cut-off-wheels/ABR.CUT.36198925_1654583078724.jpg" alt="">
            <div class="prodInfo">
              <h4>Product Name Goes Here</h4>
              <div class="prodPrice">
                <p class="price">₹2200</p>
                <p class="oldPrice">₹3999</p>
              </div>
              <p class="discount">40% OFF <span>You save ₹1799</span></p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0);">
            <img src="//cdn1.industrybuying.com/products/abrasives/cut-off-wheels/ABR.CUT.36198925_1654583078724.jpg" alt="">
            <div class="prodInfo">
              <h4>Product Name Goes Here</h4>
              <div class="prodPrice">
                <p class="price">₹2200</p>
                <p class="oldPrice">₹3999</p>
              </div>
              <p class="discount">40% OFF <span>You save ₹1799</span></p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0);">
            <img src="//cdn1.industrybuying.com/products/abrasives/cut-off-wheels/ABR.CUT.36198925_1654583078724.jpg" alt="">
            <div class="prodInfo">
              <h4>Product Name Goes Here</h4>
              <div class="prodPrice">
                <p class="price">₹2200</p>
                <p class="oldPrice">₹3999</p>
              </div>
              <p class="discount">40% OFF <span>You save ₹1799</span></p>
            </div>
          </a>
        </li>
      </ul>
    </section>
  </div>
</section>


<footer>
      <div class="footerNav">
        <div class="wrapper">
          <div class="footerLinksWrap">
            <h2>Shop All Categories</h2>
            <ul>
              <a href="javascript:void(0);">Pneumatic Valves</a>
              <a href="javascript:void(0);">Hydraulic Pumps & Valves</a>
              <a href="javascript:void(0);">Liquid Filters</a>
              <a href="javascript:void(0);">Hydraulic Units</a>
              <a href="javascript:void(0);">Hydraulic Valves & Pumps</a>
              <a href="javascript:void(0);">Valves</a>
              <a href="javascript:void(0);">Pneumatic Cylinders & Chucks</a>
              <a href="javascript:void(0);">Pneumatic Connectors</a>
              <a href="javascript:void(0);">Hydraulic Valves</a>
              <a href="javascript:void(0);">Pneumatic Valves & Cylinders</a>
              <a href="javascript:void(0);">Pneumatic Nut Runners</a>
              <a href="javascript:void(0);">Pneumatic Valves</a>
              <a href="javascript:void(0);">Hydraulic Pumps & Valves</a>
              <a href="javascript:void(0);">Liquid Filters</a>
              <a href="javascript:void(0);">Hydraulic Units</a>
              <a href="javascript:void(0);">Hydraulic Valves & Pumps</a>
              <a href="javascript:void(0);">Valves</a>
              <a href="javascript:void(0);">Pneumatic Cylinders & Chucks</a>
            </ul>
          </div> 
          <div class="footerLinksWrap">
            <h2>Company</h2>
            <ul>
              <a href="javascript:void(0);">About Us</a>
              <a href="javascript:void(0);">Contact Us</a>
              <a href="javascript:void(0);">Careers</a>
              <a href="javascript:void(0);">Special Offers</a>
              <a href="javascript:void(0);">Terms & Condition</a>
              <a href="javascript:void(0);">Privacy ploicy</a>
            </ul>
            <div class="ques">
              <h2>Have a question or want to place an order?</h2>
              <p>Helpline Number: Call: +91 8448449073 (Mon-Sun: 9am-6pm)</p>
            </div>
          </div>
          <div class="footerLinksWrap">
            <h2>Help</h2>
            <ul>
              <a href="javascript:void(0);">FAQ's</a>
              <a href="javascript:void(0);">Cancellation & Returns</a>
            </ul>
          </div>
        </div>
        <div class="footerBottom">
          <p>Copyright © fidusindia.com 2013-2022 All Right Reserved</p>
        </div>
      </div>
    </footer>
<script type="text/javascript" src="../assets/js/jquery-1.9.1.min.js"></script> 
</body>
</html>