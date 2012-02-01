<!-- Article Header -->
		<header></header>
		<header>			
			<h2>Event</h2>
			</br>
		</header>
		<!-- /Article Header -->
<label>Update Eventmu atau Tambah Eventmu <a href="<?php echo base_url();?>admin/get/tambah_post">Di sini</a></label></br>
<br/><br/><br/>
<table class="datatable">
	
	<thead>
		<tr>
			<th>Nama Event</th>
			<th>Tgl Event</th>
			<th>Tempat Event</th>
			<th>Keterangan</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($list_event as $row){?>
		<tr class="gradeX">
			
			<td><?php echo $row->nama_event;?></td>
			<td><?php echo $row->tgl_event;?></td>
			<td><?php echo $row->tmp_event;?></td>
			<td><?php echo $row->keterangan; ?></td>
			<td><a href="<?php echo base_url();?>admin/get/update_event/<?php echo $row->id_event;?>" title="Edit this"><img src="<?php echo base_url();?>asset/admin/img/icons/icon_nav_settings.png"></a> <a href="<?php echo base_url();?>admin/get/hapus_event/<?php echo $row->id_event;?>" title="Delete this"><img src="<?php echo base_url();?>asset/admin/img/icons/icon_error.png"></a></td>			
		</tr>
		<?php }?>
	</tbody>
	
</table>