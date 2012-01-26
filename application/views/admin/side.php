<body>
	<!-- Aside Block -->
	<section role="navigation">
		<!-- Header with logo and headline -->
		<header>
			<a href="<?php echo base_url()?>" title="Avagata"></a>
			<h1>Simple Yet Strong</h1>
		</header>
		
		<!-- User Info -->
		<section id="user-info">
			<img src="<?php echo base_url()?>/asset/admin/img/sample_user.png" alt="Sample User Avatar">
			<div>
				<a href="#" title="Account Settings and Profile Page"><?php echo $this->session->userdata('username');?></a>
				<em>Administrator</em>
				<ul>
					<li><a class="button-link" href="#" title="Edit Your Profile" rel="tooltip">Edit Profile</a></li>
					<li><a class="button-link" href="<?php echo base_url('admin/logout')?>" title="Log Out" rel="tooltip">Logout</a></li>
				</ul>
			</div>
		</section>
		<!-- /User Info -->
		
		<!-- Main Navigation -->
		<nav id="main-nav">
			<ul>
				<!-- Use class .current to open submenu on page load -->
				<li>
					<a  href="<?php echo base_url('admin/get/post');?>" title="">Post</a>
					<ul>						
						<li><a class="no-submenu" href="<?php echo base_url('admin/get/post');?>" title="Your Post">Post</a></li>
						<li><a class="no-submenu" href="<?php echo base_url('admin/get/kategori');?>" title="Your Categories">Categories</a></li>
						
					</ul>
				</li>
				<li>
					<a  href="<?php echo base_url('admin/get/user');?> " class="no-submenu" title="User" >User</a>
					
				</li>				
				<li>
					<a href="#" title="" class="no-submenu">Events</a>							
				<li><a class="no-submenu" href="#" title="">Image Gallery</a></li>				
			</ul>
		</nav>
		<!-- /Main Navigation -->
		
	</section>
	<!-- /Aside Block -->
	