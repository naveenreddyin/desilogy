<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid custom-navbar-container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> <!-- nav header close -->
<div class="container">
	<!-- sidebar -->
	<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        <ul class="nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>              
        </ul>
    </div>
    <!-- main area -->
    <div class="col-xs-12 col-sm-9 main-area-panel-restaurant">
    	<div id="products" class="row list-group">
    		<?php 
    		$i = 0;
    		foreach ($query as $item): ?>
    			<?php 
    				    			$i++;

    				$details = get_restaurant_detail($item->rid);
    				// print_r($details);
    			?>
    			 <div class="item list-group-item col-xs-4 col-lg-4">
		            <div class="thumbnail">
		            	<?php if($details->path): ?>
							<img src="<?= asset_url() ?>img/default_restaurant.jpeg" alt="" title="" class="group list-group-image"/>
						<? else: ?>
							<img src="<?= asset_url() ?>img/default_restaurant.jpeg" alt="" title="" class="group list-group-image"/>
						<?php endif; ?>
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?= $details->name; ?></h4>

		                	<h6>#<?= $i; ?> out of <?= $item->number_of_restaurants; ?> restaurants in <?= $city; ?></h6>

		                	<input class="rating" type="hidden" data-filled="glyphicon glyphicon glyphicon-ok-sign panel-restaurant-rating-ok-sign" data-empty="glyphicon glyphicon glyphicon-ok-circle panel-restaurant-rating-ok-sign" data-readonly data-fractions="2" value="<?= round($item->real_rating); ?>"/> <?= $item->number_of_reviews; ?> reviews
		                   
		                        	<?php
		                        	$reviews = get_restaurant_reviews($item->rid, 2);
		                        	// print_r($reviews);
		                        	foreach ($reviews as $review):
		                        	?>
		                        	 <p class="group inner list-group-item-text short-text"><a href="#">"<?= $review->title; ?>"</a></p>
		                        	<?php endforeach ?>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">

		                           <!--  <p class="lead">
		                                $21.000</p> -->
		                        </div>
		                        <!-- <div class="col-xs-12 col-md-6">
		                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
		                        </div> -->
		                    </div>
		                </div>
		            </div>
	        	</div> <!-- item div close -->
    		<?php endforeach ?>

        
    	</div>
    </div>
</div>
</body>
</html>