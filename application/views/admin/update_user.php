<!-- Article Header -->
		<header></header>
		<header>			
			<h2>User</h2>
			</br>
		</header>
		<!-- /Article Header -->

<!-- Full Content Block -->
<!-- Note that only 1st article need clearfix class for clearing -->

<form action="<?php echo base_url('admin/post/update_password')?>" method="POST">
	
	<fieldset>
		<legend>Ganti Password <?php echo $user->username;?></legend>
		
		<dl>
			<dt>
				<label>Masukkan Password Lama </label>
			</dt>
			<dd>
				<input type="hidden" name="id_user" value="<?php echo $user->id_user;?>">
				<input type="password" class="small" name="password">
			</dd>			
			<dt>
				<label>Masukkan Password Baru </label>
			</dt>
			<dd>
				<input type="password" class="small" name="password_baru1">
			</dd>
			<dt>
				<label>Masukkan Kembali Password Baru </label>
			</dt>
			<dd>
				<input type="password" class="small" name="password_baru2">
			</dd>
		</dl>
	</fieldset>				
	<button type="submit">Submit</button> or <a href="#">Cancel</a>
</form>		
<?php
		if ($stat == 'error'){
		?>
		<div id="notif_login" class="notification error">
			<a href="#" class="close-notification" title="Hide Notification" rel="tooltip">x</a>
			<p>Password Baru Yang Anda Masukkan Tidak Cocok</p>

		</div>
		<?php } ?>