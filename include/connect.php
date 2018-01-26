<?php



try {
    $dbh = new PDO('mysql:host=localhost;dbname=squiz', 'root', '');
    
    $tsql="SELECT * FROM users";
    $getResults=$dbh->prepare($tsql);
    $getResults->execute();
    $row=$getResults->fetch();//

   // foreach($results as $row){
        echo $row['id'].'   '.$row['username'].'   '.$row['password'].  '<form action="" method="POST"><input type="hidden" name="id" value='.$row['id'].'><button name="delete">Delete</button></form> <br>';   
    //}
    //foreach($dbh->query('SELECT * from users') as $row) {
       //print_r($row);
    //}
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


/*
$host = "localhost";
 $database_name = "squiz";

   $conn = new PDO("mysql:host=$host;Database=$database_name", "root", "");
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if( $conn ) {
      echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     //die( print_r( sqlsrv_errors(), true));
}



 $server_name = "desktop-556oqb9\sqlexpress";
 $database_name = "charles";

   $conn = new PDO("sqlsrv:Server=$server_name;Database=$database_name;ConnectionPooling=0", "", "");
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if( $conn ) {
      "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}*/

?>