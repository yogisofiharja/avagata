
	<!-- Full Content Block -->
	<!-- Note that only 1st article need clearfix class for clearing -->

		<form action="<?php echo base_url('admin/post/update_kategori')?>" method="POST">
			<!-- Inputs -->
			<!-- Use class .small, .medium or .large for predefined size -->
			<fieldset>
				<legend>Tambah Kategori</legend>
				<dl>
					<dt>
						<label>Nama Kategori</label>
					</dt>
					<dd>
						<input type="text" class="small" name="nama_kat" value="<?php echo $nama_kat;?>">
						<p>Masukkan nama Kategori</p>
					</dd>
					
				</dl>
			</fieldset>				
			<button type="submit">Submit</button> or <a href="#">Cancel</a>
		</form>		
	