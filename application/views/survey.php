<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
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

		button {
			border: 0;
			cursor: pointer;
			appearance: none;
			background-color: inherit;
			transition: transform 0.7s ease-in-out;
			font-size: 150px;
		}

		button span {
			font-size: 12px;
		}

		button h4 {
			font-weight: 600;
		}

		button:hover {
			transform: scale(1.5)
		}

		.card {
			border: 0;
			animation: fadeIn 3s;
		}

		@keyframes fadeIn {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}
	</style>
</head>

<body>

	<div class="container d-flex align-items-center justify-content-center vh-100">
		<div class="card shadow">
			<img src="https://lh3.googleusercontent.com/4wiKh-NOlj_Jp3M37Ldf4ue9e_eVYTi1XZAdAyxvHGfTjES6YRxriT37JPxRkfXd848Y0QV549ZAHTQPngZbw2nhr27be4izFKgjHa9lH1xdgLIV7OJHbP44Ez22aVXy5Q=w1600" alt="" height="200">
			<div class="card-body">
				<h1 class="text-center">
					<?php
					// $index = 1;
					// $url = $this->uri->segment($index);
					for ($i = 0; $i < 5; $i++) {
						if ($this->uri->segment(2) == "question_$i") {
							echo $question;
						}
					}
					if ($this->uri->segment(2) == "") {
						echo $question;
					}
					?>
				</h1>
				<form action="<?= base_url('welcome/' . $this->uri->segment(2)) ?>" method="post">
					<div class="row ">
						<div class="col-md-2 offset-md-1">
							<button type="submit" id="button_1" name="select_1" value="1">
								&#128514;
								<h4>Sangat Baik</h4>
							</button>
						</div>
						<div class="col-md-2">
							<button type="submit" id="button_1" name="select_2" value="2">
								&#128512;
								<h4>Baik</h4>
							</button>
						</div>
						<div class="col-md-2">
							<button type="submit" id="button_1" name="select_3" value="3">
								&#128527;
								<h4>Cukup</h4>
							</button>
						</div>
						<div class="col-md-2">
							<button type="submit" id="button_1" name="select_4" value="4">
								&#128548;
								<h4>Kurang Cukup</h4>
							</button>
						</div>
						<div class="col-md-2">
							<button type="submit" id="button_1" name="select_4" value="4">
								&#128548;
								<h4>Sangat Kurang</h4>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>