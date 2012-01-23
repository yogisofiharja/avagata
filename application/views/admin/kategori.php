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
			<td><a href="" title="Edit this"><img src="<?php echo base_url();?>asset/admin/img/icons/icon_nav_settings.png"></a> <a href="" title="Delete this"><img src="<?php echo base_url();?>asset/admin/img/icons/icon_error.png"></a></td>			
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