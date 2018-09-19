<?php
class Itens extends model {

	public function getList($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM itens LIMIT $offset, $limit";//Começa do 0 e limita a 5 post p/pagina
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getTotal() {

		$sql = "SELECT COUNT(*) as c FROM itens";//COUNT = conta todos os registros e coloca em 'c'
		$sql = $this->db->query($sql);
		$sql = $sql->fetch();

		return $sql['c'];
	}
}