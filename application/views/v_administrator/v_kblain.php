<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-hand-holding-usd"></i> Data Kriteria Penerima Bantuan Lain
	</div>

	<table class="table table-bordere table-striped table-hover">
		<tr>
			<th width="20px">No</th>
			<th>Kategori</th>
		</tr>

		<?php 
		$id = 1;
		foreach ($kbantuanlain as $kblain) : ?>
		<tr>
			<td><?php echo $id++ ?></td>
			<td><?php echo$kblain->kategori ?></td>
		</tr>
		<?php endforeach;?>
	</table>
</div>