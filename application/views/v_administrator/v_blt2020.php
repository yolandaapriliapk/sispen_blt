<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-hand-holding-usd"></i> Data BLT 2020
	</div>
	
	<?php echo $this->session->flashdata('pesan') ?>

	<?php echo anchor('c_administrator/c_blt2020/tambah_blt2020','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data BLT 2020</button>') ?>

	<!-- <?php echo form_open('c_administrator/c_blt2020/search') ?>
    <input type="text" name="keyword" class="form-control" placeholder="Search"></input>
    <button type="submit" class="btn btn-primary"> <i class="fas fa-search fa-sm"></i></button>
    <?php echo form_close() ?> -->

	<table class="table table-bordere table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIK</th>
			<th>Alamat</th>
			<th>Menerima bantuan lain</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php 
		$id_blt2020 = $this->uri->segment('4');
		foreach ($blt2020 as $b2020) : 
		$id_blt2020++
		?>
		<tr>
			<td width="20px"><?php echo$id_blt2020 ?></td>
			<td><?php echo$b2020['nama']?></td>
			<td><?php echo$b2020['nik']?></td>
			<td><?php echo$b2020['alamat']?></td>
			<td><?php echo$b2020['kategori_bantuanlain']?></td>
			<td width="20px"><?php echo anchor('c_administrator/c_blt2020/update/' . $b2020['id_blt2020'], '<div class= "btn btn-sm btn-primary"><i class= "fa fa-edit"></i></div>') ?></td>
			<td width="20px"><?php echo anchor('c_administrator/c_blt2020/delete/' . $b2020['id_blt2020'], '<div class= "btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>') ?></td>
		</tr>
		<?php endforeach;?>
	</table>

    <!-- <div class="row">
		<div class="col">
			<?php echo $pagination; ?>
		</div>
	</div> -->
</div>