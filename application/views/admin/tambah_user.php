

<!-- Full Content Block -->
<!-- Note that only 1st article need clearfix class for clearing -->

<form action="<?php echo base_url('admin/post/tambah_user')?>" method="POST">
	<!-- Inputs -->
	<!-- Use class .small, .medium or .large for predefined size -->
	<fieldset>
		<legend>Tambah User</legend>
		<dl>
			<dt>
				<label>Username</label>
			</dt>								
			<dd>
				<input type="text" class="small" name="username">
			</dd>
			<dt>
				<label>Password</label>
			</dt>
			<dd>
				<input type="password" class="small" name="password">
			</dd>
			<dt>
				<label>Picture</label>
			</dt>
			<dd>
				<input type="file" name="picture" accept="image/*" />
			</dd>			
		</dl>
	</fieldset>				
	<button type="submit">Submit</button> or <a href="#">Cancel</a>
</form>		
