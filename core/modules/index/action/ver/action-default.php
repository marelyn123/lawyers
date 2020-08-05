<?php

$file = FileData::getByCode($_GET["code"]);

$url = "storage/data/".$file->user_id."/";
$filename = $file->filename;

if(!$file->is_folder){
 $fullurl=$url.$filename;
 // header("Content-type: image/jpg");
 //me creerias que esto de image/jpg fue pura logica mia jajaja no tenia ni la menor idea si iva a funcionar jajaja pero!! despues descrubri el archivo
 //class.upload.php
 header("Content-type: application/pdf");
 readfile($fullurl); // or echo file_get_contents($filename);
}



?>