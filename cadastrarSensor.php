<?php
	include_once "classes\SensorDAO.php";
	$novoSensor = new Sensor($_POST["descricao"],$_POST["localizacao"],$_POST["data_inst"],$_POST["umidade_metrica"], $_POST["endereco_ip"]);
	$dao = new SensorDAO;
	$dao->Inserir($novoSensor);

    #header('Location:confirmacao_cadastro_paciente.php');
?>
