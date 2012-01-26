<!-- Article Header -->
		<header></header>
		<header>			
			<h2>User</h2>
			</br>
		</header>
		<!-- /Article Header -->
<label>Update User Yang Tersedia atau Tambah User <a href="<?php echo base_url();?>admin/get/tambah_user">Di sini</a></label></br>
<br/><br/><br/>
<table class="datatable">
	<thead>
		<tr>
			<th>Daftar User</th>
			<th>Action</th>			
		</tr>
	</thead>
	<tbody>
		<?php foreach($list_user as $row){?>
		<tr class="gradeX">
			<td><?php echo $row->username;?></td>
			<td><a href="<?php echo base_url();?>admin/get/update_user/<?php echo $row->id_user;?>" title="Edit this"><img src="<?php echo base_url();?>asset/admin/img/icons/icon_nav_settings.png"></a> <a href="<?php echo base_url();?>admin/get/hapus_user/<?php echo $row->id_user;?>" title="Delete this"><img src="<?php echo base_url();?>asset/admin/img/icons/icon_error.png"></a></td>			
		</tr>
		<?php }?>
	</tbody>
	<tfoot>
		<tr>
			<th>Daftar User</th>
			<th>Action</th>	
			
		</tr>
	</tfoot>
</table>