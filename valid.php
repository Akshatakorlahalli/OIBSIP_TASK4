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
$pass= $_GET['pwd'];

$q1="select *
    from authorizationData
    where username='$user'";

$res1=$conn->query($q1);
if($res1->num_rows>0){
    $row=$res1->fetch_assoc();
    $pass1=$row['passwd'];
if ($pass1===$pass){
    echo "<div style='background-color:rgb(186, 140, 99,0.5)'><h1 align='center'>validation successfull!</h1></div>";
    
}else{
    echo " <div style='background-color:rgb(186, 140, 99,0.5)'><h1 align='center'>validation unsuccessfull.Try again</h1></div>";
}
}else{
    echo " <div style='background-color:rgb(186, 140, 99,0.5)'><h1 align='center'>Username doesn't exist</h1> </div>";
}


?>
