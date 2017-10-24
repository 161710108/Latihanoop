<?php
 
require_once'index2.php';
 

 $robot1=new robot('ngik ngik ngik',30,'biru');
 $robot1->set_suara('ting tong');

echo 'Suara robot '.$robot1->get_suara().'';
echo ' berat robot '. $robot1->get_berat().' kg';
echo ' dan warna robotnya '.$robot1->get_warna().'<br>';
?>