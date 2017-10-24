<?php

class persegi{

public $s;
public function set_luas($sisi)
{
	$this->s =$sisi;
	}

public function get_luas()
{
	return $this->s * $this->s;
}
public function get_keliling()
{
	return 4 * $this->s;
}
}

$luas1= new persegi;
$luas1->set_luas(12);
echo 'Luas bangun datar <br>';
echo '<----------------------------------------><br>';
echo 'Luas persegi : '.$luas1->get_luas().'<br>';
echo 'Keliling persegi : '.$luas1->get_keliling().'<br>';
echo '<========================><br>';



class segitiga{

public $a,$t,$s;
public function set_luas($alas,$tinggi,$sisi)
{
	$this->a =$alas;
		$this->t =$tinggi;
			$this->s =$sisi;
	}

public function get_luas()
{
	return 1/2 * $this->a * $this->t;
}
public function get_keliling()
{
	return 3 * $this->s;
}
}

$luas2= new segitiga;
$luas2->set_luas(21,3,6);
echo 'Luas segitiga : '.$luas2->get_luas().'<br>';
echo 'Keliling segitiga : '.$luas2->get_keliling().'<br>';
echo '<========================><br>';



class persegi_panjang{

public $p,$l;
public function set_luas($panjang,$lebar)
{
	$this->p =$panjang;
		$this->l =$lebar;
	}

public function get_luas()
{
	return $this->p * $this->l;
}
public function get_keliling()
{
	return 2*$this->p + 2*$this->l;
}
}

$luas3= new persegi_panjang;
$luas3->set_luas(21,10);
echo 'Luas persegi : '.$luas3->get_luas().'<br>';
echo 'Keliling persegi : '.$luas3->get_keliling().'<br>';
?>