<?php


try {
    $dbh = new PDO('mysql:host=localhost;dbname=', 'root', '');
    
    $tsql="SELECT * FROM users";
    $getResults=$dbh->prepare($tsql);
    $getResults->execute();
    $row=$getResults->fetch();

  
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
}




?>