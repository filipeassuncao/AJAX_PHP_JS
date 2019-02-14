<!DOCTYPE html>
<html lang="en">

<head>
	
	<title>Ajax</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	
</head>

<body>

	<div class="container">
		<div class="row">

			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Users</a></li>
				<li><a data-toggle="tab" href="#menu1">Cadastrar</a></li>
				<li><a data-toggle="tab" href="#menu2">Busca</a></li>
			</ul>

			<div class="tab-content">

				<div id="home" class="tab-pane fade in active">
					<br>
					<button id="btn-users" class ="btn btn-defualt">Listar Users</button>
					<hr>
					<div id="div-users"></div>
				</div>

				<div id="menu1" class="tab-pane fade">
					<br>

					<div id="div-create"></div>

					<form action="" method="POST" role="form" id="form-cadastrar" enctype="multipart/form-data">

						<div class="form-group">

							<label for="">Nome</label>

							<input type="text" class="form-control" name="name" placeholder="Nome">

						</div>

						<div class="form-group">

							<label for="">Email</label>

							<input type="text" class="form-control" name="email" placeholder="Email">

						</div>

						<button type="submit" class="btn btn-primary" id="btn-cadastrar">Cadastrar</button>

					</form>
				</div>

				<div id="menu2" class="tab-pane fade">

					<br>

					<form action="" id="form-buscar">

						<input type="text" name="name">

						<button type="submit" id="btn-buscar">Buscar</button>

						<hr>

						<div id="div-busca"></div>

					</form>

				</div>
			</div>

			<hr>

		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/js/xhttp.js"></script>
<script src="assets/js/user.js"></script>


</body>

</html>
