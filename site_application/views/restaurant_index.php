<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>

<div class="container">
	<h1>Welcome to Desilogy!</h1>
	<div id="body">
		<p>Add Restaurant here.</p>
		<?php 
		echo form_open_multipart('restaurant/create_restaurant', array('method'=>'POST', 'id' => 'form-restaurant-id')); 
		?>
		<div class="form-group">
    		<label for="name">Name</label>
    		<?php echo form_input($name_form_data); ?>
  		</div>
		<div class="form-group">
    		<label for="body">Body</label>
    		<?php echo form_textarea($body_form_data); ?>
  		</div>
  		<div class="form-group">
  			<div class="row">
      			<div class="col-sm-3"><label>First name</label><input type="text" name="firstname" id="firstname" class="form-control" placeholder="First"/>
      			</div>
      			<div class="col-sm-3"><label>Last name</label><input type="text" name="lastname" class="form-control" placeholder="Last"/></div>
      		</div>
    	</div>
  		
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6">
					<label>Enter City and Country</label>
					<input name="address" id="address" type="text" placeholder="Start typing your address" class="form-control"/>
				</div>

			</div>
		</div>
		<div class="form-group" id="field-data-restaurant-postal-street-group">
			<div class="row">
				<div class="col-sm-3">
					<label>Street</label>
					<input id="street" name="street" type="text" placeholder="Street" class="form-control"/>
				</div>
				<div class="col-sm-3">
					<label>Postal Code</label>
					<input id="postal-code" name="postal_code" type="text" placeholder="Postal Code" class="form-control"/>
				</div>
				
			</div>
		</div>
		<div class="form-group" id="field-data-restaurant-city-country-group">
			
			<div class="row">
				<div class="col-sm-3">
					<label>City</label>
					<input id="city" type="text" placeholder="City" class="form-control" name="city"/>
				</div>
				<div class="col-sm-3">
					<label>Country</label>
					<input id="country" type="text" placeholder="Country" class="form-control" name="country"/>
					<input type="hidden" id="lat" name="lat" />
					<input type="hidden" id="long" name="long" />
				</div>
				
			</div>

		</div>

		<div class="form-group">
			
			<div class="row">
				<div class="col-sm-3">
					<label>Phone</label>
					<input name="phone" id="phone" type="tel" placeholder="Enter Phone with country code" class="form-control"/>
				</div>
				
				
			</div>

		</div>
		<div class="form-group">
			
			<div class="row">
				<div class="col-sm-3">
					<label>Website</label>
					<input name="website" id="website" type="url" placeholder="Enter your restaurants website." class="form-control">
				</div>
				
				
			</div>

		</div>

		<div class="form-group">
			
			<div class="row">
				<div class="col-sm-4">
					<label>Main Image</label>
    				<input type="file" name="restaurant_main_image" class="form-control">
    				<p class="help-block">Show an image of your restaurant to your users.</p>
				</div>
			</div>

		</div>
		
		<div class="form-group">
			<div class="row">
				<div class="col-sm-3">
					<label>Open From</label>
					<div class="input-group clockpicker1" data-donetext="Done" data-default="now">
							    <input type="text" class="form-control" name="from_time" placeholder="now">
							    <span class="input-group-addon">
							        <span class="glyphicon glyphicon-time"></span>
							    </span>
					</div>
				</div>
				<div class="col-sm-3">
					<label>Open Till</label>
					<div class="input-group clockpicker2" data-donetext="Done" data-default="now">
							    <input type="text" class="form-control" name="till_time" placeholder="now">
							    <span class="input-group-addon">
							        <span class="glyphicon glyphicon-time"></span>
							    </span>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Open on?</label>
			<label class="checkbox-inline">
	  			<input type="checkbox" id="inlineCheckbox1" value="mon"> Monday
			</label>
			<label class="checkbox-inline">
	  			<input type="checkbox" id="inlineCheckbox2" value="tue"> Tuesday
			</label>
			<label class="checkbox-inline">
	  			<input type="checkbox" id="inlineCheckbox2" value="wed"> Wednesday
			</label>
			<label class="checkbox-inline">
	  			<input type="checkbox" id="inlineCheckbox2" value="thu"> Thursday
			</label>
			<label class="checkbox-inline">
	  			<input type="checkbox" id="inlineCheckbox2" value="fri"> Friday
			</label>
			<label class="checkbox-inline">
	  			<input type="checkbox" id="inlineCheckbox2" value="sat"> Saturday
			</label>
			<label class="checkbox-inline">
	  			<input type="checkbox" id="inlineCheckbox2" value="sun"> Sunday
			</label>
		</div>
		

    	<div class="form-group">
    		<div class="row">
	      		<div class="col-sm-6">
			  		<?php
					echo form_submit('add_restaurant', 'Add Restaurant', "class='btn btn-default'");

					?>
				</div>
			</div>
		</div>
		
	</div>

	<!-- <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p> -->
</div>

</body>
</html>