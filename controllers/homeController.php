<?php
class homeController extends Controller {

	public function index() { 
		$dados = array();

		$itens = new Itens();

		$offset = 0;
		$limit = 5;
		$total = $itens->getTotal();

		$dados['paginas'] = ceil($total/$limit);//Define o total de icones de pag
		$dados['paginaAtual'] = 1;
		//Verificando se foi enviado uma pagina
		if(!empty($_GET['p'])) {
			$dados['paginaAtual'] = intval($_GET['p']);//Transforma o valor de p em inteiro
		}

		$offset = ($dados['paginaAtual'] * $limit) - $limit;

		$dados['lista'] = $itens->getList($offset, $limit);
		
		$this->loadTemplete('home', $dados);
	}
}