<?php
  require "lessphp/lessc.inc.php";
    $less = new lessc;
    $less->checkedCompile("../assets/react_css/plp.less", "../assets/react_css/plp.css");
?>
<html>
<head>
<meta charset="UTF-8">
<title>PlP</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="../assets/react_css/plp.css">
</head>
<body>

<!-- START GLOBAL MODEL BOXES -->
<div id="myModal" class="popup_box" style="display: none;">
  <div class="model_box">
    <div class="model_box_child" id="category_filter">
      <span class="heading">Category <i class="close"></i></span>
      <div class="category_filters_sc">
        <ul>
            <li  class="has_drop">
              <a href="javascript:void(0);">Mobile & Tablets <span>123548956</span></a>
              <ul>
                  <li>
                    <a href="javascript:void(0);">Mobile & Tablets <span>2536</span></a>
                  </li>
              </ul>
            </li>
            <li class="active has_drop">
              <a href="javascript:void(0);">Mobile & Laptop Accessories <span>58964</span></a>
              <ul>
                  <li class="active">
                    <a href="javascript:void(0);">Mobile & Tablet Accessories <span>52487</span></a>
                    <ul>
                        <li>
                          <a href="javascript:void(0);" class="current">Adapters & Chargers</a>
                        </li>
                        <li>
                          <a href="javascript:void(0);">Adapters & Chargers</a>
                        </li>
                        <li>
                          <a href="javascript:void(0);">Adapters & Chargers</a>
                        </li>
                        <li>
                          <a href="javascript:void(0);">Adapters & Chargers</a>
                        </li>
                    </ul>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Mobile & Tablet Accessories</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Mobile & Tablet Accessories</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Mobile & Tablet Accessories</a>
                  </li>
              </ul>
            </li>
            <li class="has_drop">
              <a href="javascript:void(0);">Mobile &amp; Tablets <span>123548956</span></a>
            </li>
            <li class="has_drop">
              <a href="javascript:void(0);">Mobile &amp; Tablets <span>123548956</span></a>
            </li>
            <li class="has_drop">
              <a href="javascript:void(0);">Mobile &amp; Tablets <span>123548956</span></a>
            </li>
            <li class="has_drop">
              <a href="javascript:void(0);">Mobile &amp; Tablets <span>123548956</span></a>
            </li>
            <li class="has_drop">
              <a href="javascript:void(0);">Mobile &amp; Tablets <span>123548956</span></a>
            </li>
            <li class="has_drop">
              <a href="javascript:void(0);">Mobile &amp; Tablets <span>123548956</span></a>
            </li>
            <li class="has_drop">
              <a href="javascript:void(0);">Mobile &amp; Tablets <span>123548956</span></a>
            </li>
            <li class="has_drop">
              <a href="javascript:void(0);">Mobile &amp; Tablets <span>123548956</span></a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="header_wrap">
  <header id="navbar" class="header-sc close_srch">
    <ul>
      <li>
                   
          <a href="javascript:void(0);" onclick="window.history.go(-2);" class="icon i_back">
          <i></i>
          </a>
         
                </li>
    </ul>
    <a class="logo" href="https://m.shopclues.com/" title="Shopclues"> <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iIzI0QTNCNSIgZD0iTTEyLjAxNiAwQzE4LjYzNyAwIDI0LjAwNiA1LjQxIDI0IDEyLjA3MyAyMy45OSAxOC42MiAxOC41NzYgMjQgMTEuOTg1IDI0IDUuMzYyIDI0LS4wMDcgMTguNTkgMCAxMS45MjcuMDAxIDUuMzgyIDUuNDIzIDAgMTIuMDE2IDAiLz4KICAgICAgICA8cGF0aCBmaWxsPSIjRkZGIiBkPSJNMTkuNTAzIDYuNTY1Yy0uMDkzLjE3Ny01LjUxIDcuODA0LTguNjM4IDExLjM1My0uNzQxLjgzOS0xLjk4NC44Ni0yLjcyMy0uMDQ0LTEuNzEyLTIuMDktMy4wOTQtMy45MDYtNC42OTktNi40MjgtLjIyMS0uMzQ2LS40OTUtLjg0Ni0uMDk4LTEuMjgzIDAgMCAuNDM3LS40ODcgMS4zODUuMTgyIDEuMjAzLjg1IDIuNDg0IDEuNjggMy42NjUgMi40NjcuNjc3LjQ1IDEuMTA4LjQ5IDEuNzMxLjAwNiAyLjYyNS0yLjAzIDguNTEtNi40MSA4Ljg0NC02LjYxNS41OTEtLjM1OS42NjYuMDkuNTI1LjM2MmguMDA4eiIvPgogICAgPC9nPgo8L3N2Zz4K" alt="Shopclues"> </a>
    <div class="merchant_nme">
              <p id="plp_title">Mobile and Tablets<span class="product_count" id="product_count">(1121)</span></p>
            <p></p>
    </div>
    <a href="javascript:void(0);" id="side_bar_icon"><i></i></a> 
    
    <!-- HEADER RIGHT SIDE ICONS STARTS-->
    <ul>
            <li><a href="javascript:void(0);" id="search_ic" class="icon i_search"><i></i></a></li>
            <li style="display: none;"> <a href="javascript:void(0);" class="notify" id="notification_icon"> <i></i> <span id="notification_count" style="display: block;">1</span> </a>
        <div class="notification_content" style="display: none;" id="notification_wrapper"> <i id="bell_close" class="close"></i> <span class="heading"></span>
          <div class="notification_bx" id="bell_notifications"><ul data-reactroot=""><li><div class="refer_earn"><p>Refer Friends and Earn</p><span><!-- react-text: 7 -->Earn ₹<!-- /react-text --><!-- react-text: 8 -->700<!-- /react-text --><!-- react-text: 9 --> worth CluesBucks+<!-- /react-text --></span><a href="//m.shopclues.com/refer-and-earn.html" title="">Refer Now</a></div></li></ul></div>
        </div>
      </li>
      <li><a href="https://smo.shopclues.com/account" class="icon i_account"><i></i></a></li>
      <li><a href="https://smo.shopclues.com/acart/getcart" class="icon i_cart"><i><span id="cart_count" style="display:none"></span></i></a></li>
    </ul>
    <!-- HEADER RIGHT SIDE ICONS ENDS--> 
    <!-- SEARCH BAR STARTS-->
      </header>
</div>

<div class="pr_listing plist_ver280">
  <div class="wrapper" style="height: auto;">
  
    <!-- <div class="filter_wrap">
      <div id="filterdiv" class="filter_section animated bx_animate">
        <ul>
          <li class="category" id="load_category_tree">
            <a class="open_modelf" data-target="category_filter">Category
              <i></i>
            </a>
          </li>
          <li class="filter " id="slfltrName">
            <a href="javascript:void(0);">
              <i id="filt_selec" class="">
              </i>
              <span>
                Filter
                <span id="filter_count" class="count" style="">23</span>
              </span>
            </a>
          </li>
          <li class="price" id="price_icon">
            <a class="asc" data-filtername="sort_by" id="sort_price&amp;sort_order=asc" href="javascript:void(0);">
              <i class=""></i>
              <span>Price</span>
            </a>
          </li>
          <li id="sort" class="sort selected_sort">
            <a>
              <i id="sort_selec" class="active"></i>
              <span id="slSrtName">Sort</span>
            </a>
          </li>
        </ul>
      </div>
    </div> -->
    <div class="pr_listing plist_ver280">
      <div class="listing_group">
        <div class="list_col">
          <span class="pdFav"></span>
          <a href="javascript:void(0)" title="">
            <span class="prime_mall"></span>
            <div class="p_img">
              <img src="https://cdn.shopclues.com/images/thumbnails/86180/280/1/129717542IMG201709171612461507388238.jpg" alt="">
            </div>
            <div class="p_info">
              <div class="p_name">Klass9 Red Men's Half Sleeve Round Neck Printed Fancy T-shirt</div>
              <div class="rnr"></div>
              <div class="p_price">
                <div class="o_prices">
                  <span>Rs 599</span>
                </div>
                <div class="f_price">
                  <span>Rs 399</span>
                  <span class="discount">33% off</span>
                </div>
                
              </div>
            </div>
          </a>
          <span class="similar_prd"></span>
        </div>
        <div class="list_col">
          <span class="pdFav selected"></span>
          <div class="badge i_scsurety" data-badgeid="surety"><i></i></div>
          <a href="javascript:void(0)" title="">
            <div class="p_img">
              <img src="https://cdn.shopclues.com/images/thumbnails/86180/280/1/129717542IMG201709171612461507388238.jpg" alt="">
            </div>
            <div class="p_info">
              <div class="p_name">Klass9 Red Men's Half Sleeve Round Neck Printed Fancy T-shirt</div>
              <div class="rnr"></div>
              <div class="p_price">
                <div class="o_prices">
                  <span>Rs 599</span>
                </div>
                <div class="f_price">
                  <span>Rs 399</span>
                  <span class="discount">33% off</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="list_col">
          <span class="pdFav"></span>
          <a href="javascript:void(0)" title="">
            <div class="p_img">
              <img src="https://cdn.shopclues.com/images/thumbnails/86180/280/1/129717542IMG201709171612461507388238.jpg" alt="">
            </div>
            <div class="p_info">
              <div class="p_name">Klass9 Red Men's Half Sleeve Round Neck Printed Fancy T-shirt</div>
              <div class="rnr"></div>
              <div class="p_price">
                <div class="o_prices">
                  <span>Rs 599</span>
                </div>
                <div class="f_price">
                  <span>Rs 399</span>
                  <span class="discount">33% off</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="list_col">
          <span class="pdFav"></span>
          <a href="javascript:void(0)" title="">
            <div class="p_img">
              <img src="https://cdn.shopclues.com/images/thumbnails/86180/280/1/129717542IMG201709171612461507388238.jpg" alt="">
            </div>
            <div class="p_info">
              <div class="p_name">Klass9 Red Men's Half Sleeve Round Neck Printed Fancy T-shirt</div>
              <div class="rnr"></div>
              <div class="p_price">
                <div class="o_prices">
                  <span>Rs 599</span>
                </div>
                <div class="f_price">
                  <span>Rs 399</span>
                  <span class="discount">33% off</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<footer style="display: block;">
  
  <div id="know_more" class="know_more" onclick="fullFooter()">Know more about online shopping</div>
  <div id="mn_footer" class="mn_footer">
    <div class="social_icons" itemscope="" itemtype="https://schema.org/Organization">
      <h6>Keep in touch</h6>
      <ul>
          <link itemprop="url" href="https://m.shopclues.com/">
          <li>
              <a itemprop="sameAs" href="//facebook.com/shopclues" class="sc_ft_facbook"></a>
          </li>
          <li>
              <a itemprop="sameAs" href="//www.linkedin.com/company/shopclues" class="sc_ft_linkedin"></a>
          </li>
          <li>
              <a itemprop="sameAs" href="//pinterest.com/shopclues/" class="sc_ft_pintrest"></a>
          </li>
          <li>
              <a itemprop="sameAs" href="//twitter.com/shopclues" class="sc_ft_twitter"></a>
          </li>
          <li>
              <a itemprop="sameAs" href="//www.youtube.com/channel/UCnxPAa_6EL5ggl0_FRq6Zjw" class="sc_ft_youtube"></a>
          </li>
          <li>
              <a itemprop="sameAs" href="//plus.google.com/110218897457374040465/posts" class="sc_ft_google"></a>
          </li>
      </ul>
      <a href="//twitter.com/shopclues" class="twitter"></a>
      <a href="//facebook.com/shopclues" class="facebook"></a>
      <a href="//www.linkedin.com/company/shopclues" class="linkedin"></a>
      <a href="//www.youtube.com/channel/UCnxPAa_6EL5ggl0_FRq6Zjw" class="youtube"></a>
    </div>
    <div class="trusted_payments">
      <h6>100% Secure and Trusted Payment</h6>
      <img src="//images.shopclues.com/images/ui/pgateway@2x.png" alt="">
    </div>
    <div class="links">
      <h6>Shop for</h6>
      <div class="grp">
        <h5 class="expand">Mobile &amp; Tablets</h5>
        <ul>
          <a target="_blank" href="//m.shopclues.com/android-phones.html">Android Phones</a>
          <a target="_blank" href="//m.shopclues.com/mobiles-smartphones.html">Smartphones</a>
          <a target="_blank" href="//m.shopclues.com/mobiles-feature-phones.html">Feature Phones</a>
          <a target="_blank" href="//m.shopclues.com/unboxed-mobiles.html">Unboxed Phones</a>
          <a target="_blank" href="//m.shopclues.com/refurbished-mobiles.html">Refurbished Phones</a>
          <a target="_blank" href="//m.shopclues.com/mobiles-tablets-tablets.html">Tablets</a>
          <a target="_blank" href="//m.shopclues.com/mobiles-feature-phones.html">CDMA Phones</a>
          <a target="_blank" href="//m.shopclues.com/mobiles-value-added-services.html">Value Added Services</a>
          <a target="_blank" href="//m.shopclues.com/sell-used-mobile-phones.html">Sell Old/ Used Mobiles</a>
          <a target="_blank" href="//m.shopclues.com/mobiles-and-tablets.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">Computers</h5>
        <ul>       
          <a target="_blank" href="//m.shopclues.com/laptops.html">Laptops</a>
          <a target="_blank" href="//m.shopclues.com/computer-printers.html">Printers</a>
          <a target="_blank" href="//m.shopclues.com/routers-and-modems.html">Routers</a>
          <a target="_blank" href="//m.shopclues.com/computers-inks-cartridges.html">Ink &amp; Toner Cartridges</a>
          <a target="_blank" href="//m.shopclues.com/computers-monitors.html">Monitors</a>
          <a target="_blank" href="//m.shopclues.com/video-games.html">Video Games</a>
          <a target="_blank" href="//m.shopclues.com/computers-refurbished-gadgets.html">Unboxed &amp; Refurbished Laptops</a>
          <a target="_blank" href="//m.shopclues.com/computers-assembled-desktops.html">Assembled Desktops</a>
          <a target="_blank" href="//m.shopclues.com/network-data-card.html">Data Cards</a>
          <a target="_blank" href="//m.shopclues.com/computers.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">TV, Audio &amp; Large Appliances</h5>
        <ul>        
          <a target="_blank" href="//m.shopclues.com/speaker-systems.html">Laptops</a>
          <a target="_blank" href="//m.shopclues.com/tvs.html">TVs &amp; DTH</a>
          <a target="_blank" href="//m.shopclues.com/home-theater-systems.html">Home Theatre Systems</a>
          <a target="_blank" href="//m.shopclues.com/hidden-cameras.html">Hidden Cameras &amp; CCTVs</a>
          <a target="_blank" href="//m.shopclues.com/appliances-refrigerators.html">Refrigerators</a>
          <a target="_blank" href="//m.shopclues.com/appliances-washing-machines.html">Washing Machines</a>
          <a target="_blank" href="//m.shopclues.com/appliances-air-conditioners.html">Air Conditioners</a>
          <a target="_blank" href="//m.shopclues.com/cameras-and-accessories.html">Cameras</a>
          <a target="_blank" href="//m.shopclues.com/speaker-systems.html">Speakers</a>
          <a target="_blank" href="//m.shopclues.com/tv-large-appliances-and-camera.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">Mobile &amp; Laptop Accessories</h5>
        <ul>        
          <a target="_blank" href="//m.shopclues.com/audio-accessories-headphones.html">Headphones</a>
          <a target="_blank" href="//m.shopclues.com/mobile-accessories-power-banks.html">Power Banks</a>
          <a target="_blank" href="//m.shopclues.com/computer-backpack.html">Backpacks</a>
          <a target="_blank" href="//m.shopclues.com/case-and-cover-10.html">Mobile Cases &amp; Covers</a>
          <a target="_blank" href="//m.shopclues.com/pen-drives.html">Pen Drives</a>
          <a target="_blank" href="//m.shopclues.com/storage-devices-external-hard-disks.html">External Hard Disks</a>
          <a target="_blank" href="//m.shopclues.com/electronic-accessories-computer-mouse.html">Mouse</a>
          <a target="_blank" href="//m.shopclues.com/mobile-smart-watches-and-fitness-bands.html">Smart Watches &amp; Fitness Bands</a>
          <a target="_blank" href="//m.shopclues.com/storage-devices-microsd-cards.html">MicroSD Cards</a>
          <a target="_blank" href="//m.shopclues.com/electronic-accessories.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">Appliances</h5>
        <ul>        
          <a target="_blank" href="//m.shopclues.com/appliances-trimmers.html">Trimmers</a>
          <a target="_blank" href="//m.shopclues.com/appliances-hair-dryers.html">Hair Dryers</a>
          <a target="_blank" href="//m.shopclues.com/appliances-emergency-lights-and-lamps.html">Emergency Lights</a>
          <a target="_blank" href="//m.shopclues.com/appliances-water-purifiers.html">Water Purifiers</a>
          <a target="_blank" href="//m.shopclues.com/kitchen-appliances-kettles.html">Electric Kettles</a>
          <a target="_blank" href="//m.shopclues.com/appliances-hair-straighteners.html">Hair Straighteners</a>
          <a target="_blank" href="//m.shopclues.com/appliances-cooktops.html">Induction Cooktops</a>
          <a target="_blank" href="//m.shopclues.com/appliances-sewing-machines.html">Sewing Machines</a>
          <a target="_blank" href="//m.shopclues.com/appliances-water-geysers.html">Geysers</a>
          <a target="_blank" href="//m.shopclues.com/appliances.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">Home &amp; Kitchen</h5>
        <ul>       
          <a target="_blank" href="//m.shopclues.com/home-furnishing-bed-linens.html">Bedsheets</a>
          <a target="_blank" href="//m.shopclues.com/hardware.html">Hardware &amp; Sanitaryware</a>
          <a target="_blank" href="//m.shopclues.com/home-furnishing-bath-linen.html">Towels, Bath Linens</a>
          <a target="_blank" href="//m.shopclues.com/furniture.html">Furniture</a>
          <a target="_blank" href="//m.shopclues.com/kitchen-dining-cookware.html">Cookware</a>
          <a target="_blank" href="//m.shopclues.com/kitchen-dining-tools.html">Kitchen Tools</a>
          <a target="_blank" href="//m.shopclues.com/home-cleaning.html">Home Cleaning Utilities</a>
          <a target="_blank" href="//m.shopclues.com/home-furnishing-door-mats.html">Doormats</a>
          <a target="_blank" href="//m.shopclues.com/home-furnishing-curtains.html">Curtains</a>
          <a target="_blank" href="//m.shopclues.com/garden.html">Gardening Essentials</a>
          <a target="_blank" href="//m.shopclues.com/home-garden.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">Fashion</h5>
        <ul>        
          <a target="_blank" href="//m.shopclues.com/womens-apparel.html">Women's Clothing</a>
          <a target="_blank" href="//m.shopclues.com/mens-clothing.html">Men's Clothing</a>
          <a target="_blank" href="//m.shopclues.com/womens-clothing-ethnic-wear.html">Women's Ethnic Wear</a>
          <a target="_blank" href="//m.shopclues.com/men-accessories.html">Men's Fashion Accessories</a>
          <a target="_blank" href="//m.shopclues.com/mens-sports-wear.html">Sports Wear</a>
          <a target="_blank" href="//m.shopclues.com/mens-clothing-western-wear.html">Western Wear</a>
          <a target="_blank" href="//m.shopclues.com/fashion-handbags-clutches.html">Handbags &amp; Wallets, Clutches</a>
          <a target="_blank" href="//m.shopclues.com/fashion-handbags.html">Handbags</a>
          <a target="_blank" href="//m.shopclues.com/womens-clothing-ethnic-wear-sarees.html">Sarees</a>
          <a target="_blank" href="//m.shopclues.com/mens-clothing-t-shirts.html">T-Shirts</a>
          <a target="_blank" href="//m.shopclues.com/womens-inner-and-sleepwear.html">Lingerie &amp; Sleep Wear</a>
          <a target="_blank" href="//m.shopclues.com/fashion.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">Footwear</h5>
        <ul>        
          <a target="_blank" href="//m.shopclues.com/mens-sports-shoes.html">Men's Sports Shoes</a>
          <a target="_blank" href="//m.shopclues.com/footwear-mens-slippers-flip-flops.html">Men's Slippers</a>
          <a target="_blank" href="//m.shopclues.com/footwear-mens-casual-shoes.html">Casual Shoes</a>
          <a target="_blank" href="//m.shopclues.com/footwear-mens-sandals.html">Sandals &amp; Floaters</a>
          <a target="_blank" href="//m.shopclues.com/footwear-mens-formal-shoes.html">Formal Shoes</a>
          <a target="_blank" href="//m.shopclues.com/footwear-womens-flats.html">Women Flats</a>
          <a target="_blank" href="//m.shopclues.com/womens-footwear-bellies.html">Ballerinas</a>
          <a target="_blank" href="//m.shopclues.com/footwear-mens-loafers-moccasins.html">Loafers</a>
          <a target="_blank" href="//m.shopclues.com/footwear-mens-boots.html">Boots</a>
          <a target="_blank" href="//m.shopclues.com/footwear-shoe-care-accessories.html">Shoe Care &amp; Accessories</a>
          <a target="_blank" href="//m.shopclues.com/footwear.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">Travel &amp; Luggage</h5>
        <ul>
          <a target="_blank" href="//m.shopclues.com/duffle-bags.html">Duffle Bags</a>
          <a target="_blank" href="//m.shopclues.com/luggage-laptop-bags.html">Laptop Bags</a>
          <a target="_blank" href="//m.shopclues.com/travel-pouches.html">Travel Pouches</a>
          <a target="_blank" href="//m.shopclues.com/backpacks.html">Backpacks</a>
          <a target="_blank" href="//m.shopclues.com/suitcases-and-trolleys.html">Suitcases &amp; Trolleys</a>
          <a target="_blank" href="//m.shopclues.com/travel-accessories.html">Travel Accessories</a>
          <a target="_blank" href="//m.shopclues.com/luggage-gym-bags.html">Gym Bags</a>
          <a target="_blank" href="//m.shopclues.com/messenger-bags.html">Messenger Bags</a>
          <a target="_blank" href="//m.shopclues.com/schoolbags.html">School Bags</a>
          <a target="_blank" href="//m.shopclues.com/safety-locks-and-straps.html">Safety Locks</a>
          <a target="_blank" href="//m.shopclues.com/travel-and-luggage.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">Jewelry &amp; Watches</h5>
        <ul>
          <a target="_blank" href="//m.shopclues.com/coins-bars.html">Coins &amp; Bars</a>
          <a target="_blank" href="//m.shopclues.com/men-watches.html">Men's Watches</a>
          <a target="_blank" href="//m.shopclues.com/womens-watches.html">Women's Watches</a>
          <a target="_blank" href="//m.shopclues.com/precious-jewellery-necklace-and-sets.html">Necklaces Sets</a>
          <a target="_blank" href="//m.shopclues.com/jewellery-watches-fashion-jewellery.html">Fashion Jewelry</a>
          <a target="_blank" href="//m.shopclues.com/precious-jewellery-pendants-and-lockets.html">Pendants and Lockets</a>
          <a target="_blank" href="//m.shopclues.com/precious-jewellery-earrings.html">Earrings</a>
          <a target="_blank" href="//m.shopclues.com/precious-jewellery-rings.html">Rings</a>
          <a target="_blank" href="//m.shopclues.com/jewellery-jewellery-boxes.html">Jewelry Boxes</a>
          <a target="_blank" href="//m.shopclues.com/watch-kids-watches.html">Kid's Watches</a>
          <a target="_blank" href="//m.shopclues.com/jewelry-and-watches.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">Automotive</h5>
        <ul>
          <a target="_blank" href="//m.shopclues.com/automotive-bike-accessories.html">Bike Accessories / Tools</a>
          <a target="_blank" href="//m.shopclues.com/car-bike-cleaning-aids.html">Car Cleaning Aids</a>
          <a target="_blank" href="//m.shopclues.com/helmets.html">Helmets</a>
          <a target="_blank" href="//m.shopclues.com/safety-utility-bike-body-covers.html">Bike Body Covers</a>
          <a target="_blank" href="//m.shopclues.com/automotive-car-accessories.html">Car Accessories / Tools</a>
          <a target="_blank" href="//m.shopclues.com/bike-accessories-riding-gloves.html">Riding Gloves</a>
          <a target="_blank" href="//m.shopclues.com/automotive-interior-accessories-car-perfumes-and-fresheners.html">Perfumes</a>
          <a target="_blank" href="//m.shopclues.com/car-bike-scratch-and-dent-removers.html">Car Scratch Removers</a>
          <a target="_blank" href="//m.shopclues.com/car-audio-and-video.html">Car Audio Video</a>
          <a target="_blank" href="//m.shopclues.com/bike-locks-and-alarm-systems.html">Bike Alarms</a>
          <a target="_blank" href="//m.shopclues.com/car-and-bike-accessories.html">View all</a>
        </ul>
      </div>
      
      <div class="grp">
        <h5 class="expand">Toys, Baby &amp; Kids</h5>
        <ul>
          <a target="_blank" href="//m.shopclues.com/baby-diapers-and-more.html">Diapers</a>
          <a target="_blank" href="//m.shopclues.com/kids-learning-and-educational-toys.html">Educational Toys</a>
          <a target="_blank" href="//m.shopclues.com/kids-baby-footwear.html">Kid's Footwear</a>
          <a target="_blank" href="//m.shopclues.com/electronic-and-remote-control-toys.html">Remote Controlled Toys</a>
          <a target="_blank" href="//m.shopclues.com/toys-games-soft-toys.html">Soft Toys</a>
          <a target="_blank" href="//m.shopclues.com/kids-party-supplies.html">Party Supplies</a>
          <a target="_blank" href="//m.shopclues.com/kids-cubes-special.html">Cubes</a>
          <a target="_blank" href="//m.shopclues.com/maternity-care.html">Maternity Care</a>
          <a target="_blank" href="//m.shopclues.com/kids-clothing.html">Kid's Apparel</a>
          <a target="_blank" href="//m.shopclues.com/toys-baby-and-kids.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">Gourmet &amp; Daily Needs</h5>
        <ul>
          <a target="_blank" href="//m.shopclues.com/stationery-office-supplies.html">Office Supplies</a>
          <a target="_blank" href="//m.shopclues.com/pet-supplies.html">Pet Supplies</a>
          <a target="_blank" href="//m.shopclues.com/all-books.html">Books</a>
          <a target="_blank" href="//m.shopclues.com/local-snacks-and-namkeens.html">Namkeen</a>
          <a target="_blank" href="//m.shopclues.com/books-and-daiy-needs-stationery.html">Stationery</a>
          <a target="_blank" href="//m.shopclues.com/stationery-pens-and-markers.html">Pens &amp; Markers</a>
          <a target="_blank" href="//m.shopclues.com/foods-coffee-and-tea.html">Tea &amp; Coffee</a>
          <a target="_blank" href="//m.shopclues.com/foods-chocolates-and-candies.html">Chocolates &amp; Candies</a>
          <a target="_blank" href="//m.shopclues.com/food-indian-sweets.html">Indian Sweets</a>
          <a target="_blank" href="//m.shopclues.com/gifting.html">Gifts</a>
          <a target="_blank" href="//m.shopclues.com/gourmet-and-daily-needs.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">Sports and Health</h5>
        <ul>
          <a target="_blank" href="//m.shopclues.com/home-gym.html">Home Gym Equipment</a>
          <a target="_blank" href="//m.shopclues.com/fitness-equipments-exercise-bikes.html">Exercise Bikes</a>
          <a target="_blank" href="//m.shopclues.com/sports-fitness-accessories.html">Gym Accessories</a>
          <a target="_blank" href="//m.shopclues.com/massagers.html">Massagers</a>
          <a target="_blank" href="//m.shopclues.com/diabetic-care.html">Diabetic Care</a>
          <a target="_blank" href="//m.shopclues.com/cricket.html">Cricket</a>
          <a target="_blank" href="//m.shopclues.com/table-tennis.html">Table Tennis</a>
          <a target="_blank" href="//m.shopclues.com/sports-and-health.html">View all</a>
        </ul>
      </div>

      <div class="grp">
        <h5 class="expand">Beauty &amp; Perfumes</h5>
        <ul>
          <a target="_blank" href="//m.shopclues.com/men-grooming-combos.html">Grooming Essentials</a>
          <a target="_blank" href="//m.shopclues.com/fragrances-deodrants.html">Deodorants</a>
          <a target="_blank" href="//m.shopclues.com/fragrances-perfumes.html">Men's Perfumes</a>
          <a target="_blank" href="//m.shopclues.com/hair-care.html">Hair Care</a>
          <a target="_blank" href="//m.shopclues.com/fragrances-perfumes.html">Women's Perfumes</a>
          <a target="_blank" href="//m.shopclues.com/skin-care-facial-kits-face-pack.html">Face Packs</a>
          <a target="_blank" href="//m.shopclues.com/oral-care-toothbrush.html">Oral Care</a>
          <a target="_blank" href="//m.shopclues.com/herbal-care.html">Herbal Care</a>
          <a target="_blank" href="//m.shopclues.com/value-combos.html">Value Combo</a>
          <a target="_blank" href="//m.shopclues.com/womens-hygiene.html">Women's Hygiene</a>
          <a target="_blank" href="//m.shopclues.com/health-and-beauty.html">View all</a>
        </ul>
      </div>

      <div class="pop_shpcls">
        <h6>Popular on Shopclues</h6>
        <ul>
          <a target="_blank" href="//m.shopclues.com/online-offers.html">Offers &amp; Coupons</a>
          <a target="_blank" href="//m.shopclues.com/watch-couple-watches.html">Couple Watches</a>
          <a target="_blank" href="//m.shopclues.com/appliances-gas-stoves.html">Gas Stoves</a>
          <a target="_blank" href="//m.shopclues.com/appliances-air-coolers.html">Air Coolers</a>
          <a target="_blank" href="//m.shopclues.com/air-purifiers-and-de-humidifiers.html">Air Purifiers</a>
          <a target="_blank" href="//m.shopclues.com/headset-mic.html">Headphones/Mic/Headset</a>
          <a target="_blank" href="//m.shopclues.com/kitchen-dining-pressure-cookers.html">Pressure Cookers</a>
          <a target="_blank" href="//m.shopclues.com/appliances-sandwich-makers.html">Sandwich Makers</a>
          <a target="_blank" href="//m.shopclues.com/appliances-air-fryers-and-deep-fryers.html">Air Friers/Deep Friers</a>
          <a target="_blank" href="//m.shopclues.com/appliances-irons.html">Irons</a>
          <a target="_blank" href="//m.shopclues.com/appliances-led-tvs.html">LED TV</a>
          <a target="_blank" href="//m.shopclues.com/seasonal-winter-wear-jackets.html">Men Jackets</a>
          <a target="_blank" href="//m.shopclues.com/kids-learning-and-educational-toys.html">Educational Toys</a>
          <a target="_blank" href="//m.shopclues.com/appliances-stabilizers.html">Stabilizers</a>
          <a target="_blank" href="//m.shopclues.com/appliances-room-heaters.html">Heaters</a>
          <a target="_blank" href="//m.shopclues.com/car-audio.html">Car Audio Systems</a>
          <a target="_blank" href="//m.shopclues.com/home-decor-photo-frames.html">Photo Frames</a>
          <a target="_blank" href="//m.shopclues.com/footwear-mens-shoes.html">Men's Shoes</a>
          <a target="_blank" href="//m.shopclues.com/home-decor-decorative-lights.html">Decorative Lights</a>
          <a target="_blank" href="//m.shopclues.com/seasonal-wear-rain-wear.html">Rain Wear</a>
          <a target="_blank" href="//m.shopclues.com/home-furnishing-bedsheets.html">Bed Sheets</a>
          <a target="_blank" href="//m.shopclues.com/all-brands.html">Top Brands</a>
          <a target="_blank" href="//m.shopclues.com/refer-and-earn.html">Refer and Earn</a>
        </ul>
      </div>
    </div>
                <div class="inf_text">
              <h6>Online Shopping in India @ShopClues.com</h6>
              <h5>India’s Asli Online Shopping Hub – ShopClues.com</h5>
              <p>Back in 2011, when people were hopping from one Store to another for best bargains on an overall household’s monthly bill, Sandeep Aggarwal (the Founder &amp; Mastermind of ShopClues) was realizing his vision of a budget-friendly online bazaar in India. ShopClues.com was then given a shape and strategy in 2012 as the  India’s First &amp; Largest Fully Managed Marketplace.
              </p>
              <h5>
                Ting se Leke Tong – with Aflatooni Products!
              </h5>
              <p>
                ‘What you Think is What you Get’ isn’t just a saying at ShopClues. With over 2.8 crore products, you can get just about everything that you can imagine at ShopClues. From usual products in Electronics, Fashion, Home &amp; Kitchen, to unusual products like cow dung cakes, Knife Sharpeners, etc., ShopClues tops in everything. So, you see what we mean when we say Aflatooni Products! ShopClues has revolutionized the conceptual Online Shopping in India with initiatives such as Ghar Wapsi Sale, Bigger than the Biggest Thank You Sale, #EkZeroKum Sale etc. Amongst many other shopping sites, ShopClues is the leader in unstructured categories like Daily Utilities, Garden Needs, Hardware, Kitchen Storage, and others.
              </p>
              <h5>
                Believable Shopping @ Unbelievable Prices
              </h5>
              <p>
                Every day, ShopClues delights millions of discount-hunters with Paisa-Vasool Shopping Experience with prices as low as Re.1. We are the first ones to introduce the idea of ‘Sab Kuch Wholesale Ke Rate Par’ on an online platform with shopping options to both wholesale as well as retail seekers.
              </p>
              <h5>
                Experiencing the neighbourhood Local Bazaar
              </h5>
              <p>
                ShopClues brings the experience of India’s Flea Markets online, in the form of its weekly properties - Sunday Flea Market, Refreshing Monday Sale, Triple Value Friday Sale, and Wednesday Brand Bazaar. Another property capturing the essence of regional Indian shopping is called NRH (National Regional Heritage), which gives a sneak-peek into India’s Cultural Gullies at very reasonable prices. These online markets showcase products with range so wide, and prices so low, that they beat the offline neighbourhood markets of India. The concept especially works incredibly well with the middle class population habituated in tier 2 &amp; 3 cities.
              </p>
              <h5>
                An Online Selling Space for SME Merchants
              </h5>
              <p>
                Working as a marketplace, ShopClues has been well-supported by a bourgeoning community of certified merchants in India. Unlike various other online shopping sites, ShopClues has achieved the largest merchant base of over 3.5 Lakhs. This online shopping website is creating history by empowering local and regional merchants, primarily from Tier 2 &amp; 3 cities and making them a national enterprise at ShopClues.
              </p>
              <h5>
                Shopclues Surety
              </h5>
              <p>
                The <a href="//www.shopclues.com/blog/news/shopclues-unveils-shopclues-surety-to-ensure-best-online-shopping-experience">Shopclues Surety Program</a>, was launched in order to ensure a hassle free shopping experience for its customers. This premium service is in addition to the ShopClues Buyer Protection program which ensures an extensive 5 point quality check of the products in order to give Customers a seamless shopping experience. In order to make it user-friendly, the platform marks out the rating of the products classified into ‘Best Buy’, ‘Great Buy’, ‘Value Buy’ or ‘Brand Authorized’. This allows the customer to make an optimal purchase decision while shopping on the platform.
              </p>
              <h5>
                ShopClues VIP Club
              </h5>
              <p>
              Get Rewards Every time you Shop! Join the VIP Club and Get 5% Cashback on Every Order. That's not all! With Free Membership, No Hidden Costs &amp; No Registration Procedures, get Exclusive Benefits on Grofers, Lenskart, Food Panda &amp; Hi Care Pest Control Services. <a href="//www.shopclues.com/vip-club.html">Join the Club Now</a>
              </p>
          </div>
        <div class="inf_text">
      <div>
        <h2></h2>      </div>
      <div>
              </div>
    </div>
  </div>
  <div class="footer_nav">
    <h6>Useful Links</h6>
      <nav>
        <a href="//m.shopclues.com/return-policy.html">Easy Returns &amp; Replacement</a>
        <a href="//m.shopclues.com/privacy-policy.html">Privacy Policy</a>
        <a href="//m.shopclues.com/user-agreement.html">User agreement</a>
        <a href="//m.shopclues.com/notes-to-security-practices.html">Notes To Security Practices</a>
        <a href="//m.shopclues.com/compliance.html">Labor Compliance</a>
        <a href="//m.shopclues.com/help.html">Shopper Central</a>
                  <a href="//storemanager.shopclues.com/vendor.php?dispatch=authorize.login_form&amp;return_url=vendor.php" id="merchant_central">Merchant Central</a>
                <a href="//m.shopclues.com/aboutus.html">About Us</a>
        <a href="//m.shopclues.com/merchant-support.html">Contact Us</a>
        <a href="//m.shopclues.com/press.html">Press</a>
      </nav>
  </div>
  <div class="copyright">
    <span>Copyright © 2011-2020 Clues Network Pvt. Ltd.</span>
    <img src="//images.shopclues.com/images/ui/shopclues-logo_new.png" alt="">
    <!-- <img src="//images.shopclues.com/images/ui/shopclues_logo_b.png" alt="" width="112" /> -->
  </div>
</footer>
<script type="text/javascript" src="../assets/js/jquery-1.9.1.min.js"></script> 
<script type="text/javascript" src="../assets/js/ui_developer.js"></script> 
</body>
</html>