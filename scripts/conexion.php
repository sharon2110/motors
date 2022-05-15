<?php

$config = parse_ini_file('../conf.ini');
try{
   $con = new PDO('pgsql:host=ec2-52-200-215-149.compute-1.amazonaws.com;dbname=dcan786ll35sm1', nccsmoomzjdmez,5ba31f8dd1d332d874a97f92d05bc1c9e704070e2db2e9aa5901db9d173d6258);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
}catch(PDOException $e){
   echo "ERROR: " . $e->getMessage();
}
?>
