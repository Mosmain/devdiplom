<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- <script src="/public/scripts/jquery.js"></script> -->
	<!-- <script src="/public/scripts/form.js"></script> -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

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
		<div class="hidden"></div>
		<div class="container-fluid">
			<div class="container wrapper">

				<div class="block">
					<div class="block__row">

						<div class="block__column left">
							<!-- <div class="block__item"><span>search form</span></div> -->
								<nav class="navbar">
									<form class="form-inline">
										<button class="btn my-2 my-sm-0" type="submit">
											<i class="fas fa-search"></i>
										</button>

										<input class="form-control mr-sm-2" type="search" placeholder="" aria-label="">
									</form>
								</nav>
						</div>

						<!-- logo -->
						<a href="/" class="block__column center" ondragstart="return false;">
							<!-- <div>
								<!-- <div class="block__item"><span>logo</span></div> -->
								<!-- <img src="/public/img/logo.svg" alt="">
							</div> -->
						</a>

						<div class="block__column right">
							<a href="/" class="block__item">
								<i class="fas fa-shopping-bag"></i>
								<div class="nav__body">
									<h1>Ваша корзина</h1>
									<p>10 шк.</p>
								</div>
							</a>

							<a href="/" class="block__item">
								<i class="fas fa-user-circle"></i>
								<div class="nav__body">
									<h1>Личный кабинет</h1>
								</div>
							</a>
						</div>

					</div>

				</div>

			</div>
		</div>
	</header>

	<?php echo $content; ?>
</body>

</html>