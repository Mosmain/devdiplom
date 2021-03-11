<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- <script src="/public/scripts/jquery.js"></script> -->
	<!-- <script src="/public/scripts/form.js"></script> -->

	<link rel="stylesheet" href="/public/styles/main.css">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
	</script>

	<title><?php echo $title; ?></title>
	<!-- <script type="text/javascript">
		$(document).ready(function(){
		alert(jQuery.fn.jquery);
		});
	</script> -->
</head>

<body>

	<header>
		<div class="container-fluid">
			<div class="container wrapper">

				<div class="block">
					<div class="block__row">

						<div class="block__column left">
							<div class="block__item"><span>search form</span></div>
						</div>

						<div class="block__column center">
							<div class="block__item"><span>logo</span></div>
						</div>

						<div class="block__column right">
							<div class="block__item">
								<span>icon</span>
								<div class="nav__body">
									<p><b>header</b></p>
									<p>description</p>
								</div>
							</div>

							<div class="block__item">
								<span>icon</span>
								<div class="nav__body">
									<p><b>header</b></p>
									<p>description</p>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>
		</div>
	</header>

	<?php echo $content; ?>
</body>

</html>