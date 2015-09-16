<!DOCTYPE html>
<!--[if lt IE 7]> <html class="front ie lt-ie9 lt-ie8 lt-ie7 fluid top-full menuh-top"> <![endif]-->
<!--[if IE 7]>    <html class="front ie lt-ie9 lt-ie8 fluid top-full menuh-top sticky-top"> <![endif]-->
<!--[if IE 8]>    <html class="front ie lt-ie9 fluid top-full menuh-top sticky-top"> <![endif]-->
<!--[if gt IE 8]> <html class="animations front ie gt-ie8 fluid top-full menuh-top sticky-top"> <![endif]-->
<!--[if !IE]><!--><html class="animations front fluid top-full menuh-top sticky-top"><!-- <![endif]-->
<head>
	<title>FLAT KIT Template (v1.2.0)</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	
<!-- Bootstrap -->
	<link href="<?php echo base_url();?>resources/common/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>resources/common/bootstrap/css/responsive.css" rel="stylesheet" type="text/css" />
	
	<!-- Glyphicons Font Icons -->
	<link href="<?php echo base_url();?>resources/common/theme/fonts/glyphicons/css/glyphicons.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="<?php echo base_url();?>resources/common/theme/fonts/font-awesome/css/font-awesome.min.css">
	<!--[if IE 7]><link rel="stylesheet" href="../../../common/theme/fonts/font-awesome/css/font-awesome-ie7.min.css"><![endif]-->
	
	<!-- Uniform Pretty Checkboxes -->
	<link href="<?php echo base_url();?>resources/common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />
	
	<!-- Bootstrap Extended -->
	<link href="<?php echo base_url();?>resources/common/bootstrap/extend/bootstrap-select/bootstrap-select.css" rel="stylesheet" />
	
	<!-- JQueryUI -->
	<link href="<?php echo base_url();?>resources/common/theme/scripts/plugins/system/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />
	
	<!-- MiniColors ColorPicker Plugin -->
	<link href="<?php echo base_url();?>resources/common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.css" rel="stylesheet" />
	
	<!-- Google Code Prettify Plugin -->
	<link href="<?php echo base_url();?>resources/common/theme/scripts/plugins/other/google-code-prettify/prettify.css" rel="stylesheet" />

	<!-- Bootstrap Image Gallery -->
	<link href="<?php echo base_url();?>resources/common/bootstrap/extend/bootstrap-image-gallery/css/bootstrap-image-gallery.min.css" rel="stylesheet" />
	
	<!-- Main Theme Stylesheet :: CSS -->
	<link href="<?php echo base_url();?>resources/common/theme/css/style-default-menus-dark.css?1374506533" rel="stylesheet" />
	
	
	<!-- LESS.js Library -->
	<script src="<?php echo base_url();?>resources/common/theme/scripts/plugins/system/less.min.js"></script>
</head>
<body class="login">
	
	<!-- Main Container Fluid -->
	<div class="container-fluid menu-hidden">
		
		<!-- Content -->
		<div id="content">
		
		<!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
		<div class="navbar main hidden-print">
			
			<div class="secondary">
				<div class="container-960">
				
					<!-- Menu Toggle Button -->
					<button type="button" class="btn btn-navbar visible-phone pull-right">
						<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
					<!-- // Menu Toggle Button END -->
					
					<ul class="topnav pull-left">
						<li><a href="" class="glyphicons search single-icon"><i></i></a></li>
											</ul>
					
					<ul class="topnav pull-right">
						
												<!-- Themer -->
						<li class="hidden-phone"><a href="#themer" data-toggle="collapse" class="glyphicons eyedropper single-icon"><i></i></a></li>
						<!-- // Themer END -->
												
						<li class="hidden-phone follow">
							<span>Follow us</span> 
							<a href="" class="icon-facebook"></a>
							<a href="" class="icon-twitter"></a>
							<a href="" class="icon-youtube"></a>
							<a href="" class="icon-google-plus"></a>
						</li>
						<li class="inverse active"><a href="login.html?lang=en&amp;style=style-default-menus-dark" class="glyphicons unlock no-ajaxify"><i></i> Sign in</a></li>
						<li class="primary"><a href="signup.html?lang=en&amp;style=style-default-menus-dark" class="glyphicons user_add no-ajaxify"><i></i> Sign up</a></li>
					</ul>
					<div class="clearfix"></div>
					
				</div>
			</div>
			
			<div class="container-960">
			
			<!-- Brand -->
			<a href="index_slider_fullwidth.html?lang=en&amp;style=style-default-menus-dark" class="appbrand pull-left"><span class="text-primary">FLAT</span> KIT</a>
			
			<ul class="topnav pull-right">
				
				<li class="dropdown dd-1">
					<a href="" data-toggle="dropdown">Home pages <span class="caret"></span></a>
					<ul class="dropdown-menu pull-left">
						<li class=""><a href="index.html?lang=en&amp;style=style-default-menus-dark">Home page #1</a></li>
						<li class=""><a href="index_2.html?lang=en&amp;style=style-default-menus-dark">Home page #2</a></li>
						<li class=""><a href="index_slider.html?lang=en&amp;style=style-default-menus-dark">Revolution Slider Fixed</a></li>
						<li class=""><a href="index_slider_fullwidth.html?lang=en&amp;style=style-default-menus-dark">Revolution Slider Wide</a></li>
					</ul>
				</li>
				<li><a href="about.html?lang=en&amp;style=style-default-menus-dark">About</a></li>
				<li><a href="pricing.html?lang=en&amp;style=style-default-menus-dark">Pricing</a></li>
				<li class="dropdown dd-1">
					<a href="" data-toggle="dropdown">Shop <span class="caret"></span></a>
					<ul class="dropdown-menu pull-left">
						<li class=""><a href="shop.html?lang=en&amp;style=style-default-menus-dark">Catalog</a></li>
						<li class=""><a href="shop_product.html?lang=en&amp;style=style-default-menus-dark">Product page</a></li>
						<li class=""><a href="shop_cart.html?lang=en&amp;style=style-default-menus-dark">Shopping Cart</a></li>
					</ul>
				</li>
				<li class="dropdown dd-1">
					<a href="" data-toggle="dropdown">Blog <span class="caret"></span></a>
					<ul class="dropdown-menu pull-right">
						<li class=""><a href="blog.html?lang=en&amp;style=style-default-menus-dark">Blog Posts</a></li>
						<li class=""><a href="blog_timeline.html?lang=en&amp;style=style-default-menus-dark">Blog Timeline</a></li>
					</ul>
				</li>
				<li><a href="contact.html?lang=en&amp;style=style-default-menus-dark">Contact</a></li>
				
			</ul>
			<div class="clearfix"></div>
			<!-- // Top Menu Right END -->
			
			</div>
			
		</div>
		<!-- Top navbar END --><!-- Wrapper -->
<div id="login">

	<div class="container">
	
		<div class="wrapper">
		
			<h1 class="glyphicons unlock">Sign in <i></i></h1>
		
			<!-- Box -->
			<div class="widget widget-heading-simple widget-body-gray">
				
				<div class="widget-body">
				
					<!-- Form -->
					<form method="post" action="<?php echo base_url(); ?>index.php/auth/login">
						<label>Username or Email</label>
						<input type="text" class="input-block-level" placeholder="Your Username or Email address"/> 
						<label>Password <a class="password" href="">forgot it?</a></label>
						<input type="password" class="input-block-level margin-none" placeholder="Your Password" />
						<div class="separator bottom"></div> 
						<div class="row-fluid">
							<div class="span8">
								<div class="uniformjs"><label class="checkbox"><input type="checkbox" value="remember-me">Remember me</label></div>
							</div>
							<div class="span4 center">
								<button class="btn btn-block btn-inverse" type="submit">Sign in</button>
							</div>
						</div>
					</form>
					<!-- // Form END -->
							
				</div>
				<div class="widget-footer">
					<p class="glyphicons restart"><i></i>Please enter your username and password ...</p>
				</div>
			</div>
			<!-- // Box END -->
			
		</div>
		
	</div>
	
</div>
<!-- // Wrapper END -->	
		</div>
		<!-- // Content END -->
		
		<div id="footer" class="hidden-print">
			
			<div class="container-960 innerTB">
				<div class="row-fluid">
					<div class="span2">
						<h4>Quick Links</h4>
						<ul>
							<li><a href="index.html?lang=en&amp;style=style-default-menus-dark">Home</a></li>
							<li><a href="about.html?lang=en&amp;style=style-default-menus-dark">About</a></li>
							<li><a href="pricing.html?lang=en&amp;style=style-default-menus-dark">Pricing</a></li>
							<li><a href="blog.html?lang=en&amp;style=style-default-menus-dark">Blog</a></li>
							<li><a href="contact.html?lang=en&amp;style=style-default-menus-dark">Contact</a></li>
						</ul>
					</div>
					<div class="span4">
						<h4>About</h4>
						<div class="box-generic">
							Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</div>
					</div>
					<div class="span3">
						<h4>Our Blog</h4>
						<ul>
							<li><a href="blog.html?lang=en&amp;style=style-default-menus-dark">What is Lorem Ipsum?</a></li>
							<li><a href="blog.html?lang=en&amp;style=style-default-menus-dark">What is Lorem Ipsum?</a></li>
							<li><a href="blog.html?lang=en&amp;style=style-default-menus-dark">What is Lorem Ipsum?</a></li>
							<li><a href="blog.html?lang=en&amp;style=style-default-menus-dark">What is Lorem Ipsum?</a></li>
							<li><a href="blog.html?lang=en&amp;style=style-default-menus-dark">What is Lorem Ipsum?</a></li>
						</ul>
					</div>
					<div class="span3">
						<h4>Contact</h4>
						<ul class="icons">
							<li class="glyphicons phone"><i></i>01 230 1958</li>
							<li class="glyphicons envelope"><i></i>contact@mosaicpro.biz</li>
						</ul>
						
						<h4>Social</h4>
						<a href="" class="glyphicons standard primary facebook"><i></i></a>
						<a href="" class="glyphicons standard twitter"><i></i></a>
						<a href="" class="glyphicons standard linked_in"><i></i></a>
						<a href="" class="glyphicons standard google_plus"><i></i></a>
						<a href="" class="glyphicons standard vimeo"><i></i></a>
					</div>
				</div>
				
				<!--  Copyright Line -->
				<div class="copy">
					&copy; 2013 - <a href="http://www.mosaicpro.biz">mosaicpro.biz</a>
					<span class="appbrand">FLAT KIT</span>
				</div>
				<!--  End Copyright Line -->
				
			</div>
	
		</div>
		<!-- // Footer END -->
		
	</div>
	<!-- // Main Container Fluid END -->

<!-- Themer -->
<div id="themer" class="collapse">
	<div class="wrapper">
		<span class="close2">&times; close</span>
		<h4>Themer <span>color options</span></h4>
		<ul>
			<li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
			<li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
			<li>
				<span class="link" id="themer-custom-reset">reset theme</span>
				<span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
			</li>
		</ul>
		<div id="themer-getcode" class="hide">
			<hr class="separator" />
			<button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
			<button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- // Themer END -->

	<!-- JQuery -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
	<!-- Code Beautify -->
	<script src="../../../common/theme/scripts/plugins/other/js-beautify/beautify.js"></script>
	<script src="../../../common/theme/scripts/plugins/other/js-beautify/beautify-html.js"></script>
	
	<!-- Global -->
	<script>
	var basePath = '',
		commonPath = '../../../common/';
	</script>
	
	
	<!-- Modernizr -->
	<script src="../../../common/theme/scripts/plugins/system/modernizr.js"></script>
	
	<!-- Bootstrap -->
	<script src="../../../common/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll Plugin -->
	<script src="../../../common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.js"></script>
	
	<!-- MegaMenu -->
	<script src="../../../common/theme/scripts/demo/megamenu.js?1374506533"></script>
	
	<!-- jQuery ScrollTo Plugin -->
	<!--[if gt IE 8]><!--><script src="http://balupton.github.io/jquery-scrollto/lib/jquery-scrollto.js"></script><!--<![endif]-->
	
	<!-- History.js -->
	<!--[if gt IE 8]><!--><script src="http://browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js"></script><!--<![endif]-->
	
	<!-- jQuery Ajaxify -->
	<!--[if gt IE 8]><!--><script src="../../../common/theme/scripts/plugins/system/jquery-ajaxify/ajaxify-html5.js"></script><!--<![endif]-->
	
	
	<!-- Holder Plugin -->
	<script src="../../../common/theme/scripts/plugins/other/holder/holder.js?1374506533"></script>
	
	<!-- Uniform Forms Plugin -->
	<script src="../../../common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>

	<!-- Common Demo Script -->
	<script src="../../../common/theme/scripts/demo/common.js?1374506533"></script>
	
</body>
</html>