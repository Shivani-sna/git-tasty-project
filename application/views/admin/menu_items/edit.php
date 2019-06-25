
	<div class="container">
	<div class="col-md-11 pull-left">
		<!-- Basic layout-->
	<form action="<?php echo base_url('admin/menu_items/update/').$menu_items->id;?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h1 class="panel-title">Menu</h1>
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
					<label class="col-lg-3 control-label">Image:</label>
					 <div class="col-lg-9">
					<input type="file" class="file-styled" name="image">
						<img src="<?php echo base_url('uploads/').$menu_items->image;?>" height="100" width="100">		
										</div>
					 </div>
				
			 
				
			 <div class="form-group">
			 	
									<div class="form-group">
										<label class="col-lg-3 control-label">Category</label>
										 <div class="col-lg-9">
										<select class="select" name="category_id">
											<?php foreach ($categories as $key => $value) {
												?>
												<option value="<?php echo $value->id; ?>"><?php echo $value->name; ?> </option>
												<?php
											} ?>						
										</select>
										 </div>
									</div>						
				</div>		
				<div class="form-group">
					<label class="col-lg-3 control-label">Item:</label>
					 <div class="col-lg-9">

					   <input type="text" class="form-control" placeholder="item" name="item" value="<?php echo $menu_items->item; ?>">
					 </div>
				</div>	

				<div class="form-group">
					<label class="col-lg-3 control-label">Ingredient:</label>
					 <div class="col-lg-9">

					   <input type="text" class="form-control" placeholder="Ingredient" name="ingredient" value="<?php echo $menu_items->ingredient; ?>">
					 </div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Rate:</label>
					 <div class="col-lg-9">
					 	
					   <input type="text" class="form-control" placeholder="Rate" name="rate" value="<?php echo $menu_items->rate; ?>">
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