<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
<div class="container">
Logo
</div>
<div class="container">
	<h1><?= $query->name; ?></h1>
	<div class="row">
		<div class="col-md-8">
		<ul class="nav nav-pills nav-pills-browse">
		  <li role="presentation" class="active"><a href="#">Home</a></li>
		  <li role="presentation"><a href="#reviews">Reviews</a></li>
		  <li role="presentation"><a href="#show-map">Map</a></li>
		</ul>
			<div class="short-text">
				<?= $query->body; ?>
			</div>
		</div>
		<div class="col-md-4">
			<div class="row">
				<div class="col-sm-8">
					<button class="btn btn-warning write-review-button">
						<?php echo anchor('review/create_review/'.$rid, 'Wish to write a review?', 'class="link-class"') ?>
					</button>
					
				</div>
			</div>
			<div id="map"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<section id="reviews">
				<?php
					$reviews = get_restaurant_reviews_all_data($rid, 20);
					// var_dump($reviews);
					foreach($reviews as $review):
				?>

						<div class="panel panel-warning">
							<div class="panel-heading">
	    						<h3 class="panel-title"><?= $review->title; ?></h3>
	  						</div>
							<div class="panel-body">
	    						<div class="row">
	    							<div class="col-sm-2">
	    								<img src="<?= asset_url() ?>img/user-default.png">
	    							</div>
	    							<div class="col-sm-10">
	    								<div class="row">
	    									<div class="col-sm-2">
	    										<label>Overall</label>
	    										<br/>
	    										<input class="rating" type="hidden" data-filled="glyphicon glyphicon glyphicon-ok-sign panel-restaurant-rating-ok-sign" data-empty="glyphicon glyphicon glyphicon-ok-circle panel-restaurant-rating-ok-sign" data-readonly data-fractions="2" value="<?= round($review->overall); ?>"/>
	    									</div>
	    									<div class="col-sm-2">
	    										<label>Food</label>
	    										<br/>
	    										<input class="rating" type="hidden" data-filled="glyphicon glyphicon glyphicon-ok-sign panel-restaurant-rating-ok-sign" data-empty="glyphicon glyphicon glyphicon-ok-circle panel-restaurant-rating-ok-sign" data-readonly data-fractions="2" value="<?= round($review->food); ?>"/>
	    									</div>
	    									<div class="col-sm-2">
	    										<label>Ambience</label>
	    										<br/>
	    										<input class="rating" type="hidden" data-filled="glyphicon glyphicon glyphicon-ok-sign panel-restaurant-rating-ok-sign" data-empty="glyphicon glyphicon glyphicon-ok-circle panel-restaurant-rating-ok-sign" data-readonly data-fractions="2" value="<?= round($review->ambience); ?>"/>
	    									</div>
	    									<div class="col-sm-2">
	    										<label>Service</label>
	    										<br/>
	    										<input class="rating" type="hidden" data-filled="glyphicon glyphicon glyphicon-ok-sign panel-restaurant-rating-ok-sign" data-empty="glyphicon glyphicon glyphicon-ok-circle panel-restaurant-rating-ok-sign" data-readonly data-fractions="2" value="<?= round($review->service); ?>"/>
	    									</div>
	    								</div>
	    								<div class="row">
	    									<div class="col-sm-8">
	    										<span class="short-text"><?= $review->body; ?></span>
	    									</div>
	    								</div>
	    								
	    							</div>
	    						</div>
	  						</div>
						</div>
				<?php
					endforeach
				?>
			</section>
		</div>
	</div>


</body>
</html>