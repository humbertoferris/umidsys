	<?php
	require_once "Sensor.php";
	require_once "Conexao.php";
	class SensorDAO {
		public static $instance;
		
		public static function getInstance() {
			if (!isset(self::$instance))
				self::$instance = new SensorDAO();
			return self::$instance;
		}
		
		public function Inserir(Sensor $sensor) {
			try {
				$sql = "INSERT INTO sensor (descricao,localizacao,data_inst,umidade_metica,endereco_ip) VALUES (:descricao,:localizacao,:data_inst,:umidade_metica,:endereco_ip)";
				$p_sql = Conexao::getInstance()->prepare($sql);
				$p_sql->bindValue(":descricao", $sensor->getDescricao());
				$p_sql->bindValue(":localizacao", $sensor->getLocalizacao());
				$p_sql->bindValue(":data_inst", $sensor->getDataInst());
				$p_sql->bindValue(":umidade_metica", $sensor->getUmidadeMetrica());
                $p_sql->bindValue(":endereco_ip", $sensor->getEnderecoIP());
				$p_sql->execute();
				return true;
                echo "Sucesso";
			} catch (Exception $e) {
				return false;
			}
		}
		public function select() {
        try {
            $sql = "SELECT * FROM sensor";
            $p_sql = Conexao::getInstance()->prepare($sql);
			$p_sql->execute();
			$result = $p_sql->fetchAll();
            return  $result;
        } catch (Exception $e) {
            return "Ocorreu um erro ao tentar executar consultar sensores, tente novamente mais tarde.";
        }
	}
}

?>