<?php

class Home
{
	//atributos
	public $id;
	public $medida;
	public $pared;
	public $kg;
	public $peso;
	public $total;
	public $piezas;
	public $longitud;	
	
	function __construct($id, $medida, $pared, $kg, $peso, $total, $piezas, $longitud)
	{
		$this->id=$id;
		$this->medida=$medida;
		$this->pared=$pared;
		$this->kg=$kg;
		$this->peso=$peso;
		$this->total=$total;
		$this->piezas=$piezas;
		$this->longitud=$longitud;	
	
	}

	public static function all(){
		$lista = [];
		$db=DataBase::getConnect();
		$sql=$db->query('SELECT * FROM BarraHueca');
		foreach ($sql->fetchAll() as $items) {
			$lista[]= new Home($items['id'],$items['fk_medida'],$items['fk_pared'],$items['kg'],$items['peso'],$items['total'],$items['piezas'],$items['longitud']);
		}
		return $lista;	
	}
}
?>