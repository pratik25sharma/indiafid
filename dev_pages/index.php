<?php
    require "lessphp/lessc.inc.php";
    $inputFile = "../assets/react_css/home.less";
    $outputFile = "../assets/react_css/home.css";
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
<title>Fidus India - Home page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="../assets/react_css/home.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


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
    <section class="banner">
      <ul class="single-item">
        <li>
          <img src="https://www.fidusindia.com/wp-content/uploads/2021/09/First.jpg" alt="">
          <p>“Import & Export House <br> of Complete Industrial Automation <br> & MRO Goods”</p>
        </li>
        <li>
          <img src="https://www.fidusindia.com/wp-content/uploads/2021/09/First.jpg" alt="">
          <p>“Import & Export House <br> of Complete Industrial Automation <br> & MRO Goods”</p>
        </li>
      </ul>
    </section>

    <div class="wrapper">
    <section>
      <h2>Deals Of the day <a href="javascript:void(0);">View All</a></h2>
        <div class="categoryPromotions shdBox">
          <ul class="prod-items">
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
        </div>
    </section>


    <section>
      <h2>Top Brands Products <a href="javascript:void(0);">View All</a></h2>
      <div class="categoryPromotions shdBox">
        <ul class="prod-items">
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
      </div>
    </section>


      <section>
        <div class="fidusindiaInfo">
          <ul>
            <li>
              <i class="fa-solid fa-chart-line"></i>
              <p>Future Vision</p>
              <span>FIAPL’ Vision to have a Roof where all the need of Industry can be  catered through One Single Window for Automation & MRO Needs.</span>
            </li>
            <li>
              <i class="fa-solid fa-people-group"></i>
              <p>Dedicated Team</p>
              <span>Young And Talented Energetic Squad play the key role to Build & Organise the Path of Success.</span>
            </li>
            <li>
              <i class="fa-solid fa-puzzle-piece"></i>
              <p>Innovative Solutions</p>
              <span>The FIAPL Team provides an Assessment and Solutions, Service for Planning and Implementing each Project.</span>
            </li>
          </ul>
        </div>
      </section>

      <section>
        <h2>Top Categories</h2>
        <div class="fdiCategories">
          <ul>
            <li>
              <h4>Pneumatics & <br> Hydraulics</h4>
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
              <a href="javascript:void(0);" class="viewMore">View More...</a>
            </li>
            <li>
              <h4>Pneumatics & <br> Hydraulics</h4>
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
              <a href="javascript:void(0);" class="viewMore">View More...</a>
            </li>
            <li>
              <h4>Pneumatics & <br> Hydraulics</h4>
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
              <a href="javascript:void(0);" class="viewMore">View More...</a>
            </li>
          </ul>
        </div>
      </section>
      <section>
        <h2>Our Brands We Deals In</h2>
        <div class="fdiBrandsDeals">
          <ul class="brands-deal">
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
            <li>
              <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/Tsubaki-150x150.jpg" alt="">
            </li>
          </ul>
        </div>
      </section>

      <section>
        <div class="newsletter">
          <div class="txt">
            <p>Sign up for updates of latest</p>
            <span>Fidus India collections, campaigns and videos.</span>
          </div>
          <form action="">
            <input type="text" placeholder="">
            <input type="submit" value="Submit">
          </form>
        </div>
      </section>
    </div>


    
    
    <script src="../assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
      $('.single-item').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: true,
        prevArrow: '<i class="fa-solid fa-circle-chevron-left slick-prev"></i>',
        nextArrow: '<i class="fa-solid fa-circle-chevron-right slick-next"></i>'
      });

      
      $('.prod-items').slick({
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 1
      });
      $('.brands-deal').slick({
        infinite: true,
        arrows: false,
        dots: true,
        slidesToShow: 8,
        autoplay: true,
        slidesToScroll: 1
      });
    </script>
  </body>
</html>