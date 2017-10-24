<?php
 
class ayam{
	public $suara= 'kukuruyuk';
	public $kaki= 2;
}
 
 $ayam1=new ayam;
echo "Suara ayam ".$ayam1->suara."<br>";
echo "dan ayam berjalan menggunakan ".$ayam1->kaki." kaki <br><br>";

class sapi{
	public $suara= ' mooo';
	public $kaki= 4;
}
 
 $sapi1=new sapi;
echo "Suara sapi".$sapi1->suara."<br>";
echo "dan sapi berjalan menggunakan ".$sapi1->kaki." kaki<br><br>";

class kucing{
	public $suara= ' meong';
	public $kaki= 4;
}
 
 $kucing1=new kucing;
echo "Suara kucing".$kucing1->suara."<br>";
echo "dan kucing berjalan menggunakan ".$kucing1->kaki." kaki<br><br>";

class kelinci{
	public $telinga= 2;
	public $kaki= 4;
}
 
 $kelinci1=new kelinci;
echo "kelinci memiliki ".$kelinci1->telinga." telinga<br>";
echo "dan kelinci berjalan menggunakan ".$kelinci1->kaki." kaki<br><br>";


class ikan{
	public $warna= 'oren';
	public $mata= 2;
}
 
 $ikan1=new ikan;
echo "ikan berwarna ".$ikan1->warna."<br>";
echo "dan ikan memiliki  ".$ikan1->mata." mata<br>";
?>