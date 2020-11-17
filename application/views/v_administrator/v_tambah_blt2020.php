<div class="container-fluid">
	
	<div class="alert alert-success" role"alert"> 
		<i class="fas fa-tools"></i> Form Tambah Data BLT 2020
	</div>

	<form method="post" action="<?php echo base_url('c_administrator/c_blt2020/simpan_blt2020') ?>">

		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" placeholder="Masukkan nama" class="form-control" ></input>
			<?php echo form_error('nama','<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>NIK</label>
			<input type="text" name="nik" placeholder="Masukkan nik" class="form-control" ></input>
			<?php echo form_error('nik', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" placeholder="Masukkan alamat" class="form-control" ></input>
			<?php echo form_error('alamat','<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
            <label>Bantuan lain</label>
                <select class="form-control" name="k_bantuanlain" id="kblain">
                    <?php foreach ($kbantuanlain as $kblain) { ?>
                    <option value="<?= $kblain->id_kblain; ?>"><?= $kblain->kategori_bantuanlain; ?></option>
                    <?php } ?>
                </select>
        </div>

		<button type="submit" class="btn btn-primary">Simpan</button>
		<br><br>
	</form>
</div>