
   <script src="<?php echo base_url('user/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('user/js/jquery-migrate-3.0.1.min.js'); ?>"></script>
 <?php //print_r($categories); ?>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Our Menu</span>
            <h2>Discover Our Exclusive Menu</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 dish-menu">
            
            <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
           <?php $loop = 1;
           foreach ($categories as $category) {
            $loop++;
            ?> 

          <a href="javascript:void(0)" class="nav-link py-3 px-4 temp <?php if($loop=0){ echo "active";} ?>" id="<?php echo $category->id; ?>" data-toggle="pill" role="tab" aria-controls="v-pills-home" >
            <span class="<?php echo $category->icon; ?>"></span><?php echo $category->name; ?></a>
            <?php
              } ?> 
          
            </div>

             <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row" id="load-data">
              
                
                </div>
              </div><!-- END -->
              <div class="col-sm-12 pt-4 text-center ftco-animate">
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
                <span><a href="<?php echo base_url('home/reservations'); ?>" class="btn btn-primary btn-outline-primary p-3">Make a Reservation</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Menu and categories section  -->
    <script type="text/javascript">
      $(document).ready(function()
        {
          var base_url='<?php echo base_url(); ?>';
          // return false;
          $(".temp").click(function(event)
          {
             event.preventDefault();

            var category_id = this.id;
            
           $.ajax({
                  url: base_url+'home/get_category',
                  dataType:'json',
                  type:'post',
                  data: {id:category_id},
                  success: function (data) {
                   console.log(data);
                   if(data.status == true){
                      $('#load-data').html(data.output);
                   }else{
                    
                   }
                  },
                  error: function () {
                      alert('error');
                  }
              });       
          });  
          });
         // });
    </script>