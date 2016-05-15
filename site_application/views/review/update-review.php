<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<body>
		<div class="container">
			  <div class="row">
			   <div class="col-md-6 col-sm-6 col-xs-12">
			    <form id="create-review-form" method="post" enctype="multipart/form-data">
			    	<input type="hidden" value="<?= $rid; ?>" name="review_ref"/>
			    	<input type="hidden" value="<?= $rvid; ?>" name="rvid"/>
			    	<input type="hidden" value="<?= $query->city; ?>" name="city" />
			    	<input type="hidden" value="<?= $query->country; ?>" name="country" />
			    	<div class="form-group ">
				      <label class="control-label requiredField" for="text">
				       Please provide a title for your review
				       <span class="asteriskField">
				        *
				       </span>
				      </label>
				      <input class="form-control" id="title" name="title" value="<?= $review->title ?>"/>
				     </div>
				     <div class="form-group ">
				      <label class="control-label requiredField" for="textarea">
				       Write your experience
				       <span class="asteriskField">
				        *
				       </span>
				      </label>
				      <textarea class="form-control" cols="40" id="experience" name="experience" rows="10"><?= $review->body ?></textarea>
				     </div>
				     <div class="form-group ">
				      <label class="control-label requiredField" for="text">
				       Food
				       <span class="asteriskField">
				        *
				       </span>
				      </label>
				      <input class="form-control rating" id="food" name="food" type="hidden" value="<?= $review->food ?>" data-filled="glyphicon glyphicon-heart heart-rating" data-empty="glyphicon glyphicon-heart-empty heart-rating" data-fractions="2"/>
				     </div>
				     <div class="form-group ">
				      <label class="control-label requiredField" for="name">
				       Ambience
				       <span class="asteriskField">
				        *
				       </span>
				      </label>
				      <input class="form-control rating" id="ambience" name="ambience" value="<?= $review->ambience ?>" type="hidden" data-filled="glyphicon glyphicon-heart heart-rating" data-empty="glyphicon glyphicon-heart-empty heart-rating" data-fractions="2"/>
				     </div>
				     <div class="form-group">
				      <label class="control-label requiredField" for="service">
				       Service
				       <span class="asteriskField">
				        *
				       </span>
				      </label>
				      <input class="form-control rating" id="service" name="service" value="<?= $review->service ?>" type="hidden" data-filled="glyphicon glyphicon-heart heart-rating" data-empty="glyphicon glyphicon-heart-empty heart-rating" data-fractions="2"/>
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
 					<?php
 						if($review->path || $review->filename){

 							$path_arr = explode(';', $review->filename);
 							$i = 0;
 							// print_r($path_arr);
 							foreach($path_arr as $path){

 								if($path){
 									$i++;

 					?>
 					<div class="form-group">
				     	<label class="control-label" for="images">
 								<img src="<?= asset_url().'uploads/'.$path ?>" style="width: 200px; height: 200px;"><br/>
 						</label>
 						<input type="hidden" value="<?= $path ?>" name="uploaded_image<?= $i ?>" >
 							<a href="#" class="btn btn-warning delete-update-image">Delete</a>
 						</input>
 					</div>
 					<?php
 								}
 							}

 						}
 						
 					?>
 					 <div class="form-group">
				     	<label class="control-label" for="images">
				       		Provide images (if you have any) <a id="add-more-images" href="#" data-toggle="tooltip" title="click to add more images">+</a>
				      	</label>
				    	<input id="images-input" type="file" name="images[]"/>
				     </div>

    			
				     <div class="form-group">
				      <div>
				       <button class="btn btn-warning " name="submit" type="submit">
				        Submit
				       </button>
				      </div>
				     </div>
			    </form>
			   </div>
			  </div>
	 	</div>

	</body>
</html>