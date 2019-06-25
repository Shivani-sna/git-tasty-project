 	<?php
 	// print_r($working_hours[0]->weekday);  ?>
 		<script type="text/javascript" src="<?php echo site_url('assets/js/core/libraries/jquery.min.js'); ?>"></script>
 <div class="page-header page-header-default">
	<div class="page-header-content">
		<div class="page-title">
			<h4><i class="icon-arrow-left52 position-left"></i> 
				<span class="text-semibold">Home</span> - Working Hours
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
		<tr><th>Weekday</th>
			<th>Start Time</th>
			<th>End Time</th>
			<th>Change</th>
		</tr>

		<?php foreach ($working_hours as $key => $value) {
			?>
			<tr>
				<th><?php echo $value->weekday ?></th>

				<th>
					<input type="time" id="start_time_<?php echo $value->id ?>" name="start_time" value="<?php echo $value->start_time ?>" class="form-control"></th>
				<th><input type="time" id="end_time_<?php echo $value->id ?>" name="end_time" value="<?php echo $value->end_time ?>" class="form-control"></th>
				<th> 
				  <td><input type="hidden" name="id" value="<?php echo $value->id ?>" id="id">
				 <a href="" id="<?php echo $value->id ?>"class="btn btn-primary btn-success submit"><span class="glyphicon glyphicon-saved"></span> save</a></th>
			</tr>
		<?php } ?>
	</tbody>
	</table>
	</div>
	</div>
	</div>
	<script>
      $(document).ready(function() 
        {

         $(".submit").click(function(event) 
         {
          
            event.preventDefault();
            // alert('hello');
             var base_url='<?php echo base_url(); ?>';
           var id  = $(this).attr('id');
           // console.log(id);
           var start = $('#start_time_'+id).val();
           var end = $('#end_time_'+id).val();
            // alert(id);
            // alert(start);
            // alert(end);
            //  console.log(end);
             //return false;
     
          $.ajax({
            type: 'POST',
            url: base_url+'admin/working_hours/update',  
            data: {
                id : id,
                start:start,
                end:end,
            },
            success: function (data) {
             console.log(data);
            
            alert('Working Hours Updated');
            }

             });
      
          });

        });

     
    </script>
				