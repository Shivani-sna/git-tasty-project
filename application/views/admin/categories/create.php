<div class="row">
	<div class="container">
	<div class="col-md-11 pull-left">

							<!-- Basic layout-->
	<form action="<?php echo base_url('admin/categories/add');?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h1 class="panel-title">categories</h1>
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
					<label class="col-lg-3 control-label">Icon:</label>
					 <div class="col-lg-9">
					<input type="text" class="form-control" placeholder="icon" name="icon">
					 </div>
				</div>
				
			 
				<div class="form-group">
					<label class="col-lg-3 control-label">Name:</label>
					 <div class="col-lg-9">
					<input type="text" class="form-control" placeholder="Name" name="name">
					 </div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Status:</label>
					 <div class="col-lg-9">

					   <input type="text" class="form-control" placeholder="Status" name="status">
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