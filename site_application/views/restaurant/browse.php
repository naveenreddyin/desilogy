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
			<div class="short-text">
				<?= $query->body; ?>
			</div>
		</div>
		<div class="col-md-4">
			<div class="row">
				<div class="col-sm-8">
					<?php echo anchor('review/create_review/'.$rid, 'Wish to write a review?', 'class="link-class"') ?>
				</div>
			</div>
			<div id="map"></div>
		</div>
	</div>


</body>
</html>