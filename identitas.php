
<?php
 
require_once'tugas2.php';
 

 $identitas1=new identitas('Ica Cahyani','Bandung','XI RPL 1','Menikah');
 $identitas2=new identitas('Esti Wulandari','Bandung','XI RPL 2','Pelajar');
 $identitas3=new identitas('Dina Sri Hartini','Bandung','XI RPL 2','Pelajar');
 $identitas4=new identitas('Halimah','Bandung','XI RPL 2','Pelajar');
 $identitas5=new identitas('Penti Setiawati','Bandung','XI RPL 2','Pelajar');

 $identitas1->set_nama('Dina');

echo 'Namanya      : '. $identitas1->get_nama().'<br>';
echo 'Tempat Lahir : '. $identitas1->get_tempatlahir().'<br>';
echo 'Kelas        : '. $identitas1->get_kelas().'<br>';
echo 'Status       : '. $identitas1->get_status().'<br><br><br>';


echo 'Namanya      : '. $identitas2->get_nama().'<br>';
echo 'Tempat Lahir : '. $identitas2->get_tempatlahir().'<br>';
echo 'Kelas        : '. $identitas2->get_kelas().'<br>';
echo 'Status       : '. $identitas2->get_status().'<br><br><br>';


echo 'Namanya      : '. $identitas3->get_nama().'<br>';
echo 'Tempat Lahir : '. $identitas3->get_tempatlahir().'<br>';
echo 'Kelas        : '. $identitas3->get_kelas().'<br>';
echo 'Status       : '. $identitas3->get_status().'<br><br><br>';


echo 'Namanya      : '. $identitas4->get_nama().'<br>';
echo 'Tempat Lahir : '. $identitas4->get_tempatlahir().'<br>';
echo 'Kelas        : '. $identitas4->get_kelas().'<br>';
echo 'Status       : '. $identitas4->get_status().'<br><br><br>';

echo 'Namanya      : '. $identitas5->get_nama().'<br>';
echo 'Tempat Lahir : '. $identitas5->get_tempatlahir().'<br>';
echo 'Kelas        : '. $identitas5->get_kelas().'<br>';
echo 'Status       : '. $identitas5->get_status().'<br>';


?>