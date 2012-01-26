<!-- Article Header -->
		<header></header>
		<header>			
			<h2>Kategori</h2>
			</br>
		</header>
		<!-- /Article Header -->
<label>Update Kategori Yang Tersedia atau Tambah Kategori <a href="<?php echo base_url();?>admin/get/tambah_kategori">Di sini</a></label></br>
<br/><br/><br/>
<table class="datatable">
	<thead>
		<tr>
			<th>Nama Kategori</th>
			<th>Action</th>			
		</tr>
	</thead>
	<tbody>
		<?php foreach($list_kategori as $row){?>
		<tr class="gradeX">
			<td><?php echo $row->nama_kat;?></td>
			<td><a href="<?php echo base_url();?>admin/get/update_kategori/<?php echo $row->id_kat;?>" title="Edit this"><img src="<?php echo base_url();?>asset/admin/img/icons/icon_nav_settings.png"></a> <a href="<?php echo base_url();?>admin/get/hapus_kategori/<?php echo $row->id_kat;?>" title="Delete this"><img src="<?php echo base_url();?>asset/admin/img/icons/icon_error.png"></a></td>			
		</tr>
		<?php }?>
	</tbody>
	<tfoot>
		<tr>
			<th>Nama Kategori</th>
			<th>Nama Kategori</th>
			
		</tr>
	</tfoot>
</table>