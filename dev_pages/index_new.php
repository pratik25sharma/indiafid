<?php
    require "lessphp/lessc.inc.php";
    $inputFile = "../assets/react_css/home_new.less";
    $outputFile = "../assets/react_css/home_new.css";
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
<link rel="stylesheet" type="text/css" href="../assets/react_css/home_new.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


<script src="https://kit.fontawesome.com/d7c0542bb1.js" crossorigin="anonymous"></script>
</head>
<body>

<header>
    <div class="topRow">
        <div class="wrapper">
            <p>
                For any query, email us at <a href="javascript:void(0);">care@fidusindia.com</a> or call us on <a href="javascript:void(0);">+91 8448449073</a>
            </p>
        </div>
    </div>
    <div class="head">
        <div class="wrapper">
            <a href="javascript:void(0);" class="logo">
                <img src="https://www.fidusindia.com/wp-content/uploads/2021/08/image-7.png" alt="">
            </a>
            <div class="headSearch">
                <input type="text" placeholder="Search By Products">
                <button>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="headLinks">
                <ul>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="fa-solid fa-cart-arrow-down"></i>
                            <span>Your Cart</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="fa-solid fa-house-user"></i>
                            <span>Sign In</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav">
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
    </div>
</header>

<div class="wrapper">
    <section class="nav_banner">
        <nav>
            <ul>
                <li>
                    <a href="javascript:void(0);">Power Tool</a>
                    <ul>
                        <li>
                            <a href="javascript:void(0);">Power Tool</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Power Tool</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Power Tool</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Power Tool</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Power Tool</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Power Tool</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">Power Tool</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Power Tool</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Power Tool</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Power Tool</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Power Tool</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Power Tool</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Power Tool</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Power Tool</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Power Tool</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Power Tool</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Power Tool</a>
                </li>
                <li class="viewMore">
                    <a href="javascript:void(0);">See All Categories</a>
                </li>
            </ul>
        </nav>

        <div class="banner">
            <ul class="single-item">
                <li>
                    <img src="https://www.fidusindia.com/wp-content/uploads/2021/09/First.jpg" alt="">
                </li>
                <li>
                    <img src="https://www.fidusindia.com/wp-content/uploads/2021/09/First.jpg" alt="">
                </li>
            </ul>
        </div>
    </section>

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
            <input type="text" placeholder="Enter your email id">
            <input type="submit" value="Submit">
          </form>
        </div>
      </section>
</div>

<footer>
    <div class="footerNav">
        <div class="wrapper">
            <div class="footerLinksWrap">
            <h2>Shop All Categories</h2>
            <ul>
                <a href="javascript:void(0);">Pneumatic Valves</a>
                <a href="javascript:void(0);">Hydraulic Pumps &amp; Valves</a>
                <a href="javascript:void(0);">Liquid Filters</a>
                <a href="javascript:void(0);">Hydraulic Units</a>
                <a href="javascript:void(0);">Hydraulic Valves &amp; Pumps</a>
                <a href="javascript:void(0);">Valves</a>
                <a href="javascript:void(0);">Pneumatic Cylinders &amp; Chucks</a>
                <a href="javascript:void(0);">Pneumatic Connectors</a>
                <a href="javascript:void(0);">Hydraulic Valves</a>
                <a href="javascript:void(0);">Pneumatic Valves &amp; Cylinders</a>
                <a href="javascript:void(0);">Pneumatic Nut Runners</a>
                <a href="javascript:void(0);">Pneumatic Valves</a>
                <a href="javascript:void(0);">Hydraulic Pumps &amp; Valves</a>
                <a href="javascript:void(0);">Liquid Filters</a>
                <a href="javascript:void(0);">Hydraulic Units</a>
                <a href="javascript:void(0);">Hydraulic Valves &amp; Pumps</a>
                <a href="javascript:void(0);">Valves</a>
                <a href="javascript:void(0);">Pneumatic Cylinders &amp; Chucks</a>
            </ul>
            </div> 
            <div class="footerLinksWrap">
            <h2>Company</h2>
            <ul>
                <a href="javascript:void(0);">About Us</a>
                <a href="javascript:void(0);">Contact Us</a>
                <a href="javascript:void(0);">Careers</a>
                <a href="javascript:void(0);">Special Offers</a>
                <a href="javascript:void(0);">Terms &amp; Condition</a>
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
                <a href="javascript:void(0);">Cancellation &amp; Returns</a>
            </ul>
            </div>
        </div>
        <div class="footerBottom">
            <p>Copyright © fidusindia.com 2013-2022 All Right Reserved</p>
        </div>
    </div>
</footer>

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

    $(window).scroll(function(){
    var sticky = $('header'),
        scroll = $(window).scrollTop();

    if (scroll >= 500) sticky.addClass('active');
    else sticky.removeClass('active');
    });
</script>
</body>
</html>