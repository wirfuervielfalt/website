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
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/dzsparallaxer/dzsparallaxer.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
  <link rel="stylesheet" href="https://layout.wirfuervielfalt.de/assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
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

    <!-- Page Title -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading" data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
      <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-white-gradient-opacity-v3--after" style="height: 140%; background-image: url(<?= $page->images->first->httpUrl; ?>);"></div>
      <!-- End Parallax Image -->

      <div class="container text-center <?php /* g-py-100--md g-py-80 */ ?>">
        <h2 class="h1 text-uppercase g-font-weight-300 g-mb-30">Unsere Angebotsvielfalt</h2>

        <!-- Search Form -->
        <form class="g-width-60x--md mx-auto">
          <div class="form-group g-mb-20">
            <div class="input-group u-shadow-v21 rounded g-mb-15">
              <input id="search" class="form-control form-control-md g-brd-white g-font-size-16 border-right-0 pr-0 g-py-15" type="text" placeholder="Stichwortsuche">
              <div class="input-group-addon d-flex align-items-center g-bg-white g-brd-white g-color-gray-light-v1 g-pa-2">
                <button class="btn u-btn-primary g-font-size-16 g-py-15 g-px-20" type="submit">
                  <i class="icon-magnifier g-pos-rel g-top-1"></i>
                </button>
              </div>
            </div>
            <?php /*<small class="form-text g-opacity-0_8 g-font-size-default">Stich any words, questions and so on here.</small> */ ?>
          </div>
        </form>
        <!-- End Search Form -->
      </div>
    </section>
    <!-- Page Title -->

    <section class="g-pt-50 g-pb-90">
      <div class="container">
        <div class="row">
          <!-- Sidebar -->
          <div class="col-lg-3 g-pr-40--lg g-mb-50 g-mb-0--lg">
		  <?php
			$filters = $pages->find("parent=1025,template=filter_bezeichnung");
			foreach($filters as $filter) {
		  ?>
		    <!-- Result Types -->
            <h2 class="h5 text-uppercase g-color-gray-dark-v1"><?= $filter->title ?></h2>
            <hr class="g-brd-gray-light-v4 g-my-15">
            <form>
			<?php
			foreach($filter->children("template=filter_kriterie") as $filt) {
			?>
              <!-- Checkbox -->
              <div class="form-group g-mb-10">
                <label class="u-check g-pl-30">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0 filterkrit" value="<?= $filt->id; ?>" type="checkbox">
                  <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                    <i class="fa" data-check-icon="&#xf00c"></i>
                  </div>
                  <?= $filt->title; ?>
                </label>
              </div>
              <!-- End Checkbox -->
			  <?php
			}
?>
             
            </form>
            <!-- End Result Types -->
		   <?php
			}
			?>
			<?php
			/*
            <!-- Categories -->
            <h2 class="h5 text-uppercase g-color-gray-dark-v1">Categories</h2>
            <hr class="g-brd-gray-light-v4 g-my-15">
            <ul class="list-unstyled g-mb-40">
              <li class="my-3">
                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1 g-parent" href="#">
                    Design <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 text-center rounded g-px-10 g-py-3">99</span>
                  </a>
              </li>
              <li class="my-3">
                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1" href="#">
                    Development <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 g-bg-primary--parent-hover text-center rounded g-px-10 g-py-3">5</span>
                  </a>
              </li>
              <li class="my-3">
                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1" href="#">
                    Services <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 g-bg-primary--parent-hover text-center rounded g-px-10 g-py-3">15</span>
                  </a>
              </li>
              <li class="my-3">
                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1" href="#">
                    Support <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 g-bg-primary--parent-hover text-center rounded g-px-10 g-py-3">12</span>
                  </a>
              </li>
              <li class="my-3">
                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1" href="#">
                    Investment <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 g-bg-primary--parent-hover text-center rounded g-px-10 g-py-3">5</span>
                  </a>
              </li>
              <li class="my-3">
                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1" href="#">
                    Financing <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 g-bg-primary--parent-hover text-center rounded g-px-10 g-py-3">1</span>
                  </a>
              </li>
            </ul>
            <!-- End Categories -->

            <!-- Tags -->
            <h2 class="h5 text-uppercase g-color-gray-dark-v1">Tags</h2>
            <hr class="g-brd-gray-light-v4 g-my-15">
            <ul class="list-inline g-mb-40">
              <li class="list-inline-item my-2">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Web Design</a>
              </li>
              <li class="list-inline-item my-2">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Unify</a>
              </li>
              <li class="list-inline-item my-2">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Template</a>
              </li>
              <li class="list-inline-item my-2">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">HTML</a>
              </li>
              <li class="list-inline-item my-2">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">CSS</a>
              </li>
              <li class="list-inline-item my-2">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Mobile</a>
              </li>
              <li class="list-inline-item my-2">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">iOS</a>
              </li>
              <li class="list-inline-item my-2">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">UI</a>
              </li>
              <li class="list-inline-item my-2">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Web</a>
              </li>
            </ul>
            <!-- End Tags -->

            <!-- Sort By -->
            <h2 class="h5 text-uppercase g-color-gray-dark-v1">Sort By</h2>
            <hr class="g-brd-gray-light-v4 g-my-15">
            <div class="btn-group justified-content g-mb-40">
              <label class="u-check">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio" checked>
                <span class="btn btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">Date Added</span>
              </label>
              <label class="u-check">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio">
                <span class="btn btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">Relevance</span>
              </label>
            </div>
            <!-- End Sort By -->

            <!-- Result Types -->
            <h2 class="h5 text-uppercase g-color-gray-dark-v1">Result Types</h2>
            <hr class="g-brd-gray-light-v4 g-my-15">
            <form>
              <!-- Checkbox -->
              <div class="form-group g-mb-10">
                <label class="u-check g-pl-30">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                  <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                    <i class="fa" data-check-icon="&#xf00c"></i>
                  </div>
                  Design
                </label>
              </div>
              <!-- End Checkbox -->

              <!-- Checkbox -->
              <div class="form-group g-mb-10">
                <label class="u-check g-pl-30">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" checked>
                  <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                    <i class="fa" data-check-icon="&#xf00c"></i>
                  </div>
                  Development
                </label>
              </div>
              <!-- End Checkbox -->

              <!-- Checkbox -->
              <div class="form-group g-mb-10">
                <label class="u-check g-pl-30">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                  <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                    <i class="fa" data-check-icon="&#xf00c"></i>
                  </div>
                  Services
                </label>
              </div>
              <!-- End Checkbox -->

              <!-- Checkbox -->
              <div class="form-group g-mb-10">
                <label class="u-check g-pl-30">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                  <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                    <i class="fa" data-check-icon="&#xf00c"></i>
                  </div>
                  Support
                </label>
              </div>
              <!-- End Checkbox -->

              <!-- Checkbox -->
              <div class="form-group g-mb-10">
                <label class="u-check g-pl-30">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                  <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                    <i class="fa" data-check-icon="&#xf00c"></i>
                  </div>
                  Investment
                </label>
              </div>
              <!-- End Checkbox -->
            </form>
            <!-- End Result Types -->
			*/ ?>
          </div>
          <!-- End Sidebar -->

          <!-- Search Results -->
          <div class="col-lg-9">
            <!-- Search Info -->
            <div class="d-md-flex justify-content-between g-mb-30">
              <h3 class="h6 text-uppercase g-mb-10 g-mb--lg">About <span id="count_visable" class="g-color-gray-dark-v1"><?= $pages->count("template=angebot"); ?></span> results</h3>
              <ul class="list-inline">
			  <?php
			  /*
                <li class="list-inline-item g-mr-30">
                  <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">
                    <i class="icon-grid g-pos-rel g-top-1 g-mr-5"></i> List View
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="u-link-v5 g-color-gray-dark-v5 g-color-gray-dark-v5--hover" href="#">
                    <i class="icon-list g-pos-rel g-top-1 g-mr-5"></i> Grid View
                  </a>
                </li>
				*/
				?>
              </ul>
            </div>
            <!-- End Search Info -->
			
			
			<div class="row">
			<?php
				$pa = $pages->find("template=angebot");
				
				$x = 0;
				foreach($pa as $ppage) {
				if($x % 2 == 0 && false) {
						if($x != 0) {
							
							?>
							</div>
							<?php
							
						}
				?>
            <div class="row">
			<?php
			
				}
				?>
				<?php
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
			
              <div class="col-lg-6 g-mb-30 element <?= $filtercss; ?>">
                <!-- Search Result -->
				
                <article class="g-pa-25 u-shadow-v11 rounded">
                  <h2 class="h4 g-mb-15">
                      <a class="cardtitle u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?= $ppage->url; ?>"><?= $ppage->title; ?></a>
                    </h2>

                  <!-- Search Info -->
                  <ul class="list-inline d-flex justify-content-between g-mb-20">
                    <li class="list-inline-item g-mr-10">
                      <img class="g-height-25 g-width-25 rounded-circle g-mr-5" src="https://layout.wirfuervielfalt.de/assets/img-temp/100x100/img7.jpg" alt="Image Description"> <a class="u-link-v5 g-color-main g-color-primary--hover" href="#"><?= $ppage->angebot_anbieter; ?></a>
                    </li>
                    <li class="list-inline-item">
                      <i class="icon-eye g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i><?= $ppage->meta()->get('besucher') ?>
                    </li>
                  </ul>
                  <!-- End Search Info -->

                  <p class="g-mb-15"><?= $ppage->summary; ?>
					
					</p>

                  <!-- Search Rating -->
                  <div class="g-mb-15">
                    <span class="js-rating g-color-primary mr-2" data-rating="5"></span>
                    <span class="g-color-gray-dark-v5">Relevance 5.0 out of 4902 votes</span>
                  </div>
                  <!-- End Search Rating -->

                  <!-- Share, Print and More -->
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item g-mr-20">
                      <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">
                        <i class="icon-share g-pos-rel g-top-1 g-mr-5"></i> Share
                      </a>
                    </li>
                    <li class="list-inline-item g-mr-20">
                      <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">
                        <i class="icon-printer g-pos-rel g-top-1 g-mr-5"></i> Print
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <div class="dropdown g-mb-10 g-mb-0--md">
                        <span class="d-block g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-arrow-down-circle g-pos-rel g-top-1"></i> More
                          </span>
                        <div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
                          <a class="dropdown-item g-px-10" href="#">
                            <i class="icon-directions g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Report
                          </a>
                          <a class="dropdown-item g-px-10" href="#">
                            <i class="icon-star g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Save
                          </a>
                          <a class="dropdown-item g-px-10" href="#">
                            <i class="icon-question g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Info
                          </a>
                          <a class="dropdown-item g-px-10" href="#">
                            <i class="icon-cloud-download g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Ger More Info
                          </a>

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item g-px-10" href="#">
                            <i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> View More
                          </a>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <!-- End Share, Print and More -->
                </article>
                <!-- End Search Result -->
              </div>

			<?php
			if($pa->getNext($ppage) == NULL) {
					
				?>
            </div>
			<?php
				}
			 $x++;
				}
      ?>
 
            <hr class="g-brd-gray-light-v4 g-mt-10 g-mb-40">

            <!-- Pagination -->
            <nav class="g-mb-50" aria-label="Page Navigation">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="#" aria-label="Previous">
                    <span aria-hidden="true">
                      <i class="fa fa-angle-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="list-inline-item g-hidden-sm-down">
                  <a class="u-pagination-v1__item u-pagination-v1-5 u-pagination-v1-5--active rounded g-pa-4-11" href="#">1</a>
                </li>
				<?php
				/*
                <li class="list-inline-item g-hidden-sm-down">
                  <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#">2</a>
                </li>
                <li class="list-inline-item g-hidden-sm-down">
                  <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#">3</a>
                </li>
                <li class="list-inline-item g-hidden-sm-down">
                  <span class="g-pa-4-11">...</span>
                </li>
                <li class="list-inline-item g-hidden-sm-down">
                  <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#">80</a>
                </li>
				*/
				?>
                <li class="list-inline-item">
                  <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="#" aria-label="Next">
                    <span aria-hidden="true">
                      <i class="fa fa-angle-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
                <li class="list-inline-item float-right">
                  <span class="u-pagination-v1__item-info g-pa-4-11">Page 1 of 1</span>
                </li>
              </ul>
            </nav>
            <!-- End Pagination -->
<?php 
/*
            <h3 class="h5 g-color-gray-dark-v1 g-mb-20">Searches Related to Unify Template</h3>

            <!-- Tags -->
            <ul class="u-list-inline mb-0">
              <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Wrapbootstrap</a>
              </li>
              <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Web Design</a>
              </li>
              <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Best Responsive Bootstrap Template</a>
              </li>
              <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Thematic Pages</a>
              </li>
              <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Corporate &amp; Business Template</a>
              </li>
              <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">SASS</a>
              </li>
            </ul>
            <!-- End Tags -->
			*/
			?>
          </div>
          <!-- End Search Results -->
        </div>
      </div>
    </section>
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
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/appear.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>

  <!-- JS Unify -->
  <script src="https://layout.wirfuervielfalt.de/assets/js/hs.core.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.header.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.tabs.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/helpers/hs.focus-state.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.rating.js"></script>
  <script src="https://layout.wirfuervielfalt.de/assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="https://layout.wirfuervielfalt.de/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
  var filter = new Object();
    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of rating
        $.HSCore.components.HSRating.init($('.js-rating'), {
          spacing: 2
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
        });
		  $('#search').on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$(".cardtitle").filter(function() {
			  $(this).parent().parent().parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		  });
		  
		  
		  $('.filterkrit').on("click", function() {
			var value = $(this).val();
			if(filter[value]) {
				delete filter[value];
			} else {
				filter[value] = value;
			}
			filter_all();
		  });
		  

        $(window).on('resize', function () {
          setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
          }, 200);
        });
      });
	  function filter_all() {
		  console.log(filter);
		  f = Object.keys(filter);
		  var prefix = '.fil-';
		  var newArr = f.map(el => prefix + el);
		  console.log(newArr);
		  var string = newArr ? newArr.toString() : "";
		  console.log("s" + string);
		  if(string.length > 0) {
			  console.log("s" + string);
			  $(".element").each(function() {
				  $(this).is(string) ? $(this).show() : $(this).hide();  
				  
			  });
		  } else {
			  console.log("showall");
			  $(".element").show();
		  }
		  $('#count_visable').text($('.element:visible').length);
	
	  }
	  function obsKeysToString(o, k, sep) {
		 return k.map(key => o[key]).filter(v => v).join(sep);
		}
  </script>

</body>

</html>
