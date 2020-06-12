<!DOCTYPE html>
<html class="u-outer-space-v2" data-outer-spaces="u-outer-space-v2" lang="en">

<head>
  <!-- Title -->
  <title>#wirfuervielfalt</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="https://layout.wirfuervielfalt.de/favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/animate.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/dzsparallaxer/dzsparallaxer.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/hs-bg-video/hs-bg-video.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/css/unify-core.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/css/unify-components.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/css/unify-globals.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/css/custom.css">
</head>

<body class="g-layout-boxed g-bgi-v12">
  <main>



	<!-- Header Incl -->
	<?= $pages->get("id=1085")->render(['pagefor'=>$page->id]); ?>
	<!-- Header Incl End -->
   

   <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: &quot;reverse&quot;, settings_mode_oneelement_max_offset: &quot;150&quot;}">
      <div class="divimage dzsparallaxer--target w-100 g-bg-pos-bottom-center" style="height: 120%; background-image: url(<?= $page->intro_bild->httpUrl; ?>); transform: translate3d(0px, -87.4841px, 0px);"></div>

      <div class="container g-py-200">
        <div class="row">
          <div class="col-md-6">
            <h3 class="g-color-black g-font-weight-300 g-font-size-40 g-line-height-1_2 mb-4">Wir für Vielfalt
              </h3>
            <span class="d-block g-color-black-opacity-0_8 g-font-size-16 mb-5"></span>
            <a class="js-fancybox u-link-v5 g-color-black" href="javascript:;" data-src="<?= $page->intro_videolink; ?>" data-speed="350" data-caption="Single Item">
              <span class="align-middle u-icon-v3 u-block-hover--scale g-bg-white g-color-black g-color-primary--hover g-rounded-50x g-cursor-pointer mr-2">
                  <i class="g-font-size-18 g-pos-rel g-left-2 fa fa-play"></i>
                </span>
              1:59 minutes
            </a>
          </div>
        </div>
      </div>
    </section>
	<?php
	/*
    <!-- Promo Block -->
    <section class="u-bg-overlay g-bg-img-hero g-bg-bluegray-opacity-0_3--after" style="background-image: url(https://layout.wirfuervielfalt.de/assets/img-temp/1920x800/img1.jpg);">
      <div class="container u-bg-overlay__inner text-center g-pt-150 g-pb-70">
        <div class="g-mb-100">
          <span class="d-block g-color-white g-font-size-20 text-uppercase g-letter-spacing-5 mb-4">The Exhibition of</span>
          <h1 class="g-color-white g-font-weight-700 g-font-size-20 g-font-size-50--md text-uppercase g-line-height-1_2 g-letter-spacing-10 mb-4">Creative Portfolios</h1>
          <span class="d-block lead g-color-white g-letter-spacing-2">Examples of Our Branding Projects</span>
        </div>

        <div class="g-pos-abs g-left-0 g-right-0 g-z-index-2 g-bottom-30">
          <a class="js-go-to btn u-btn-outline-white g-color-white g-bg-white-opacity-0_1 g-color-black--hover g-bg-white--hover g-font-weight-600 text-uppercase g-rounded-50 g-px-30 g-py-11" href="#" data-target="#content">
            <i class="fa fa-angle-down"></i>
          </a>
        </div>
      </div>
    </section>
    <!-- End Promo Block -->
*/
	?>
	
    <!-- Testimonials -->
    <section id="content" class="g-bg-secondary">
      <div class="container g-py-100">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="text-center">
              <span class="g-color-gray-dark-v2 g-font-size-90 g-pos-abs g-top-minus-40">
                  &#8220;
                </span>
            </div>
			
            <div class="js-carousel text-center g-pt-60" data-infinite="true" data-autoplay="true" data-fade="true" data-speed="5000">
			<?php
				foreach($page->intro_testimonial as $testimonial) {
			?>
              <div class="js-slide">
                <blockquote class="lead g-color-black g-font-size-22 g-line-height-2 mb-4"><?= $testimonial->intro_testimonial_text ?></blockquote>
                <span class="d-block g-color-black g-font-size-17 mb-4"><?= $testimonial->intro_testimonial_from ?></span>
                <img class="d-inline-block g-width-60 g-height-60 g-brd-around g-brd-3 g-brd-white rounded-circle" src="https://layout.wirfuervielfalt.de/assets/img-temp/100x100/img4.jpg" alt="Image Description">
              </div>
<?php
				}
				/*
			  ?>
              <div class="js-slide">
                <blockquote class="lead g-color-black g-font-size-22 g-line-height-2 mb-4">Hi there purchased a couple of days ago and the site looks great, big thanks to the htmlstream guys, they gave me some great help with some fiddly setup issues.</blockquote>
                <span class="d-block g-color-black g-font-size-17 mb-4">Sara Anderson, Developer</span>
                <img class="d-inline-block g-width-60 g-height-60 g-brd-around g-brd-3 g-brd-white rounded-circle" src="https://layout.wirfuervielfalt.de/assets/img-temp/100x100/img5.jpg" alt="Image Description">
              </div>
			  */
			  
			  ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials -->
	

    <!-- Cube Portfolio Blocks -->
    <div class="dzsparallaxer auto-init height-is-based-on-content g-bg-white" data-options='{direction: "reverse", animation_duration: "200"}'>
      <div class="dzsparallaxer--target" style="width: 100%; height: 130%;">
      </div>

      <div class="container g-py-100">
        <div class="cbp" data-animation="quicksand" data-x-gap="30" data-y-gap="30" data-media-queries='[
                 {"width": 1500, "cols": 2},
                 {"width": 1100, "cols": 2},
                 {"width": 800, "cols": 2},
                 {"width": 480, "cols": 2},
                 {"width": 300, "cols": 1}
               ]'>
          <!-- Cube Portfolio Blocks - Item -->
		  <?php
		  $filters = $pages->find("parent=1026,template=filter_kriterie");
		  foreach($filters as $filter) {
		  ?>
          <div class="cbp-item" data-parallaxanimation='[{property: "transform", value:" translate3d(0,px,0)", initial:"-100", mid:"0", final:"100"}]'>
            <div class="u-block-hover g-parent">
              <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="<?= $filter->images->first ? $filter->images->first->httpUrl : "https://layout.wirfuervielfalt.de/assets/img-temp/600x450/img2.jpg"; ?>" alt="Image description">
              <div class="d-flex w-100 u-block-hover__additional--fade u-block-hover__additional--fade-in h-100 g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                  <li class="list-inline-item">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="<?= $pages->get("id=1021")->httpUrl; ?>">
                      <i class="icon-communication-095 u-line-icon-pro"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/600x450/img2.jpg">
                      <i class="icon-communication-017 u-line-icon-pro"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center g-pa-25">
              <h3 class="h4 g-color-black mb-1"><?= $filter->title; ?></h3>
              <p class="g-color-gray-dark-v4 mb-0"></p>
            </div>
          </div>
          <!-- End Cube Portfolio Blocks - Item -->
		  <?php
		  }
		  /*
          <!-- Cube Portfolio Blocks - Item -->
          <div class="cbp-item" data-parallaxanimation='[{property: "transform", value:" translate3d(0,px,0)", initial:"80", mid:"0", final:"-40"}]'>
            <div class="u-block-hover g-parent">
              <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/600x450/img3.jpg" alt="Image description">
              <div class="d-flex w-100 u-block-hover__additional--fade u-block-hover__additional--fade-in h-100 g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                  <li class="list-inline-item">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                      <i class="icon-communication-095 u-line-icon-pro"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/600x450/img3.jpg">
                      <i class="icon-communication-017 u-line-icon-pro"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center g-pa-25">
              <h3 class="h4 g-color-black mb-1">Development</h3>
              <p class="g-color-gray-dark-v4 mb-0">Design</p>
            </div>
          </div>
          <!-- End Cube Portfolio Blocks - Item -->

          <!-- Cube Portfolio Blocks - Item -->
          <div class="cbp-item" data-parallaxanimation='[{property: "transform", value:" translate3d(0,px,0)", initial:"-100", mid:"0", final:"100"}]'>
            <div class="u-block-hover g-parent">
              <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/600x450/img4.jpg" alt="Image description">
              <div class="d-flex w-100 u-block-hover__additional--fade u-block-hover__additional--fade-in h-100 g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                  <li class="list-inline-item">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                      <i class="icon-communication-095 u-line-icon-pro"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/600x450/img4.jpg">
                      <i class="icon-communication-017 u-line-icon-pro"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center g-pa-25">
              <h3 class="h4 g-color-black mb-1">Project planner</h3>
              <p class="g-color-gray-dark-v4 mb-0">Graphic, Identity</p>
            </div>
          </div>
          <!-- End Cube Portfolio Blocks - Item -->

          <!-- Cube Portfolio Blocks - Item -->
          <div class="cbp-item" data-parallaxanimation='[{property: "transform", value:" translate3d(0,px,0)", initial:"80", mid:"0", final:"-40"}]'>
            <div class="u-block-hover g-parent">
              <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/600x650/img1.jpg" alt="Image description">
              <div class="d-flex w-100 u-block-hover__additional--fade u-block-hover__additional--fade-in h-100 g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                  <li class="list-inline-item">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                      <i class="icon-communication-095 u-line-icon-pro"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/600x650/img1.jpg">
                      <i class="icon-communication-017 u-line-icon-pro"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center g-pa-25">
              <h3 class="h4 g-color-black mb-1">Design</h3>
              <p class="g-color-gray-dark-v4 mb-0">Graphic</p>
            </div>
          </div>
          <!-- End Cube Portfolio Blocks - Item -->

          <!-- Cube Portfolio Blocks - Item -->
          <div class="cbp-item" data-parallaxanimation='[{property: "transform", value:" translate3d(0,px,0)", initial:"-100", mid:"0", final:"100"}]'>
            <div class="u-block-hover g-parent">
              <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/600x450/img5.jpg" alt="Image description">
              <div class="d-flex w-100 u-block-hover__additional--fade u-block-hover__additional--fade-in h-100 g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                  <li class="list-inline-item">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                      <i class="icon-communication-095 u-line-icon-pro"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/600x450/img5.jpg">
                      <i class="icon-communication-017 u-line-icon-pro"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center g-pa-25">
              <h3 class="h4 g-color-black mb-1">Creative agency</h3>
              <p class="g-color-gray-dark-v4 mb-0">Identity</p>
            </div>
          </div>
          <!-- End Cube Portfolio Blocks - Item -->

          <!-- Cube Portfolio Blocks - Item -->
          <div class="cbp-item" data-parallaxanimation='[{property: "transform", value:" translate3d(0,px,0)", initial:"80", mid:"0", final:"-40"}]'>
            <div class="u-block-hover g-parent">
              <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/600x300/img1.jpg" alt="Image description">
              <div class="d-flex w-100 u-block-hover__additional--fade u-block-hover__additional--fade-in h-100 g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                  <li class="list-inline-item">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                      <i class="icon-communication-095 u-line-icon-pro"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/600x300/img1.jpg">
                      <i class="icon-communication-017 u-line-icon-pro"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center g-pa-25">
              <h3 class="h4 g-color-black mb-1">Production</h3>
              <p class="g-color-gray-dark-v4 mb-0">Graphic</p>
            </div>
          </div>
          <!-- End Cube Portfolio Blocks - Item -->
		  */
		  ?>
        </div>
      </div>
    </div>
    <!-- End Cube Portfolio Blocks -->
<?php
/*
    <!-- Video Block -->
    <section class="container-fluid px-0">
      <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall g-bg-cover g-bg-black-opacity-0_6--after" data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
        <!-- Promo Block - Parallax Video -->
		<?php
		/*
        <div class="dzsparallaxer--target" style="width: 100%; height: 200%;" data-forcewidth_ratio="1.77">
          <div class="js-bg-video g-pos-abs w-100 h-100" data-hs-bgv-type="vimeo" data-hs-bgv-id="167434033" data-hs-bgv-loop="1"></div>
        </div>
		
		?>
        <!-- End Promo Block - Parallax Video -->

        <div class="text-center g-pos-rel g-z-index-1 g-px-50 g-py-200">
          <a class="js-fancybox d-block mb-5" href="javascript:;" data-src="<?= $page->intro_videolink; ?>" data-speed="350" data-caption="Single Image">
            <span class="u-icon-v3 u-icon-size--lg g-bg-white g-color-black g-color-primary--hover g-font-size-20 g-rounded-50x g-cursor-pointer">
                <i class="g-pos-rel g-left-2 fa fa-play"></i>
              </span>
          </a>
          <span class="d-block g-color-white g-font-size-20 text-uppercase g-letter-spacing-5"></span>
        </div>
      </div>
    </section>
    <!-- End Video Block -->
	*/
	?>

    <!-- Cube Portfolio Blocks -->
    <section class="container g-py-100">
      <div class="g-mb-50">
        <div class="d-flex justify-content-start g-brd-bottom g-brd-gray-light-v4 pb-5">
          <div class="d-block">
            <h2 class="h1 g-color-black">Work in progress</h2>
            <span class="d-block g-font-weight-300 g-font-size-22 mr-4 g-mb-6">See our latest News &amp; Works on</span>
          </div>

          <!-- Social Icons -->
          <ul class="list-inline align-self-end mb-0">
            <li class="list-inline-item g-mx-2">
              <a class="u-icon-v1 u-icon-slide-up--hover g-color-red g-bg-red-opacity-0_1 g-color-red--hover rounded-circle" href="#">
                <i class="g-font-size-15 g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                <i class="g-font-size-15 g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item g-mx-2">
              <a class="u-icon-v1 u-icon-slide-up--hover g-color-teal g-bg-teal-opacity-0_1 g-color-teal--hover rounded-circle" href="#">
                <i class="g-font-size-15 g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                <i class="g-font-size-15 g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item g-mx-2">
              <a class="u-icon-v1 u-icon-slide-up--hover g-color-cyan g-bg-cyan-opacity-0_1 g-color-cyan--hover rounded-circle" href="#">
                <i class="g-font-size-15 g-line-height-1 u-icon__elem-regular fa fa-google-plus"></i>
                <i class="g-font-size-15 g-line-height-0_8 u-icon__elem-hover fa fa-google-plus"></i>
              </a>
            </li>
            <li class="list-inline-item g-mx-2">
              <a class="u-icon-v1 u-icon-slide-up--hover g-color-purple g-bg-purple-opacity-0_1 g-color-purple--hover rounded-circle" href="#">
                <i class="g-font-size-15 g-line-height-1 u-icon__elem-regular fa fa-linkedin"></i>
                <i class="g-font-size-15 g-line-height-0_8 u-icon__elem-hover fa fa-linkedin"></i>
              </a>
            </li>
          </ul>
          <!-- End Social Icons -->
        </div>
      </div>

      <!-- Cube Portfolio Blocks - Filter -->
      <ul id="filterControls1" class="d-block list-inline g-mb-50">
        <li class="list-inline-item cbp-filter-item g-color-black g-color-gray-dark-v5--active g-font-weight-600 g-font-size-13 text-uppercase pr-2 mb-2" role="button" data-filter="*">
          Show All
        </li>
		<?php
		  $filters = $pages->find("parent=1026,template=filter_kriterie");
		  foreach($filters as $filter) {
			  ?>
			    <li class="list-inline-item cbp-filter-item g-color-black g-color-primary--hover g-color-gray-dark-v5--active g-font-weight-600 g-font-size-13 text-uppercase px-2 mb-2" role="button" data-filter=".fil-<?= $filter->id; ?>">
				  <?= $filter->title; ?>
				</li>
			  <?php
		  }
		  ?>
      </ul>
      <!-- End Cube Portfolio Blocks - Filter -->

      <!-- Cube Portfolio Blocks - Content -->
      <div class="cbp" data-controls="#filterControls1" data-animation="quicksand" data-x-gap="30" data-y-gap="30" data-media-queries='[{"width": 1500, "cols": 3}, {"width": 1100, "cols": 3}, {"width": 800, "cols": 3}, {"width": 480, "cols": 2}, {"width": 300, "cols": 1}]'>
        <?php
			$pa = $pages->find("template=angebot");
		 // $filters = $pages->find("parent=1026,template=filter_kriterie");
		  foreach($pa as $ppage) {
			$filtercss = "";
			$filters = $pages->find("parent=1025,template=filter_bezeichnung");
			foreach($filters as $filter) {
					$r = $ppage->get($filter->filter_id);
					
					foreach($r as $x) {
					//	echo $x->id . " -> " . $x->title;
						$filtercss .= "fil-" . $x->id . " ";
					}
			}
			 
		  ?>
		<!-- Cube Portfolio Blocks - Item -->
        <div id="shortcode" class="cbp-item <?= $filtercss; ?>">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="<?= $ppage->angebot_bilder->first ? $ppage->angebot_bilder->first->httpUrl : "https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img8.jpg"; ?>" alt="Image description">
            <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
              <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                <li class="list-inline-item">
                  <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="<?= $ppage->url; ?>">
                    <i class="icon-communication-095 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img8.jpg">
                    <i class="icon-communication-017 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="text-center g-pa-25">
            <h3 class="h5 g-color-black mb-1"><?= $ppage->title; ?></h3>
            <p class="g-color-gray-dark-v4 mb-0"><?= $ppage->summary; ?></p>
          </div>
        </div>
        <!-- End Cube Portfolio Blocks - Item -->
		<?php
		}
		/*

        <!-- Cube Portfolio Blocks - Item -->
        <div class="cbp-item design">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img9.jpg" alt="Image description">
            <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
              <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                <li class="list-inline-item">
                  <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                    <i class="icon-communication-095 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img9.jpg">
                    <i class="icon-communication-017 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="text-center g-pa-25">
            <h3 class="h5 g-color-black mb-1">Development</h3>
            <p class="g-color-gray-dark-v4 mb-0">Design</p>
          </div>
        </div>
        <!-- End Cube Portfolio Blocks - Item -->

        <!-- Cube Portfolio Blocks - Item -->
        <div class="cbp-item graphic identity">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img2.jpg" alt="Image description">
            <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
              <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                <li class="list-inline-item">
                  <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                    <i class="icon-communication-095 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img2.jpg">
                    <i class="icon-communication-017 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="text-center g-pa-25">
            <h3 class="h5 g-color-black mb-1">Project planner</h3>
            <p class="g-color-gray-dark-v4 mb-0">Graphic, Identity</p>
          </div>
        </div>
        <!-- End Cube Portfolio Blocks - Item -->

        <!-- Cube Portfolio Blocks - Item -->
        <div class="cbp-item graphic">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img11.jpg" alt="Image description">
            <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
              <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                <li class="list-inline-item">
                  <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                    <i class="icon-communication-095 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img11.jpg">
                    <i class="icon-communication-017 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="text-center g-pa-25">
            <h3 class="h5 g-color-black mb-1">Design</h3>
            <p class="g-color-gray-dark-v4 mb-0">Graphic</p>
          </div>
        </div>
        <!-- End Cube Portfolio Blocks - Item -->

        <!-- Cube Portfolio Blocks - Item -->
        <div class="cbp-item identity">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img12.jpg" alt="Image description">
            <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
              <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                <li class="list-inline-item">
                  <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                    <i class="icon-communication-095 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img12.jpg">
                    <i class="icon-communication-017 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="text-center g-pa-25">
            <h3 class="h5 g-color-black mb-1">Creative agency</h3>
            <p class="g-color-gray-dark-v4 mb-0">Identity</p>
          </div>
        </div>
        <!-- End Cube Portfolio Blocks - Item -->

        <!-- Cube Portfolio Blocks - Item -->
        <div class="cbp-item graphic">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img10.jpg" alt="Image description">
            <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
              <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                <li class="list-inline-item">
                  <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                    <i class="icon-communication-095 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img10.jpg">
                    <i class="icon-communication-017 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="text-center g-pa-25">
            <h3 class="h5 g-color-black mb-1">Production</h3>
            <p class="g-color-gray-dark-v4 mb-0">Graphic</p>
          </div>
        </div>
        <!-- End Cube Portfolio Blocks - Item -->
		*/
		?>
      </div>
      <!-- End Cube Portfolio Blocks - Content -->
    </section>
    <!-- End Cube Portfolio Blocks -->

    <!-- Partners -->
    <section class="g-bg-secondary">
      <div class="container g-py-100">
        <div class="g-mb-50">
          <h2 class="h1 g-color-black">Partner</h2>
          <span class="d-block g-font-weight-300 g-font-size-22 mr-4 g-mb-6">Mit Freude präsentieren wir Ihnen unsere Partner</span>
        </div>
	
        <div class="row no-gutters">
			<?php
		foreach($page->intro_partner as $partner) {
			
			?>
          <div class="col-sm-6 col-lg-3">
            <!-- Partners -->
            <div class="g-brd-around g-brd-gray-light-v5 g-bg-white text-center">
              <a class="d-block u-block-hover g-opacity-0_3 g-opacity-1--hover g-color-black g-transition-0_3 g-px-30 g-py-70" href="#">
                <img class="u-block-hover__main--zoom-v1 u-block-hover__main--grayscale g-width-100" src="<?= $partner->intro_partner_bild->httpUrl; ?>" alt="">
                <span class="d-block u-block-hover__additional--partially-slide-up py-2">
                    <span class="d-block h5 g-color-gray-dark-v5 mb-4"><?= $partner->intro_partner_name; ?></span>
                </span>
              </a>
            </div>
            <!-- End Partners -->
          </div>
		  <?php
		}
		?>
        </div>
<?php
/*
        <div class="row no-gutters">
          <div class="col-sm-6 col-lg-3">
            <!-- Partners -->
            <div class="g-brd-around g-brd-gray-light-v5 g-bg-white text-center">
              <a class="d-block u-block-hover g-opacity-0_3 g-opacity-1--hover g-color-black g-transition-0_3 g-px-30 g-py-70" href="#">
                <img class="u-block-hover__main--zoom-v1 u-block-hover__main--grayscale g-width-100" src="https://layout.wirfuervielfalt.de/assets/img-temp/200x100/img4.png" alt="Image Description">
                <span class="d-block u-block-hover__additional--partially-slide-up py-2">
                    <span class="d-block h5 g-color-gray-dark-v5 mb-4">Atalssian</span>
                </span>
              </a>
            </div>
            <!-- End Partners -->
          </div>

          <div class="col-sm-6 col-lg-3">
            <!-- Partners -->
            <div class="g-brd-around g-brd-gray-light-v5 g-bg-white text-center">
              <a class="d-block u-block-hover g-opacity-0_3 g-opacity-1--hover g-color-black g-transition-0_3 g-px-30 g-py-70" href="#">
                <img class="u-block-hover__main--zoom-v1 u-block-hover__main--grayscale g-width-100" src="https://layout.wirfuervielfalt.de/assets/img-temp/200x100/img3.png" alt="Image Description">
                <span class="d-block u-block-hover__additional--partially-slide-up py-2">
                    <span class="d-block h5 g-color-gray-dark-v5 mb-4">Airbnb</span>
                </span>
              </a>
            </div>
            <!-- End Partners -->
          </div>

          <div class="col-sm-6 col-lg-3">
            <!-- Partners -->
            <div class="g-brd-around g-brd-gray-light-v5 g-bg-white text-center">
              <a class="d-block u-block-hover g-opacity-0_3 g-opacity-1--hover g-color-black g-transition-0_3 g-px-30 g-py-70" href="#">
                <img class="u-block-hover__main--zoom-v1 u-block-hover__main--grayscale g-width-100" src="https://layout.wirfuervielfalt.de/assets/img-temp/200x100/img8.png" alt="Image Description">
                <span class="d-block u-block-hover__additional--partially-slide-up py-2">
                    <span class="d-block h5 g-color-gray-dark-v5 mb-4">Spotify</span>
                </span>
              </a>
            </div>
            <!-- End Partners -->
          </div>

          <div class="col-sm-6 col-lg-3">
            <!-- Partners -->
            <div class="g-brd-around g-brd-gray-light-v5 g-bg-white text-center">
              <a class="d-block u-block-hover g-opacity-0_3 g-opacity-1--hover g-color-black g-transition-0_3 g-px-30 g-py-70" href="#">
                <img class="u-block-hover__main--zoom-v1 u-block-hover__main--grayscale g-width-100" src="https://layout.wirfuervielfalt.de/assets/img-temp/200x100/img7.png" alt="Image Description">
                <span class="d-block u-block-hover__additional--partially-slide-up py-2">
                    <span class="d-block h5 g-color-gray-dark-v5 mb-4">Invision</span>
                </span>
              </a>
            </div>
            <!-- End Partners -->
          </div>
		  */
		 ?>
        </div>
      </div>
    </section>
    <!-- End Partners -->
	
    <!-- Footer Incl -->
	<?= $pages->get("id=1071")->render(); ?>
	<!-- Footer Incl -->

    <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/jquery/jquery.min.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/popper.js/popper.min.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/hs-bg-video/hs-bg-video.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/hs-bg-video/vendor/player.min.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/fancybox/jquery.fancybox.min.js"></script>

  <!-- JS Unify -->
  <script src="https://layout.wirfuervielfalt.de/assets/js/hs.core.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.header.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.tabs.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.go-to.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.carousel.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.cubeportfolio.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/helpers/hs.bg-video.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.popup.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="https://layout.wirfuervielfalt.de/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of video on background
        $.HSCore.helpers.HSBgVideo.init('.js-bg-video');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });

        // initialization of cubeportfolio
        $.HSCore.components.HSCubeportfolio.init('.cbp');
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>

</body>

</html>
