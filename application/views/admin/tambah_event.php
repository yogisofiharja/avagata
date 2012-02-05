<!-- Article Header -->
		<header></header>
		<header>			
			<h2>Event</h2>
			</br>
		</header>
		<!-- /Article Header -->

<br/>
<form action="<?php echo base_url('admin/post/tambah_event')?>" method="POST">
	<!-- Inputs -->
	<!-- Use class .small, .medium or .large for predefined size -->
	<fieldset>
		<legend>Tambah Event</legend>
		<dl>
			
			<dt>
				<label>Nama Event</label>
			</dt>
			<dd>
				<input type="text" class="small" name="nama_event">
			</dd>
			<dt>
				<label>Tanggal Event</label>
			</dt>
			<dd>
				<input type="text" class="small" name="tgl_event">
			</dd>
			<dt>
				<label>Mulai</label>
			</dt>
			<dd>
				<select name="jam_mulai_event">
					<option>Mulai</option>
					<?php for($i=0;$i<=23;$i++){?>
					<option value="<?php echo "$i:00";?>"><?php echo "$i:00";?></option>	
				<?php }
				?>
				</select>
			</dd>
			<dt>
				<label>Berakhir</label>
			</dt>
			<dd>
				<select name="jam_akhir_event">
					<option>Berakhir</option>
					<?php for($i=0;$i<=23;$i++){?>
					<option value="<?php echo "$i:00";?>"><?php echo "$i:00";?></option>	
				<?php }
				?>
				</select>
			</dd>
			<dt>
				<label>Tempat Event</label>
			</dt>
			<dd>
				<input type="text" class="small" name="tmp_event">
			</dd>
			<dt>
				<label>Keterangan</label>
			</dt>
			<dd>
				<textarea name="keterangan" rows="10" cols="30" style="width: 40%"></textarea>
			</dd>
			
			
		</dl>
	</fieldset>				
	<button type="submit">Submit</button> or <a href="#">Cancel</a>
</form>