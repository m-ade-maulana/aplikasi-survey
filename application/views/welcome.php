<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<style>
		* {
			font-family: 'Montserrat', sans-serif;
		}

		body {
			background-image: url(<?= base_url('assets/bg-2.jpg') ?>);
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>

</head>

<body>
	<div class="container pt-5">
		<div class="card shadow mt-3 mx-auto border-0" style="width:60%">
			<div class="card-header border-0" style="background-color: white;">
				<div class="card-title text-center"><img src="https://lh3.googleusercontent.com/4wiKh-NOlj_Jp3M37Ldf4ue9e_eVYTi1XZAdAyxvHGfTjES6YRxriT37JPxRkfXd848Y0QV549ZAHTQPngZbw2nhr27be4izFKgjHa9lH1xdgLIV7OJHbP44Ez22aVXy5Q=w1600" alt="" width="750"></div>
			</div>
			<div class="card-body">
				<form action="<?= base_url('welcome/input_data') ?>" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group"><label for="" class="form-label">Nama CPDB</label><input type="text" class="form-control" name="nama_siswa" required></div>
						</div>
						<div class="col-md-6">
							<div class="form-group"><label for="" class="form-label">Nama Orang Tua</label><input type="text" class="form-control" name="nama_orang_tua" required></div>
						</div>
					</div>
					<div class="row pt-4">
						<div class="col-md-6">
							<div class="form-group"><label for="" class="form-label">Nomor HP Orang Tua CPDB</label><input type="text" class="form-control" name="nomor_hp" required></div>
						</div>
						<div class="col-md-6">
							<div class="form-group"><label for="" class="form-label">Alamat CPDB</label><input type="text" class="form-control" name="alamat" required></div>
						</div>
					</div>
					<div class="row pt-4">
						<div class="col-md-6">
							<div class="form-group"><label for="" class="form-label">Sekolah Asal</label><input type="text" class="form-control" name="asal_sekolah" required></div>
						</div>
						<div class="col-md-6">
							<div class="form-group"><label for="" class="form-label">Pendaftaran Jalur</label><select name="jalur_pendaftaran" id="" class="form-control">
									<option value="Prestasi">Prestasi (Akademik dan Non Akademik)</option>
									<option value="Afirmasi Prioritas 1">Afirmasi Prioritas 1 (anak asuh panti, dan nakes)</option>
									<option value="Afirmasi Prioritas 2">Afirmasi Prioritas 2 (anak penerima KJP plus, dll)</option>
									<option value="Zonasi">Zonasi</option>
									<option value="Pindah Tugas Orangtua dan Anak Guru">Pindah Tugas Orangtua dan Anak Guru</option>
								</select></div>
						</div>
					</div>
					<div class="d-grid gap-2">
						<button type="button" class="btn btn-primary btn-md mt-3" data-bs-toggle="modal" data-bs-target="#modalNotifikasi">Mulai Survey</button>
					</div>

					<div class="modal fade" id="modalNotifikasi">
						<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">Pemberitahuan</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<p>Setelah ini anda di minta mengisi survey mengenai pelayan PPDB kami</p>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary">Lanjut isi survey</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		<?= $this->session->flashdata('message') ?>
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>