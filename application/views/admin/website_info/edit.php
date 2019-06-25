<!-- <?php print_r($chefs); ?> -->
<div class="row">
	<div class="container">
	<div class="col-md-11 pull-left">

							<!-- Basic layout-->
	<form action="<?php echo base_url('admin/website_info/update/').$website_info->id;?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h1 class="panel-title">Website Information</h1>
					<div class="heading-elements">
						<ul class="icons-list">
						    <li><a data-action="collapse"></a></li>
						    <li><a data-action="reload"></a></li>
						    <li><a data-action="close"></a></li>
						</ul>
					</div>
			</div>

										
			<div class="panel-body">

				
			 
				<div class="form-group">
					<label class="col-lg-3 control-label">Address:</label>
					 <div class="col-lg-9">
					<input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $website_info->address; ?>">
					 </div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Phone:</label>
					 <div class="col-lg-9">
					<input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo $website_info->phone; ?>">
					 </div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Email:</label>
					 <div class="col-lg-9">
					<input type="text" class="form-control" placeholder="email" name="email" value="<?php echo $website_info->email; ?>">
					 </div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Website:</label>
					 <div class="col-lg-9">
					<input type="text" class="form-control" placeholder="website" name="website" value="<?php echo $website_info->website; ?>">
					 </div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Description:</label>
					 <div class="col-lg-9">
					<input type="text" class="form-control" placeholder="description" name="description" value="<?php echo $website_info->description; ?>">
					 </div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Twitter URL:</label>
					 <div class="col-lg-9">
					<input type="text" class="form-control" placeholder="twitter_url" name="twitter_url" value="<?php echo $website_info->twitter_url; ?>">
					 </div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Facebook URL:</label>
					 <div class="col-lg-9">
					<input type="text" class="form-control" placeholder="facebook_url" name="facebook_url" value="<?php echo $website_info->facebook_url; ?>">
					 </div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Instragam URL:</label>
					 <div class="col-lg-9">
					<input type="text" class="form-control" placeholder="instagram_url" name="instagram_url" value="<?php echo $website_info->instagram_url; ?>">
					 </div>
				</div>	

			<div class="text-right">
			<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
		</div>
			</div>
			
	</div>
</div>
</form>
							<!-- /basic layout -->
</div>
</div>
</div>