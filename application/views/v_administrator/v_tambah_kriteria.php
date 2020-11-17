<div class="container-fluid">
	
	<div class="alert alert-success" role"alert"> 
		<i class="fas fa-tools"></i> Form Tambah Data Kriteria BLT Dana Desa
	</div>

	<form method="post" action="<?php echo base_url('c_administrator/c_kriteria/simpan_kriteria') ?>">

		<div class="form-group">
			<label>Kriteria</label>
			<input type="text" name="kriteria" placeholder="Masukkan kriteria" class="form-control" ></input>
			<?php echo form_error('kriteria','<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>Kategori</label>
			<input type="text" name="kategori" placeholder="Masukkan kategori" class="form-control" ></input>
			<?php echo form_error('kategori', '<div class="text-danger small" ml-3>') ?>
		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>