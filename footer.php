<!-- Footer -->
    <footer class="container g-pt-100 g-pb-20">
      <div class="row">
        <div class="col-sm-6 col-lg-3 g-mb-30">
          <a class="d-inline-block mb-4" href="#">
            <svg width="180px" height="70px"  viewBox="0 0 180 70" xmlns="
				http://www.w3.org/2000/svg
				">
				  <style>
					.small { font: italic 13px sans-serif; }
					.heavy { font: bold 30px sans-serif; }
					.Rrrrr { font: italic 40px serif; fill: red; }
					.Rrrrr2 { font: italic 40px serif; fill: yellow; }
					.Rrrrr3 { font: italic 40px serif; fill: orange; }
					.Rrrrr4 { font: italic 40px serif; fill: green; }
					.Rrrrr5 { font: italic 40px serif; fill: purple; }
					.Rrrrr6 { font: italic 40px serif; fill: brown; }
					.Rrrrr7 { font: italic 40px serif; fill: pink; } 
					.Rrrrr8 { font: italic 40px serif; fill: blue; }
				  </style>

				  <text x="20" y="35" class="small"></text>
				  <text x="40" y="35" class="heavy">#wirfür</text>
				  <text x="55" y="55" class="small"></text>
				  <text x="65" y="55" class="Rrrrr">V</text>
				  <text x="85" y="55" class="Rrrrr2">i</text>
				  <text x="95" y="55" class="Rrrrr3">e</text>
				  <text x="110" y="55" class="Rrrrr4">l</text>
				  <text x="120" y="55" class="Rrrrr5">f</text>
				  <text x="130" y="55" class="Rrrrr6">a</text>
				  <text x="150" y="55" class="Rrrrr7">l</text>
				  <text x="160" y="55" class="Rrrrr8">t</text>
				</svg>
          </a>

          <p class="g-color-gray-dark-v4 g-font-size-13">2020 &copy; All Rights Reserved.</p>
        </div>

		<?php
		/*
        <div class="col-sm-6 col-lg-3 g-mb-30">
          <h3 class="h6 g-color-black g-font-weight-600 text-uppercase mb-4">About</h3>

          <!-- Links -->
          <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-13">
            <li class="my-3"><i class="mr-2 fa fa-angle-right"></i>
              <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">About</a>
            </li>
            <li class="my-3"><i class="mr-2 fa fa-angle-right"></i>
              <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">Services</a>
            </li>
            <li class="my-3"><i class="mr-2 fa fa-angle-right"></i>
              <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">Privacy &amp; Policy</a>
            </li>
            <li class="my-3"><i class="mr-2 fa fa-angle-right"></i>
              <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">Terms &amp; Conditions</a>
            </li>
          </ul>
          <!-- End Links -->
        </div>

        <div class="col-sm-6 col-lg-3 g-mb-30">
          <h3 class="h6 g-color-black g-font-weight-600 text-uppercase mb-4">Contacts</h3>

          <!-- Links -->
          <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-13">
            <li class="media mb-4">
              <i class="d-flex mt-1 mr-3 icon-hotel-restaurant-235 u-line-icon-pro"></i>
              <div class="media-body">
                Unit 25 Suite 3, 925 Prospect
                <br>PI New York Avenue
              </div>
            </li>
            <li class="media mb-4">
              <i class="d-flex mt-1 mr-3 icon-communication-062 u-line-icon-pro"></i>
              <div class="media-body">
                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">htmlstream@support.com</a>
              </div>
            </li>
            <li class="media mb-4">
              <i class="d-flex mt-1 mr-3 icon-communication-033 u-line-icon-pro"></i>
              <div class="media-body">
                +32 333 444 555
              </div>
            </li>
          </ul>
          <!-- End Links -->
        </div>

        <div class="col-sm-6 col-lg-3 g-mb-30">
          <h3 class="h6 g-color-black g-font-weight-600 text-uppercase mb-4">Follow Us</h3>

          <!-- Links -->
          <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-13">
            <li class="my-3"><i class="mr-2 fa fa-angle-right"></i>
              <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">Facebook</a>
            </li>
            <li class="my-3"><i class="mr-2 fa fa-angle-right"></i>
              <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">Twitter</a>
            </li>
            <li class="my-3"><i class="mr-2 fa fa-angle-right"></i>
              <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">Dribbble</a>
            </li>
            <li class="my-3"><i class="mr-2 fa fa-angle-right"></i>
              <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">Linkedin</a>
            </li>
          </ul>
          <!-- End Links -->
        </div>
		*/
		foreach($page->footer_block as $block) {
		?>
		<div class="col-sm-6 col-lg-3 g-mb-30">
		<?= $block->footer_single_block; ?>
		 </div>
		<?php
		}
		?>
      </div>
    </footer>
    <!-- End Footer -->