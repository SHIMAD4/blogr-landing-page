<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-32x32.png">
    <title>Blogr</title>
    <?php wp_head(); ?>
  </head>

  <style>
    .phone::after {
      background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-pattern-circles.svg);
    }
  </style>
  <body>

    <header class="header">
      <div class="container header__inner">
        <div class="header__left js-header__left">
          <a href="/" class="logo header__logo"><img src="<?php echo $GLOBALS['blogr']['logo'] ?>" alt="logo"></a>

          <div class="dropdown header__item js-dropdown">
            <a class="header__item-button js-dropdown-trigger">
              Product
              <img class="header__item-icon js_drop--icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-arrow-light.svg" alt="icon-arrow-light">
            </a>
            <div class="dropdown__menu js-dropdown-menu">
              <a class="dropdown__item">
                Overview
              </a>
              <a class="dropdown__item">
                Pricing
              </a>
              <a class="dropdown__item">
                Marketplace
              </a>
              <a class="dropdown__item">
                Features
              </a>
              <a class="dropdown__item">
                Integrations
              </a>
            </div>
          </div>

          <div class="dropdown header__item js-dropdown">
            <a class="header__item-button js-dropdown-trigger" data-path="one">
              Company
              <img class="header__item-icon js_drop--icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-arrow-light.svg" alt="icon-arrow-light">
            </a>
            <div class="dropdown__menu js-dropdown-menu" data-target="two" style="margin-left: 5px;">
              <a class="dropdown__item">
                About
              </a>
              <a class="dropdown__item">
                Team
              </a>
              <a class="dropdown__item">
                Blog
              </a>
              <a class="dropdown__item">
                Careers
              </a>
            </div>
          </div>

          <div class="dropdown header__item js-dropdown">
            <a class="header__item-button js-dropdown-trigger">
              Connect
              <img class="header__item-icon js_drop--icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-arrow-light.svg" alt="icon-arrow-light">
            </a>
            <div class="dropdown__menu js-dropdown-menu">
              <a class="dropdown__item">
                Contact
              </a>
              <a class="dropdown__item">
                Newsletter
              </a>
              <a class="dropdown__item">
                LinkedIn
              </a>
            </div>
          </div>
        </div>

        <div class="popup js-popup">
          <div class="popup__inner">
            <div class="popup__dropdown js-popup__dropdown">
              <a class="popup__item-button js-popup__item-button" data-path="one">
                Product
                <img class="popup__item-icon js_popup-drop--icon" data-img="one" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-arrow-dark.svg" alt="icon-arrow-light">
              </a>
              <div class="popup__menu js-popup__dropdown-menu" data-menu="one">
                <a class="popup__item">
                  Overview
                </a>
                <a class="popup__item">
                  Pricing
                </a><br>
                <a class="popup__item">
                  Marketplace
                </a><br>
                <a class="popup__item">
                  Features
                </a><br>
                <a class="popup__item">
                  Integrations
                </a>
              </div>
            </div>
  
            <div class="popup__dropdown js-popup__dropdown">
              <a class="popup__item-button js-popup__item-button" data-path="two">
                Company
                <img class="popup__item-icon js_popup-drop--icon" data-img="two" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-arrow-dark.svg" alt="icon-arrow-light">
              </a>
              <div class="popup__menu js-popup__dropdown-menu" data-menu="two">
                <a class="popup__item">
                  About
                </a><br>
                <a class="popup__item">
                  Team
                </a><br>
                <a class="popup__item">
                  Blog
                </a><br>
                <a class="popup__item">
                  Careers
                </a>
              </div>
            </div>
  
            <div class="popup__dropdown js-popup__dropdown">
              <a class="popup__item-button js-popup__item-button" data-path="three">
                Connect
                <img class="popup__item-icon js_popup-drop--icon" data-img="three" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-arrow-dark.svg" alt="icon-arrow-light">
              </a>
              <div class="popup__menu js-popup__dropdown-menu" data-menu="three">
                <a class="popup__item">
                  Contact
                </a><br>
                <a class="popup__item">
                  Newsletter
                </a><br>
                <a class="popup__item">
                  LinkedIn
                </a>
              </div>
            </div>
            <hr>
            
            <button class="btn empty">Login</button>
            <button class="btn btn_intro">Sign Up</button>
          </div>
        </div>

        <div class="header__right">
          <button class="btn empty">Login</button>
          <button class="btn btn_intro">Sign Up</button>

          <img class="humburger js-humburger" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-hamburger.svg" alt="icon-hamburger">
          <img class="close js-close" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-close.svg" alt="icon-close">
        </div>
      </div>
    </header>