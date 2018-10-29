<!DOCTYPE html>
<html lang="pt-br">
<?php include_once "conect/conexao.php";

//Executa uma consulta do banco de dados
$smtm = $cnn->prepare("SELECT users.name, COUNT(*) AS total_clientes FROM `clients` INNER JOIN users ON clients.user_adm=users.id GROUP BY clients.user_adm ORDER BY `total_clientes` DESC");
//Executa a consulta acima e grava na variavel os dados
$smtm->execute();

$results_name = $smtm->fetchALL(PDO::FETCH_ASSOC);

 ?>

<head>
	<meta charset="UTF-8">
	<title>Relatorio Havaianas</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="header">
		<div class="box-buttons-top">
			<a href="csv.php"><div class="export btn">Exportar Dados</div></a>
			<a href="cadastro.php" target="_blank"><div class="register btn">Cadastro</div></a>
		</div>
		<div class="logo">
			<img src="img/logo.327dbfa9.png">
		</div>
	</header>
	<div class="container">
		<section>
			<h3>LR7 Software - Relatorios</h3>
			<table class="tabela_dados">
				<tr>
					<th>Usuário</th>
					<th>Total de Cadastros</th>
				</tr>
				<?php  
					  foreach ($results_name as $key => $value)
     			   {
					?>
				<tr>
					<td><?= $value['name'] ?></td>
					<td><?= $value['total_clientes'] ?></td>
				</tr>
				<?php 
					}
				
				 ?>
			</table>
		</section>
	</div>
</body>
</html>