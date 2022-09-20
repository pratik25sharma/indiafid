<?php
  require "lessphp/lessc.inc.php";
    $less = new lessc;
    $less->checkedCompile("../assets/react_css/pdp.less", "../assets/react_css/pdp.css");
?>
<html>
<head>
<meta charset="UTF-8">
<title>PDP</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="../assets/react_css/pdp.css">
</head>
<body>

<!-- START GLOBAL MODEL BOXES -->
<div id="myModal" class="popup_box" style="display: none;">
  <div class="model_box" style="display: none;">
    <div class="model_box_child prod_variants_new" id="variants">
      <div class="ap_heading">
        <h4 class="lft_close">Select Variant<span class="close_model">×</span></h4>
        <section class="b_section">
          <div class="product_info">
            <img src="http://192.168.7.241/home-page/images/sarees_babypink_sm.png" alt="">
            <span>Black Stud Multicolor Cotton Blend Round Neck T-Shirt For Men Pack of 2</span>
          </div>
          <ul>
            <li>
              <label>Select Size : <span>XL</span>
                <a href="javascript:void(0);" class="size open_modelf" data-target="size_chart">Size Chart</a>
              </label>
              <div> 
                <span>XS</span> 
                <span class="disabled">S</span> 
                <span>M</span> 
                <span>L</span> 
                <span class="selected">XL</span> 
                <span>XXL</span> 
                <span>XXXL</span> 
              </div>
            </li>
            <li data-sctype="Colour">
              <label>Select Color : <span>XL</span></label>
              <div> 
                <span> 
                  <span style="background: #000;"></span> 
                </span> 
                <span> 
                  <span style="background: #f79dbb;"></span> 
                </span> 
                <span data-label="White"> 
                  <span style="background: #fff;"></span> 
                </span> 
                <span> 
                  <span style="background: #50c3ba;"></span> 
                </span> 
                <span class="selected"> 
                  <span style="background: #8b8fe1;"></span> 
                </span> 
                <span> 
                  <span style="background: #ccc;"></span> 
                </span> 
                <span> 
                  <span style="background: #ff0000;"></span> 
                </span> 
                <span> 
                  <span style="background: #ddd;"></span> 
                </span> 
                <span> 
                  <span style="background: #255578;"></span> 
                </span> 
                <span> 
                  <span style="background: #f1f1f1;"></span> 
                </span> 
                <span> 
                  <span style="background: #d1d1d1;"></span> 
                </span> 
              </div>
            </li>
            <li data-sctype="img">
              <label>Select Color -  <span>Midnight Black</span></label>
              <div> 
                <span>
                  <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                </span>
                <span class="selected">
                  <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                </span>
                <span class="disabled">
                  <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                </span>
                <span>
                  <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                </span>
                <span>
                  <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                </span>
                <span>
                  <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                </span>
                <span>
                  <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                </span>
                <span>
                  <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                </span>
              </div>
            </li>
          </ul>
          <div class="relative_button_wrap">
            <div class="action_links">
              <a class="btn" href="javascript:void(0);">Continue</a>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>


<div id="sc_pdp">
  <div data-reactroot="" id="pdp_main_resp">
    <div class="popup_box" style="display: none;">
      <div id="pdp_all_popups">
        <div class="model_box floating_price" style="display: none;">
          <ul class="border_bttm">
            <li><span>MRP.</span><span><!-- react-text: 194 -->₹ <!-- /react-text --><!-- react-text: 195 -->44<!-- /react-text --></span></li>
          </ul>
          <ul class="border_bttm">
            <li><span>Discount</span><span><!-- react-text: 199 -->- ₹ <!-- /react-text --><!-- react-text: 200 -->14<!-- /react-text --></span></li>
            <li><span><!-- react-text: 447 -->CB+ Discount<!-- /react-text -->
              <input type="checkbox" id="cbp_49" data-cbp="9" data-label="1" value="on" checked="">
              <label for="cbp_49"></label>
              </span><span id="my_applicable_cb"><!-- react-text: 451 -->- ₹ <!-- /react-text --><!-- react-text: 452 -->9<!-- /react-text --></span></li>
            <li><span>Total Savings</span><span id="my_total_save"><!-- react-text: 12 -->- ₹ <!-- /react-text --><!-- react-text: 13 -->23<!-- /react-text --></span></li>
          </ul>
          <ul>
            <li><span>Price You Pay</span><span id="price_pay_final"><!-- react-text: 457 -->₹ <!-- /react-text --><!-- react-text: 458 -->21<!-- /react-text --></span></li>
          </ul>
        </div>
        <div id="voice_popup" class="model_box voice_srch" data-label="pdp" style="display: none;"><i id="voice_close_popup" class="close"></i><span id="voice_popup_text" class="h1">Didn't catch that. Try speaking again.</span>
          <div id="voice_popup_inst" class="voice_st">
            <p id="try_again_text" style="display: none;">Tap To Try Again</p>
            <i id="voice_pop_i" class=""></i><span></span></div>
        </div>
        <div id="prod_notify" class="model_box  prod_notify" style="display: none;"><i id="close_notify" class="close"></i><span class="h1">We will notify you when product is available.</span>
          <form>
            <input type="email" id="email_text" name="" placeholder="Enter Your Email Id">
            <div><a id="cancel_notify">Cancel</a>
              <input type="button" id="submit_email" name="" value="Submit">
            </div>
          </form>
        </div>
        <div class="model_box full_view pdp_gallery_view" style="display: none;">
          <div id="zoomimage"><i class="close pdp_gallery_view_close"></i>
            <div class="pdp_gallery" id="zoom_eff"><img id="gallery_img" src="" alt="Harpic Bathroom Cleaner (Lemon), 200 Ml" class="z_dfr"></div>
            <div class="gallery_thumbnail" id="gallery_thumbnail">
              <ul id="thumbnail">
                <li class="active"><img data-label="image" src="https://cdn.shopclues.com/images1/thumbnails/105563/320/1/149269050-105563159-1585200520.jpg" alt="Harpic Bathroom Cleaner (Lemon), 200 Ml" data-img820="https://cdn.shopclues.com/images1/thumbnails/105563/820/1/149269050-105563159-1585200520.jpg"></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="model_box full_view emi_view" style="display: none;"><!-- react-empty: 211 --></div>
        <div class="model_box keyfeature_detail" style="display: none;">
          <div class="keyfeature"><i class="close keyfeature1"></i><span class="heading">Product Details</span>
            <div class="prod_info"><span><img src="https://cdn.shopclues.com/images1/thumbnails/105563/320/320/149269050-105563159-1585200520.jpg" alt=""></span>
              <div class="p_detail"><span>Harpic Bathroom Cleaner (Lemon), 200 Ml</span>
                <p><!-- react-text: 222 -->₹<!-- /react-text --><!-- react-text: 223 -->30<!-- /react-text --></p>
                <p><!-- react-text: 225 -->Product ID: <!-- /react-text --><!-- react-text: 226 -->149269050<!-- /react-text --></p>
              </div>
            </div>
            <div class="prod_desc">
              <div class="tabbing_nav">
                <ul>
                  <li id="tab_1" class="active" data-val="prddesc" data-prdtab="1">Product Description</li>
                  <li id="tab_2" data-val="prdspec" data-prdtab="2">Specification</li>
                  <li id="tab_3" data-val="prdlegal" data-prdtab="3">Legal Information</li>
                </ul>
              </div>
              <input type="hidden" id="default_keyf_tab" data-label="0" value="tab_1">
              <div class="tabbing_info">
                <ul>
                  <li class="product_description prddesc" data-infotab="1"><!-- react-text: 237 -->Harpic Bathroom Cleaner Is A Strong Bathroom Disinfectant And Cleaning Liquid That Helps Remove The Toughest Of Stains<!-- /react-text --></li>
                  <li class="specification prdspec active" data-infotab="2" style="display: none;"><span class="head"><span>Key Feature</span></span>
                    <p><span>Brand</span><span id="Brand">Harpic</span></p>
                    <span class="head"><span>Household Supplies Specifications</span></span>
                    <p><span>Type</span><span id="Type">Floor Cleaner</span></p>
                  </li>
                  <li class="prdlegal specification" data-infotab="3" style="display: none;">
                    <p><span>Maximum Retail Price (inclusive of all taxes)</span><span>Rs.44</span></p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="model_box bottom pdp_variant_block combo_variations" style="display: none;">
          <div><i class="close pdpvarient"></i>
            <div class="f_variation"></div>
          </div>
        </div>
        <div class="model_box full_view readall_review" style="display: none;">
          <div class="review_all"><i class="close review_all_close"></i><span class="heading">Read All Review</span>
            <div class="rating_review">
              <div>
                <div class="total_rating">
                  <div class="star_rating_point"><span>5</span>
                    <svg viewBox="0 0 100 100">
                      <circle cx="50" cy="50" r="45" id="gray"></circle>
                      <circle cx="50" cy="50" r="45" id="circle_fill" class="c_fill" style="stroke-dasharray: 284, 284;"></circle>
                    </svg>
                    <div class="star_main"><span class="star"><span style="width: 50px;"></span></span></div>
                  </div>
                </div>
                <div class="total_review">
                  <ul>
                    <li><span><!-- react-text: 462 -->5<!-- /react-text --><!-- react-text: 463 --> Star<!-- /react-text --></span><i class="bar"><i class="star5" style="width: 100px;"></i></i><span>1</span></li>
                    <li><span><!-- react-text: 469 -->4<!-- /react-text --><!-- react-text: 470 --> Star<!-- /react-text --></span><i class="bar"><i class="star5" style="width: 0px;"></i></i><span>0</span></li>
                    <li><span><!-- react-text: 476 -->3<!-- /react-text --><!-- react-text: 477 --> Star<!-- /react-text --></span><i class="bar"><i class="star5" style="width: 0px;"></i></i><span>0</span></li>
                    <li><span><!-- react-text: 483 -->2<!-- /react-text --><!-- react-text: 484 --> Star<!-- /react-text --></span><i class="bar"><i class="star1" style="width: 0px;"></i></i><span>0</span></li>
                    <li><span><!-- react-text: 490 -->1<!-- /react-text --><!-- react-text: 491 --> Star<!-- /react-text --></span><i class="bar"><i class="star1" style="width: 0px;"></i></i><span>0</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="rating_details">
              <ul id="full_ratings">
              </ul>
            </div>
          </div>
        </div>
        <div class="model_box full_view all_seller" id="msp" style="display: none;">
          <div class="all_seller_info"><i class="close seller"></i><span class="heading">All Seller</span>
            <div class="blocks shd_box"><img src="https://cdn.shopclues.com/images1/thumbnails/105563/320/320/149269050-105563159-1585200520.jpg" alt=""><span class="prod_info_blk">
              <p>Harpic Bathroom Cleaner (Lemon), 200 Ml</p>
              <span><!-- react-text: 284 -->₹<!-- /react-text --><!-- react-text: 285 -->30<!-- /react-text --></span></span></div>
            <div class="blocks shd_box"></div>
          </div>
        </div>
        <div class="model_box bottom shop_by_look_variations combo_variations" style="display: none;"></div>
        <div class="model_box rent_details" id="rent_details_popup" style="display: none;"><i class="close"></i><span class="h1">RMI Details</span>
          <table width="100%">
            <!-- react-empty: 292 -->
          </table>
        </div>
        <div id="show_friends_likes" class="model_box bottom like_share_cont" style="display: none;">
          <h3 id="num_people_liked"></h3>
          <i id="close_friends_show" class="close"></i>
          <div class="like_list">
            <ul id="friends_likes">
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="pdp_prod_resp">
      <div id="prod_data"><!-- react-empty: 46 --><!-- react-text: 47 --><!-- /react-text --><!-- react-text: 48 --><!-- /react-text --><!-- react-empty: 293 -->
        <div id="like_dislike_new"></div>
        <!-- react-text: 51 --><!-- /react-text -->
        <div class="breadcrumb">
          <ul>
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="//m.shopclues.com/"><span itemprop="title">Home</span></a></li>
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="//m.shopclues.com/gourmet-and-daily-needs.html"><span>Daily Needs and Essentials</span></a></li>
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="//m.shopclues.com/household-supplies.html"><span>Household Supplies</span></a></li>
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="//m.shopclues.com/cleaners.html"><span>Cleaners</span></a></li>
            <li><a href="javascript:void(0);" class="active">Harpic Bathroom Cleaner (Lemon), 200 Ml</a></li>
          </ul>
        </div>
        <section class="b_section animated bx_animate no_marb look2">
          <div class="shd_box">
            <div class="prod_view">
              <div id="slide_eff" class="nw_lng eng_active"><span class="h_lng hindi"></span><span class="e_lng active"></span></div>
              <div class="prod_img">
                <div id="touchsurface" src="https://cdn.shopclues.com/images1/thumbnails/105563/640/1/149269050-105563159-1585200520.jpg" data-video="" data-img820="https://cdn.shopclues.com/images1/thumbnails/105563/820/1/149269050-105563159-1585200520.jpg"><img class="image_galery image_0" src="https://cdn.shopclues.com/images1/thumbnails/105563/640/1/149269050-105563159-1585200520.jpg" style="display: inline-block;" alt="Harpic Bathroom Cleaner (Lemon), 200 Ml" data-src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269050-105563159-1585200520.jpg"><!-- react-text: 77 --><!-- /react-text --><!-- react-text: 78 --><!-- /react-text --></div>
                <!-- react-text: 79 --><!-- /react-text --><!-- react-text: 80 --><!-- /react-text --></div>
              <div class="prod_sharing">
                <a href="javascript:void(0);" class="icon i_wishlistG"><i></i></a><a href="javascript:void(0);" class="icon i_share"><i></i></a>
              </div>
            </div>
            <!-- react-empty: 297 -->
          </div>
        </section>
        <section class="b_section prod_variants_new">
          <div class="shd_box">
            <div class="">
              <ul>
                <li>
                  <label>Select Size : <span>XL</span>
                    <a href="javascript:void(0);" class="size open_modelf" data-target="size_chart">Size Chart</a>
                  </label>
                  <div> 
                    <span>XS</span> 
                    <span class="disabled">S</span> 
                    <span>M</span> 
                    <span>L</span> 
                    <span class="selected">XL</span> 
                    <span>XXL</span> 
                    <span>XXXL</span> 
                  </div>
                </li>
                <li data-sctype="Colour">
                  <label>Select Color : <span>XL</span></label>
                  <div> 
                    <span> 
                      <span style="background: #000;"></span> 
                    </span> 
                    <span> 
                      <span style="background: #f79dbb;"></span> 
                    </span> 
                    <span data-label="White"> 
                      <span style="background: #fff;"></span> 
                    </span> 
                    <span> 
                      <span style="background: #50c3ba;"></span> 
                    </span> 
                    <span class="selected"> 
                      <span style="background: #8b8fe1;"></span> 
                    </span> 
                    <span> 
                      <span style="background: #ccc;"></span> 
                    </span> 
                    <span> 
                      <span style="background: #ff0000;"></span> 
                    </span> 
                    <span> 
                      <span style="background: #ddd;"></span> 
                    </span> 
                    <span> 
                      <span style="background: #255578;"></span> 
                    </span> 
                    <span> 
                      <span style="background: #f1f1f1;"></span> 
                    </span> 
                    <span> 
                      <span style="background: #d1d1d1;"></span> 
                    </span> 
                  </div>
                </li>
                <li class="multiple">
                   <label>Select From 25 Variants</label>
                   <a href="javascript:void(0);">variant name will come here</a>
                </li>
                <li data-sctype="img">
                  <label>Select Color -  <span>Midnight Black</span></label>
                  <div class="f_variation"> 
                    <p>
                      <span>
                        <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                      </span>
                      <i>Midnight Black</i>
                    </p>
                    <p>
                      <span class="selected">
                        <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                      </span>
                      <i>Black</i>
                    </p>
                    <p>
                      <span class="disabled">
                        <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                      </span>
                      <i>Midnight Black</i>
                    </p>
                    <p>
                      <span>
                        <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                      </span>
                      <i>Midnight Black</i>
                    </p>
                    <p>
                      <span>
                        <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                      </span>
                      <i>Midnight Black</i>
                    </p>
                    <p>
                      <span>
                        <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                      </span>
                      <i>Midnight Black</i>
                    </p>
                    <p>
                      <span>
                        <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                      </span>
                      <i>Midnight Black</i>
                    </p>
                    <p>
                      <span>
                        <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                      </span>
                      <i>Midnight Black</i>
                    </p>
                    <p>
                      <span>
                        <img src="https://cdn.shopclues.com/images/thumbnails/74034/280/1/121025856bf1341496930598.jpg" alt="">
                      </span>
                      <i>Midnight Black</i>
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="b_section">
          <div class="shd_box">
            <div class="prod_info">
            <div class="multibadge">
              <span class="i_scsurety">
                <i></i>
              </span>
            </div>
              <h1>Harpic Bathroom Cleaner (Lemon), 200 Ml</h1>
              <!-- react-text: 86 --><!-- /react-text -->
              <div class="prod_price"><div class="price_cb">
                <span class="changed_price" id="update_cb_price">₹30900</span>
                <span class="price" id="price">₹30900</span>
              </div>
              <span class="older_price oldn_price">₹32900</span>
              <span class="older_price"><span>MRP:</span> ₹35990</span>
              <span class="percent_off" id="disc">14%off</span>
              <p class="inc">Inclusive of all taxes</p>
            </div>

              <div class="super_discount">
                <div class="discount_head">
                  <span>
                    <i></i>
                    Super Discounted Price
                  </span>
                  <a href="javascript:void(0);" class="arrow"></a>
                  <!-- <a href="javascript:void(0);">
                    How to earn CluesBucks+
                    <i class="iota"></i>
                  </a>
                  <div class="instructions">
                    <div class="language">
                      <p>
                        <span class="active">English</span>
                        <span>हिंदी</span>
                      </p>
                    </div>
                    <ul>
                      <li>
                        1) Create account & earn 500 CB+ instantly (New User)
                      </li>
                      <li>
                        2) Refer your friends & Earn 700 CB+ instantly
                      </li>
                      <li>
                        3) Get 100% Cashback as CB+ on all orders*
                      </li>
                      <li>
                        4) Complete any COD order to earn CB/ CB+
                      </li>
                      <li>
                        5) Win CB/CB+ as part of our Promotions.
                      </li>
                      <li>
                        6) Invite your friends to like products and help them earn 700 CB+
                      </li>
                      <li>
                        <a href="javascript:void(0);">Know more..</a>
                        <a href="javascript:void(0);">Policy</a>
                      </li>
                    </ul>
                    <ul style="display: none;">
                      <li>
                        1) अपने दोस्तों को रेफ़र करे और तुरंत 700 CB + कमाएँ|
                      </li>
                      <li>
                        2) 100% कैशबैक* प्राप्त करें सभी ऑर्डर पर|
                      </li>
                      <li>
                        3) CB / CB + कमाने के लिए कोई भी COD ऑर्डर पूरा करें
                      </li>
                      <li>
                        4) हमारे प्रमोशन के भाग के रूप में CB / CB + जीतें।
                      </li>
                      <li>
                        5) अपने दोस्तों को उत्पादों को लाइक करने के लिए आमंत्रित करें और उन्हें 700 CB + जीतने में मदद करें।
                      </li>
                      <li>
                        <a href="javascript:void(0);">Know more..</a>
                        <a href="javascript:void(0);">Policy</a>
                      </li>
                    </ul>
                  </div> -->
                </div>
                <div class="discount_table">
                  <table width="100%">
                    <thead>
                      <tr>
                      <th class="brd_rt brd_lt brd_tp">Original Price</th>
                      <th class="no-padding">
                        <table width="100%">
                          <tbody><tr>
                            <th colspan="3" height="22" class="brd_rt brd_tp no-padding">Applicable for All Users</th>
                          </tr>
                          <tr>
                            <th class="brd_tp" width="33%">Discount by <span class="success">cluesbucks<sup>+</sup></span></th>
                            <th class="brd_tp" width="33%">Use Coupon <span class="success">EXTRA 10</span></th>
                            <th class="brd_rt brd_tp" width="33%">Use Coupon <span class="success">EXTRA 10</span></th>
                          </tr>
                        </tbody></table>  
                      </th>
                      <th>Deal Price</th>
                      </tr>
                    </thead>
                    <tbody><tr>
                      <td class="brd_rt brd_lt brd_btm">₹4999 <i class="minus"></i></td>
                      <td class="brd_btm no-padding">
                        <table width="100%">
                          <tbody><tr>
                            <td class="brd_tp" width="33%">(₹449 <i class="add"></i></td>
                            <td class="brd_tp" width="33%">₹500 <i class="add"></i></td>
                            <td class="brd_rt brd_tp" width="33%">₹500) <i class="equal"></i></td>
                          </tr>
                        </tbody></table>
                      </td>
                      <td class="deal_price">₹4050</td>
                    </tr>
                    </tbody></table>
                </div>
              </div>
              <p class="all_discount">*All discounts can avail in cart page</p>
              
              <p class="ship_free" id="free_ship_text" style="display: none;">Free Shipping</p>

              <div id="like_dislike"></div>
              <div class="offers_pdp"><span class="h1"><!-- react-text: 364 -->4<!-- /react-text --><!-- react-text: 365 --> Offers Available for you<!-- /react-text --></span><ul><!-- react-text: 367 --><!-- /react-text --><li class="active pdp_offrs" id="0" style="display: block;"><p><!-- react-text: 370 -->Get extra Rs 40 off  on Prepaid Orders<!-- /react-text --><a data-tncid="15908603" class="terms_condition">T&amp;C</a></p><span><!-- react-text: 373 -->Use code "PREPAID40"<!-- /react-text --><!-- react-text: 374 --> Min. Cart Value ₹99<!-- /react-text --><!-- react-text: 375 --> | <!-- /react-text --><!-- react-text: 376 --> Max. Discount ₹40<!-- /react-text --></span><div class="coupons_code" style="display: block;"><span id="PREPAID40" value="PREPAID40" data-attr="PREPAID40">PREPAID40</span><a href="#!" data-attr="PREPAID40" id="PREPAID40">Tap to copy</a></div></li><li class="pdp_offrs" id="rest_offers_1" style="display: none;"><p><!-- react-text: 382 -->Get Free Shipping on min cart of Rs 399<!-- /react-text --><a data-tncid="15237633" class="terms_condition">T&amp;C</a></p><span><!-- react-text: 385 -->Use Code "NOSHIPPING"<!-- /react-text --><!-- react-text: 386 --> Min. Cart Value ₹399<!-- /react-text --><!-- react-text: 387 --><!-- /react-text --></span><div class="coupons_code" style="display: block;"><span id="NOSHIPPING" value="NOSHIPPING" data-attr="NOSHIPPING">NOSHIPPING</span><a href="#!" data-attr="NOSHIPPING" id="NOSHIPPING">Tap to copy</a></div></li><li class="pdp_offrs" id="rest_offers_2" style="display: none;"><p><!-- react-text: 393 -->Buy 2 product and get flat Rs 100 off<!-- /react-text --><a data-tncid="15126785" class="terms_condition">T&amp;C</a></p><span><!-- react-text: 396 -->Use code "B2G100"<!-- /react-text --><!-- react-text: 397 --> Min. Cart Value ₹499<!-- /react-text --><!-- react-text: 398 --> | <!-- /react-text --><!-- react-text: 399 --> Max. Discount ₹100<!-- /react-text --></span><div class="coupons_code" style="display: block;"><span id="B2G100" value="B2G100" data-attr="B2G100">B2G100</span><a href="#!" data-attr="B2G100" id="B2G100">Tap to copy</a></div></li><li class="pdp_offrs" id="rest_offers_3" style="display: none;"><p><!-- react-text: 405 -->Buy any 2 product and get flat Rs 75 off on all Orders<!-- /react-text --><a data-tncid="12699476" class="terms_condition">T&amp;C</a></p><span><!-- react-text: 408 -->Use code "B2G75"<!-- /react-text --><!-- react-text: 409 --> Min. Cart Value ₹329<!-- /react-text --><!-- react-text: 410 --> | <!-- /react-text --><!-- react-text: 411 --> Max. Discount ₹75<!-- /react-text --></span><div class="coupons_code" style="display: block;"><span id="B2G75" value="B2G75" data-attr="B2G75">B2G75</span><a href="#!" data-attr="B2G75" id="B2G75">Tap to copy</a></div></li></ul><input type="text" id="hidden_coupon" style="display: none;"><a href="#!" id="alloffer_btn_clck"><!-- react-text: 417 -->+<!-- /react-text --><!-- react-text: 418 -->3<!-- /react-text --><!-- react-text: 419 --> More <!-- /react-text --></a><a href="#!" id="lessoffer_btn_clck" style="display: none;">- Less</a></div>
            </div>
          </div>
        </section>  
        <!-- react-text: 99 --><!-- /react-text --><!-- react-text: 100 --><!-- /react-text --><!-- react-text: 101 --><!-- /react-text -->
        <section class="b_section animated bx_animate" id="keyfeat">
          <div class="at-element-marker"><span class="h1">Product Details</span>
            <div class="shd_box">
              <div class="prod_keyfeature">
                <ul>
                  <li><span>Product ID :</span><span><!-- react-text: 330 --> <!-- /react-text --><!-- react-text: 331 -->149269050<!-- /react-text --></span></li>
                </ul>
                <a href="javascript:void(0);" class="view_more">View all details</a></div>
            </div>
          </div>
          <div class="pdpRedirectContainer" id="action_insert_15379644574282182">
            <div> <img src="https://cdn.shopclues.com/images1/thumbnails/105563/640/1/149269050-105563159-1585200520.jpg" id="imgInstallThumb" alt=""> </div>
            <div>
              <div> Buy this for <span class="AB_mainPrice" id="Mai">Rs.30</span><span class="AB_dealPrice">Rs.22</span> <span style="display: block;margin-top: 5px;"></span> <span class="txtOfferOff">25% off</span> (Max Rs.50)
                <div>On First Purchase from ShopClues App.</div>
              </div>
              <div> <span>Use coupon: <span class="txtCoupon"> APP25</span> <a href="javascript:void(0)" onclick="fnOpenTC(this)" class="AB_TnC"> T&amp;C* </a></span> <span><a href="javascript:void(0)" class="AB_dloadApp" id="btnInstallNowAB">Install Now</a></span> </div>
            </div>
            <script type="text/javascript" defer="">
	
	var NativeInstallPDP;
	
	if(digitalData && digitalData.pageType=='Product View'){
    var deferredPrompt;
    var is_beforeinstallfired = 0;
    window.addEventListener('beforeinstallprompt', function(e) {
		document.getElementById('btnInstallNowAB').removeAttribute("onClick");
              e.preventDefault();
              // Stash the event so it can be triggered later.
              deferredPrompt = e;
              is_beforeinstallfired = 1;
              return false;

    });
    var install_timer = 0; 
    var installTimer =  setInterval(function(){
       install_timer++;
       if(install_timer>30){
          clearInterval(installTimer);
       }
      else 
		  if(is_beforeinstallfired==1){
          document.getElementById('btnInstallNowAB').addEventListener('click', function() {
            if (is_beforeinstallfired==1) {
              // The user has had a postive interaction with our app and Chrome
              // has tried to prompt previously, so let's show the prompt.
				
              try{
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then(function(choiceResult) {

                  if (choiceResult.outcome == 'dismissed') {
                    console.log('User cancelled homescreen install');
					   NativeInstallPDP="Cancel|NativeInstallPDP";
					  _satellite.track("NativeInstallPDP");
                  }
                  else {
					  var img=document.createElement("img");
					  img.setAttribute("src","https://app.appsflyer.com/com.shopclues?pid=Native_Banner&c=ProductPage&af_adset="+digitalData.data.sku+"&redirect=false");
					  img.setAttribute("height","0px");
					  img.setAttribute("width","0px");
					  document.body.appendChild(img);
					   NativeInstallPDP="NativeInstallPDP";
					  _satellite.track("NativeInstallPDP");
                    console.log('User added to homescreen');
                  }
					deferredPrompt=null;
              });
              }catch(e){
fnGetURL();
              }
              // Follow what the user has selected.
            }

      });
      clearInterval(installTimer);
   }
		else{
		}
},1000);
}
	
	
	
	
	
	function fnGetURL(){
		var getURL=window.location.href;
var URLString='https://shopclues.onelink.me/3796762202?pid=MsiteAcquisition&c=Jan&af_dp='+getURL+'&mcid=aff&utm_source=msiteDirect&af_web_dp='+getURL+'&mcid=aff&utm_source=msiteDirect';
window.location.href=URLString;
	}
	
	
	
(function(){
	setTimeout(function(){
		var a=document.getElementsByClassName('image_0')[0].getAttribute("src");
	document.getElementById('imgInstallThumb').setAttribute("src",a);
	
var getPrice= document.getElementsByClassName('price')[0].innerText.slice(1);
document.getElementById('Mai').innerText="Rs."+getPrice;
var priceDiff= Math.floor( 0.25*parseInt(getPrice));
if(priceDiff>50){
var dealPrice = parseInt(getPrice)-50;
}
else{
var dealPrice = Math.floor(parseInt(getPrice) - 0.25*parseInt(getPrice));
}
document.getElementsByClassName('AB_dealPrice')[0].innerText="Rs."+dealPrice;
	
	}, 1000);
//fnGetURL();
})();
function fnShow(btn){
$('.remols > ul').toggle();
}

function AppClick(){
localStorage.setItem("APP_click","true");
return true;
}
function fnCloseTC(btn){
document.getElementById('tcop').style.display="none";
}
function fnOpenTC(btn){
document.getElementById('tcop').style.display="block";
}
</script>
            <style>
	.AB_TnC{
		font-size: 11px;
	}
	.txtCoupon{
		color: #ffe869;
		font-weight: bold;
	}
	.txtOfferOff{
		font-weight: bold;
		font-size: 17px;
	}
	.pdpRedirectContainer > div:first-child{
		display: table-cell;
		width: 25%;
		vertical-align: middle;
		text-align: center;
	}
	.pdpRedirectContainer > div:nth-child(2){
		display: table-cell;
		width: 75%;
		vertical-align: middle;
	}
	.pdpRedirectContainer > div:first-child > img{
		max-width: 70%;

		background-color: #fff;

		padding: 8px 5px;

		border-radius: 5px;
	}
	
	.pdpRedirectContainer > div:nth-child(2) > div:first-child{
		font-size: 13px;
	}
	.pdpRedirectContainer > div:nth-child(2) > div:nth-child(2){
		margin-top: 10px;
	}
	
	.pdpRedirectContainer > div:nth-child(2) > div:nth-child(2) > span:first-child{
		display: table-cell;
		vertical-align: middle;
	}
	.pdpRedirectContainer > div:nth-child(2) > div:nth-child(2) > span:nth-child(2){
		display: table-cell;
		vertical-align: middle;
	}

	.AB_TnC{
		color: #fff;
		text-decoration: none;
	}
	
#btnInstallNowAB {
background-color: #fff;
	color: #21adc0;	
	text-decoration: none;
	border-radius: 3px;
	padding: 3px 3px;
	margin-left: 2px;
}
.pdpRedirectContainer{
background: url('https://cdn.shopclues.com/images/banners/CRO/img_android.png'),linear-gradient(to right top, #7c86d3, #738cd6, #6b92d7, #6397d7, #5e9cd7, #59a0d8, #54a4d8, #51a8d8, #4aadd9, #45b1da, #40b6da, #3dbad9);
padding: 20px 0px;
width: 98%;
background-size: contain;
margin: 20px auto 20px auto;
border-radius: 5px;
color: #fff;
	position: relative;
	background-position: right -2px bottom -13px,0px 0px;
	background-repeat: no-repeat;
	background-size: 25%, 100% 100%;
}
	.AB_mainPrice{
		color: #cbe0ee;
		text-decoration: line-through;
		margin-right: 5px;
		font-size: 16px;
	}
	.AB_dealPrice{
		font-size: 17px;
		font-weight: bold;
	}
	
	
.pnlInner{
overflow-y:scroll !important;
max-height:350px !important;
	color: #000;
}
.lstTC{
margin:0px !important;
padding:0px !important;
list-style-type:none !important;
text-align: left !important;
}
.lstTC li:before{
position:absolute !important;
left:25px !important;
top:0px !important;
content:'-' !important;
}
.lstTC li{
font-size: 13px !important;
margin-bottom: 5px !important;
padding: 0 40px !important;
position: relative !important;
}
.pnlOverlaytc{
position:fixed !important;
top:5% !important; 
left:0px !important;
width:100% !important;
height:100% !important;
z-index:99999 !important;
background:rgba(255,255,255,0.5) !important;
}
.pnlOverlayContainer{
width:95%;
background-color:#fff !important;
margin:10px auto 0px auto !important;
box-shadow:0 0 5px rgba(0, 0, 0, 0.4) !important;
padding-bottom:20px !important;
position:relative !important;
border-radius: 8px !important;
overflow: hidden !important;
}
.tncClose , .tncClose:active, .tncClose:focus{
display: inline-block;
color: #ffffff !important;
font-size: 20px !important;
position: absolute !important;
right: 15px !important;
top: 8px !important;
z-index: 9 !important;
text-decoration: none !important;
}
.tncHeader{

display:inline-block;
width: 100%;
position: relative;
}
.txt {
background-color: #4f4f4f !important;
color: #fff !important;
display: block !important;
font-size: 18px !important;
padding: 10px 0 10px 10px !important;
border-bottom: solid 1px #ccc !important;
}
@media screen and (min-width: 361px) and (max-width: 480px){
	#btnInstallNowAB{
		margin-left:18px !important;
		padding: 5px 15px !important;
	}
}
</style>
            <div class="pnlOverlaytc" id="tcop" style="display:none;">
              <div class="pnlOverlayContainer">
                <div class="tncHeader text-left"><span class="txt">Terms &amp; Conditions</span> <a href="javascript:void(0)" class="tncClose" onclick="fnCloseTC(this)">X</a> </div>
                <div class="pnlInner">
                  <div class="row">
                    <div class="col-xs-12" style="padding-top:30px;">
                      <ul class="lstTC" style="display: block !important">
                        <li>In order to avail the above mentioned Coupon, the customers must be registered users of Shopclues. If not, please make sure you register. Register Now.</li>
                        <li>Apply the code on the payment page to avail the Coupon.</li>
                        <li>By availing the Coupon, the user can get up to 25% off on the Order. Maximum discount amount per customer using the coupon code is Rs.560 till the validity of the Coupon lasts. </li>
                        <li>A unique coupon will be displayed on the site which shall be valid till the end of the day. </li>
                        <li>The Coupon is applicable on all categories except memory cards, storage devices, gold / silver coins, bars, gift cards and precious jewellery.</li>
                        <li>Shipping will be charged wherever applicable over and above the price of the product. Discount will not be applicable on the shipping fees.</li>
                        <li>This offer is non-transferable, non extendable and non-negotiable.</li>
                        <li>Discount will be calculated on the net paid amount by the customer.</li>
                        <li>The coupon is applicable for the first 5000 users in a day. This can be changed by Shopclues on it’s sole discretion.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- react-text: 103 --><!-- /react-text --><!-- react-text: 104 --><!-- /react-text --><!-- react-text: 105 --><!-- /react-text -->
        <section class="b_section animated bx_animate" id="shipping" data-scroll="false"><span class="h1">Check Product Delivery</span>
          <div class="shd_box prod_check_delivery">
            <div>
              <div class="pincode_handler" id="pd_pin" style="display: none;">
                <p class="check_delivery"><span class="input_cont">
                  <input type="number" name="" class="pin_type" id="pincode" placeholder="Enter Pincode To Check">
                  </span>
                  <input type="button" id="check_shipping" class="btn" name="" value="Check" data-itemid="149269050">
                </p>
                <ul>
                  <li><!-- react-text: 344 -->Cash on Delivery<!-- /react-text --><a href="javascript:void(0)" class="delivery_info"></a><span>Pay by Online/COD anytime before delivery with COD.</span></li>
                  <li id="shippingcharge"><!-- react-text: 348 -->Shipping Charges<!-- /react-text --><!-- react-text: 349 -->: ₹ <!-- /react-text --><!-- react-text: 350 -->49<!-- /react-text --><a href="javascript:void(0)" class="delivery_info"></a><span id="shipcharge">This price may vary based on shipping address.</span></li>
                  <li>Delivery in 7-9 Business days</li>
                </ul>
              </div>
              <div id="toggleMe" class="check_pin available" style="display: block;">
                <p class="check_pincode"><span>Item is available on 201001<a onclick="pdDetail_public.toggle_val()"> Change </a></span></p>
                <ul>
                  <li>Prepaid available on this PIN code. </li>
                  <li>Delivery between Sun 17 May and Tue 19 May</li>
                  <li id="chkCharge"><!-- react-text: 348 -->Shipping Charges<!-- /react-text --><!-- react-text: 349 -->: ₹ <!-- /react-text --><!-- react-text: 350 -->49<!-- /react-text --><a href="javascript:void(0)" class="delivery_info"></a><span id="shipcharge">This price may vary based on shipping address.</span></li>
                </ul>
              </div>
              <div class="easy_return"><!-- react-text: 356 -->Return not allowed for this product<!-- /react-text --><!-- react-text: 357 --><!-- /react-text --></div>
            </div>
          </div>
        </section>
        <section id="refer_friends_sec" class="b_section animated bx_animate refer_section">
          <div class="shd_box refer_earn"><a href="//m.shopclues.com/refer-and-earn.html" title="">
            <p>Refer Friends and Earn</p>
            <span><!-- react-text: 363 -->Earn ₹<!-- /react-text --><!-- react-text: 364 -->700<!-- /react-text --><!-- react-text: 365 --> CluesBucks+<!-- /react-text --></span><i>Refer Now</i></a></div>
        </section>
        <section id="my_youplus" class="b_section animated bx_animate"></section>
        <!-- react-text: 109 --><!-- /react-text --><!-- react-text: 110 --><!-- /react-text -->
        <div class="prod_recomendation ">
          <div>
            <section id="t_0" data-filt="cat_id=67283&amp;sort_by=bestsellers&amp;sort_order=desc&amp;scl=1" data-label="clicked" class="prod_recomendation b_section animated bx_animate active">
              <div><span class="h1"><!-- react-text: 372 -->Best Selling Products in Cleaners<!-- /react-text --><a href="//m.shopclues.com/cleaners.html?cat_id=67283&amp;sort_by=bestsellers&amp;sort_order=desc&amp;scl=1">View All</a><span id="count_t_0">176 products</span></span>
                <div class="prod_compare" id="div_t_0">
                  <ul class="hack" id="lt_0" data-attr="t_0" style="display:block">
                    <li><a href="//m.shopclues.com/vim-dish-cleaning-gel-lemon-750-ml-149275212.html?ref=t_0">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/105580/280/1/149275212-105580252-1586427934.jpg" alt=""></div>
                      <div class="p_info">
                        <div class="p_name">Artek 1500W Water Heater Immersion Rod - Made in India - ISI Marked</div>
                        <div class="rnr">
                          <span class="n_rating">
                            <span class="fill" style="width: 30px;"></span>
                          </span>
                        </div>
                        <div class="p_price new_pp">
                          <div class="o_prices">
                            <span>₹ 309</span>
                            <span>₹ 500</span>
                          </div>
                          <div class="f_price">
                            <span>₹ 229</span>
                            <span class="discount">54%off</span>
                          </div>
                        </div>
                      </div>
                      </a></li>
                    <li><a href="//m.shopclues.com/colin-glass-cleaner-pump-125-ml-149269191.html?ref=t_0">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269191-105563250-1587330721.jpg" alt=""></div>
                      <div class="p_info">
                        <div class="p_name">Artek 1500W Water Heater Immersion Rod - Made in India - ISI Marked</div>
                        <div class="rnr">
                          <span class="n_rating">
                            <span class="fill" style="width: 30px;"></span>
                          </span>
                        </div>
                        <div class="p_price new_pp">
                          <div class="o_prices">
                            <span>₹ 309</span>
                            <span>₹ 500</span>
                          </div>
                          <div class="f_price">
                            <span>₹ 229</span>
                            <span class="discount">54%off</span>
                          </div>
                        </div>
                      </div>
                      </a></li>
                    <li><a href="//m.shopclues.com/lizol-disinfectant-floor-cleaner-jasmine-975-ml-149269083.html?ref=t_0">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269083-105563183-1585200563.jpg" alt=""></div>
                      <h4>Lizol Disinfectant Floor Cleaner (Jasmine), 975 Ml</h4>
                      <p>₹179</p>
                      </a></li>
                    <li><a href="//m.shopclues.com/lizol-disinfectant-floor-cleaner-citrus-975-ml-149269087.html?ref=t_0">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269087-105563184-1585200568.jpg" alt=""></div>
                      <h4>Lizol Disinfectant Floor Cleaner (Citrus), 975 Ml</h4>
                      <p>₹179</p>
                      </a></li>
                    <li><a href="//m.shopclues.com/harpic-bathroom-cleaner-lemon-200-ml-149269050.html?ref=t_0">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269050-105563159-1585200520.jpg" alt=""></div>
                      <h4>Harpic Bathroom Cleaner (Lemon), 200 Ml</h4>
                      <p>₹30</p>
                      <span class="off">32% off</span></a></li>
                    <li><a href="//m.shopclues.com/harpic-white-and-shine-bleach-500-ml-149269113.html?ref=t_0">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269113-105563201-1585200601.jpg" alt=""></div>
                      <h4>Harpic White And Shine Bleach, 500 Ml</h4>
                      <p>₹86</p>
                      </a></li>
                    <li><a href="//m.shopclues.com/lizol-disinfectant-floor-cleaner-neem-500-ml-149269092.html?ref=t_0">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269092-105563187-1585200574.jpg" alt=""></div>
                      <h4>Lizol Disinfectant Floor Cleaner (Neem), 500 Ml</h4>
                      <p>₹93</p>
                      </a></li>
                    <li><a href="//m.shopclues.com/lizol-disinfectant-floor-cleaner-tulsi-200-ml--lizol-power-kitchen-cleaner-250-ml-149309157.html?ref=t_0">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/105683/280/1/149309157-105683437-1586179387.jpg" alt=""></div>
                      <h4>Lizol Disinfectant Floor Cleaner (Tulsi), 200 Ml + Lizol Power Kitchen Cleaner, 250 Ml</h4>
                      <p>₹115</p>
                      </a></li>
                    <li><a href="//m.shopclues.com/lizol-disinfectant-floor-cleaner-floral-2-l-149269066.html?ref=t_0">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269066-105563174-1585200543.jpg" alt=""></div>
                      <h4>Lizol Disinfectant Floor Cleaner (Floral), 2 L</h4>
                      <p>₹362</p>
                      </a></li>
                    <li><a href="//m.shopclues.com/harpic-extra-strong-bathroom-cleaning-spray-400-ml-149269118.html?ref=t_0">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269118-105563204-1585200608.jpg" alt=""></div>
                      <h4>Harpic Extra Strong Bathroom Cleaning Spray, 400 Ml</h4>
                      <p>₹132</p>
                      <span class="off">1% off</span></a></li>
                    <li><a href="//m.shopclues.com/harpic-flushmatic-pine-100-g-twin-pack-149269143.html?ref=t_0">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269143-105563211-1585200632.jpg" alt=""></div>
                      <h4>Harpic Flushmatic (Pine), Toilet Cleaner 100 G Twin Pack</h4>
                      <p>₹138</p>
                      </a></li>
                  </ul>
                </div>
              </div>
            </section>
            <section id="t_1" data-filt="cat_id=34572&amp;df[]=21.00-40.00&amp;df[]=41.00-60.00&amp;df[]=61.00-80.00&amp;df[]=80.00-100.00&amp;fsrc=discount_percentage&amp;scl=1" data-label="clicked" class="prod_recomendation b_section animated bx_animate active">
              <div><span class="h1"><!-- react-text: 379 -->More Products with min 20% Off<!-- /react-text --><a href="//m.shopclues.com/gourmet-and-daily-needs.html?cat_id=34572&amp;df[]=21.00-40.00&amp;df[]=41.00-60.00&amp;df[]=61.00-80.00&amp;df[]=80.00-100.00&amp;fsrc=discount_percentage&amp;scl=1">View All</a><span id="count_t_1">42483 products</span></span>
                <div class="prod_compare" id="div_t_1">
                  <ul class="hack" id="lt_1" data-attr="t_1" style="display:block">
                    <li><a href="//m.shopclues.com/brij-gwala-pure-cow-desi-ghee-1ltr-jar-148788228.html?ref=t_1">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/104441/280/1/148788228-104441348-1578472379.jpg" alt=""></div>
                      <h4>1 Ltr Brij Gwala Pure Cow Desi Ghee Jar</h4>
                      <p>₹379</p>
                      <span class="off">35% off</span></a></li>
                    <li><a href="//m.shopclues.com/indulekha-bhringha-hair-oil-100-ml-149162187.html?ref=t_1">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/105313/280/1/149162187-105313335-1582960327.jpg" alt=""></div>
                      <h4>Indulekha Daily-use Bhringha Hair Oil 100 Ml</h4>
                      <p>₹179</p>
                      <span class="off">59% off</span></a></li>
                    <li><a href="//m.shopclues.com/only4you-shiv-shakti-kawach-pendant-with-rudraksha-locket-148965195.html?ref=t_1">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/104790/280/1/148965195-104790452-1587836931.jpg" alt=""></div>
                      <h4>Only4you Metal Gold Trishul Pendent With Five Mukhi Rudraksha Beads</h4>
                      <p>₹149</p>
                      <span class="off">85% off</span></a></li>
                    <li><a href="//m.shopclues.com/caboki-hair-building-fibers-25-gms-dark-brown-best-quality-121757192.html?ref=t_1">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images/thumbnails/75038/280/1/121757192cabokidarkbrown1498299122.jpg" alt=""></div>
                      <h4>Caboki hair building fibers-25 g (Dark brown)</h4>
                      <p>₹399</p>
                      <span class="off">80% off</span></a></li>
                    <li><a href="//m.shopclues.com/toppik-kk-hair-building-fiber-new-bottle-27.5gm-black-142475481.html?ref=t_1">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/94837/280/1/142475481-94837301-1542553013.jpg" alt=""></div>
                      <h4>Toppik -kk Unisex Hair Building Fiber 27.5 g (Black)</h4>
                      <p>₹398</p>
                      <span class="off">80% off</span></a></li>
                    <li><a href="//m.shopclues.com/hindustan-ayurveda-speed-growth-vanilla-flavor-height-increase-height-growth-100-gm-powder-pack-of-1-147337527.html?ref=t_1">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/101965/280/1/147337527-101965434-1563536107.jpg" alt=""></div>
                      <h4>Hindustan Ayurveda Speed Growth Vanilla Flavor Height Increase Height Growth (100 gm Powder) Pack Of 1</h4>
                      <p>₹899</p>
                      <span class="off">55% off</span></a></li>
                    <li><a href="//m.shopclues.com/fast-hot-hair-straightener-comb-brush-lcd-screen-flat-iron-styling-hqt-906-147511440.html?ref=t_1">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/102297/280/1/147511440-102297566-1565352912.jpg" alt=""></div>
                      <h4>Fast Hot Hair Straightener Comb Brush Lcd Screen Flat Iron Styling HQT 906</h4>
                      <p>₹369</p>
                      <span class="off">63% off</span></a></li>
                    <li><a href="//m.shopclues.com/gulzar-beauty-donut-bun-maker--hair-bun-making-styling-tool-2-pcs-bun-black-140547815.html?ref=t_1">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/91766/280/1/140547815-91766221-1536056974.jpg" alt=""></div>
                      <h4>2 Pcs Gulzar Fashion Daily-use Donut Bun Maker (Black)</h4>
                      <p>₹230</p>
                      <span class="off">67% off</span></a></li>
                    <li><a href="//m.shopclues.com/charcoal-mask-peel-off-oil-control-face-masks-for-women-130g-143431535.html?ref=t_1">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/96582/280/1/143431535-96582681-1586876779.jpg" alt=""></div>
                      <h4>Charcoal Peel Off Masks for Men &amp; Women, 130g</h4>
                      <p>₹99</p>
                      <span class="off">75% off</span></a></li>
                    <li><a href="//m.shopclues.com/only4u-black-tulsi-silver-cap-mala-1081-breads-133088173.html?ref=t_1">
                      <div class="p_img"><img src="https://cdn.shopclues.com/" alt=""></div>
                      <h4>Pack of 1 SK1 only4u Black Tulsi Silver Cap Mala 108+1 Breads</h4>
                      <p>₹199</p>
                      <span class="off">55% off</span></a></li>
                    <li><a href="//m.shopclues.com/bio-care-aloe-vera-face-gel-aloe-vera-scrub-148884451.html?ref=t_1">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/104648/280/1/148884451-104648292-1579761453.jpg" alt=""></div>
                      <h4>Bio Care Aloe Vera Face Gel+ Aloe Vera Scrub</h4>
                      <p>₹340</p>
                      <span class="off">38% off</span></a></li>
                  </ul>
                </div>
              </div>
            </section>
            <section id="t_2" data-filt="cat_id=34577&amp;sort_by=bestsellers&amp;sort_order=desc&amp;scl=1" data-label="clicked" class="prod_recomendation b_section animated bx_animate active">
              <div><span class="h1"><!-- react-text: 386 -->Best Selling Products in Household Supplies<!-- /react-text --><a href="//m.shopclues.com/household-supplies.html?cat_id=34577&amp;sort_by=bestsellers&amp;sort_order=desc&amp;scl=1">View All</a><span id="count_t_2">27356 products</span></span>
                <div class="prod_compare" id="div_t_2">
                  <ul class="hack" id="lt_2" data-attr="t_2" style="display:block">
                    <li><a href="//m.shopclues.com/set-of-2-liboni-car-perfume-air-freshner-for-home-office-car-7.html?ref=t_2">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images/thumbnails/85983/280/1/395755001507110620.jpg" alt=""></div>
                      <h4>Liboni Car Dashboard Perfume (Set of 2)</h4>
                      <p>₹249</p>
                      <span class="off">58% off</span></a></li>
                    <li><a href="//m.shopclues.com/napoleon-canon-shaped-refillable-car-perfume-33.html?ref=t_2">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images/thumbnails/7915/280/1/537623011423740587.jpg" alt=""></div>
                      <h4>My tone Car Liquid Perfumes (Napolean Concept My Tone)</h4>
                      <p>₹539</p>
                      <span class="off">40% off</span></a></li>
                    <li><a href="//m.shopclues.com/ideals-wish-fulfilling-tortoise-9.html?ref=t_2">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/18486/280/1/83355710-18486984-1538897235.jpg" alt=""></div>
                      <h4>Arts &amp; Kraft Vastu Metal Wish Fulfilling Tortoise on Plate</h4>
                      <p>₹89</p>
                      <span class="off">87% off</span></a></li>
                    <li><a href="//m.shopclues.com/golden-color-steel-king-size-agarbatti-stand-135448432.html?ref=t_2">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/81157/280/1/135448432-81157529-1526987939.jpg" alt=""></div>
                      <h4>Fashion Bizz Golden Color Steel King Size Agarbatti Stand</h4>
                      <p>₹149</p>
                      <span class="off">70% off</span></a></li>
                    <li><a href="//m.shopclues.com/designer-car-hanging-perfume-rose-fragrance-last-for-60-days-assorted-design.html?ref=t_2">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images/thumbnails/27032/280/1/car14360390101447056595.jpg" alt=""></div>
                      <h4>Designer Car Hanging Perfume - Rose Fragrance Last for 60 days -Assorted Design</h4>
                      <p>₹139</p>
                      <span class="off">54% off</span></a></li>
                    <li><a href="//m.shopclues.com/my-tone-grace-grace-green-car-perfume-lemon-diffuser-air-freshener-150-g.html?ref=t_2">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images/thumbnails/80967/280/1/151409scycandle1503467054.jpg" alt=""></div>
                      <h4>My Tone Grace Grace Green Car Perfume Lemon Diffuser Lemon Air Freshener (150 G)</h4>
                      <p>₹249</p>
                      <span class="off">38% off</span></a></li>
                    <li><a href="//m.shopclues.com/fresh-bottle-amber-car-air-fragrance-perfume-1.html?ref=t_2">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images/thumbnails/2260/280/1/1718566amber21387982221.jpg" alt=""></div>
                      <h4>Amber Fresh Bottle Car Dashboard Air Fragrance Perfume</h4>
                      <p>₹305</p>
                      <span class="off">13% off</span></a></li>
                    <li><a href="//m.shopclues.com/crystal-rock-car-perfume-free-shipping.html?ref=t_2">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images/thumbnails/368/280/1/CRYSTALROCK1363762295.jpg" alt=""></div>
                      <h4>Crystal Rock Universal Car Dashboard Perfume</h4>
                      <p>₹359</p>
                      <span class="off">28% off</span></a></li>
                    <li><a href="//m.shopclues.com/lizard-repellent-mikado-engineers-1.html?ref=t_2">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images/thumbnails/6108/280/1/1740432-6108500-1522237295.jpg" alt=""></div>
                      <h4>Lizard Repellent- Mikado Engineers</h4>
                      <p>₹118</p>
                      <span class="off">6% off</span></a></li>
                    <li><a href="//m.shopclues.com/fashion-car-perfume-free-shipping.html?ref=t_2">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images/thumbnails/380/280/1/20130328091364446993.jpg" alt=""></div>
                      <h4>Others Car Dashbaord Perfume</h4>
                      <p>₹319</p>
                      <span class="off">36% off</span></a></li>
                    <li><a href="//m.shopclues.com/hand-gloves-washing-cleaning-kitchen-household-rubber-gloves-1-pair-120509497.html?ref=t_2">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images/thumbnails/73453/280/1/120509497hglove1496218203.jpg" alt=""></div>
                      <h4>Hand Gloves Washing Cleaning Kitchen Household Rubber Gloves ( 2 Pcs.)</h4>
                      <p>₹170</p>
                      <span class="off">32% off</span></a></li>
                  </ul>
                </div>
              </div>
            </section>
            <section id="t_3" data-filt="cat_id=34572&amp;sort_by=newarrivals&amp;sort_order=desc&amp;scl=1" data-label="clicked" class="prod_recomendation b_section animated bx_animate active">
              <div><span class="h1"><!-- react-text: 393 -->New Arrivals in Daily Needs and Essentials<!-- /react-text --><a href="//m.shopclues.com/gourmet-and-daily-needs.html?cat_id=34572&amp;sort_by=newarrivals&amp;sort_order=desc&amp;scl=1">View All</a><span id="count_t_3">73157 products</span></span>
                <div class="prod_compare" id="div_t_3">
                  <ul class="hack" id="lt_3" data-attr="t_3" style="display:block">
                    <li><a href="//m.shopclues.com/proera-black-mask-net-print-anti-pollution-and-anti-dust-mask-pack-of-1-mask-and-respirator-149598196.html?ref=t_3">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/106458/280/1/149598196-106458948-1589540250.jpg" alt=""></div>
                      <h4>PROERA Black Mask Net Print Anti Pollution and Anti Dust Mask ( Pack of 1) Mask and Respirator</h4>
                      <p>₹145</p>
                      <span class="off">64% off</span></a></li>
                    <li><a href="//m.shopclues.com/organic-hair-care-combo-of-shikakai-powder-and-lemon-peel-powder-100gm-each-149598118.html?ref=t_3">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/106458/280/1/149598118-106458759-1589539899.jpg" alt=""></div>
                      <h4>Organic hair care , Combo of  (Shikakai Powder  Lemon Peel Powder)100gm each</h4>
                      <p>₹249</p>
                      <span class="off">17% off</span></a></li>
                    <li><a href="//m.shopclues.com/anti-pollution-mask-washable-dust-mask-for-pollution-smoke-allergy-mask-pack-of-2-149598062.html?ref=t_3">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/106458/280/1/149598062-106458653-1589539618.jpg" alt=""></div>
                      <h4>Anti Pollution Mask Washable Dust Mask for Pollution Smoke Allergy Mask - Pack of 2</h4>
                      <p>₹235</p>
                      <span class="off">41% off</span></a></li>
                    <li><a href="//m.shopclues.com/organic-hair-care-combo-of-shikakai-pod-powder-and-orange-peel-powder-100gm-each-149598047.html?ref=t_3">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/106458/280/1/149598047-106458606-1589539492.jpg" alt=""></div>
                      <h4>Organic hair care , Combo of  (Shikakai Pod Powder  Orange Peel Powder)100gm each</h4>
                      <p>₹249</p>
                      <span class="off">17% off</span></a></li>
                    <li><a href="//m.shopclues.com/modishombre-kn95-respirator-face-mask-pack-of-5-149598045.html?ref=t_3">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/106458/280/1/149598045-106458599-1589540354.jpg" alt=""></div>
                      <h4>Modishombre KN95 Respirator Face Mask (Pack of 5)</h4>
                      <p>₹999</p>
                      <span class="off">17% off</span></a></li>
                    <li><a href="//m.shopclues.com/organic-face-care-combo-of-soapnut-powder-and-henna-powder-100gm-each-149597919.html?ref=t_3">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/106458/280/1/149597919-106458356-1589538813.jpg" alt=""></div>
                      <h4>Organic face care , Combo of  (Soapnut Powder  Henna Powder)100gm each</h4>
                      <p>₹249</p>
                      <span class="off">17% off</span></a></li>
                    <li><a href="//m.shopclues.com/organic-face-care-combo-of-soapnut-powder-and-manjistha-powder-100gm-each-149597857.html?ref=t_3">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/106458/280/1/149597857-106458231-1589538498.jpg" alt=""></div>
                      <h4>Organic face care , Combo of  (Soapnut Powder  Manjistha Powder)100gm each</h4>
                      <p>₹249</p>
                      <span class="off">17% off</span></a></li>
                    <li><a href="//m.shopclues.com/organic-hair-care-combo-of-soapnut-powder-and-lemon-peel-powder-100gm-each-149597793.html?ref=t_3">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/106458/280/1/149597793-106458105-1589538164.jpg" alt=""></div>
                      <h4>Organic hair care , Combo of  (Soapnut Powder  Lemon Peel Powder)100gm each</h4>
                      <p>₹249</p>
                      <span class="off">17% off</span></a></li>
                    <li><a href="//m.shopclues.com/only4you-metal-gold-trishul-pendent-with-five-mukhi-rudraksha-beads-149597774.html?ref=t_3">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/106458/280/1/149597774-106458051-1589538002.jpg" alt=""></div>
                      <h4>Only4you Metal Gold Trishul Pendent With Five Mukhi Rudraksha Beads</h4>
                      <p>₹249</p>
                      <span class="off">50% off</span></a></li>
                    <li><a href="//m.shopclues.com/organic-face-care-combo-of-soapnut-powder-and-orange-peel-powder-100gm-each-149597716.html?ref=t_3">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/106457/280/1/149597716-106457940-1589537711.jpg" alt=""></div>
                      <h4>Organic face care , Combo of  (Soapnut Powder  Orange Peel Powder)100gm each</h4>
                      <p>₹249</p>
                      <span class="off">17% off</span></a></li>
                    <li><a href="//m.shopclues.com/organic-hair-care-combo-of-soapnut-powder-and-shikakai-powder-100gm-each-149597631.html?ref=t_3">
                      <div class="p_img"><img src="https://cdn.shopclues.com/images1/thumbnails/106457/280/1/149597631-106457784-1589537152.jpg" alt=""></div>
                      <h4>Organic hair care , Combo of  (Soapnut Powder  Shikakai Powder)100gm each</h4>
                      <p>₹249</p>
                      <span class="off">17% off</span></a></li>
                  </ul>
                </div>
              </div>
            </section>
            <a><!-- react-text: 398 -->More <!-- /react-text --><!-- react-text: 399 -->Cleaners<!-- /react-text --></a></div>
        </div>
        <!-- react-text: 112 --><!-- /react-text --><!-- react-text: 113 --><!-- /react-text -->
        <section class="b_section animated bx_animate">
          <div></div>
        </section>
        <div class="time_zone time_zne" id="show_timer" style="display: table;">
          <div class="time_zone_cont"><i>&nbsp;</i>
            <div class="time"><span id="hr">0</span><span id="hr_1"></span><span class="dot">:</span><span id="mn"></span><span id="mn_1"></span><span class="dot">:</span><span id="sc"></span><span id="sc_1"></span></div>
            <p>Buy now before this deal ends!!!</p>
          </div>
          <div class="note_limit"></div>
        </div>
        <div class="sc_buy_product buynow_prc" style="display: flex;"><a href="javascript:void(0);" id="add_cart" class="sc_addtocart sc_cart open_modelb" data-target="variants">Add To Cart</a>
          <button href="javascript:void(0);" id="buy" class="sc_buynow sc_buy"><!-- react-text: 419 -->Buy Now<!-- /react-text --><span id="cbp_buy_text" style="display: none;"></span><span id="cbp_buy_text_mod"></span></button>
        </div>
        <section class="b_section animated bx_animate" id="rating" style="display: none;">
          <span class="heading">Rating &amp; Reviews</span>
            <div style="display: none;" class="shd_box rating_review">
              <div class="total_rating">
                <div class="star_rating_point"><span>5</span>
                  <svg viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="45" id="gray"></circle>
                    <circle cx="50" cy="50" r="45" id="circle_fill" class="c_fill" style="stroke-dasharray: 284, 284;"></circle>
                  </svg>
                  <div class="star_main"><span class="star"><span style="width: 50px;"></span></span></div>
                </div>
              </div>
              <div class="total_review">
                <ul>
                  <li><span><!-- react-text: 512 -->5<!-- /react-text --><!-- react-text: 513 --> Star<!-- /react-text --></span><i class="bar"><i class="star5" style="width: 100px;"></i></i><span>1</span></li>
                  <li><span><!-- react-text: 519 -->4<!-- /react-text --><!-- react-text: 520 --> Star<!-- /react-text --></span><i class="bar"><i class="star5" style="width: 0px;"></i></i><span>0</span></li>
                  <li><span><!-- react-text: 526 -->3<!-- /react-text --><!-- react-text: 527 --> Star<!-- /react-text --></span><i class="bar"><i class="star5" style="width: 0px;"></i></i><span>0</span></li>
                  <li><span><!-- react-text: 533 -->2<!-- /react-text --><!-- react-text: 534 --> Star<!-- /react-text --></span><i class="bar"><i class="star1" style="width: 0px;"></i></i><span>0</span></li>
                  <li><span><!-- react-text: 540 -->1<!-- /react-text --><!-- react-text: 541 --> Star<!-- /react-text --></span><i class="bar"><i class="star1" style="width: 0px;"></i></i><span>0</span></li>
                </ul>
              </div>
            </div>
            <div class="shd_box rating_review no_data">
              <p>No Ratings Yet</p>
            </div>
            <div class="shd_box">
              <span class="h1">Customer images & videos</span>
              <div class="customer_review">
                <ul>
                  <li class="video">
                    <a href="javascript:void(0);"></a>
                    <img src="https://cdn.shopclues.com/images1/thumbnails/105313/280/1/149162187-105313335-1582960327.jpg" alt="">
                    <p>Ravindra</p>
                  </li>
                  <li>
                    <img src="https://cdn.shopclues.com/images1/thumbnails/105313/280/1/149162187-105313335-1582960327.jpg" alt="">
                    <p>Ravindra</p>
                  </li>
                  <li class="video">
                    <a href="javascript:void(0);"></a>
                    <img src="https://cdn.shopclues.com/images1/thumbnails/105313/280/1/149162187-105313335-1582960327.jpg" alt="">
                    <p>Ravindra</p>
                  </li>
                  <li>
                    <img src="https://cdn.shopclues.com/images1/thumbnails/105313/280/1/149162187-105313335-1582960327.jpg" alt="">
                    <p>Ravindra</p>
                  </li>
                  <li>
                    <img src="https://cdn.shopclues.com/images1/thumbnails/105313/280/1/149162187-105313335-1582960327.jpg" alt="">
                    <p>Ravindra</p>
                  </li>
                  <li class="more">
                    <span>+50</span>
                    <img src="https://cdn.shopclues.com/images1/thumbnails/105313/280/1/149162187-105313335-1582960327.jpg" alt="">
                    <p>Ravindra</p>
                  </li>
                </ul>
              </div>
            </div>
        </section>
        <section class="b_section animated bx_animate">
          <span class="heading">Rating &amp; Reviews <a href="javascript:void(0);" class="link">Rate Product</a></span>
          <div class="shd_box">
            <div class="rating_bar">
              <div class="rating_info">
                <div class="rating_star">
                  <p>
                    4.0<span>/5</span>
                  </p>
                  <ul class="active">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <i style="width: 70px;"></i>
                  </ul>
                  <span>205 Ratings &amp; <br>115 Review</span>
                </div>
                <div class="rating_review_bar">
                  <ul>
                    <li>
                      <span>5 star</span>
                      <i>
                        <em style="width: 90%;"></em>
                      </i>
                      <span>90</span>
                    </li>
                    <li>
                      <span>4 star</span>
                      <i>
                        <em style="width: 60%;"></em>
                      </i>
                      <span>60</span>
                    </li>
                    <li>
                      <span>3 star</span>
                      <i>
                        <em style="width: 20%;"></em>
                      </i>
                      <span>20</span>
                    </li>
                    <li>
                      <span>2 star</span>
                      <i class="star_2">
                        <em style="width: 15%;"></em>
                      </i>
                      <span>15</span>
                    </li>
                    <li>
                      <span>5 star</span>
                      <i class="star_1">
                        <em style="width: 20%;"></em>
                      </i>
                      <span>20</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="review_video">
              <span class="heading">Reviews with videos</span>
              <ul>
                <li>
                  <img src="http://cdn.shopclues.com/images/unbox_video_thumbnail/thumbnail_106454_1627635415.jpg" alt="">
                  <i>
                    <em>0:45</em>
                  </i>
                </li>
                <li>
                  <img src="http://cdn.shopclues.com/images/unbox_video_thumbnail/thumbnail_106454_1627635415.jpg" alt="">
                  <i>
                    <em>0:45</em>
                  </i>
                </li>
                <li>
                  <img src="http://cdn.shopclues.com/images/unbox_video_thumbnail/thumbnail_106454_1627635415.jpg" alt="">
                  <i>
                    <em>0:45</em>
                  </i>
                </li>
                <li>
                  <img src="http://cdn.shopclues.com/images/unbox_video_thumbnail/thumbnail_106454_1627635415.jpg" alt="">
                  <i>
                    <em>0:45</em>
                  </i>
                </li>
                <li>
                  <img src="http://cdn.shopclues.com/images/unbox_video_thumbnail/thumbnail_106454_1627635415.jpg" alt="">
                  <i class="view_more">
                    + 40
                  </i>
                </li>
              </ul>
            </div>
            <div class="review_images">
              <span class="heading">Reviews with images</span>
              <div class="gallery">
                <ul>
                  <li>
                    <img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269191-105563250-1587330721.jpg" alt="">
                  </li>
                </ul>
                <ul class="dbl">
                  <li>
                    <img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269191-105563250-1587330721.jpg" alt="">
                  </li>
                  <li>
                    <img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269191-105563250-1587330721.jpg" alt="">
                  </li>
                </ul>
                <ul>
                  <li>
                    <img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269191-105563250-1587330721.jpg" alt="">
                  </li>
                </ul>
                <ul class="dbl">
                  <li>
                    <img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269191-105563250-1587330721.jpg" alt="">
                  </li>
                  <li>
                    <img src="https://cdn.shopclues.com/images1/thumbnails/105563/280/1/149269191-105563250-1587330721.jpg" alt="">
                    <i class="view_more">+ 40</i>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section class="b_section animated bx_animate" style="display: none;">
           <div class="shd_box review_detail">
              <div id="my_reviews">
                 <ul id="initial_reviews">
                    <li>
                       <div class="review_head">
                          <span>
                             <!-- react-text: 1267 -->5<!-- /react-text --><!-- react-text: 1268 --> <!-- /react-text --><i></i>
                          </span>
                          <!-- react-text: 1270 -->Shambo<!-- /react-text -->
                       </div>
                       <p>as per price, it's awesome</p>
                       <span>02 Apr, 2018</span>

                       <div class="customer_review">
                        <ul>
                          <li class="video">
                            <a href="javascript:void(0);"></a>
                            <img src="https://cdn.shopclues.com/images1/thumbnails/105313/280/1/149162187-105313335-1582960327.jpg" alt="">
                            <p>Ravindra</p>
                          </li>
                          <li>
                            <img src="https://cdn.shopclues.com/images1/thumbnails/105313/280/1/149162187-105313335-1582960327.jpg" alt="">
                            <p>Ravindra</p>
                          </li>
                          <li>
                            <img src="https://cdn.shopclues.com/images1/thumbnails/105313/280/1/149162187-105313335-1582960327.jpg" alt="">
                            <p>Ravindra</p>
                          </li>
                          <li>
                            <img src="https://cdn.shopclues.com/images1/thumbnails/105313/280/1/149162187-105313335-1582960327.jpg" alt="">
                            <p>Ravindra</p>
                          </li>
                          <li class="more">
                            <span>+50</span>
                            <img src="https://cdn.shopclues.com/images1/thumbnails/105313/280/1/149162187-105313335-1582960327.jpg" alt="">
                            <p>Ravindra</p>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                       <div class="review_head">
                          <span>
                             <!-- react-text: 1276 -->5<!-- /react-text --><!-- react-text: 1277 --> <!-- /react-text --><i></i>
                          </span>
                          <!-- react-text: 1279 -->arbaj<!-- /react-text -->
                       </div>
                       <p>nice</p>
                       <span>09 Aug, 2018</span>
                    </li>
                    <li style="display: none;">
                       <div class="review_head">
                          <span>
                             <!-- react-text: 1285 -->1<!-- /react-text --><!-- react-text: 1286 --> <!-- /react-text --><i></i>
                          </span>
                          <!-- react-text: 1288 -->chandrabhan<!-- /react-text -->
                       </div>
                       <p>tuta hua saman Mila shipping sahi nahin hai</p>
                       <span>17 Jul, 2020</span>
                    </li>
                    <li style="display: none;">
                       <div class="review_head">
                          <span>
                             <!-- react-text: 1294 -->1<!-- /react-text --><!-- react-text: 1295 --> <!-- /react-text --><i></i>
                          </span>
                          <!-- react-text: 1297 -->dpsarkar<!-- /react-text -->
                       </div>
                       <p>the pipe is not good, linkage after 2 times of use</p>
                       <span>06 Jun, 2020</span>
                    </li>
                    <li style="display: none;">
                       <div class="review_head">
                          <span>
                             <!-- react-text: 1303 -->1<!-- /react-text --><!-- react-text: 1304 --> <!-- /react-text --><i></i>
                          </span>
                          <!-- react-text: 1306 -->neerajkmr<!-- /react-text -->
                       </div>
                       <p>bhot ganda product bhjte h jo Order kro wo nhi bhjenge usk badle me dusra bhj dete h or return krne ko 8 din se complain daali hui h abhi tk uska koi rpy nhi h shopcules bhot ganda h ab me kbhi b shopcules se kuch b Order NHi  krunga</p>
                       <span>01 Jun, 2020</span>
                    </li>
                    <li style="display: none;">
                       <div class="review_head">
                          <span>
                             <!-- react-text: 1312 -->5<!-- /react-text --><!-- react-text: 1313 --> <!-- /react-text --><i></i>
                          </span>
                          <!-- react-text: 1315 -->Suresh<!-- /react-text -->
                       </div>
                       <p>good</p>
                       <span>07 May, 2020</span>
                    </li>
                    <li style="display: none;">
                       <div class="review_head">
                          <span>
                             <!-- react-text: 1321 -->5<!-- /react-text --><!-- react-text: 1322 --> <!-- /react-text --><i></i>
                          </span>
                          <!-- react-text: 1324 -->ckxjdfbsjjcnddjjafj<!-- /react-text -->
                       </div>
                       <p>vikas</p>
                       <span>14 Mar, 2020</span>
                    </li>
                    <li style="display: none;">
                       <div class="review_head">
                          <span>
                             <!-- react-text: 1330 -->1<!-- /react-text --><!-- react-text: 1331 --> <!-- /react-text --><i></i>
                          </span>
                          <!-- react-text: 1333 -->hariPrasad<!-- /react-text -->
                       </div>
                       <p>pot edge was broken. it was useless for us</p>
                       <span>03 Mar, 2020</span>
                    </li>
                    <li style="display: none;">
                       <div class="review_head">
                          <span>
                             <!-- react-text: 1339 -->1<!-- /react-text --><!-- react-text: 1340 --> <!-- /react-text --><i></i>
                          </span>
                          <!-- react-text: 1342 -->fazilsuperstar<!-- /react-text -->
                       </div>
                       <p>Waste for money</p>
                       <span>03 Mar, 2020</span>
                    </li>
                    <li style="display: none;">
                       <div class="review_head">
                          <span>
                             <!-- react-text: 1348 -->4<!-- /react-text --><!-- react-text: 1349 --> <!-- /react-text --><i></i>
                          </span>
                          <!-- react-text: 1351 -->krthksingam<!-- /react-text -->
                       </div>
                       <p>nice</p>
                       <span>28 Feb, 2020</span>
                    </li>
                    <li style="display: none;">
                       <div class="review_head">
                          <span>
                             <!-- react-text: 1357 -->4<!-- /react-text --><!-- react-text: 1358 --> <!-- /react-text --><i></i>
                          </span>
                          <!-- react-text: 1360 -->Sarim<!-- /react-text -->
                       </div>
                       <p>good but small</p>
                       <span>31 Jan, 2020</span>
                    </li>
                    <li style="display: none;">
                       <div class="review_head">
                          <span>
                             <!-- react-text: 1366 -->5<!-- /react-text --><!-- react-text: 1367 --> <!-- /react-text --><i></i>
                          </span>
                          <!-- react-text: 1369 -->susairaj<!-- /react-text -->
                       </div>
                       <p>worth for money</p>
                       <span>29 Jan, 2020</span>
                    </li>
                 </ul>
                 <a href="javascript:void(0)" id="morereviews" class="read_all">Read All Review</a>
              </div>
           </div>
        </section>
        <section class="b_section animated bx_animate" id="review" style="display: none;"><!-- react-empty: 423 --></section>
        <section class="b_section animated bx_animate" id="seller_information"><span class="h1">Seller Information</span>
          <div class="shd_box prod_seller">
            <div>
              <div class="seller_info"><span>Sold by</span>
                <p><!-- react-text: 431 --> <!-- /react-text --><!-- react-text: 432 -->Phonoarena<!-- /react-text --></p>
                <p><!-- react-text: 434 -->delhi<!-- /react-text --><!-- react-text: 435 -->Delhi<!-- /react-text --></p>
                <a href="https://phonoarena.shopclues.com">Visit Seller Store</a></div>
              <!-- react-text: 437 --><!-- /react-text --><!-- react-text: 438 --><!-- /react-text --></div>
          </div>
        </section>

        <section class="b_section animated bx_animate" id="seller_information">
          <span class="h1">Sold By</span>
          <div class="shd_box soldby_seller">
            <div class="soldby_sc">
              <p>
                EGLOB INDIA PVT.LTD
                <span><i></i> Top rated</span>
              </p>
              <span>Surat, Gujarat</span>
            </div>
            <a href="javascript:void(0);">Visit Seller Store <i class="icon ico"></i></a>
          </div>
        </section>
        <!-- react-empty: 545 --><!-- react-text: 119 --><!-- /react-text --><!-- react-text: 120 --><!-- /react-text -->
        <div class="center slider sliderwrap animated pulse" id="carousel">
          <div class="shd_box">
            <ul>
              <li class="carousel_slide" style="display: block;"><a href="shopclues-sale-2.html" data-omnirel="N|Home|B5P0|Fashion|Shopclue|NA|66909|Horizontal||Local Products, Global Trends" data-omnirel_new="10973905257736811384431745269711206749|66909|C|0||1013|Home|A"><img src="https://cdn.shopclues.com/images/banners/15thMay_Madeinindia_M_HB_Rj.jpg" alt="Local Products, Global Trends"></a></li>
              <li class="carousel_slide" style="display: none;"><a href="home-cleaning.html?sort_by=popularity&amp;sort_order=desc&amp;sort_price%5b%5d=0.00-250.00&amp;sort_price%5b%5d=501.00-1000.00&amp;sort_price%5b%5d=251.00-500.00&amp;discount_percentage%5b%5d=0.00-20.00&amp;discount_percentage%5b%5d=41.00-60.00&amp;fsrc=sort_price,discount_percentage&amp;bs=2" data-omnirel="N|Home|B5P1|NA|NA|NA|0|H&amp;K||Cleaning Essentials" data-omnirel_new="10973905257736811384431745269711206749|0|A|1||1013|Home|A"><img src="https://cdn.shopclues.com/images/ui/banner_bg.jpg" alt="Cleaning Essentials"></a></li>
              <li class="carousel_slide" style="display: none;"><a href="digital-infrared-thermometer-aet-r701-149269102.html" data-omnirel="N|Home|B5P2|Daily Needs|Flu Care|Thermome|149269102|Product||Digital Infrared Thermometer" data-omnirel_new="10973905257736811384431745269711206749|149269102|P|2||1013|Home|A"><img src="https://cdn.shopclues.com/images/ui/banner_bg.jpg" alt="Digital Infrared Thermometer"></a></li>
              <li class="carousel_slide" style="display: none;"><a href="lifestyle-sale-20.html" data-omnirel="N|Home|B5P3|Fashion|Personal|NA|64003|H&amp;K||Personal Hygiene" data-omnirel_new="10973905257736811384431745269711206749|64003|C|3||1013|Home|A"><img src="https://cdn.shopclues.com/images/ui/banner_bg.jpg" alt="Personal Hygiene"></a></li>
              <li class="carousel_slide" style="display: none;"><a href="sports-fitness-equipments.html?sort_by=popularity&amp;sort_order=desc&amp;bs=2" data-omnirel="N|Home|B5P4|NA|NA|NA|0|S&amp;H||Fitness Equipment" data-omnirel_new="10973905257736811384431745269711206749|0|A|4||1013|Home|A"><img src="https://cdn.shopclues.com/images/ui/banner_bg.jpg" alt="Fitness Equipment"></a></li>
            </ul>
            <div class="mn_dots">
              <ul class="dots">
                <li class="active"></li>
                <li class=""></li>
                <li class=""></li>
                <li class=""></li>
                <li class=""></li>
              </ul>
            </div>
          </div>
        </div>
        <section class="b_section animated bx_animate type_1">
          <div class="shd_box scroll_effect animated bx_animate">
            <ul class="m_block">
              <li><a href="https://m.shopclues.com/time-sale.html" data-omnirel="Cat-undefined|B3PNA|S|NA|NA|NA|0|NA@Time Sale" data-omnirel_new="10973905257736811384431745269711206749|0|Z|1||915|Home|A"><img src="https://cdn.shopclues.com/images/banners/TimeSale_akb_14May_Strip_2.jpg"></a></li>
              <li><a href="shopclues-tv.html" data-omnirel="Cat-undefined|B3P1|S|NA|NA|NA|0|NA@Stay Clued" data-omnirel_new="10973905257736811384431745269711206749|0|Z|2||915|Home|A"><img src="https://cdn.shopclues.com/images/banners/StayClued_20March_Rj_M_PS.jpg"></a></li>
            </ul>
          </div>
        </section>
        <div id="notify_me_button" class="sc_buy_product" style="display: none;">
          <button id="notify_me_avl" class="sc_buynow sc_buy">Notify Me</button>
        </div>
        <form id="buy_form_gold">
          <input type="hidden" name="product_guest_data[142632056][product_id]" value="142632056">
          <input type="hidden" name="product_data[142632056][product_id]" value="142632056">
          <input type="hidden" name="product_data[142632056][amount]" value="1">
        </form>
        <form id="remove_gold_product">
          <input type="hidden" name="fetch_call" value="1">
          <input type="hidden" name="product_guest_data[142632056][product_id]" value="142632056">
          <input type="hidden" name="product_data[142632056][product_id]" value="142632056">
          <input type="hidden" name="product_data[142632056][amount]" value="1">
        </form>
        <form id="buy_form" method="post" action="https://smo.shopclues.com/acart/oneStepCheckout" class="buy-form">
          <input type="hidden" name="clues_bucks_applied" value="0" id="clues_bucks_applied">
          <input type="hidden" name="product_data[149269050][product_id]" value="149269050">
          <input type="hidden" name="user_id" value="" id="form_user_id">
          <input type="hidden" name="product_guest_data[149269050][product_id]" value="149269050">
          <input type="hidden" name="product_guest_data[149269050][name]" value="Harpic Bathroom Cleaner (Lemon), 200 Ml">
          <input type="hidden" id="product_image" name="product_guest_data[https://cdn.shopclues.com/images1/thumbnails/105563/320/320/149269050-105563159-1585200520.jpg][image]" value="https://cdn.shopclues.com/images1/thumbnails/105563/320/320/149269050-105563159-1585200520.jpg">
          <input type="hidden" name="product_guest_data[https://cdn.shopclues.com/images1/thumbnails/105563/320/320/149269050-105563159-1585200520.jpg][is_cod]" value="Y">
          <input type="hidden" class="main_price" name="product_guest_data[https://cdn.shopclues.com/images1/thumbnails/105563/320/320/149269050-105563159-1585200520.jpg][price]" value="30">
          <input type="hidden" id="master_id" name="product_guest_data[149269050][master_id]" value="149269050">
          <input type="hidden" id="purl" name="product_guest_data[https://cdn.shopclues.com/images1/thumbnails/105563/320/320/149269050-105563159-1585200520.jpg][purl]" value="harpic-bathroom-cleaner-lemon-200-ml-149269050.html">
          <input type="hidden" name="product_guest_data[https://cdn.shopclues.com/images1/thumbnails/105563/320/320/149269050-105563159-1585200520.jpg][selling_price]" value="30">
          <input type="hidden" name="product_guest_data[https://cdn.shopclues.com/images1/thumbnails/105563/320/320/149269050-105563159-1585200520.jpg][list_price]" value="44">
          <input type="hidden" id="quantityId" name="product_data[149269050][amount]" value="1" data-iswholesale="0">
          <input type="hidden" id="checkVariant" data-siblingvariant="0" value="">
          <!-- react-text: 155 --><!-- /react-text -->
        </form>
        <form id="buy_formCombo" method="post" action="https://smo.shopclues.com/acart/oneStepCheckout" class="buy-form">
          <input type="hidden" name="cart_service_id" id="cart_service_id" value="1">
        </form>
      </div>
    </div>
    <div class="toast_msg" id="toast_msg" style="display: none;"></div>
    <input type="hidden" id="track_translator" value="" data-inp="">
    <div class="google_translator" id="google_widget_display">
      <p><img src="https://images.shopclues.com/images/ui/lng_txt.png" alt=""></p>
      <a href="javascript:void(0)" class="lng_s eng_s" id="contEng" data-valtag="1"><img src="https://images.shopclues.com/images/ui/lng_eng.png" alt=""></a><a href="javascript:void(0)" class="lng_s" id="contHindi" data-valtag="0"><img src="https://images.shopclues.com/images/ui/lng_hindi.png" alt=""></a></div>
    <div class="coatch_mark" style="display: none;">
      <div class="popup language_chng">
        <p>Change Language</p>
      </div>
    </div>
  </div>
</div>

<div class="tutorial" id="whatsPop">
    <i class="close_icon" onclick="hideWhatsappBuy()">
      <img alt="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDE0IDE0Ij4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlPSIjRkZGIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS13aWR0aD0iMiI+CiAgICAgICAgPHBhdGggZD0iTTEyIDBMMCAxMk0wIDBMMTIgMTIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEgMSkiLz4KICAgIDwvZz4KPC9zdmc+Cg==" />
    </i>
    <img alt="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNiIgaGVpZ2h0PSI1MSIgdmlld0JveD0iMCAwIDM2IDUxIj4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0icHJlZml4X19hIiB4MT0iNTAlIiB4Mj0iNTAlIiB5MT0iMTAwJSIgeTI9IjAlIj4KICAgICAgICAgICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzIwQjAzOCIvPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM2MEQ2NkEiLz4KICAgICAgICA8L2xpbmVhckdyYWRpZW50PgogICAgPC9kZWZzPgogICAgPGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBvcGFjaXR5PSIuNiI+CiAgICAgICAgICAgIDxwYXRoIGZpbGw9IiNFMEUwRTAiIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTI0LjY1NiA0LjIxM0MyMS45NDMgMS40OTggMTguMzM1LjAwMiAxNC40OSAwIDYuNTcgMCAuMTI0IDYuNDQ0LjEyIDE0LjM2NWMtLjAwMSAyLjUzMS42NiA1LjAwMyAxLjkxOCA3LjE4MUwwIDI4Ljk5bDcuNjE4LTEuOTk3YzIuMDk5IDEuMTQ0IDQuNDYyIDEuNzQ4IDYuODY3IDEuNzQ5aC4wMDZjNy45MiAwIDE0LjM2Ni02LjQ0NiAxNC4zNy0xNC4zNjYuMDAxLTMuODM4LTEuNDkyLTcuNDQ4LTQuMjA1LTEwLjE2M3pNMTQuNDkgMjYuMzE1aC0uMDA1Yy0yLjE0MyAwLTQuMjQ1LS41NzYtNi4wNzktMS42NjRsLS40MzYtLjI1OS00LjUyIDEuMTg1IDEuMjA2LTQuNDA2LS4yODQtLjQ1MWMtMS4xOTYtMS45MDEtMS44MjctNC4wOTktMS44MjYtNi4zNTQuMDAyLTYuNTg0IDUuMzYtMTEuOTQgMTEuOTQ4LTExLjk0IDMuMTkuMDAyIDYuMTkgMS4yNDUgOC40NDQgMy41MDIgMi4yNTUgMi4yNTcgMy40OTYgNS4yNTcgMy40OTUgOC40NDctLjAwMiA2LjU4NC01LjM2IDExLjk0LTExLjk0MyAxMS45NHoiLz4KICAgICAgICAgICAgPHBhdGggZmlsbD0idXJsKCNwcmVmaXhfX2EpIiBmaWxsLXJ1bGU9Im5vbnplcm8iIGQ9Ik0uNjYgMjguMTY0bDEuOTQ1LTcuMTA0Yy0xLjItMi4wNzktMS44MzEtNC40MzctMS44My02Ljg1M0MuNzc3IDYuNjQ4IDYuOTI4LjQ5OSAxNC40ODcuNDk5YzMuNjY4LjAwMiA3LjExMSAxLjQzIDkuNyA0LjAyIDIuNTkgMi41OTIgNC4wMTQgNi4wMzYgNC4wMTMgOS42OTktLjAwMyA3LjU1OS02LjE1NSAxMy43MDktMTMuNzEzIDEzLjcwOWgtLjAwNmMtMi4yOTUtLjAwMS00LjU1LS41NzctNi41NTMtMS42NjlMLjY2IDI4LjE2NHoiLz4KICAgICAgICAgICAgPHBhdGggZmlsbD0iI0ZGRiIgZD0iTTEwLjk0IDguMjY2Yy0uMjY2LS41OTEtLjU0Ni0uNjAzLS43OTktLjYxMy0uMjA3LS4wMDktLjQ0NC0uMDA4LS42OC0uMDA4LS4yMzcgMC0uNjIxLjA4OC0uOTQ3LjQ0NC0uMzI1LjM1NS0xLjI0MiAxLjIxMy0xLjI0MiAyLjk2IDAgMS43NDYgMS4yNzIgMy40MzQgMS40NSAzLjY3LjE3Ny4yMzcgMi40NTUgMy45MzUgNi4wNjIgNS4zNTggMi45OTkgMS4xODIgMy42MDkuOTQ3IDQuMjYuODg4LjY1LS4wNiAyLjEtLjg1OSAyLjM5NS0xLjY4Ny4yOTYtLjgyOS4yOTYtMS41NC4yMDctMS42ODgtLjA4OC0uMTQ4LS4zMjUtLjIzNi0uNjgtLjQxNC0uMzU1LS4xNzctMi4xLTEuMDM2LTIuNDI1LTEuMTU1LS4zMjYtLjExOC0uNTYyLS4xNzctLjc5OS4xNzhzLS45MTYgMS4xNTUtMS4xMjMgMS4zOTFjLS4yMDguMjM3LS40MTUuMjY3LS43Ny4wOS0uMzU1LS4xNzktMS40OTgtLjU1My0yLjg1NC0xLjc2Mi0xLjA1NS0uOTQtMS43NjctMi4xMDMtMS45NzQtMi40NTgtLjIwNy0uMzU1LS4wMjMtLjU0Ny4xNTUtLjcyNC4xNi0uMTYuMzU1LS40MTQuNTMzLS42MjIuMTc3LS4yMDcuMjM2LS4zNTUuMzU1LS41OTIuMTE4LS4yMzcuMDU5LS40NDQtLjAzLS42MjEtLjA4OS0uMTc4LS43NzktMS45MzMtMS4wOTQtMi42MzV6Ii8+CiAgICAgICAgICAgIDxwYXRoIGZpbGw9IiNGRkYiIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTI0LjUzOCA0LjE2N0MyMS44NTYgMS40ODMgMTguMjkuMDA0IDE0LjQ5LjAwMyA2LjY2LjAwMy4yODggNi4zNzMuMjg1IDE0LjIwM2MtLjAwMSAyLjUwMi42NTMgNC45NDUgMS44OTYgNy4wOTlMLjE2NiAyOC42Nmw3LjUzLTEuOTc0YzIuMDc1IDEuMTMxIDQuNDEgMS43MjcgNi43ODggMS43MjhoLjAwNmM3LjgyOSAwIDE0LjIwMi02LjM3IDE0LjIwNS0xNC4yLjAwMi0zLjc5NS0xLjQ3NS03LjM2My00LjE1Ny0xMC4wNDd6TTE0LjQ5IDI2LjAxNmgtLjAwNGMtMi4xMi0uMDAxLTQuMTk3LS41Ny02LjAxLTEuNjQ2bC0uNDMxLS4yNTUtNC40NjkgMS4xNzEgMS4xOTMtNC4zNTUtLjI4LS40NDZjLTEuMTgzLTEuODgtMS44MDctNC4wNTItMS44MDYtNi4yODIuMDAzLTYuNTA3IDUuMjk5LTExLjgwMiAxMS44MTItMTEuODAyIDMuMTUzLjAwMiA2LjExNyAxLjIzIDguMzQ3IDMuNDYyIDIuMjI5IDIuMjMgMy40NTYgNS4xOTYgMy40NTUgOC4zNS0uMDAzIDYuNTA4LTUuMyAxMS44MDMtMTEuODA3IDExLjgwM3oiLz4KICAgICAgICA8L2c+CiAgICAgICAgPGcgZmlsbC1ydWxlPSJub256ZXJvIj4KICAgICAgICAgICAgPHBhdGggZmlsbD0iI0ZGRThENiIgZD0iTTIyLjM5NiAxOC4zMzNjMC0xLjM5MSAxLjA3MS0yLjUxOSAyLjM5My0yLjUxOWguMDUzYzEuMzIgMCAyLjM5IDEuMTIzIDIuMzk0IDIuNTEyLjAxIDQuNTQ0LjAwNCA0Ljk5LS4wMDMgMTEuNzc3LS4wMDQgMy44MS0yLjk0IDYuODk3LTYuNTYgNi44OTdoLTcuNzcyYy0yLjM3OCAwLTQuNTcxLTEuMzU2LTUuNzMtMy41NDJMLjI0MSAyMC4zNzVsLjcyNC0uNTljMS41LTEuMzU0IDMuNzU0LTEuMTg3IDUuMDU5LjM3M2wxLjkzOSAyLjMyLjAxMS0xNS45NkM3Ljk3NSA1LjEyNyA5LjA0NiA0IDEwLjM2NyA0aC4wMDFjMS4zMjIgMCAyLjM5NCAxLjEyOCAyLjM5NCAyLjUydjkuNjU5Yy4wMzEtMS4zNjIgMS4wOS0yLjQ1NCAyLjM5MS0yLjQ1NGguMDU2YzEuMzIyIDAgMi4zOTQgMS4xMjggMi4zOTQgMi41MnYuODFjMC0xLjM5MSAxLjA3MS0yLjUxOSAyLjM5NC0yLjUxOWguMDA1YzEuMzIyIDAgMi4zOTQgMS4xMjggMi4zOTQgMi41MnYxLjI3N3oiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDggMTQpIi8+CiAgICAgICAgICAgIDxwYXRoIGZpbGw9IiNGRkYiIHN0cm9rZT0iI0ZGRiIgZD0iTTUuNDMgNi43NzVjLjM0NiAwIC42MjYtLjI3OC42MjYtLjYyMiAwLTIuMzggMS45NDEtNC4zMSA0LjMzNi00LjMxIDIuMzk1IDAgNC4zMzYgMS45MyA0LjMzNiA0LjMxIDAgLjM0NC4yOC42MjIuNjI2LjYyMnMuNjI2LS4yNzguNjI2LS42MjJDMTUuOTggMy4wODYgMTMuNDc4LjYgMTAuMzkyLjYgNy4zMDYuNiA0LjgwNSAzLjA4NiA0LjgwNSA2LjE1M2MwIC4zNDQuMjguNjIyLjYyNS42MjJ6IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4IDE0KSIvPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+Cg==" />
    <h6>1 tap buy via whatsapp<span>New</span></h6>
    <p>Place order in 1 tap of this button and pay later. You can add/update address later.</p>
    <b class="down_arrow"></b>
  </div>

<!-- <div class="whatsapp_buy" id="Small">
  <div class="slider" id="SlideIcon">
    <div class="slider-item">
      <img alt="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0iZmVhdGhlciBmZWF0aGVyLXNob3BwaW5nLWNhcnQiPjxjaXJjbGUgY3g9IjkiIGN5PSIyMSIgcj0iMSI+PC9jaXJjbGU+PGNpcmNsZSBjeD0iMjAiIGN5PSIyMSIgcj0iMSI+PC9jaXJjbGU+PHBhdGggZD0iTTEgMWg0bDIuNjggMTMuMzlhMiAyIDAgMCAwIDIgMS42MWg5LjcyYTIgMiAwIDAgMCAyLTEuNjFMMjMgNkg2Ij48L3BhdGg+PC9zdmc+" />
    </div>
    <div class="slider-item">
      <img alt="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxwYXRoIGZpbGw9IiNGRkYiIGQ9Ik0yMC41MDMgMy40ODdDMTguMjYzIDEuMjQ2IDE1LjIyLS4wMSAxMi4wNSAwIDUuNDY0IDAgLjEwMyA1LjMzNS4xIDExLjg5M2MtLjAwMyAyLjA4OC41NDggNC4xNCAxLjU5NiA1Ljk0NkwwIDI0bDYuMzM1LTEuNjU0YzEuNzUzLjk1IDMuNzE2IDEuNDQ3IDUuNzEgMS40NDdoLjAwNWM2LjU4NiAwIDExLjk0Ny01LjMzNSAxMS45NS0xMS44OTMuMDA4LTMuMTYtMS4yNTItNi4xOS0zLjQ5Ny04LjQxMnpNMTIuMDUgMjEuNzg1aC0uMDA0Yy0xLjc3OCAwLTMuNTIzLS40NzUtNS4wNTUtMS4zNzhsLS4zNjMtLjIxNC0zLjc1OS45ODIgMS4wMDQtMy42NDgtLjIzNy0uMzc1Yy0uOTk0LTEuNTc0LTEuNTItMy4zOTgtMS41MTgtNS4yNiAwLTUuNDQ5IDQuNDU3LTkuODgzIDkuOTM2LTkuODgzIDUuNDczLS4wMSA5LjkxOCA0LjQxOCA5LjkyOSA5Ljg5MS0uMDAzIDUuNDUtNC40NTggOS44ODUtOS45MzMgOS44ODV6bTUuNDQ4LTcuNDAzYy0uMjk4LS4xNDktMS43NjgtLjg2OC0yLjA0LS45NjctLjI3Mi0uMDk5LS40NzMtLjE0OS0uNjcyLjE1LS4xOTguMjk3LS43NzEuOTY0LS45NDUgMS4xNjQtLjE3NC4yMDEtLjM0OC4yMjMtLjY0Ny4wNzQtLjI5OC0uMTQ5LTEuMjYxLS40NjItMi40MDItMS40NzQtLjg4Ny0uNzg4LTEuNDg2LTEuNzYxLTEuNjYtMi4wNTktLjE3NC0uMjk3LS4wMTktLjQ1OC4xMy0uNjA2LjEzNS0uMTMzLjI5OS0uMzQ3LjQ0OC0uNTIuMTUtLjE3NC4yLS4yOTkuMjk5LS40OTcuMDk5LS4xOTguMDUtLjM3Mi0uMDI1LS41Mi0uMDc0LS4xNDgtLjY3Mi0xLjYxMS0uOTItMi4yMDctLjI0My0uNTgtLjQ4OS0uNS0uNjcyLS41MS0uMTc0LS4wMDgtLjM3NS0uMDEtLjU3My0uMDEtLjMwNS4wMDgtLjU5NC4xNDItLjc5Ni4zNzEtLjI3NC4yOTgtMS4wNDUgMS4wMTgtMS4wNDUgMi40OCAwIDEuNDYxIDEuMDcxIDIuODc1IDEuMjIgMy4wNzQuMTQ3LjE5OCAyLjEwNSAzLjIgNS4xIDQuNDg3LjU1Ni4yMzggMS4xMjQuNDQ3IDEuNzAyLjYyNS43MTYuMjI3IDEuMzY2LjE5NSAxLjg4LjExOC41NzQtLjA4NSAxLjc2OS0uNzE5IDIuMDE3LTEuNDEzLjI0OC0uNjk0LjI0OC0xLjI4OS4xNzQtMS40MTMtLjA3NS0uMTIzLS4yNzQtLjE5OC0uNTczLS4zNDd6Ii8+Cjwvc3ZnPgo=" />
    </div>
  </div>
  <div class="cont" id="Cont">
    <img alt="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxwYXRoIGZpbGw9IiNGRkYiIGQ9Ik0yMC41MDMgMy40ODdDMTguMjYzIDEuMjQ2IDE1LjIyLS4wMSAxMi4wNSAwIDUuNDY0IDAgLjEwMyA1LjMzNS4xIDExLjg5M2MtLjAwMyAyLjA4OC41NDggNC4xNCAxLjU5NiA1Ljk0NkwwIDI0bDYuMzM1LTEuNjU0YzEuNzUzLjk1IDMuNzE2IDEuNDQ3IDUuNzEgMS40NDdoLjAwNWM2LjU4NiAwIDExLjk0Ny01LjMzNSAxMS45NS0xMS44OTMuMDA4LTMuMTYtMS4yNTItNi4xOS0zLjQ5Ny04LjQxMnpNMTIuMDUgMjEuNzg1aC0uMDA0Yy0xLjc3OCAwLTMuNTIzLS40NzUtNS4wNTUtMS4zNzhsLS4zNjMtLjIxNC0zLjc1OS45ODIgMS4wMDQtMy42NDgtLjIzNy0uMzc1Yy0uOTk0LTEuNTc0LTEuNTItMy4zOTgtMS41MTgtNS4yNiAwLTUuNDQ5IDQuNDU3LTkuODgzIDkuOTM2LTkuODgzIDUuNDczLS4wMSA5LjkxOCA0LjQxOCA5LjkyOSA5Ljg5MS0uMDAzIDUuNDUtNC40NTggOS44ODUtOS45MzMgOS44ODV6bTUuNDQ4LTcuNDAzYy0uMjk4LS4xNDktMS43NjgtLjg2OC0yLjA0LS45NjctLjI3Mi0uMDk5LS40NzMtLjE0OS0uNjcyLjE1LS4xOTguMjk3LS43NzEuOTY0LS45NDUgMS4xNjQtLjE3NC4yMDEtLjM0OC4yMjMtLjY0Ny4wNzQtLjI5OC0uMTQ5LTEuMjYxLS40NjItMi40MDItMS40NzQtLjg4Ny0uNzg4LTEuNDg2LTEuNzYxLTEuNjYtMi4wNTktLjE3NC0uMjk3LS4wMTktLjQ1OC4xMy0uNjA2LjEzNS0uMTMzLjI5OS0uMzQ3LjQ0OC0uNTIuMTUtLjE3NC4yLS4yOTkuMjk5LS40OTcuMDk5LS4xOTguMDUtLjM3Mi0uMDI1LS41Mi0uMDc0LS4xNDgtLjY3Mi0xLjYxMS0uOTItMi4yMDctLjI0My0uNTgtLjQ4OS0uNS0uNjcyLS41MS0uMTc0LS4wMDgtLjM3NS0uMDEtLjU3My0uMDEtLjMwNS4wMDgtLjU5NC4xNDItLjc5Ni4zNzEtLjI3NC4yOTgtMS4wNDUgMS4wMTgtMS4wNDUgMi40OCAwIDEuNDYxIDEuMDcxIDIuODc1IDEuMjIgMy4wNzQuMTQ3LjE5OCAyLjEwNSAzLjIgNS4xIDQuNDg3LjU1Ni4yMzggMS4xMjQuNDQ3IDEuNzAyLjYyNS43MTYuMjI3IDEuMzY2LjE5NSAxLjg4LjExOC41NzQtLjA4NSAxLjc2OS0uNzE5IDIuMDE3LTEuNDEzLjI0OC0uNjk0LjI0OC0xLjI4OS4xNzQtMS40MTMtLjA3NS0uMTIzLS4yNzQtLjE5OC0uNTczLS4zNDd6Ii8+Cjwvc3ZnPgo=" />
    <span>Buy on Whatsapp</span>
  </div>
</div> -->

<div class="prime_float_btn">
  <a href="https://www.qoo10.in/gmkt.inc/special/special.aspx?sid=83037&amp;jaehuid=2026486435" target="_blank">
    <img src="https://cdn.shopclues.com/images/banners/25Oct_Qoo10_MameballFloating_Icon_1_VR.gif">
  </a>
</div>

<script>
window.onload = function() {

  /*Circle Icon Animation*/
  var element = document.getElementById("SlideIcon");
  var element1 = document.getElementById("Small");

  setTimeout(function(){ element1.classList.add("small"); }, 500);
  setTimeout(function(){ element1.classList.add("small1"); }, 4500);
  setTimeout(function(){ element.classList.add("slider"); }, 5500);

  /*Icons Slider Animation*/
  var slides = document.getElementsByClassName('slider-item'),
      addActive = function(slide) {slide.classList.add('active')},
      removeActive = function(slide) {slide.classList.remove('active')};
  addActive(slides[0]);
  
  setInterval(function (){
    for (var i = 0; i < slides.length; i++){
      if (i + 1 == slides.length) {
        addActive(slides[0]);
        slides[0].style.zIndex = 100;
        setTimeout(removeActive, 350, slides[i]);
        break;
      }
      if (slides[i].classList.contains('active')) { 
        slides[i].removeAttribute('style');
        setTimeout(removeActive, 350, slides[i]);
        addActive(slides[i + 1]);
        break;
      }
    } 
  }, 3000);
}


var element2 = document.getElementById("whatsPop");
setTimeout(function(){ element2.classList.add("show"); }, 1500);
function hideWhatsappBuy() {
  element2.classList.add("hide");
}
</script>
<script type="text/javascript" src="eServices/js/jquery-1.9.1.min.js"></script> 
<script type="text/javascript" src="eServices/js/ui_developer_m.js"></script> 
</body>
</html>