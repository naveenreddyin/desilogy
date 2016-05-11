<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<body>
		<div class="container">
			<div class="container-fluid">
			  <div class="row">
			   <div class="col-md-6 col-sm-6 col-xs-12">
			    <form id="create-review-form" method="post" enctype="multipart/form-data">
			    	<input type="hidden" value="<?= $rid; ?>" name="review_ref"/>
			    	<input type="hidden" value="<?= $query->city; ?>" name="city" />
			    	<input type="hidden" value="<?= $query->country; ?>" name="country" />
			    	<div class="form-group ">
				      <label class="control-label requiredField" for="text">
				       Please provide a title for your review
				       <span class="asteriskField">
				        *
				       </span>
				      </label>
				      <input class="form-control" id="title" name="title"/>
				     </div>
				     <div class="form-group ">
				      <label class="control-label requiredField" for="textarea">
				       Write your experience
				       <span class="asteriskField">
				        *
				       </span>
				      </label>
				      <textarea class="form-control" cols="40" id="experience" name="experience" rows="10"></textarea>
				     </div>
				     <div class="form-group ">
				      <label class="control-label requiredField" for="text">
				       Food
				       <span class="asteriskField">
				        *
				       </span>
				      </label>
				      <input class="form-control rating" id="food" name="food" type="hidden" data-filled="glyphicon glyphicon-heart heart-rating" data-empty="glyphicon glyphicon-heart-empty heart-rating" data-fractions="2"/>
				     </div>
				     <div class="form-group ">
				      <label class="control-label requiredField" for="name">
				       Ambience
				       <span class="asteriskField">
				        *
				       </span>
				      </label>
				      <input class="form-control rating" id="ambience" name="ambience" type="hidden" data-filled="glyphicon glyphicon-heart heart-rating" data-empty="glyphicon glyphicon-heart-empty heart-rating" data-fractions="2"/>
				     </div>
				     <div class="form-group">
				      <label class="control-label requiredField" for="service">
				       Service
				       <span class="asteriskField">
				        *
				       </span>
				      </label>
				      <input class="form-control rating" id="service" name="service" type="hidden" data-filled="glyphicon glyphicon-heart heart-rating" data-empty="glyphicon glyphicon-heart-empty heart-rating" data-fractions="2"/>
				     </div>
				     
				     <div class="form-group">
				     	<label class="control-label requiredField" for="visit_date">
				       		Date of visit
				       		<span class="asteriskField">
				        		*
				       		</span>
				      	</label>
				    	<input type="text" name="visit_date" placeholder="MM/DD/YY" value="" />
				     </div>
 					
 					 <div class="form-group">
				     	<label class="control-label" for="images">
				       		Provide images (if you have any) <a id="add-more-images" href="#" data-toggle="tooltip" title="click to add more images">+</a>
				      	</label>
				    	<input type="file" name="images[]"/>
				     </div>

    			
				     <div class="form-group">
				      <div>
				       <button class="btn btn-primary " name="submit" type="submit">
				        Submit
				       </button>
				      </div>
				     </div>
			    </form>
			   </div>
			  </div>
	 		</div>
	 	</div>

	</body>
</html>