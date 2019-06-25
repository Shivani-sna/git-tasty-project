    <div class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Our Chef</span>
            <h2>Our Master Chef</h2>
          </div>
        </div>
        <div class="row">
          <?php foreach ($chefs as $chef): ?>
          <div class="col-md-4 ftco-animate">

            <div class="block-10">
              <div class="person-info">
                <span class="name"><?php echo $chef->name; ?></span>
                <span class="position"><?php echo $chef->designation; ?></span>
              </div>
              <div class="chef-img" style="background-image: url(<?php echo base_url('uploads/').$chef->image;?>)"></div>
            </div>
          
          </div> 
            <?php endforeach?>
        </div>
      </div>
    </div>
