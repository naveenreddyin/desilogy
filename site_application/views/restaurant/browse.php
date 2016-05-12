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
					$reviews = get_restaurant_reviews($rid, 20);
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
	    							<div class="col-sm-4">
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