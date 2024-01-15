<?php

$serv="localhost";
$user="root";
$pass="";
$db="authorizationDB";

$conn=new mysqli($serv,$user,$pass,$db);
if(!$conn){
    echo "Connection failure";
}


$user=$_GET['un'];
$pass= $_GET['pass'];

$query="insert into authorizationdata values('$user','$pass')";
                $r2=$conn->query($query);
                if(!$r2)
                    echo "<div style='background-color:rgb(186, 140, 99,0.5)'><h1>Unable to insert</h1> </div>";
                else
                    echo "<div style='background-color:rgb(186, 140, 99,0.5)'><h1>inserted successfully</h1> </div>";
                
?>

