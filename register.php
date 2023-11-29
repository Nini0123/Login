<?php
    $FirstName=$_POST['FirstName'];
    $LasttName=$_POST['LastName'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into register(FirstName,LastName,Email,Password)values(?,?,?,?)");
        $stmt->bind_param("ssss",$FirstName,$LastName,$Email,$Password);
        $stmt->execute();
        echo "registration succesfull";
        $stmt->close();
        $conn->close();
    }
    ?>