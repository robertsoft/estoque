<?php 

namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

//class ProdutoController extends Controller {
//	public function lista(){
//		$html = '<h1>Listagem de produtos com Laravel</h1>';
//		$html .= '<ul>';
//		$produtos = DB::select('select * from produtos');
//		foreach ($produtos as $p) {
//			$html .= '<li> Nome: '. $p->nome .',
//			Descrição: '. $p->descricao .'</li>';
//		}
//		$html .= '</ul>';
//		return $html;
//	}
//}

class ProdutoController extends Controller {
	public function lista(){
		$produtos = DB::select('select * from produtos');
		//return view('listagem')->with('produtos', array());
		return view('produto.listagem')->withProdutos($produtos);

	}
	public function mostra(){
		$id = Request::route('id'); // precisamos pegar o id de alguma forma
		$respostas = DB::select('select * from produtos where id = ?',[$id]);
		if(empty($respostas)) {
			return "Esse produto não existe";
		}else{
			return view('produto.detalhes')->withRespostas($respostas);
		}
	}
}