
<!DOCTYPE html>
<html>
<head>
<title>Coffee Break a Blog Category</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="views/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="views/home/css/style.css" rel='stylesheet' type='text/css' />
<script src="views/home/js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
<!--start-smoth-scrolling-->
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="index.php"><img src="views/home/images/logo-1.png" alt="" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						<li><a href="index.php"  class="active">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">Typo</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="?mod=login&act=index">Login</a></li>
					</ul>
			</div>
			<div class="header-right">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<div class="banner-text">
					<h2>Aliquam erat</h2>
					<h1>Suspendisse potenti</h1>
					<!-- <div class="banner-btn">
						<a href="single.php">Read More</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-one">
						<p>Find The Most</p>
						<h3>Coffee of the month</h3>
					</div>
					<div class="about-two">
						<?php
					        foreach ($data as $value) {
					      ?>
				      		<p id="user_<?= $value['id']?>">Posted by <a href="#">Admin</a><?= $value['created_at']?></p>

					      	<img src="<?php echo $value['image']; ?>" style="width: 100%; height: 500px;"/>
							<div id="user_<?= $value['id']?>" class="about-btn">
								<div class="user_<?= $value['id']?>"><?= $value['description']?>
							</div>
								<div class="about-btn" id="user_<?= $value['id']?>">
									<a href="?mod=post&act=see-post&id=<?php echo $value['id']; ?>">Read More</a>
								</div>
								<br><br>
							</div>
						<?php } ?>
						<div style="text-align: center">
			          		<?php 
							// nếu page > 1 và num_page > 1 mới hiển thị nút prev
								if ($p > 1 && $num_page > 1){ 
									echo '<button type="submit" class="btn btn-primary prev"><a class="next" href="index.php?p='.($p-1).'" style="color:white;">Prev</a></button> ';
								}
							 // Lặp khoảng giữa
					            for ($i = 1; $i <= $num_page; $i++){
					                // Nếu là trang hiện tại thì hiển thị thẻ span
					                // ngược lại hiển thị thẻ a
					                if ($i == $p){
					                    echo '<button type="submit" class="btn btn-default numpage"><span>'.$i.'</span></button>   ';
					                }
					                else{
					                    echo '<button type="submit" class="btn btn-default numpage"><a href="index.php?p='.$i.'">'.$i.'</a></button>  ';
					                }
					            }
					            // nếu page < $num_page và num_page > 1 mới hiển thị nút prev
					            if ($p < $num_page && $num_page > 1){
					               	echo '<button  type="submit" class="btn btn-primary next" ><a  href="index.php?p='.($p+1).'" style="color:white;">Next</a></button>  ';
					            }
					        ?> 
					    </div>
						<ul>
							<li><p>Share : </p></li>
							<li><a href="#"><span class="fb"> </span></a></li>
							<li><a href="#"><span class="twit"> </span></a></li>
							<li><a href="#"><span class="pin"> </span></a></li>
							<li><a href="#"><span class="rss"> </span></a></li>
							<li><a href="#"><span class="drbl"> </span></a></li>
						</ul>
					</div>	
					<div class="about-tre">
						<div class="a-1">
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="views/home/images/c-3.jpg" alt="" /></a>
								<h6>Find The Most</h6>
								<h3><a href="single.html">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="views/home/images/c-4.jpg" alt="" /></a>
								<h6>Find The Most</h6>
								<h3><a href="single.html">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="a-1">
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="views/home/images/c-5.jpg" alt="" /></a>
								<h6>Find The Most</h6>
								<h3><a href="single.html">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="views/home/images/c-6.jpg" alt="" /></a>
								<h6>Find The Most</h6>
								<h3><a href="single.html">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="a-1">
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="views/home/images/c-7.jpg" alt="" /></a>
								<h6>Find The Most</h6>
								<h3><a href="single.html">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="views/home/images/c-8.jpg" alt="" /></a>
								<h6>Find The Most</h6>
								<h3><a href="single.html">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>	
				</div>
				<div class="col-md-4 about-right heading">
					<div class="abt-1">
						<h3>ABOUT US</h3>
						<div class="abt-one">
							<img src="views/home/images/c-2.jpg" alt="" />
							<p>Quisque non tellus vitae mauris luctus aliquam sit amet id velit. Mauris ut dapibus nulla, a dictum neque.</p>
							<div class="a-btn">
								<a href="single.html">Read More</a>
							</div>
						</div>
					</div>
					<div class="abt-2">
						<h3>YOU MIGHT ALSO LIKE</h3>
							<div class="might-grid">
								<div class="grid-might">
									<a href="single.html"><img src="views/home/images/c-12.jpg" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="single.html">Duis consectetur gravida</a></h4>
									<p>Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio.</p> 
								</div>
								<div class="clearfix"></div>
							</div>	
							<div class="might-grid">
								<div class="grid-might">
									<a href="single.html"><img src="views/home/images/c-10.jpg" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="single.html">Duis consectetur gravida</a></h4>
									<p> Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio.</p> 
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="might-grid">
								<div class="grid-might">
									<a href="single.html"><img src="views/home/images/c-11.jpg" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="single.html">Duis consectetur gravida</a></h4>
									<p> Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio.</p> 
								</div>
								<div class="clearfix"></div>
							</div>							
					</div>
					<div class="abt-2">
						<h3>ARCHIVES</h3>
						<ul>
							<li><a href="single.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
							<li><a href="single.html">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</a></li>
							<li><a href="single.html">When an unknown printer took a galley of type and scrambled it to make a type specimen book. </a> </li>
							<li><a href="single.html">It has survived not only five centuries, but also the leap into electronic typesetting</a> </li>
							<li><a href="single.html">Remaining essentially unchanged. It was popularised in the 1960s with the release of </a> </li>
							<li><a href="single.html">Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </a> </li>
							<li><a href="single.html">Software like Aldus PageMaker including versionsof Lorem Ipsum.</a> </li>
						</ul>	
					</div>
					<div class="abt-2">
						<h3>NEWS LETTER</h3>
						<div class="news">
							<form>
								<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
								<input type="submit" value="Subscribe">
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
	<!--about-end-->
	<!--slide-starts-->
	<div class="slide">
		<div class="container">
			<div class="fle-xsel">
			<ul id="flexiselDemo3">
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="views/home/images/s-1.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="views/home/images/s-2.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>			
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="views/home/images/s-3.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>		
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="views/home/images/s-4.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>	
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="views/home/images/s-5.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>	
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="views/home/images/s-6.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>				
			</ul>
							
							 <script type="text/javascript">
								$(window).load(function() {
									
									$("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 3
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									
								});
								</script>
								<script type="text/javascript" src="views/home/js/jquery.flexisel.js"></script>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--slide-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p>© 2017 Coffee Break. All Rights Reserved </p>
			</div>
		</div>
	</div>
	<!--footer-end-->
	<!-- <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#data_table').DataTable();
      } );
    </script> -->
    <!-- <script>
	     function seePost(id) {

	        // $('#seePost').modal('show');

	        $.ajax({
	              type: "GET",
	              url: "?mod=post&act=see-post&id=" + id,
	              success: function(res)
	              {
	                var result = JSON.parse(res);

	                var status = result.status;
	                if(status){
	                  var data = result.data;
	                  var image = ' <img src="'+data.image+'" height="100px" width="100px">';
	                  // $('#viewpost_id').html(data.id);
	                  // $('#vtitle').html(data.title);
	                  $('#vimage').html(image);
	                  // $('#vdescription').html(data.description);
	                  $('#vcontent').html(data.content);
	                  // $('#vstatus').html(data.status);
	                }
	              },
	              error: function (xhr, ajaxOptions, thrownError) {
	                toastr.error(thrownError);
	              }
	        });
	    }
	</script> -->
</body>
</html>
