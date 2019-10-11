 @include('layouts.site-header')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('wiuc/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Contact</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
						<h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>
						<form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.2967184389154!2d-0.19186198466114876!3d5.670169395889961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9c5ee301f579%3A0xa3a82665183839c!2sWisconsin%20International%20University%20College%2C%20Ghana!5e0!3m2!1sen!2sgh!4v1570817094989!5m2!1sen!2sgh" width="600" height="600" frameborder="20" style="border:;" allowfullscreen=""></iframe></div>
					</div>
			
			</div>
		</section>
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4 font-weight-bold">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
		
    @include('layouts.site-footer')
  </body>
</html>