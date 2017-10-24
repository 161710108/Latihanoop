<?php
class robot{
	public $suara;
	public $berat;
	public $warna;
	
    public function __construct($suara,$berat,$warna)
   {
   
		$this->suara =$suara;
		$this->berat =$berat;
		$this->warna =$warna;
	}


	public function set_suara($suara)
	{
		$this->suara =$suara;
	}


	public function get_suara()
	{
		return $this->suara;
	}


    public function set_berat($berat)
	{
			$this->berat =$berat;
	}


	public function get_berat()
	{
		return $this->berat;
	}


    public function set_warna($warna)
	{
		$this->warna =$warna;
	}


	public function get_warna()
	{
		return $this->warna;
	}
}
?>