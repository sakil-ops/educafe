<?php
require_once('config/db_con.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />

	<link rel="stylesheet" href="assets/css/project.css" />
	<title>Teacher</title>
</head>
<body>
	              <!--header start -->

        <header id="header_top" >

		      <div class="container ">
			      <div class="d-flex justify-content-between ">
				      <div class="child1 ">
					      <ul class="header_ul1 d-flex ">
						     <li class="number">
							    <a href="#">
							     <i class="fa fa-mobile" aria-hidden="true"></i>
                                 <span class="h_span">+(00) 112 233 445 56</span>
							    </a>
							 </li>
							 <li>
							   <a href="#">
							     <i class="far fa-envelope" aria-hidden="true"></i>
                                 <span class="h_span">crazycafe.net@gmail.com</span>
							   </a>
							 </li>
							 <li>
							    <a href="#">
							     <i class="far fa-envelope" aria-hidden="true"></i>
                                 <span class="h_span">Sun-Mon (9am-4pm)</span>
                                </a>
							 </li>
						  </ul>
					  </div>
				      <div class="child2 ">
					      <ul class="login d-flex">
						     <li>
							     <a href="#">Login</a>
							 </li>
							 <li>|</li>
							 <li>
							     <a href="#">Register</a>
							 </li>

						  </ul>
					  </div>
				  </div>
			  </div>

		</header>

				  <!--header end -->

				  <!--nav start -->

		<div class="nav2">
	       <div class="container">
			  <nav class="navbar navbar-expand-lg navbar-light ">
                 <a class="navbar-brand" href="#"><img src="../image/nav logo.png" alt="" /></a>
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                </button>


             <div class="collapse navbar-collapse nav_ul" id="navbarTogglerDemo02">
                <ul class="navbar-nav ">
                  <li class="nav-item ">
                      <a class="nav-link " href="1_homepage.html">Home <span class="sr-only"></span></a>
                 </li>
	             <li class="nav-item">
                      <a class="nav-link " href="2_about.html">About</a>
                 </li>
                 <li class="nav-item">
                      <a class="nav-link " href="3_course.html">Course</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link " href="4_course_details.html">Events</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active " href="5_teacher.html">Pages</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link " href="6_contact.html">Contact</a>
                 </li>
	             <li class="nav-item">
                    <a class="nav-link " href="7_error.html">
		               <i class="fas fa-cart-plus"></i>
		               <img src="../image/card.png" alt="" class="cart" />
		           </a>
                </li>
             </ul>
         </div>
         </nav>
      </div>
 </div>
  <!--nav end -->
 <section class="course_bg">

         <h3>Our Teacher</h3>
		 <a href="#" class="h_link">Home</a>/
		 <a href="#" class="c_link">Teacher</a>
 </section>
 <section class="teacher">
    <div class="container">
      <div class="teacher_heading"><h2>Our Teacher</h2></div>
	      <div class="row">
	       <div class="col-md-4 ">

					 <?php
					 if($dbh){
							 $sql = "SELECT * FROM `teachers` where id = 1";
							 $stmt = $dbh->prepare($sql);
							 $stmt->execute();
							 $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
							 foreach($row as $val){
					 ?>


		        <div class="card teacher_card" <?php if($val['id'] == 1) echo 'active';?>>
				    <img src="admin/<?php echo $val['image']; ?>" alt="" class="card-img-top w-50 m-auto" />
					<div class="card-body">
					   <h5 class="card-title"><?php echo $val['name']; ?></h5>
					   <ul class="icon d-flex justify-content-center teacher_media">
								      <li><a href="<?php echo $val['f_link']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								      <li><a href="<?php echo $val['t_link']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								      <li><a href="<?php echo $val['g_link']; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								      <li><a href="<?php echo $val['i_link']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								      <li><a href="<?php echo $val['l_link']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								   </ul>
								   <p class="card-text"><?php echo $val['long_description']; ?></p>
					</div>
				</div>
				<?php
						}
				}
				?>
		   </div>
	       <div class="col-md-4">
		    <div class="card teacher_card">
				    <img src="../image/teacher.png" alt="" class="card-img-top" />
					<div class="card-body">
					   <h5 class="card-title">Mashok Khan</h5>
					   <ul class="icon d-flex justify-content-center teacher_media">
								      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								   </ul>
								   <p class="card-text">Duis autem vel eum iriure dolor in hendrer
                                    it in vulputate velit esse molestie consequa
                                   vel illum dolore eu feugiat nulla .</p>
					</div>
				</div>
		   </div>
	       <div class="col-md-4">
		     <div class="card teacher_card">
				    <img src="../image/teacher.png" alt="" class="card-img-top" />
					<div class="card-body">
					   <h5 class="card-title">Mashok Khan</h5>
					   <ul class="icon d-flex justify-content-center teacher_media">
								      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								   </ul>
								   <p class="card-text">Duis autem vel eum iriure dolor in hendrer
                                    it in vulputate velit esse molestie consequa
                                   vel illum dolore eu feugiat nulla .</p>
					</div>
				</div>
		   </div>
	  </div>
	 <div class="row">
	       <div class="col-md-4">
		        <div class="card teacher_card">
				    <img src="../image/teacher.png" alt="" class="card-img-top" />
					<div class="card-body">
					   <h5 class="card-title">Mashok Khan</h5>
					   <ul class="icon d-flex justify-content-center teacher_media">
								      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								   </ul>
								   <p class="card-text">Duis autem vel eum iriure dolor in hendrer
                                    it in vulputate velit esse molestie consequa
                                   vel illum dolore eu feugiat nulla .</p>
					</div>
				</div>
		   </div>
	       <div class="col-md-4">
		    <div class="card teacher_card">
				    <img src="../image/teacher.png" alt="" class="card-img-top" />
					<div class="card-body">
					   <h5 class="card-title">Mashok Khan</h5>
					   <ul class="icon d-flex justify-content-center teacher_media">
								      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								   </ul>
								   <p class="card-text">Duis autem vel eum iriure dolor in hendrer
                                    it in vulputate velit esse molestie consequa
                                   vel illum dolore eu feugiat nulla .</p>
					</div>
				</div>
		   </div>
	       <div class="col-md-4">
		     <div class="card teacher_card">
				    <img src="../image/teacher.png" alt="" class="card-img-top" />
					<div class="card-body">
					   <h5 class="card-title">Mashok Khan</h5>
					   <ul class="icon d-flex justify-content-center teacher_media">
								      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								   </ul>
								   <p class="card-text">Duis autem vel eum iriure dolor in hendrer
                                    it in vulputate velit esse molestie consequa
                                   vel illum dolore eu feugiat nulla .</p>
					</div>
				</div>
		   </div>
	  </div>
	 <div class="row">
	       <div class="col-md-4">
		        <div class="card teacher_card">
				    <img src="../image/teacher.png" alt="" class="card-img-top" />
					<div class="card-body">
					   <h5 class="card-title">Mashok Khan</h5>
					   <ul class="icon d-flex justify-content-center teacher_media">
								      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								   </ul>
								   <p class="card-text">Duis autem vel eum iriure dolor in hendrer
                                    it in vulputate velit esse molestie consequa
                                   vel illum dolore eu feugiat nulla .</p>
					</div>
				</div>
		   </div>
	       <div class="col-md-4">
		    <div class="card teacher_card">
				    <img src="../image/teacher.png" alt="" class="card-img-top" />
					<div class="card-body">
					   <h5 class="card-title">Mashok Khan</h5>
					   <ul class="icon d-flex justify-content-center teacher_media">
								      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								   </ul>
								   <p class="card-text">Duis autem vel eum iriure dolor in hendrer
                                    it in vulputate velit esse molestie consequa
                                   vel illum dolore eu feugiat nulla .</p>
					</div>
				</div>
		   </div>
	       <div class="col-md-4">
		     <div class="card teacher_card">
				    <img src="../image/teacher.png" alt="" class="card-img-top" />
					<div class="card-body">
					   <h5 class="card-title">Mashok Khan</h5>
					   <ul class="icon d-flex justify-content-center teacher_media">
								      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								   </ul>
								   <p class="card-text">Duis autem vel eum iriure dolor in hendrer
                                    it in vulputate velit esse molestie consequa
                                   vel illum dolore eu feugiat nulla .</p>
					</div>
				</div>
		   </div>
	  </div>
	  <div class="next_prev">
	       <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item ">
      <a class="page-link" href="#" tabindex="-1">&lt;</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item">
      <a class="page-link" href="#">&gt;</a>
    </li>
  </ul>
</nav>
	  </div>
	  </div>
 </section>


 							 <!-- sign up section start -->
	         <section class="email_option">
			        <div class="container">
					   <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
					   <h6>Signup to receive email updates about courses</h6>
					   <input type="email" placeholder="Your Email" />
					   <button><i class="fa fa-envelope" aria-hidden="true"></i></button>
					</div>
			 </section>
			              <!-- sign up section end -->
									  <!-- footer section start -->

			 <footer class="footer">
			       <div class="container">
				       <div class="row">
					       <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3 first_col">
						        <a class="f_logo" href="#"><img src="../image/logo_dark.png" alt="" /></a>
								<p>Lorem ipsum dolor sit ame consectetu
                                  adipiscing elit sed diam nonummynibh
                                  euismod tincidunt ut laoreet dolorema
                                  ad minim veniam.
								</p>
								<ul class="footer_ul ">
						     <li class="f_number">
							    <a href="#">
							     <i class="fa fa-mobile" aria-hidden="true"></i>
                                 <span class="f_span">+(00) 112 233 445 56</span>
							    </a>
							 </li>
							 <li>
							   <a href="#">
							     <i class="far fa-envelope" aria-hidden="true"></i>
                                 <span class="f_span">crazycafe.net@gmail.com</span>
							   </a>
							 </li>
							 </ul>
						   </div>
					       <div class="col-md-3 col-sm-12 col-xs-12 col-xl-3 second_col">
						        <h5>Link</h5>
								<div class="row">
								    <div class="col-6 ">
									    <ul>
										    <li><a href="#"><i class="fa fa-angle-right first_color" aria-hidden="true"></i>Home</a></li>
										    <li><a href="#"><i class="fa fa-angle-right first_color" aria-hidden="true"></i>Courses</a></li>
										    <li><a href="#"><i class="fa fa-angle-right first_color" aria-hidden="true"></i>News</a></li>
										    <li><a href="#"><i class="fa fa-angle-right first_color" aria-hidden="true"></i>Events</a></li>
										</ul>
									</div>
								    <div class="col-6 ">
									    <ul>
										    <li><a href="#"><i class="fa fa-angle-right first_color" aria-hidden="true"></i>Gallery</a></li>
										    <li><a href="#"><i class="fa fa-angle-right first_color" aria-hidden="true"></i>Courses</a></li>
										    <li><a href="#"><i class="fa fa-angle-right first_color" aria-hidden="true"></i>News</a></li>
										    <li><a href="#"><i class="fa fa-angle-right first_color" aria-hidden="true"></i>Events</a></li>
										</ul>
									</div>
								</div>
						   </div>
					       <div class="col-md-3 col-sm-12 col-xs-12 col-xl-3 third_col">
						       <h5>Support</h5>
							   <ul>
								  <li><a href="#"><i class="fa fa-angle-right first_color" aria-hidden="true"></i>Documentation</a></li>
								  <li><a href="#"><i class="fa fa-angle-right first_color" aria-hidden="true"></i>Forums</a></li>
								  <li><a href="#"><i class="fa fa-angle-right first_color" aria-hidden="true"></i>Language Packs</a></li>
								  <li><a href="#"><i class="fa fa-angle-right first_color" aria-hidden="true"></i>Relaease Status</a></li>
							   </ul>

						   </div>
					       <div class="col-md-3 col-sm-12 col-xs-12 col-xl-32 fourth_col">
						       <h5>Flickr Album</h5>
							    <div class="row">
								    <div class="col-4">
									  <a href="../image/flicker1.png"><img src="../image/flicker1.png" alt="" /></a>
									</div>
								    <div class="col-4">
									  <a href="../image/flicker2.png"><img src="../image/flicker2.png" alt="" /></a>
									</div>
								    <div class="col-4">
									    <a href="../image/flicker3.png"><img src="../image/flicker3.png" alt="" /></a>
									</div>
								    <div class="col-4">
									   <a href="../image/flicker1.png"><img src="../image/flicker1.png" alt="" /></a>
									</div>
								    <div class="col-4">
									   <a href="../image/flicker2.png"><img src="../image/flicker2.png" alt="" /></a>
									</div>
								    <div class="col-4">
									    <a href="../image/flicker3.png"><img src="../image/flicker3.png" alt="" /></a>
									</div>
								</div>
						   </div>
					   </div>
					   <div class="copyright">
					       <div class="row">
						       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 copy">
							        &copy; Copy right2020.All Right Reserved
							   </div>
						       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">Design by Md Shakil Ahemed</div>
						       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							       <ul class="icon d-flex justify-content-center">
								      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								   </ul>
							   </div>
						   </div>
					   </div>

				   </div>

			 </footer>




<script src="../js/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
	<script src="https://kit.fontawesome.com/f92756f177.js" crossorigin="anonymous"></script>
	<script type="text/javascript">
    $('.testi').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay:true,
    navText: ['<i class="fa fa-chevron-left font_35" aria-hidden="true"></i>','<i class="fa fa-chevron-right font_35" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
	</script>
</body>
</html>
