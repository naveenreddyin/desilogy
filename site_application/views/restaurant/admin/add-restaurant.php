<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// print_r($this->session->userdata); 
// print_r($this->aauth->get_user_groups());
// echo $this->aauth->is_member(4);
?>
	<body>
			<div id="wrapper">

	        <!-- Navigation -->
	        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="index.html">Desilogy Dashboard</a>
	            </div>
	            <!-- /.navbar-header -->

	            <ul class="nav navbar-top-links navbar-right">
	                <li class="dropdown">
	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
	                    </a>
	                    <ul class="dropdown-menu dropdown-messages">
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <strong>John Smith</strong>
	                                    <span class="pull-right text-muted">
	                                        <em>Yesterday</em>
	                                    </span>
	                                </div>
	                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <strong>John Smith</strong>
	                                    <span class="pull-right text-muted">
	                                        <em>Yesterday</em>
	                                    </span>
	                                </div>
	                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <strong>John Smith</strong>
	                                    <span class="pull-right text-muted">
	                                        <em>Yesterday</em>
	                                    </span>
	                                </div>
	                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a class="text-center" href="#">
	                                <strong>Read All Messages</strong>
	                                <i class="fa fa-angle-right"></i>
	                            </a>
	                        </li>
	                    </ul>
	                    <!-- /.dropdown-messages -->
	                </li>
	                <!-- /.dropdown -->
	                <li class="dropdown">
	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
	                    </a>
	                    <ul class="dropdown-menu dropdown-tasks">
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <p>
	                                        <strong>Task 1</strong>
	                                        <span class="pull-right text-muted">40% Complete</span>
	                                    </p>
	                                    <div class="progress progress-striped active">
	                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
	                                            <span class="sr-only">40% Complete (success)</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <p>
	                                        <strong>Task 2</strong>
	                                        <span class="pull-right text-muted">20% Complete</span>
	                                    </p>
	                                    <div class="progress progress-striped active">
	                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
	                                            <span class="sr-only">20% Complete</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <p>
	                                        <strong>Task 3</strong>
	                                        <span class="pull-right text-muted">60% Complete</span>
	                                    </p>
	                                    <div class="progress progress-striped active">
	                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
	                                            <span class="sr-only">60% Complete (warning)</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <p>
	                                        <strong>Task 4</strong>
	                                        <span class="pull-right text-muted">80% Complete</span>
	                                    </p>
	                                    <div class="progress progress-striped active">
	                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
	                                            <span class="sr-only">80% Complete (danger)</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a class="text-center" href="#">
	                                <strong>See All Tasks</strong>
	                                <i class="fa fa-angle-right"></i>
	                            </a>
	                        </li>
	                    </ul>
	                    <!-- /.dropdown-tasks -->
	                </li>
	                <!-- /.dropdown -->
	                <li class="dropdown">
	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
	                    </a>
	                    <ul class="dropdown-menu dropdown-alerts">
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <i class="fa fa-comment fa-fw"></i> New Comment
	                                    <span class="pull-right text-muted small">4 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
	                                    <span class="pull-right text-muted small">12 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
	                                    <span class="pull-right text-muted small">4 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <i class="fa fa-tasks fa-fw"></i> New Task
	                                    <span class="pull-right text-muted small">4 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a href="#">
	                                <div>
	                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
	                                    <span class="pull-right text-muted small">4 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a class="text-center" href="#">
	                                <strong>See All Alerts</strong>
	                                <i class="fa fa-angle-right"></i>
	                            </a>
	                        </li>
	                    </ul>
	                    <!-- /.dropdown-alerts -->
	                </li>
	                <!-- /.dropdown -->
	                <li class="dropdown">
	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
	                    </a>
	                    <ul class="dropdown-menu dropdown-user">
	                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
	                        </li>
	                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
	                        </li>
	                        <li class="divider"></li>
	                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
	                        </li>
	                    </ul>
	                    <!-- /.dropdown-user -->
	                </li>
	                <!-- /.dropdown -->
	            </ul>
	            <!-- /.navbar-top-links -->

	            <div class="navbar-default sidebar" role="navigation">
	                <div class="sidebar-nav navbar-collapse">
	                    <ul class="nav" id="side-menu">
	                        <li class="sidebar-search">
	                            <div class="input-group custom-search-form">
	                                <input type="text" class="form-control" placeholder="Search...">
	                                <span class="input-group-btn">
	                                <button class="btn btn-default" type="button">
	                                    <i class="fa fa-search"></i>
	                                </button>
	                            </span>
	                            </div>
	                            <!-- /input-group -->
	                        </li>
	                        <li>
	                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
	                        </li>
	                        <li>
	                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Restaurants<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="<?= site_url('restaurant/index') ?>">Add Restaurants</a>
	                                </li>
	                                <li>
	                                    <a href="morris.html">Manage Restaurants <span class="fa arrow"></span></a>
	                                    <ul class="nav nav-third-level">
	                                    <?php 
	                                    $query = get_restaurant_for_user($this->aauth->get_user_id());
	                                    // print_r($query);
	                                    if($query){
	                                    	foreach($query as $item){
	                                    ?>
	                                        <li>
	                                            <a href="#"><?= $item->name; ?></a>
	                                        </li>
	                                     <?php 
	                                 		}	
	                                 	} 
	                                 	?>
	                                    </ul>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
	                        <!-- <li>
	                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
	                        </li>
	                        <li>
	                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
	                        </li> -->
	                        <!-- <li>
	                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="panels-wells.html">Panels and Wells</a>
	                                </li>
	                                <li>
	                                    <a href="buttons.html">Buttons</a>
	                                </li>
	                                <li>
	                                    <a href="notifications.html">Notifications</a>
	                                </li>
	                                <li>
	                                    <a href="typography.html">Typography</a>
	                                </li>
	                                <li>
	                                    <a href="icons.html"> Icons</a>
	                                </li>
	                                <li>
	                                    <a href="grid.html">Grid</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        <!-- </li> --> 
	                        <!-- <li>
	                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="#">Second Level Item</a>
	                                </li>
	                                <li>
	                                    <a href="#">Second Level Item</a>
	                                </li>
	                                <li>
	                                    <a href="#">Third Level <span class="fa arrow"></span></a>
	                                    <ul class="nav nav-third-level">
	                                        <li>
	                                            <a href="#">Third Level Item</a>
	                                        </li>
	                                        <li>
	                                            <a href="#">Third Level Item</a>
	                                        </li>
	                                        <li>
	                                            <a href="#">Third Level Item</a>
	                                        </li>
	                                        <li>
	                                            <a href="#">Third Level Item</a>
	                                        </li>
	                                    </ul>
	                                    <!-- /.nav-third-level -->
	                                <!-- </li> -->
	                            <!-- </ul> -->
	                            <!-- /.nav-second-level -->
	                        <!-- </li> --> 
	                        <!-- <li>
	                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="blank.html">Blank Page</a>
	                                </li>
	                                <li>
	                                    <a href="login.html">Login Page</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        <!-- </li> --> 
	                    </ul>
	                </div>
	                <!-- /.sidebar-collapse -->
	            </div>
	            <!-- /.navbar-static-side -->
	        </nav>

	        <div id="page-wrapper">
	            <div class="row">
	                <div class="col-lg-12">
	                    <h1 class="page-header">Dashboard</h1>
	                </div>
	                <!-- /.col-lg-12 -->
			        <?php if($this->session->flashdata('warning')){ ?>
			          <div class="col-md-6 col-md-offset-3 alert alert-warning">
			            
			              <?php echo $this->session->flashdata('warning'); ?>
			            
			          </div>
			        <?php } ?>
			        <?php if($this->session->flashdata('error')){ ?>
			          <div class="col-md-6 col-md-offset-3 alert alert-danger">
			            
			              <?php echo $this->session->flashdata('error'); ?>
			            
			          </div>
			        <?php } ?>
			        <?php if($this->session->flashdata('success')){ ?>
			          <div class="col-md-6 col-md-offset-3 alert alert-success">
			            
			              <?php echo $this->session->flashdata('success'); ?>
			            
			          </div>
			        <?php } ?>
	            </div>
	            <!-- /.row -->
	            <div class="row">
	                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add your restaurant here
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
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
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
	            </div>
	            <!-- /.row -->
	            
	        </div>
	        <!-- /#page-wrapper -->

	    </div>
	    <!-- /#wrapper -->

	    <!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	    <!-- Metis Menu Plugin JavaScript -->
	    <script src="<?= asset_url() ?>js/metisMenu.js"></script>

	    <!-- Morris Charts JavaScript -->
	    <!-- <script src="../bower_components/raphael/raphael-min.js"></script>
	    <script src="../bower_components/morrisjs/morris.min.js"></script>
	    <script src="../js/morris-data.js"></script> -->

	    <!-- Custom Theme JavaScript -->
	    <script src="<?= asset_url() ?>js/sb-admin-2.js"></script>
	    	<script type="text/javascript" src="<?= asset_url() ?>js/bootstrap-clockpicker.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.js"></script>
	    <script src="<?= asset_url() ?>js/restaurant-admin.js"></script>



	</body>

</html>