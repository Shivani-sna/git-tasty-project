 <!-- Reservation Form -->
     <div class="ftco-section-reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 reservation pt-5 px-5">
            <div class="block-17">
              <!-- form for Reservations -->
              <form action="<?php echo base_url('admin/reservations/add');?>" method="post" class="d-block d-lg-flex">
                <div class="fields d-block d-lg-flex">

                  <div class="textfield-name one-third">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                  </div>

                  <div class="textfield-phone one-third">
                    <input type="text" class="form-control" placeholder="Phone" name="phone">
                  </div>

                  <div class="book-date one-third">
                    <input type="text" id="book_date" class="form-control" placeholder="M/D/YYYY" name="date">
                  </div>

                  <div class="book-time one-third">
                    <input type="text" id="book_time" class="form-control" placeholder="Time" name="time">
                  </div>

                  <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select id="" class="form-control" name="person">
                      <option value="0">Person</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Book a table">  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
     <!--End of  Reservation Form -->