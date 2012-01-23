<label>Update Postinganmu atau Tambah Postinganmu <a href="<?php echo base_url();?>admin/get/tambah_post">Di sini</a></label></br>
<br/><br/><br/>
<table class="datatable">
	<thead>
		<tr>
			<th>Kategori</th>
			<th>Judul</th>
			<th>Tanggal Post</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($list_post as $row){?>
		<tr class="gradeX">
			<td><?php echo $row->id_kat;?></td>
			<td><?php echo $row->judul_post;?></td>
			<td><?php echo $row->tanggal_post;?></td>
			<td><?php echo $row->status;?></td>
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