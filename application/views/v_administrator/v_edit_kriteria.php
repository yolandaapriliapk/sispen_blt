<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-hand-holding-usd"></i> Form Edit Kriteria BLT Dana Desa
	</div>

	<?php foreach ($kriteria as $k) : ?>

		<form method="post" action="<?php echo base_url('c_administrator/c_kriteria/update_kriteria') ?>">

			<div class="form-group">
				<label>Kriteria</label>
				<input type="hidden" name="no" value="<?php echo $k->no ?>">
				<input type="text" name="kriteria" class="form-control" value="<?php echo $k->kriteria ?>">
				<?php echo form_error('kriteria','<div class="text-danger small" ml-3>') ?>
			</div>

			<div class="form-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control" value="<?php echo $k->kategori ?>">
				<?php echo form_error('kategori','<div class="text-danger small" ml-3>') ?>
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>
	<?php endforeach; ?>

</div>