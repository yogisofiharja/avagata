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
				<li class="current">
					<a href="#" title="" class="projects">Post</a>
					<ul>						
						<li><a href="<?php echo base_url('admin/post/post');?>" title="">Post</a></li>
						<li><a href="<?php echo base_url('admin/get/kategori');?>" title="Your Categories">Categories</a></li>
						
					</ul>
				</li>
				<li>
					<a href="#" title="" class="articles">User</a>
					<ul>						
						<li><a href="#" title="">Add User</a></li>
						<li><a href="#" title="">Update User</a></li>
						<li><a href="#" title="">Update Password</a></li>
						
					</ul>
				</li>				
				<li>
					<a href="#" title="" class="events">Events</a>
					<ul>						
						<li><a href="#" title="">Add Event</a></li>
						<li><a href="#" title="">Edit Event</a></li>						
					</ul>
				</li>				
				<li><a href="#" title="" class="gallery">Image Gallery</a></li>				
			</ul>
		</nav>
		<!-- /Main Navigation -->
		
	</section>
	<!-- /Aside Block -->
	