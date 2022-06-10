<?php 

$config_host       = 'localhost';
$config_username   = 'root'; // username 
$config_password   = ''; // password
$config_db_name    = 'chillbox_db'; // database name
$connection    = 'mysql:host=localhost;dbname='.$config_host.';dbname='.$config_db_name; // server name

try{
    $con = new PDO($connection, $config_username, $config_password);    

    echo 'Database connection established <pre>'; print_R($con);

}catch(PDOException $e){
    echo 'Database connection could not connect. => '.$e->getMessage();
}
?>