<?php

class BarraHueca
{
	//atributos
	public $id;
	public $medida_exterior;
	public $medida_interior;
	public $pared_milimetros;
	public $pared_pulgadas;
	public $kg;
	public $peso;
	public $total;
	public $piezas;
	public $longitud;	
	
	function __construct($id, $medida_exterior, $medida_interior, $pared_milimetros, $pared_pulgadas, $kg, $peso, $total, $piezas, $longitud)
	{
		$this->id=$id;
		$this->medida_exterior=$medida_exterior;
		$this->medida_interior=$medida_interior;
		$this->pared_milimetros=$pared_milimetros;
		$this->pared_pulgadas=$pared_pulgadas;
		$this->kg=$kg;
		$this->peso=$peso;
		$this->total=$total;
		$this->piezas=$piezas;
		$this->longitud=$longitud;	
	}

	public static function all(){
		$lista = [];
		$db=DataBase::getConnect();
		$query = 'SELECT * FROM BarraHueca';
		$sql=$db->query($query);
		foreach ($sql->fetchAll() as $items) {
			$lista[]= new BarraHueca($items['id'], $items['medida_exterior'],$items['medida_interior'],$items['pared_milimetros'],$items['pared_pulgadas'],$items['kg'],$items['peso'],$items['total'],$items['piezas'],$items['longitud']);
		}
		return $lista;	
	}
}
?>