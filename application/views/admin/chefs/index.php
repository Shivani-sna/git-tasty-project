<!-- <?php var_dump($actors);?> -->
<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - chefs</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><a href="<?php echo base_url('admin/chefs'); ?>">chefs</a></li>

						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
	<!-- Page container -->
	<div class="page-container">



				<!-- Content area -->
				<div class="content">

					<!-- Page length options -->
							<!-- Page length options -->
					<div class="panel panel-flat">

						<div class="panel-heading">
							<div class="container">

								<a href="<?php echo site_url('admin/chefs/add'); ?>" class="btn btn-primary pull-left"><i class="glyphicon glyphicon-plus"></i> Add New</a>
		                	</div>
							<!-- <h1 class="panel-title"><b>Actors</b></h1> -->
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>



						</div>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/toast-css/1.1.0/grid.min.css"></script>
							<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">




						<table class="table datatable-show-all">
							<thead>
								<tr>

<script type="text/javascript">


<?php

if ($this->session->flashdata('success'))
{
	?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }
else

if ($this->session->flashdata('error'))
{
	?>
    toastr.error("<?php echo $this->session->flashdata('error'); ?>");
<?php }
else

if ($this->session->flashdata('warning'))
{
	?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");

<?php }
else

if ($this->session->flashdata('info'))
{
	?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php }

?>


</script>
									<th>Sr.</th>
									<th>Image</th>
									<th>Name</th>
									<th>designation</th>
									
									<th>Edit</th>

									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php $loop = 1;?>
								<?php //foreach ($actors as $key => $actor): ?>

								<?php foreach ($chefs as $chef): ?>
								<tr id="<?php echo $chef->id; ?>"> 
								<td><?php echo $loop++; ?></td> 
								<td><img src="<?php echo base_url('uploads/').$chef->image;?>" height="100" width="100"></td>
								<td><?php echo $chef->name; ?></td>
								<td><?php echo $chef->designation; ?></td>
								

									<td><a href="<?php echo base_url("admin/chefs/update/").$chef->id; ?>">
										<i class="glyphicon glyphicon-edit"></i></a>

									</td>
									<td class="text-center">
										<a href="<?php echo base_url("admin/chefs/delete/").$chef->id; ?>"
											class="remove" onclick="confirm('Are you Sure wants to Delete?');"><i class="glyphicon glyphicon-trash"></i></a>

									</td>
								</tr>
								<?php endforeach?>
							</tbody>
						</table>
					</div>

					</div>
					<!-- /page length options -->



				</div>
				<!-- /content area -->


			<!-- /main content -->



