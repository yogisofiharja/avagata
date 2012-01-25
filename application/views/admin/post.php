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
			
			<td><?php echo $row->nama_kat;?></td>
			<td><?php echo $row->judul_post;?></td>
			<td><?php echo $row->tanggal_post;?></td>
			<td><?php if($row->status==1){
				    echo "Telah di Post";
				  }else
				  if($row->status==2){
				    echo "Belum di Post";
				  }
			      ?></td>
			<td><a href="<?php echo base_url();?>admin/get/update_post/<?php echo $row->id_post;?>" title="Edit this"><img src="<?php echo base_url();?>asset/admin/img/icons/icon_nav_settings.png"></a> <a href="<?php echo base_url();?>admin/get/hapus_post/<?php echo $row->id_post;?>" title="Delete this"><img src="<?php echo base_url();?>asset/admin/img/icons/icon_error.png"></a></td>			
		</tr>
		<?php }?>
	</tbody>
	
</table>