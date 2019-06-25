<div class="page-header page-header-default">
	<div class="page-header-content">
		<div class="page-title">
			<h4><i class="icon-arrow-left52 position-left"></i> 
				<span class="text-semibold">Home</span> - reservations
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
		<li><a href="index.html">
			<i class="icon-home2 position-left"></i> Home
			</a>
		</li>
		<li class="active">
			<a href="<?php echo base_url('admin/reservations'); ?>">reservations</a>
		</li>
		</ul>
		<ul class="breadcrumb-elements">
		<li>
		<a href="#">
			<i class="icon-comment-discussion position-left"></i> Support
		</a>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<i class="icon-gear position-left"></i>
			Settings
			<span class="caret"></span>
			</a>
			<ul class="dropdown-menu dropdown-menu-right">
			<li>
				<a href="#"><i class="icon-user-lock"></i>
				Account security
				</a>
			</li>
			<li>
			<a href="#"><i class="icon-statistics"></i> Analytics</a>
			</li>
			<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				
	<div class="page-container">



				<!-- Content area -->
				<div class="content">

					<!-- Page length options -->
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
							<th>Sr.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Subject</th>
							<th>Message</th>	
						</tr>
							</thead>
							<tbody>
								<?php $loop = 1;?>
							<?php foreach ($contacts as $contact) {?>
							<tr id="<?php echo $contact->id; ?>"> 
							<td><?php echo $loop++; ?></td> 	
							<td><?php echo $contact->name; ?></td>
							<td><?php echo $contact->email; ?></td>
							<td><?php echo $contact->subject; ?></td>
							<td><?php echo $contact->message; ?></td>
							</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>

					</div>
					<!-- /page length options -->



				</div>
				<!-- /content area -->


			<!-- /main content -->



