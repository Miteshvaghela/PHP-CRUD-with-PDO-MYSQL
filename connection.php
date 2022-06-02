<?php 
// database connection with pdo drivers 

// Phase 1

$host = 'localhost';

$username = 'root'; // username 
$password = ''; // password
$db_name = 'testpdo'; // database name
$server = 'mysql:host=localhost;dbname='.$host.';dbname='.$db_name; // server name

try{
    $con = new PDO($server, $username, $password);    

    echo 'Database connection : <pre>'; print_R($con);

}catch(PDOException $e){
    echo 'Database connection could not connect. => '.$e-getMessage();
}
?>