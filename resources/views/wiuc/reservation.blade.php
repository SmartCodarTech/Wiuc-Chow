 @include('layouts.site-header')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('wiuc/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Book a Table</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Reservation <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row d-flex no-gutters">
          <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-5">
		          	<span class="subheading">Book a table</span>
		            <h2 class="mb-4">Make Reservation</h2>
		          </div>
	            <form action="#">
	              <div class="row">
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Name</label>
	                    <input type="text" class="form-control" placeholder="Your Name">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Email</label>
	                    <input type="text" class="form-control" placeholder="Your Email">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Phone</label>
	                    <input type="text" class="form-control" placeholder="Phone">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Phone</label>
	                    <input type="text" class="form-control" id="book_date" placeholder="Date">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Time</label>
	                    <input type="text" class="form-control" id="book_time" placeholder="Time">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Person</label>
	                    <div class="select-wrap one-third">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                        <option value="">Person</option>
	                        <option value="">1</option>
	                        <option value="">2</option>
	                        <option value="">3</option>
	                        <option value="">4+</option>
	                      </select>
	                    </div>
	                  </div>
	                </div>
	                <div class="col-md-12 mt-3">
	                  <div class="form-group">
	                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
	                  </div>
	                </div>
	              </div>
	            </form>
	          </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
						<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.2967184389154!2d-0.19186198466114876!3d5.670169395889961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9c5ee301f579%3A0xa3a82665183839c!2sWisconsin%20International%20University%20College%2C%20Ghana!5e0!3m2!1sen!2sgh!4v1570817094989!5m2!1sen!2sgh" width="600" height="600" frameborder="20" style="border:;" allowfullscreen=""></iframe></div>
					</div>
        </div>
			</div>
		</section>
		
  @include('layouts.site-footer')
    
  </body>
</html>