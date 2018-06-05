<?php
	class Sensor{
		private $descricao;
		private $localizacao;
		private $data_inst;
		private $umidade_metrica;
        private $endereco_ip;
		
		function __construct($descricao,$localizacao,$data_inst,$umidade_metrica,$endereco_ip) {
			$this->descricao = $descricao;
			$this->localizacao = $localizacao;
			$this->data_inst = $data_inst;
			$this->umidade_metrica = $umidade_metrica;
            $this->endereco_ip = $endereco_ip;
		}
		public function setDescricao ($descricao){
            $this->$descricao = $descricao;
        }
		public function setLocalizacao ($localizacao){
            $this->$localizacao = $localizacao;
        }
		public function setDataInst ($data_inst){
            $this->$data_inst = $data_inst;
        }
		public function setUmidadeMetrica ($umidade_metrica){
            $this->$umidade_metrica = $umidade_metrica;
        }
        public function setEnderecoIP ($endereco_ip){
            $this->$endereco_ip = $endereco_ip;
        }
		 public function getDescricao (){
            return $this->descricao;
        }
		public function getLocalizacao (){
            return $this->localizacao;
        }
		public function getDataInst (){
            return $this->data_inst;
        }		
		public function getUmidadeMetrica(){
            return $this->umidade_metrica;
        }
        	public function getEnderecoIP(){
            return $this->endereco_ip;
        }
	}
?>