<?php
$page->meta->set("besucher",  $page->meta()->get('besucher') + 1);
?>
<!DOCTYPE html>
<html class="u-outer-space-v2" data-outer-spaces="u-outer-space-v2" lang="en">

<head>
  <!-- Title -->
  <title>#WirFuerVielfalt</title>

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
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/slick-carousel/slick/slick.css">
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
	<!-- Header Incl -->

    <!-- Breadcrumbs -->
    <section class="g-bg-gray-light-v5 g-py-50">
      <div class="container">
        <div class="d-sm-flex text-center">
          <div class="align-self-center">
            <h2 class="h3 g-font-weight-300 w-100 g-mb-10 g-mb-0--md"><?= $page->title; ?></h2>
          </div>

		<?php
		/*
          <div class="align-self-center ml-auto">
            <ul class="u-list-inline">
              <li class="list-inline-item g-mr-5">
                <a class="u-link-v5 g-color-main g-color-primary--hover" href="#">Home</a>
                <i class="g-color-gray-light-v2 g-ml-5">/</i>
              </li>
              <li class="list-inline-item g-mr-5">
                <a class="u-link-v5 g-color-main g-color-primary--hover" href="#">Pages</a>
                <i class="g-color-gray-light-v2 g-ml-5">/</i>
              </li>
              <li class="list-inline-item g-color-primary">
                <span>Portfolio Single Item 9</span>
              </li>
            </ul>
          </div>
		  */
		  ?>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- Portfolio Single Item -->
    <section class="container g-py-100">
      <div class="row g-mb-50">
        <div class="col-md-8 g-mb-30">
          <div class="mb-5">
            <h2 class="g-color-black mb-1"><?= $page->title ?></h2>
			<?php
			/*
            <span class="d-block lead mb-4">Package of the year</span>
            <p>This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Whether through commerce or just an experience to tell your brand's story, the time has come to start
              using development languages that fit your projects needs.</p>
            <p>Whether through commerce or just an experience to tell your brand's story, the time has come to start using development languages that fit your projects needs. The time has come to bring those ideas and plans to life. This is where we really
              begin to visualize your napkin sketches and make them into beautiful pixels. We get it, you're busy and it's important that someone keeps up with marketing and driving people to your brand. We've got you covered. Working together on the
              daily requires each individual to let the greater good of the team’s work surface above their own ego.</p>
			*/
			echo $page->body;
			?>
			
		 </div>
			<?php
			if($page->angebot_link) {
			?>
          <a class="btn btn-md u-btn-primary g-font-size-default g-rounded-25 g-px-30 g-py-12" href="<?= $page->angebot_link; ?>">Launch website</a>
		  <?php
			}
			?>
        </div>

        <div class="col-md-4 g-mb-30">
		<!--- 111 ---> 
		<?php
			$zeigefelder = array(111);
			$items = $page->getFields();
			
			//echo "<p>Name: $field->name, Type: $field->type, Label: $field->label</p>";
			foreach($zeigefelder as $feld) {
				//echo $feld;
				$field = $fields->get($feld);
				$j = (String) $page->getField($feld);
			
				?>
		  <!-- Client -->
          <div class="mb-5">
            <h3 class="h5 g-color-black mb-3"><?= $field->getlabel(); ?></h3>
            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#">
              <img class="g-width-25 g-height-25 rounded-circle mr-2 mb-1" src="https://layout.wirfuervielfalt.de/assets/img-temp/100x100/img1.jpg" alt="Image Description"><?= $page->get($j); ?>
            </a>
          </div>
          <!-- End Client -->
		  <?php
			}
			?>
			
			<?php
			$filters = $pages->find("parent=1025,template=filter_bezeichnung");
			foreach($filters as $filter) {
				$feldname = $filter->filter_id;
				if($page->get($feldname)->count === 0) {
					continue;
				}				
		  ?>

		   <!-- Tags -->
          <div class="g-mb-20">
            <h3 class="h5 g-color-black mb-3"><?= $filter->title ?></h3>
            <ul class="u-list-inline mb-0">
			<?php
			foreach($page->get($feldname) as $filt) {
			?>
              <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#"><?= $filt->title ?></a>
              </li>
			  <?php
			}
			?>
          
            </ul>
          </div>
          <!-- End Tags -->
		<?php
			}
			/*
          <!-- Client -->
          <div class="mb-5">
            <h3 class="h5 g-color-black mb-3">Client:</h3>
            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#">
              <img class="g-width-25 g-height-25 rounded-circle mr-2 mb-1" src="https://layout.wirfuervielfalt.de/assets/img-temp/100x100/img1.jpg" alt="Image Description">Htmlstream
            </a>
          </div>
          <!-- End Client -->

          <!-- Designers -->
          <div class="mb-5">
            <h3 class="h5 g-color-black mb-3">Designers:</h3>
            <ul class="list-unstyled">
              <li class="my-3">
                <img class="g-width-25 g-height-25 rounded-circle mb-1 mr-2" src="https://layout.wirfuervielfalt.de/assets/img-temp/100x100/img7.jpg" alt="Image Description">
                <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#">Alex Teseira</a>
              </li>
            </ul>
          </div>
          <!-- End Designers -->

          <!-- Tags -->
          <div class="g-mb-30">
            <h3 class="h5 g-color-black mb-3">Tags:</h3>
            <ul class="u-list-inline mb-0">
              <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#">Design</a>
              </li>
              <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#">Art</a>
              </li>
              <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#">Graphic</a>
              </li>
            </ul>
          </div>
          <!-- End Tags -->

          <!-- Share -->
          <div class="mb-3">
            <h3 class="h5 g-color-black mb-3">Share:</h3>
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-1 mb-1">
                <a class="btn u-btn-outline-facebook g-rounded-25" href="#">
                  <i class="mr-1 fa fa-facebook"></i>
                  Facebook
                </a>
              </li>
              <li class="list-inline-item mx-1 mb-1">
                <a class="btn u-btn-outline-twitter g-rounded-25" href="#">
                  <i class="mr-1 fa fa-twitter"></i>
                  Twitter
                </a>
              </li>
              <li class="list-inline-item mx-1 mb-1">
                <a class="btn u-btn-outline-dribbble g-rounded-25" href="#">
                  <i class="mr-1 fa fa-dribbble"></i>
                  Dribbble
                </a>
              </li>
            </ul>
          </div>
          <!-- End Share -->
		  */
		  ?>
        </div>
      </div>
		<?php
		$bilder = $page->angebot_bilder;
		$bild1 = $bilder->first();
		?>
      <!-- Cube Portfolio Blocks - Content -->
      <div class="cbp g-mb-100" data-controls="#filterControls1" data-animation="quicksand" data-x-gap="30" data-y-gap="30" data-media-queries='[{"width": 1500, "cols": 3}, {"width": 1100, "cols": 3}, {"width": 800, "cols": 3}, {"width": 480, "cols": 2}, {"width": 300, "cols": 1}]'>
        <!-- Cube Portfolio Blocks - Item -->
		<?php
		foreach($page->angebot_bilder as $bild1) {
			?>
        <div class="cbp-item identity design">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="<?= $bild1->url; ?>" alt="Image description">
            <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
              <div class="align-items-end flex-column mt-auto ml-auto">
                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="<?= $bild1->url; ?>">
                  <i class="icon-communication-017 u-line-icon-pro"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Cube Portfolio Blocks - Item -->
		<?php
		}
		/*
			$bild1 = $bilder->getNext($bild1);
			if($bild1) {
		?>
        <!-- Cube Portfolio Blocks - Item -->
        <div class="cbp-item design">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="<?= $bild1->url; ?>" alt="Image description">
            <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
              <div class="align-items-end flex-column mt-auto ml-auto">
                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="<?= $bild1->url; ?>">
                  <i class="icon-communication-017 u-line-icon-pro"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Cube Portfolio Blocks - Item -->

        <!-- Cube Portfolio Blocks - Item -->
        <div class="cbp-item graphic identity">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/800x500/img6.jpg" alt="Image description">
            <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
              <div class="align-items-end flex-column mt-auto ml-auto">
                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/800x500/img6.jpg">
                  <i class="icon-communication-017 u-line-icon-pro"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Cube Portfolio Blocks - Item -->

        <!-- Cube Portfolio Blocks - Item -->
        <div class="cbp-item graphic">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/800x500/img4.jpg" alt="Image description">
            <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
              <div class="align-items-end flex-column mt-auto ml-auto">
                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/800x500/img4.jpg">
                  <i class="icon-communication-017 u-line-icon-pro"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Cube Portfolio Blocks - Item -->

        <!-- Cube Portfolio Blocks - Item -->
        <div class="cbp-item graphic">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/760x900/img2.jpg" alt="Image description">
            <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
              <div class="align-items-end flex-column mt-auto ml-auto">
                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/760x900/img2.jpg">
                  <i class="icon-communication-017 u-line-icon-pro"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Cube Portfolio Blocks - Item -->

        <!-- Cube Portfolio Blocks - Item -->
        <div class="cbp-item identity">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/800x500/img3.jpg" alt="Image description">
            <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
              <div class="align-items-end flex-column mt-auto ml-auto">
                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/800x500/img3.jpg">
                  <i class="icon-communication-017 u-line-icon-pro"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Cube Portfolio Blocks - Item -->

        <!-- Cube Portfolio Blocks - Item -->
        <div class="cbp-item identity">
          <div class="u-block-hover g-parent">
            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/800x380/img1.jpg" alt="Image description">
            <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
              <div class="align-items-end flex-column mt-auto ml-auto">
                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/800x380/img1.jpg">
                  <i class="icon-communication-017 u-line-icon-pro"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
		*/
		?>
        <!-- End Cube Portfolio Blocks - Item -->
      </div>
      <!-- End Cube Portfolio Blocks - Content -->

      <!-- Pagination -->
      <nav class="text-center" aria-label="Page Navigation">
        <ul class="list-inline mb-0">
         <?php
/*		 <li class="list-inline-item float-sm-left">
            <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16" href="#" aria-label="Previous">
              <span aria-hidden="true">
                <i class="fa fa-angle-left"></i>
                Previous
              </span>
            </a>
          </li>
		  */
		  ?>
		  <li class="list-inline-item mr-1 mb-1">
			<a class="btn u-btn-outline-facebook g-rounded-25" href="#">
			  <i class="mr-1 fa fa-facebook"></i>
			  Facebook
			</a>
		  </li>
		  <li class="list-inline-item mx-1 mb-1">
			<a class="btn u-btn-outline-twitter g-rounded-25" href="#">
			  <i class="mr-1 fa fa-twitter"></i>
			  Twitter
			</a>
		  </li>
		  <li class="list-inline-item mx-1 mb-1">
			<a class="btn u-btn-outline-dribbble g-rounded-25" href="#">
			  <i class="mr-1 fa fa-dribbble"></i>
			  Dribbble
			</a>
		  </li>
            <?php
			/*
			
          <li class="list-inline-item mr-0">
            <a class="u-pagination-v1__item g-color-gray-dark-v4 g-font-size-20 g-py-2 g-px-10" href="#" data-toggle="tooltip" data-placement="top" title="View All">
              <i class="icon-grid"></i>
            </a>
          </li>
          <li class="list-inline-item float-sm-right">
            <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16" href="#" aria-label="Next">
              <span aria-hidden="true">
                Next
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </li>
		  */
		  ?>
        </ul>
      </nav>
      <!-- End Pagination -->
    </section>
    <!-- End Portfolio Single Item -->

    <!-- Cube Portfolio Blocks -->
    <section class="g-bg-gray-light-v5">
      <div class="container g-py-100">
        <h2 class="g-color-black text-center mb-5">Related items</h2>

        <div class="cbp" data-animation="quicksand" data-x-gap="30" data-y-gap="30" data-media-queries='[{"width": 1500, "cols": 3}, {"width": 1100, "cols": 3}, {"width": 800, "cols": 3}, {"width": 480, "cols": 2}, {"width": 300, "cols": 1}]'>
          <!-- Cube Portfolio Blocks - Item -->
          <div id="shortcode" class="cbp-item identity design">
            <div class="u-block-hover g-parent">
              <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img13.jpg" alt="Image description">
              <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                  <li class="list-inline-item">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                      <i class="icon-communication-095 u-line-icon-pro"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img13.jpg">
                      <i class="icon-communication-017 u-line-icon-pro"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
              <h3 class="h5 g-color-black g-font-weight-600 mb-1">Branding work</h3>
              <p class="mb-0">Identity, Design</p>
            </div>
          </div>
          <!-- End Cube Portfolio Blocks - Item -->

          <!-- Cube Portfolio Blocks - Item -->
          <div class="cbp-item design">
            <div class="u-block-hover g-parent">
              <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img14.jpg" alt="Image description">
              <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                  <li class="list-inline-item">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                      <i class="icon-communication-095 u-line-icon-pro"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img14.jpg">
                      <i class="icon-communication-017 u-line-icon-pro"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
              <h3 class="h5 g-color-black g-font-weight-600 mb-1">Development</h3>
              <p class="mb-0">Design</p>
            </div>
          </div>
          <!-- End Cube Portfolio Blocks - Item -->

          <!-- Cube Portfolio Blocks - Item -->
          <div class="cbp-item graphic identity">
            <div class="u-block-hover g-parent">
              <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img15.jpg" alt="Image description">
              <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                  <li class="list-inline-item">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#">
                      <i class="icon-communication-095 u-line-icon-pro"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://layout.wirfuervielfalt.de/assets/img-temp/400x270/img15.jpg">
                      <i class="icon-communication-017 u-line-icon-pro"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
              <h3 class="h5 g-color-black g-font-weight-600 mb-1">Project planner</h3>
              <p class="mb-0">Graphic, Identity</p>
            </div>
          </div>
          <!-- End Cube Portfolio Blocks - Item -->
        </div>
      </div>
    </section>
    <!-- End Cube Portfolio Blocks -->
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
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

  <!-- JS Unify -->
  <script src="https://layout.wirfuervielfalt.de/assets/js/hs.core.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.header.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.tabs.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.cubeportfolio.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="https://layout.wirfuervielfalt.de/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');
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





  <div id="resolutionCaution" class="text-left g-max-width-600 g-bg-white g-pa-20" style="display: none;">
    <button type="button" class="close" onclick="Custombox.modal.close();">
      <i class="hs-icon hs-icon-close"></i>
    </button>
    <h4 class="g-mb-20">Screen resolution less than 1400px</h4>
  </div>

  <div id="copyModal" class="text-left modal-demo g-bg-white g-color-black g-pa-20" style="display: none;"></div>

  <!-- CSS -->
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/chosen/chosen.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/prism/themes/prism.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/custombox/custombox.min.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/style-switcher/vendor/spectrum/spectrum.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/style-switcher/vendor/spectrum/themes/sp-dark.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/style-switcher/style-switcher.css">
  <!-- End CSS -->

  <!-- Scripts -->
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/chosen/chosen.jquery.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/image-select/src/ImageSelect.jquery.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/custombox/custombox.min.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/clipboard/dist/clipboard.min.js"></script>

  <!-- Prism -->
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/prism/prism.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/prism/components/prism-markup.min.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/prism/components/prism-css.min.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/prism/components/prism-clike.min.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/prism/components/prism-javascript.min.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/prism/plugins/toolbar/prism-toolbar.min.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/prism/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
  <!-- End Prism -->

  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.scrollbar.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.select.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.modal-window.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.markup-copy.js"></script>

  <script src="https://layout.wirfuervielfalt.de/assets/style-switcher/vendor/cookiejs/jquery.cookie.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/style-switcher/vendor/spectrum/spectrum.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/style-switcher/style-switcher.js"></script>
  <!-- End Scripts -->
  <!-- End Style Switcher -->

</body>

</html>
