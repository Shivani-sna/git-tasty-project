 	<?php
 	//print_r($website_info[0]->id);  ?>
 <div class="page-header page-header-default">
	<div class="page-header-content">
		<div class="page-title">
			<h4><i class="icon-arrow-left52 position-left"></i> 
				<span class="text-semibold">Home</span> - Website Information 
			</h4>
		</div>
		<div class="heading-elements">
			<div class="heading-btn-group">
			<a href="#" class="btn btn-link btn-float has-text">
				<i class="icon-bars-alt text-primary"></i>
				<span>Statistics</span>
			</a>
			<a href="#" class="btn btn-link btn-float has-text">
				<i class="icon-calculator text-primary"></i>
				 <span>Invoices</span>
			</a>
			<a href="#" class="btn btn-link btn-float has-text">
				<i class="icon-calendar5 text-primary"></i> 
				<span>Schedule</span>
			</a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><a href="<?php echo base_url('admin/website_info'); ?>">Website Information 
			</h4> </a></li>

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
					<div class="panel panel-flat">

						<div class="panel-heading">
							
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

	<tbody>
	<tr> 
		<th>Address</th>
		<td><?php echo $website_info[0]->address ?></td>
	</tr>
	<tr> 
		<th>Phone</th>
		<td><?php echo $website_info[0]->phone ?></td>
	</tr>	
	<tr> 
		<th>Email</th>
		<td><?php echo $website_info[0]->email ?></td>
	</tr>
	<tr> 
		<th>Website</th>
		<td><?php echo $website_info[0]->website ?></td>
	</tr>
	<tr> 
		<th>Description</th>
		<td><?php echo $website_info[0]->description ?></td>
	</tr>
	<tr> 
		<th>Twitter URL</th>
		<td><?php echo $website_info[0]->twitter_url ?></td>
	</tr>
	<tr> 
		<th>Facebook URL</th>
		<td><?php echo $website_info[0]->facebook_url ?></td>
	</tr>
		<tr> 
		<th>Instagram URL</th>
		<td><?php echo $website_info[0]->instagram_url ?></td>
	</tr>
	<tr>
		<th>
			<a href="<?php echo base_url("admin/website_info/update/").$website_info[0]->id; ?>" class="btn btn-success pull-left"><i class="glyphicon glyphicon-edit"></i>Edit</a>
		                	</th>
	</tr>
	</tbody>
	</table>
	</div>
	</div>
	</div>
				