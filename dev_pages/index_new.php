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

<div class="popup_box" id="myModal">
    <div class="model_box">
        <div class="model_box_child login" id="login">
            <div class="loginpopup">
                <div class="loginImg">
                    <img src="../assets/images/loginBg.jpg" alt="">
                </div>
                <div class="loginInfo">
                    <h4>Login / Register <span class="close_model"><i class="fa-solid fa-xmark"></i></span></h4>
                    <div class="loginScreen">
                        <i>
                            <img alt="" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQwMy42OCA0MDMuNjgiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQwMy42OCA0MDMuNjg7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBzdHlsZT0iZmlsbDojQ0NDQ0NDOyIgZD0iTTM4MCwyMjkuMDlIMTAxLjY4aC03OEMxMC42LDIyOS4wOSwwLDIzOS42OSwwLDI1Mi43N3Y1NC42NGMwLDEzLjA4LDEwLjYsMjMuNjgsMjMuNjgsMjMuNjhoNzgNCgkJCUgzODBjMTMuMDgsMCwyMy42OC0xMC42LDIzLjY4LTIzLjY4di01NC42NEM0MDMuNjgsMjM5LjY5LDM5My4wOCwyMjkuMDksMzgwLDIyOS4wOXoiLz4NCgkJPHBhdGggc3R5bGU9ImZpbGw6I0NDQ0NDQzsiIGQ9Ik0zODAsODYuMDlIMTAxLjY4aC03OEMxMC42LDg2LjA5LDAsOTYuNjksMCwxMDkuNzd2NTQuNjRjMCwxMy4wOCwxMC42LDIzLjY4LDIzLjY4LDIzLjY4aDc4SDM4MA0KCQkJYzEzLjA4LDAsMjMuNjgtMTAuNiwyMy42OC0yMy42OHYtNTQuNjRDNDAzLjY4LDk2LjY5LDM5My4wOCw4Ni4wOSwzODAsODYuMDl6Ii8+DQoJPC9nPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiNGOUExOEE7IiBkPSJNMTAxLjY4LDIxNS41OXYxMDJoLTc4QzEwLjYsMzE3LjU5LDAsMzA2Ljk5LDAsMjkzLjkxdi01NC42NGMwLTEzLjA4LDEwLjYtMjMuNjgsMjMuNjgtMjMuNjgNCgkJSDEwMS42OHoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojODhDNUZDOyIgZD0iTTQwMy42OCwyMzkuMjd2NTQuNjRjMCwxMy4wOC0xMC42LDIzLjY4LTIzLjY4LDIzLjY4SDEwMS42OHYtMTAySDM4MA0KCQlDMzkzLjA4LDIxNS41OSw0MDMuNjgsMjI2LjE5LDQwMy42OCwyMzkuMjd6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6Izg4QzVGQzsiIGQ9Ik00MDMuNjgsOTYuMjd2NTQuNjRjMCwxMy4wOC0xMC42LDIzLjY4LTIzLjY4LDIzLjY4SDEwMS42OHYtMTAySDM4MA0KCQlDMzkzLjA4LDcyLjU5LDQwMy42OCw4My4xOSw0MDMuNjgsOTYuMjd6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6I0Y5QTE4QTsiIGQ9Ik0xMDEuNjgsNzIuNTl2MTAyaC03OEMxMC42LDE3NC41OSwwLDE2My45OSwwLDE1MC45MVY5Ni4yN2MwLTEzLjA4LDEwLjYtMjMuNjgsMjMuNjgtMjMuNjhIMTAxLjY4eg0KCQkiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTcwLjg5NSwxNTUuMDkxSDMyLjQ2M3YtNi4xMzNjMC0xMC41OTYsOC42Mi0xOS4yMTYsMTkuMjE2LTE5LjIxNnMxOS4yMTYsOC42MiwxOS4yMTYsMTkuMjE2DQoJCUM3MC44OTUsMTQ4Ljk1OCw3MC44OTUsMTU1LjA5MSw3MC44OTUsMTU1LjA5MXoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTUxLjY3OSwxMzMuMDA4Yy0xMC41OTYsMC0xOS4yMTYtOC42Mi0xOS4yMTYtMTkuMjE2czguNjItMTkuMjE2LDE5LjIxNi0xOS4yMTYNCgkJczE5LjIxNiw4LjYyLDE5LjIxNiwxOS4yMTZTNjIuMjc1LDEzMy4wMDgsNTEuNjc5LDEzMy4wMDh6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0xNTUuNjc4LDI4MC40MThjLTcuNjI0LDAtMTMuODI2LTYuMjAyLTEzLjgyNi0xMy44MjZzNi4yMDItMTMuODI2LDEzLjgyNi0xMy44MjYNCgkJczEzLjgyNiw2LjIwMiwxMy44MjYsMTMuODI2UzE2My4zMDIsMjgwLjQxOCwxNTUuNjc4LDI4MC40MTh6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik00Ny4xODksMjYzLjY3OEgzNS43Mzh2LTEzLjc0MmMwLTkuODkzLDguMDQ4LTE3Ljk0MSwxNy45NDEtMTcuOTQxczE3Ljk0MSw4LjA0OCwxNy45NDEsMTcuOTQxDQoJCUg2MC4xNjhjMC0zLjU3OC0yLjkxMS02LjQ4OS02LjQ4OS02LjQ4OXMtNi40ODksMi45MTEtNi40ODksNi40ODl2MTMuNzQySDQ3LjE4OXoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTcxLjYyLDI5NS40NjNIMzUuNzM4di0zMS43ODVINzEuNjJWMjk1LjQ2M3oiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTI4My42NzksMjgwLjQxOGMtNy42MjQsMC0xMy44MjYtNi4yMDItMTMuODI2LTEzLjgyNnM2LjIwMy0xMy44MjYsMTMuODI2LTEzLjgyNg0KCQlzMTMuODI2LDYuMjAyLDEzLjgyNiwxMy44MjZTMjkxLjMwMywyODAuNDE4LDI4My42NzksMjgwLjQxOHoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTM0Ny42NzksMTM3LjQxOGMtNy42MjQsMC0xMy44MjYtNi4yMDItMTMuODI2LTEzLjgyNnM2LjIwMi0xMy44MjYsMTMuODI2LTEzLjgyNg0KCQlzMTMuODI2LDYuMjAyLDEzLjgyNiwxMy44MjZDMzYxLjUwNSwxMzEuMjE2LDM1NS4zMDMsMTM3LjQxOCwzNDcuNjc5LDEzNy40MTh6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0yMTkuNjc5LDI4MC40MThjLTcuNjI0LDAtMTMuODI2LTYuMjAyLTEzLjgyNi0xMy44MjZzNi4yMDItMTMuODI2LDEzLjgyNi0xMy44MjYNCgkJczEzLjgyNiw2LjIwMiwxMy44MjYsMTMuODI2UzIyNy4zMDMsMjgwLjQxOCwyMTkuNjc5LDI4MC40MTh6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0xNTUuNjc4LDEzNy40MThjLTcuNjI0LDAtMTMuODI2LTYuMjAyLTEzLjgyNi0xMy44MjZzNi4yMDItMTMuODI2LDEzLjgyNi0xMy44MjYNCgkJczEzLjgyNiw2LjIwMiwxMy44MjYsMTMuODI2QzE2OS41MDQsMTMxLjIxNiwxNjMuMzAyLDEzNy40MTgsMTU1LjY3OCwxMzcuNDE4eiIvPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMjgzLjY3OSwxMzcuNDE4Yy03LjYyNCwwLTEzLjgyNi02LjIwMi0xMy44MjYtMTMuODI2czYuMjAzLTEzLjgyNiwxMy44MjYtMTMuODI2DQoJCXMxMy44MjYsNi4yMDIsMTMuODI2LDEzLjgyNkMyOTcuNTA1LDEzMS4yMTYsMjkxLjMwMywxMzcuNDE4LDI4My42NzksMTM3LjQxOHoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTIxOS42NzksMTM3LjQxOGMtNy42MjQsMC0xMy44MjYtNi4yMDItMTMuODI2LTEzLjgyNnM2LjIwMi0xMy44MjYsMTMuODI2LTEzLjgyNg0KCQlzMTMuODI2LDYuMjAyLDEzLjgyNiwxMy44MjZDMjMzLjUwNSwxMzEuMjE2LDIyNy4zMDMsMTM3LjQxOCwyMTkuNjc5LDEzNy40MTh6Ii8+DQoJPGc+DQoJCTxwYXRoIHN0eWxlPSJvcGFjaXR5OjAuMjM7ZmlsbDojRjJGMkYyO2VuYWJsZS1iYWNrZ3JvdW5kOm5ldyAgICA7IiBkPSJNNDAzLjY4LDk2LjI3djU0LjY0YzAsMTMuMDgtMTAuNiwyMy42OC0yMy42OCwyMy42OA0KCQkJSDI2MC4yN2w1My4wOC0xMDJIMzgwQzM5My4wOCw3Mi41OSw0MDMuNjgsODMuMTksNDAzLjY4LDk2LjI3eiIvPg0KCQk8cGF0aCBzdHlsZT0ib3BhY2l0eTowLjIzO2ZpbGw6I0YyRjJGMjtlbmFibGUtYmFja2dyb3VuZDpuZXcgICAgOyIgZD0iTTQwMy42OCwyMzkuMjd2NTQuNjRjMCwxMy4wOC0xMC42LDIzLjY4LTIzLjY4LDIzLjY4DQoJCQlIMTg1Ljg2bDUzLjA4LTEwMkgzODBDMzkzLjA4LDIxNS41OSw0MDMuNjgsMjI2LjE5LDQwMy42OCwyMzkuMjd6Ii8+DQoJCTxwYXRoIHN0eWxlPSJvcGFjaXR5OjAuMjM7ZmlsbDojRjJGMkYyO2VuYWJsZS1iYWNrZ3JvdW5kOm5ldyAgICA7IiBkPSJNMjMuNjgsMjE1LjU5aDE2Ljk1bC0yMC43OSwzOS45NUwwLDI5My42N3YtNTQuNA0KCQkJQzAsMjI2LjE5LDEwLjYsMjE1LjU5LDIzLjY4LDIxNS41OXoiLz4NCgkJPHBhdGggc3R5bGU9Im9wYWNpdHk6MC4yMztmaWxsOiNGMkYyRjI7ZW5hYmxlLWJhY2tncm91bmQ6bmV3ICAgIDsiIGQ9Ik0xMTUuMDQsNzIuNTlsLTEzLjM2LDI1LjY4bC03LjcyLDE0LjgzbC0xMS44MywyMi43NA0KCQkJbC0yMC4xNywzOC43NUgyMy42OEMxMC42LDE3NC41OSwwLDE2My45OSwwLDE1MC45MVY5Ni4yN2MwLTEzLjA4LDEwLjYtMjMuNjgsMjMuNjgtMjMuNjhIMTE1LjA0eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
                        </i>
                        <input type="text" placeholder="Enter Your Phone Number">
                        <input type="submit" value="Send OTP">
                    </div>
                    <div class="loginWithOther">
                        <p>Or Continue with Other</p>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" class="gmail">
                                    <i class="fa-solid fa-envelope"></i>
                                    Gmail
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="facebook">
                                    <i class="fa-brands fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                        <a href="javascript:void(0);" class="open_model" data-target="login">
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
<script src="../assets/js/ui_developer.js"></script>
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