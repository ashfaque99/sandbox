<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sandbox
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
 
 <section class="banner-section">
		<div class="container">
			<div class="row">  
				<div class="col-md-12">
          <h1>Hire Freelancers <br> Make Things Happen</h1>
          <p>Grow your business through the top freelancing <br> website.
              Hire talent nearby or worldwide.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 input-box">
          <input type="text" class="form-control" placeholder="what type of work do you want done?">
        </div>
        
        <div class="col-md-1">
          <button class="btn btn-primary banner-btn">Get Started</button>
        </div>
      
      </div>
			
		</div>
  </section>


  <section class="about-sandbox">
  	<div class="container">
  		<div class="row">
  			<div class="col-xs-12 col-md-12 text-center">
  				<h3>From web design and mobile apps, through to digital marketing, IT and software.<br> 
            Blue Frontier is a leading UK digital agency located in Salisbury & Southampton.</h3><br><br>
  			</div>
  		</div>
  	</div>

  	<div class="container">
  		<div class="row">
  			<div class="col-xs-12 col-md-12">
  					<div class="slick-slider">
					  <div class="slider-box text-center"><img src="<?php echo get_template_directory_uri();?>/img/client-logos/alere.png" class="img-responsive"></div>
					  <div class="slider-box text-center"><img src="<?php echo get_template_directory_uri();?>/img/client-logos/badger1.png" class="img-responsive"></div>
					  <div class="slider-box text-center"><img src="<?php echo get_template_directory_uri();?>/img/client-logos/bewiser-logo.jpg" class="img-responsive"></div>
					  <div class="slider-box text-center"><img src="<?php echo get_template_directory_uri();?>/img/client-logos/biffa.png" class="img-responsive"></div>
					  <div class="slider-box text-center"><img src="<?php echo get_template_directory_uri();?>/img/client-logos/bt-logo.png" class="img-responsive"></div>
					  
					  <div class="slider-box text-center"><img src="<?php echo get_template_directory_uri();?>/img/client-logos/butler-logo-we-optimise.jpg" class="img-responsive"></div>
					  <div class="slider-box text-center"><img src="<?php echo get_template_directory_uri();?>/img/client-logos/clinical-partners.png" class="img-responsive"></div>
					  <div class="slider-box text-center"><img src="<?php echo get_template_directory_uri();?>/img/client-logos/dd.png" class="img-responsive"></div>
					  <div class="slider-box text-center"><img src="<?php echo get_template_directory_uri();?>/img/client-logos/dream-doors-logo-we-optimise.jpg" class="img-responsive"></div>
					  <div class="slider-box text-center"><img src="<?php echo get_template_directory_uri();?>/img/client-logos/find.png" class="img-responsive"></div>
					</div>
  			</div>
  		</div>
  	</div>

  	<br><br><br>

  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-xs-12 col-md-3">
  				<div class="box-content box-one text-center">
            <img src="<?php echo get_template_directory_uri();?>/img/webdesign.svg"" alt="Logo" class="webdesign-img">
  					<h3>WEB DESIGN</h3>
  					<P>Our website design specialists transform visions into reality, creating user-friendly, responsive, engaging sites.</P>
  				</div>
  			</div>
  			<div class="col-xs-12 col-md-3">
  				<div class="box-content box-two text-center">
            <img src="<?php echo get_template_directory_uri();?>/img/development.svg" alt="Logo" class="development-img">
  					<h3>DEVELOPMENT SERVICES</h3>
  					<P>Our website design specialists transform visions into reality, creating user-friendly, responsive, engaging sites.</P>
  				</div>
  			</div>
  			<div class="col-xs-12 col-md-3">
  				<div class="box-content box-three text-center">
            <img src="<?php echo get_template_directory_uri();?>/img/digital-marketing.svg" alt="Logo" class="digital-marketing-img">
  					<h3>DIGITAL MARKETING</h3>
  					<P>Our website design specialists transform visions into reality, creating user-friendly, responsive, engaging sites.</P>
  				</div>
  			</div>
  			<div class="col-xs-12 col-md-3">
  				<div class="box-content box-four text-center">
            <img src="<?php echo get_template_directory_uri();?>/img/technical.svg" alt="Logo" class="technical-img">
  					<h3>TECHNICAL</h3>
  					<P>Our website design specialists transform visions into reality, creating user-friendly, responsive, engaging sites.</P>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>

  <section class="we-create">
  	<div class="container">
  		<div class="row">
  			<div class="col-xs-12 col-md-6 padding-remove">
  				<img src="<?php echo get_template_directory_uri();?>/img/clinical-partners-laptop.png" class="img-responsive">
  			</div>
  			<div class="col-xs-12 col-md-6">
  				<h1 style="padding-top:20px;"><strong>OUR</strong> EXPERTS<span>_</span></h1>
  				<p>We appreciate that every client and project is unique, which is why we offer all of our web & development services on a bespoke basis.<br><br>
At Blue Frontier, we love to create, not copy! Our dedicated team of specialists are always thinking outside the box to produce refreshing ideas to help your business stand out from the crowd.</p>
  			</div>
  		</div>
  		<br><br><br>
  		<div class="row">
  			<div class="col-xs-12 col-md-6">
  				<p style="padding-top:50px;">Offering a full end-to end service, we adopt a creative approach in every step of the process. Our design team carefully consider every aspect of creation to deliver an engaging, responsive, functional design.<br><br>

We are a full service UK digital agency, we combine our knowledge and expertise to create exceptional designs and strategies, tailored to your business’s needs and requirements.</p>
  			</div>
  			<div class="col-xs-12 col-md-6 padding-remove">
  				<img src="<?php echo get_template_directory_uri();?>/img/create-ipad.png" class="img-responsive">
  			</div>
  		</div>
      <br><br><br>
      <div class="row">
        <div class="col-xs-12 col-md-6 padding-remove">
          <img src="<?php echo get_template_directory_uri();?>/img/bw-phone.png" class="img-responsive" style="margin:auto; display:block;">
        </div>
        <div class="col-xs-12 col-md-6">
          <p style="padding-top:80px;">We appreciate that every client and project is unique, which is why we offer all of our web & development services on a bespoke basis.<br><br>
At Blue Frontier, we love to create, not copy! Our dedicated team of specialists are always thinking outside the box to produce refreshing ideas to help your business stand out from the crowd.</p>
        </div>
      </div>

  	</div>
  </section>

  <section class="platforms">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <img src="<?php echo get_template_directory_uri();?>/img/platform/android.png" class="img-responsive">
        </div>
         <div class="col-xs-12 col-md-2">
          <img src="<?php echo get_template_directory_uri();?>/img/platform/apple.png" class="img-responsive">
        </div>
         <div class="col-xs-12 col-md-2">
          <img src="<?php echo get_template_directory_uri();?>/img/platform/joomla.png" class="img-responsive">
        </div>
         <div class="col-xs-12 col-md-2">
          <img src="<?php echo get_template_directory_uri();?>/img/platform/magento.png" class="img-responsive">
        </div>
         <div class="col-xs-12 col-md-2">
          <img src="<?php echo get_template_directory_uri();?>/img/platform/microsoft.png" class="img-responsive">
        </div>
         <div class="col-xs-12 col-md-2">
          <img src="<?php echo get_template_directory_uri();?>/img/platform/wordpress.png" class="img-responsive">
        </div>
      </div>
    </div>
  </section>

  <section class="optimize">
  	<div class="container">
  		<div class="row">
  			<div class="col-xs-12 col-md-12 text-center">
  				<h1><strong>WE</strong> OPTIMIZE<span>_</span></h1>
  				<p>Specialists in SEO, PPC, Content Marketing and Social Media.</p>
  			</div>
  		</div>
  	</div>
    <div class="container">
      <div class="optimize-slider">

        <div class="row">
          <div class="col-xs-12 col-md-4 ">
            <div class="opt-content">
              <img src="<?php echo get_template_directory_uri();?>/img/client-logos/biffa.png" class="img-responsive">
            </div>
          </div>
          <div class="col-xs-12 col-md-4 text-center">
            <div class="opt-content">
              <h1>841%</h1>
              <h3>INCREASE TRAFFIC</h3>
            </div>
          </div>
          <div class="col-xs-12 col-md-4 text-center">
            <div class="opt-content opt-last-content">
              <h1>129%</h1>
              <h3>INCREASE IN NUMBER OF CLICKS</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-4 ">
            <div class="opt-content">
              <img src="<?php echo get_template_directory_uri();?>/img/client-logos/bewiser-logo.jpg" class="img-responsive">
            </div>
          </div>
          <div class="col-xs-12 col-md-4 text-center">
            <div class="opt-content">
              <h1>841%</h1>
              <h3>INCREASE TRAFFIC</h3>
            </div>
          </div>
          <div class="col-xs-12 col-md-4 text-center">
            <div class="opt-content opt-last-content">
              <h1>129%</h1>
              <h3>INCREASE IN NUMBER OF CLICKS</h3>
            </div>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-xs-12 text-center">
          <p style="font-size:17px ">Blue Frontier offer a full range of marketing services for your business, applying the ideal blend of technical disciplines and software tools to help your business reach its full online potential.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="work-cat">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12 text-center">
          <h1><strong>WE</strong> SUPPORT GROWTH<span>_</span></h1>
          <p class="work-cat-para">Your digital spend should be an investment not a cost.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div class="content">
            <i class="fas fa-cubes"></i>
            <h3>Branding</h3>
            <p >Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's</p>
          </div>
        </div>
         <div class="col-xs-12 col-md-4">
          <div class="content">
            <i class="fas fa-code"></i>
            <h3>Development</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's</p>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="content">
            <i class="fas fa-chart-bar"></i>
            <h3>Marketing</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="video-section">
       <div class="container">
           <div class="row">
               <div class="col-md-6 video-section-left">
                    <h2>Instapage saved $2.3M with Upwork</h2>
                    <p class="lead-intro">"Upwork took a lot of stress off of growing with minimal resources"</p>  
                    <div>
                        <div class="author-img pull-left"><img src="<?php echo get_template_directory_uri();?>/img/avatar.png" alt=""></div>
                    </div>  
                    <div class="author-text pull-left">
                        <small>
                            <strong>Tyson Quick</strong>
                            <br>
                            <span>CEO and co-founder, Instapage</span>
                        </small>
                    </div>
                    <div class="clearfix"></div>
                </div>




               <div class="col-md-6 video-section-right">


                    
                </head>
                <body>
                    <video id='my-video' class='video-js' controls preload='auto' width='558' height='312'
                        poster='<?php echo get_template_directory_uri();?>/img/video-cover.jpg' data-setup='{}'>
                        <source src='<?php echo get_template_directory_uri();?>/video/video.mp4' type='video/mp4'>
                        <p class='vjs-no-js'>
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                        </p>
                    </video>

               </div>
           </div>
       </div>
    </section>


<?php
get_footer();
