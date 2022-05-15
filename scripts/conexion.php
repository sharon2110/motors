<?php

$config = parse_ini_file('../conf.ini');
try{
   $con = new PDO('pgsql:host=ec2-52-200-215-149.compute-1.amazonaws.com;port=5432;dbname='.$config['db'],$user=$config['username'],$password=$config['password']);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
}catch(PDOException $e){
   echo "ERROR: " . $e->getMessage();
}
?>
