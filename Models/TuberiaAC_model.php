<?php
class TuberiaAC{
    public $id;
	public $medida;
    public $diametro_ex_milimetros;
    public $diametro_ex_pulgadas;
	public $cedula;
	public $pared_pulgadas;
	public $pared_milimetros;
    public $diametro_in_milimetros;
    public $diametro_in_pulgadas;
    public $kg;
    public $peso;
    public $total;
	public $piezas;
	public $longitud;   

    function __construct($id, $medida, $diametro_ex_milimetros, $diametro_ex_pulgadas, $cedula, $pared_pulgadas, $pared_milimetros, $diametro_in_milimetros, $diametro_in_pulgadas, $kg, $peso, $total, $piezas, $longitud){
        $this->id=$id;
        $this->medidas=$medida;
        $this->diametro_ex_milimetros=$diametro_ex_milimetros;
        $this->diametro_ex_pulgadas=$diametro_ex_pulgadas;
        $this->cedula=$cedula;
        $this->pared_pulgadas=$pared_pulgadas;
        $this->pared_milimetros=$pared_milimetros;
        $this->diametro_in_milimetros=$diametro_in_milimetros;
        $this->diametro_in_pulgadas=$diametro_in_pulgadas;
        $this->kg=$kg;
        $this->peso=$peso;
        $this->total=$total;
        $this->piezas=$piezas;
        $this->longitud=$longitud;  
    }

    public static function all(){
		$lista = [];
		$db=DataBase::getConnect();
		$query = 'SELECT * FROM TuberiaAC';
		$sql=$db->query($query);
		foreach($sql->fetchAll() as $items) {
			$lista[]= new TuberiaAC($items['id'], $items['medida'], $items['diametro_ex_milimetros'], $items['diametro_ex_pulgadas'],$items['cedula'], $items['pared_pulgadas'], $items['pared_milimetros'], $items['diametro_in_milimetros'], $items['diametro_in_pulgadas'], $items['kg'], $items['peso'], $items['total'], $items['piezas'], $items['longitud']);
		}
		return $lista;	
    }

    public static function fillType($type){
        $lista = [];
		$db=DataBase::getConnect();
		$query = 'SELECT * FROM TuberiaAC';
        $sql=$db->query($query);
        $i=0;
        foreach($sql->fetchAll() as $item){
            $lista[$i] = $item[$type];
            $i++;
        }
        return $lista;
    }
    
}
?>