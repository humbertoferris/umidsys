<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastrar Sensor</title>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
		<?php
			include_once("nav.html");
		?>
		<div id="main" class="container-fluid">
			<h3 class="page-header text-center">Cadastro de Novo Sensor</h3>
			<form action="cadastrarSensor.php" method="post">
				 <div class="row">
					<div class="form-group col-md-3"></div>
					<div class="form-group col-md-4">
						<label for="Descricao">Descrição</label>
						<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descricao">
					</div>
					<div class="form-group col-md-2">
						<label for="Localizacao">Localizacao</label>
						<input type="text" class="form-control" id="localizacao" name="localizacao" placeholder="Localizacao">
						<span id="resposta"></span>
					</div>
					<div class="form-group col-md-3"></div>
				</div>
				<div class="row">
					<div class="form-group col-md-3"></div>
					<div class="form-group col-md-3">
						<label for="data_inst">Data de Instalação</label>
						<input type="date" class="form-control" name="data_inst" id="data_inst" placeholder="Data de instalação">
					</div>
                    <div class="row">
					<div class="form-group col-md-3"></div>
					<div class="form-group col-md-3">
						<label for="umidade_metrica">Umidade Metrica</label>
						<input type="text" class="form-control" name="umidade_metrica" id="umidade_metrica" placeholder="Umidade Metrica">
					</div>
                        <div class="row">
					<div class="form-group col-md-3"></div>
					<div class="form-group col-md-3">
						<label for="data_inst">Endereço IP</label>
						<input type="text" class="form-control" name="endereco_ip" id="endereco_ip" placeholder="Endereço IP">
					</div>
					<div class="form-group col-md-3">
					</div>
				</div>  
				<div class="row text-center">
					<hr />
					<button type="submit" class="btn btn-primary">Salvar</button>
					<a href="template.html" class="btn btn-default">Cancelar</a>
				</div>
				<div class="form-group col-md-4"></div>
			</form>
		</div>
		<?php
			include ("rodape.html");
		?> 
	</body>
</html>