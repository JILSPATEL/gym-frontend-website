<?php
    $Name=$_POST['name'];
    $Age=$_POST['age'];
    $Address=$_POST['adr'];
    $Number=$_POST['num'];
    
    $conn = new mysqli('localhost','root','','gym_db');
    if($conn->connect_error){
        die('connection failed :'+$conn->connect_error);
}
else{
    $stmy=$conn->prepare("insert into gym1(Name,Age,Address,Number) values(?,?,?,?)");
    $stmy->bind_param("sisi",$Name,$Age,$Address, $Number);
    $stmy->execute();
    echo"register successfully";
    $stmy->close();
    $conn->close();
}
?>
