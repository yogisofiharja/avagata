<!-- Article Header -->
		<header></header>
		<header>			
			<h2>Post</h2>
			</br>
		</header>
		<!-- /Article Header -->
<!-- Full Content Block -->
<!-- Note that only 1st article need clearfix class for clearing -->

<form action="<?php echo base_url('admin/post/update_post')?>" method="POST">
	<!-- Inputs -->
	<!-- Use class .small, .medium or .large for predefined size -->
	<fieldset>
		<legend>Tambah Postingan</legend>
		<dl>
			<dt>
				<label>Kategori</label>
			</dt>								
			<dd>
				<select name="id_kat">
					
					<?php foreach($list_kategori as $row){?>
					<option value="<?php echo $row->id_kat;?>"><?php echo $row->nama_kat;?></option>	
				<?php }
				?>
				</select>
			</dd>
			<dt>
				<label>Judul</label>
			</dt>
			<dd>
				<input type="text" class="small" name="judul_post" value="<?php echo $post->judul_post;?>">
				<input type="hidden" name="id_post" value="<?php echo $post->id_post;?>">
			</dd>
			<dt>
				<label>Konten</label>
			</dt>
			<dd>
				<textarea id="elm1" name="konten_post" rows="15" cols="80" style="width: 80%" class="tinymce"><?php echo $post->konten_post;?></textarea>
			</dd>
			<dt>
				<label>Post Sekarang?</label>
			</dt>
			<dd>
				<?php if($post->status==1){?>
				<dt class="radio"><label>Ya</label></dt>
				<dd><input type="radio" name="status" value="1" checked="checked"></dd>
				<dt class="radio"><label>Tidak</label></dt>
				<dd><input type="radio" name="status" value="2"></dd>
				<?php }else if($post->status==2){?>
				<dt class="radio"><label>Ya</label></dt>
				<dd><input type="radio" name="status" value="1"></dd>
				<dt class="radio"><label>Tidak</label></dt>
				<dd><input type="radio" name="status" value="2" checked="checked"></dd>
				<?php }?>
			</dd>
			
		</dl>
	</fieldset>				
	<button type="submit">Submit</button> or <a href="#">Cancel</a>
</form>		
