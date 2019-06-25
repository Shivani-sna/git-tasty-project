<!-- <?php print_r($categories); ?>
 --><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tasty - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('user/css/open-iconic-bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('user/css/animate.css'); ?>">
    
    <link rel="stylesheet" href="<?php echo base_url('user/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('user/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('user/css/magnific-popup.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('user/css/aos.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('user/css/ionicons.min.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('user/css/bootstrap-datepicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('user/css/jquery.timepicker.css'); ?>">

    
    <link rel="stylesheet" href="<?php echo base_url('user/css/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('user/css/icomoon.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('user/css/style.css'); ?>">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('home'); ?>">Tasty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="<?php echo base_url('home'); ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item"><a href="<?php echo base_url('home/menu'); ?>" class="nav-link">Menu</a>
                </li>
                <li class="nav-item"><a href="<?php echo base_url('home/specialities'); ?>" class="nav-link">Specialties</a>
                </li>
                <li class="nav-item"><a href="<?php echo base_url('home/reservations'); ?>" class="nav-link">Reservation</a>
                </li>
                <!-- <li class="nav-item"><a href="<?php echo base_url('home/about'); ?>" class="nav-link">Blog</a></li> -->
                <li class="nav-item"><a href="<?php echo base_url('home/about'); ?>" class="nav-link">About</a>
                </li>
                <li class="nav-item"><a href="<?php echo base_url('home/contact'); ?>" class="nav-link">Contact</a>
                </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    


          <!-- Dashboard content -->
          <?php if (isset($contents))
            {

              echo $contents;
                          
                 if(!empty($reservation_form))
             {
                echo $reservation_form;
             }
            if(!empty($about_chef))
             {
                echo $about_chef;
             }
              
               if(!empty($menu))
             {
                echo $menu;
             }
             if(!empty($bg_specialities))
             {
                echo $bg_specialities;
             }
             if(!empty($specialities))
             {
                echo $specialities;
             }
               if(!empty($reservations))
             {
                echo $reservations;
             }
              if(!empty($about))
             {
                echo $about;
             }
             if(!empty($contact))
             {
                echo $contact;
             }

             if(!empty($blog))
             {
                echo $blog;
             }

            } 
            else
            {
              echo "Not Found";
            }

           ?>
          <!-- /dashboard content -->

    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-1.jpg" class="insta-img image-popup" style="background-image: url(<?php echo base_url('user/images/insta-1.jpg'); ?>);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-2.jpg" class="insta-img image-popup" style="background-image: url(<?php echo base_url('user/images/insta-2.jpg'); ?>);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-3.jpg" class="insta-img image-popup" style="background-image: url(<?php echo base_url('user/images/insta-3.jpg'); ?>);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-4.jpg" class="insta-img image-popup" style="background-image: url(<?php echo base_url('user/images/insta-4.jpg'); ?>);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(<?php echo base_url('user/images/insta-5.jpg') ?>);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Tasty</h2>
              <p><?php echo $website_info[0]->description; ?></p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href='<?php echo $website_info[0]->twitter_url; ?>'><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="<?php echo $website_info[0]->facebook_url; ?>"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="<?php echo $website_info[0]->instagram_url; ?>"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Opening Hours</h2>
              <ul class="list-unstyled">
                <?php foreach ($working_hours as $key => $value) {?>
                   
             
                <li><a href="#" class="py-2 d-block"><?php echo $value->weekday; ?>: <span><?php echo $value->start_time; ?>: - <?php echo $value->end_time; ?></span></a></li>
                  <?php } ?>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block"></a><?php echo $website_info[0]->address; ?></li>
                <li><a href="#" class="py-2 d-block"><?php echo $website_info[0]->phone; ?></a></li>
                <li><a href="#" class="py-2 d-block"><?php echo $website_info[0]->website; ?></a></li>
                <li><a href="#" class="py-2 d-block"><?php echo $website_info[0]->email; ?></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
           <form action="<?php echo base_url('admin/subscriptions/add');?>" class="subscribe-form" role="form" method="POST">
                <div class="form-group">
                 <!--  <span class="icon icon-paper-plane"></span> -->
                  <input type="text" class="form-control" placeholder="Subscribe" id="email">
                   <span class="icon icon-paper-plane" id="submit">
                    
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/toast-css/1.1.0/grid.min.css"></script> -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script src="<?php echo base_url('user/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/jquery-migrate-3.0.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/jquery.easing.1.3.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/jquery.waypoints.min.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/jquery.stellar.min.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/owl.carousel.min.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/jquery.magnific-popup.min.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/aos.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/jquery.animateNumber.min.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/bootstrap-datepicker.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/jquery.timepicker.min.js'); ?>"></script>
 <!--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url('user/js/google-map.js') ?>"></script> -->
  <script src="<?php echo base_url('user/js/main.js') ?>"></script>
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
    
  </body>
</html>
<script type="text/javascript">
      $(document).ready(function() 
        {

         $("#submit").click(function() 
         {            
             
          var email = $('#email').val();

      
        // alert(email);

          $.ajax({
            type: 'post',
            url: 'admin/subscriptions/add/',
            data: {'email' : email},
             error: function() {
              alert('Something is wrong');
           },
           // success: function(data) {
             
           //      alert("Record added successfully");  
           // }
        
            success: function (data) {
               alert('Your Subscription');
               // Swal.fire({
               //      position: 'top-end',
               //      type: 'success',
               //       title: 'Your Subscription',
               //      showConfirmButton: true,
               //      timer:3000

               //    })
               window.location.reload();
            
          }
            // error:function(error) {
            //    alert('Already Subscription');
            // });
          });
        
   
         });

      });
    </script>
    