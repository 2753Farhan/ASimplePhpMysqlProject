<?php
if (isset($_POST)){
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this data based failed due to" .
        mysqli_connect_error());
    }
    mysqli_select_db($con,$dbname);
    
    $name= $_POST['name'];
    $gender= $_POST['gender'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $desc=$_POST['desc'];

    //echo "Success connecting to db";
    $sql = " INSERT INTO `tour` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', CURRENT_TIME());";
    //echo $sql;

    if($con->query($sql)==true){
        echo "Thank you for submitting the form.";
    }
    else {
        echo "Error: $sql <br> $con->server";
    }
    $con->close();
}
?>
