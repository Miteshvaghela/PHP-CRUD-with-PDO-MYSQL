<?php 
// database connection with pdo drivers 

// Phase 1

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'testpdo';
$server = 'mysql:host=localhost;dbname='.$host.';dbname='.$db_name;

try{
    $con = new PDO($server, $username, $password);    

    echo 'Database connection : <pre>'; print_R($con);

}catch(PDOException $e){
    echo 'Database connection could not connect. => '.$e-getMessage();
}
?>