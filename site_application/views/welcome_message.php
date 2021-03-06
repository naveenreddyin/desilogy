<?php
defined('BASEPATH') OR exit('No direct script access allowed');
print_r($this->session->userdata); 
// print_r($this->aauth->get_user_groups());
// echo $this->aauth->is_member(4);
?>
<body>
<section class="hero">
		<header>
			<div class="wrapper">
				<a href="#"><img src="<?= asset_url() ?>img/logo.png" class="logo" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="#">Buy</a></li>
						<li><a href="#">Rent</a></li>
						<li><a href="#">Sell</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<?php if(is_loggedin()): ?>
						<a href="logout" class="login_btn">Logout</a>
					<?php else: ?>
						<a href="welcome/login" class="login_btn">Login</a>
					<?php endif; ?>
				</nav>
			</div>
		</header><!--  end header section  -->

			<section class="caption">
				<h2 class="caption">Find You Home Away From Home</h2>
				<h3 class="properties">Appartements - Houses - Mansions</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="search">
		<div class="wrapper">
			<form action="panel/restaurant" method="get">
				<input type="text" id="frontpage-google-places" name="search" placeholder="What are you looking for?"  autocomplete="off"/>
				<input type="hidden" name="city" value="" id="frontpage_city"></input>
				<input type="hidden" name="country" value="" id="frontpage_country"></input>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			<!-- <a href="#" class="advanced_search_icon" id="advanced_search_btn"></a> -->
		</div>

		<!-- <div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div> --><!--  end advanced search section  -->
	</section><!--  end search section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<?php foreach ($query as $row): ?>
					<li>
						<a href="restaurant/browse/<?= $row->rid ?>">
							<?php if($row->path): ?>
								<img src="<?= asset_url() ?>img/default_restaurant.jpeg" alt="" title="" class="property_img"/>
							<? else: ?>
								<img src="<?= asset_url() ?>img/default_restaurant.jpeg" alt="" title="" class="property_img"/>
							<?php endif; ?>
						</a>
						<span class="price">$2500</span>
						<div class="property_details">
							<h1>
								<a href="restaurant/browse/<?= $row->rid ?>"><?= $row->name; ?></a>
							</h1>
							<!-- <h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2> -->
							<h2><?= $row->full_address; ?></h2>
						</div>
					</li>
				<?php endforeach; ?>
				
			</ul>
			<div class="more_listing">
				<a href="#" class="more_listing_btn">View More Listings</a>
			</div>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">Appartements</a></li>
						<li><a href="#">Houses</a></li>
						<li><a href="#">Villas</a></li>
						<li><a href="#">Mansions</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">New York</a></li>
						<li><a href="#">Los Anglos</a></li>
						<li><a href="#">Miami</a></li>
						<li><a href="#">Washington</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="about">
					<p>La Casa is real estate minimal html5 website template, designed and coded by pixelhint, tellus varius, dictum erat vel, maximus tellus. Sed vitae auctor ipsum</p>
					<ul>
						<li><a href="http://facebook.com/pixelhint" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/pixelhint" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+Pixelhint" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="copyrights wrapper">
			Copyright © 2015 <a href="http://pixelhint.com" target="_blank" class="ph_link" title="Download more free Templates">Pixelhint.com</a>. All Rights Reserved.
		</div>
	</footer><!--  end footer  -->

</body>
</html>