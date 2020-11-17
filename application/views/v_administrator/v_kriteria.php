<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-hand-holding-usd"></i> Data Kriteria BLT Dana Desa
	</div>
	
	<?php echo $this->session->flashdata('pesan') ?>

	<?php echo anchor('c_administrator/c_kriteria/tambah_kriteria','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data BLT 2020</button>') ?>

	<table class="table table-bordere table-striped table-hover">
		<tr>
			<th width="20px">No</th>
			<th>Kriteria</th>
			<th>Kategori</th>
			<th width="20px" colspan="2">Aksi</th>
		</tr>

		<?php 
		$no = $this->uri->segment('4');
		foreach ($kriteria as $k) : 
		$no++
		?>
		<tr>
			<td width="20px"><?php echo$no ?></td>
			<td><?php echo$k->kriteria ?></td>
			<td><?php echo$k->kategori ?></td>
			<td width="20px"><?php echo anchor('c_administrator/c_kriteria/update/' . $k->no, '<div class= "btn btn-sm btn-primary"><i class= "fa fa-edit"></i></div>') ?></td>
			<td width="20px"><?php echo anchor('c_administrator/c_kriteria/delete/' . $k->no, '<div class= "btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>') ?></td>
		</tr>
		<?php endforeach;?>
	</table>

	<div class="row">
		<div class="col">
			<?php echo $pagination; ?>
		</div>
	</div> 
</div>