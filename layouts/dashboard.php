<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="dian">

      <title>TUGAS1 | PBWL PLN</title>
      <link rel="stylesheet" href="layouts/assets/css/style.css">
      <link rel="stylesheet" href="layouts/assets/img/logo pln.png">
	<script src="<?php echo AST; ?>/datatables/datatables.min.js"></script>

	<style>
		.footer{
    	width: 50px;
		height: 30px;
		}
	</style>

</head>

<body>

	<aside>

		<header>
		<img src="layouts\assets/img/LOGO PLN.png" alt="logo pln" class="logo">
	<h1>Perusahaan Listrik Negara</h1>
</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/Pelanggan">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Pelanggan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/Golongan">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Golongan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/users">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Users
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/dashboard/logout">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Logout
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023 - <?php echo date('Y'); ?>. Designed by dian
		</footer>
	</main>

	<script>
		new DataTable('#dtb', {
			info: false,
			ordering: true,
			paging: true
		});
	</script>

</body>

</html>