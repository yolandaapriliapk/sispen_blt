<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-hand-holding-usd"></i> Form Edit Data BLT 2020
	</div>

	<?php foreach ($blt2020 as $b2020) : ?>

		<form method="post" action="<?php echo base_url('c_administrator/c_blt2020/update_blt2020') ?>">

			<div class="form-group">
				<label>Nama</label>
				<input type="hidden" name="id_blt2020" value="<?php echo $b2020->id_blt2020 ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $b2020->nama ?>">
				<?php echo form_error('nama','<div class="text-danger small" ml-3>') ?>
			</div>

			<div class="form-group">
				<label>NIK</label>
				<input type="text" name="nik" class="form-control" value="<?php echo $b2020->nik ?>">
				<?php echo form_error('nik','<div class="text-danger small" ml-3>') ?>
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $b2020->alamat ?>">
				<?php echo form_error('alamat','<div class="text-danger small" ml-3>') ?>
			</div>

 			<div class="form-group ">
                <label>Menerima bantuan lain</label>
                    <select class="form-control" name="k_bantuanlain" id = "kblain">
                        <?php foreach ($kbantuanlain as $kblain) { ?>
                        	<?php if($kblain->id_kblain == $b2020->id_kblain) { ?>
                            <option value="<?= $kblain->id_kblain; ?>" selected><?= $kblain->kategori_bantuanlain; ?></option>
                            <?php } else{ ?>
                            <option value="<?= $kblain->id_kblain; ?>" ><?= $kblain->kategori_bantuanlain; ?></option>
                        <?php } } ?>
                    </select>
            </div>

			<button type="submit" class="btn btn-primary">Simpan</button>
			<br><br>
		</form>
	<?php endforeach; ?>

</div>