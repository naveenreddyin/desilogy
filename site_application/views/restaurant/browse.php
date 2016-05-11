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
		<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">home</div>
    <div role="tabpanel" class="tab-pane" id="profile">profile</div>
    <div role="tabpanel" class="tab-pane" id="messages">message</div>
  </div>

</div>
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