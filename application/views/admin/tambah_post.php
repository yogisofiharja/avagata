
<!-- Full Content Block -->
<!-- Note that only 1st article need clearfix class for clearing -->

<form action="<?php echo base_url('admin/post/tambah_post')?>" method="POST">
	<!-- Inputs -->
	<!-- Use class .small, .medium or .large for predefined size -->
	<fieldset>
		<legend>Tambah Postingan</legend>
		<dl>
			<dt>
				<label>Kategori</label>
			</dt>								
			<dd>
				<select name="kat">
					<option selected>Pilih Kategori</option>
					<?php foreach($list_kategori as $row){?>
					<option value="<?php echo $row->id_kat;?>"><?php echo $row->nama_kat;?></option>	
				<?php }
				?>
				</select>
			</dd>
			<dt>
				<label>Konten</label>
			</dt>
			<dd>
				<textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 80%" class="tinymce"></textarea>
			</dd>
			
		</dl>
	</fieldset>				
	<button type="submit">Submit</button> or <a href="#">Cancel</a>
</form>		
