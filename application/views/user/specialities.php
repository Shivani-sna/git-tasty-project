<!--Specialities Section -->
      <section class="ftco-section bg-light">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Our Specialties</h2>
          </div>
        </div>
        <div class="row d-flex no-gutters">
          <?php  $count = 1; 
           
        foreach ($specialities as $key => $special)
         {
           $count++;
        
          
        if($count%2==0)
        {
          ?>
          <div class="col-lg-6">
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-last" style="background-image: url(<?php echo base_url('uploads/').$special->image;?>);"></div>
              <div class="text text-center order-first">
                <h2 class="heading"><?php echo $special->name; ?></h2>
                <p><?php echo $special->description; ?></p>
                <span class="price">from $<?php echo $special->rate; ?>.00</span>
              </div>
            </div>
        
          </div>
        
           <?php }
            else
              { ?>
          <div class="col-lg-6">
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-last" style="background-image: url(<?php echo base_url('uploads/').$special->image;?>);"></div>
              <div class="text text-center order-first">
                <h2 class="heading"><?php echo $special->name; ?></h2>
                <p><?php echo $special->description; ?></p>
                <span class="price">from $<?php echo $special->rate; ?>.00</span>
              </div>
            </div>
          </div>

       <?php } ?>
   <?php  } ?>

        </div>
      </div>
    </section>
     <!--  End of Specialities Section -->