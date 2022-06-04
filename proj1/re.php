<?php
include 'db.php';
if(isset($_POST['subm'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $phone=$_POST['phone'];
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $pass;
    echo "<br>";
    echo $phone;
    echo "<br>";
    $re=mysqli_query($con,"INSERT INTO login(name,email,pass,phone)VALUES('$name','$email','$pass','$phone')");
    if($re){
        echo "<script>
        alert('Login Data Inserted')
        window.location.href='login.php'
        </script>";
    }else{
        echo "<script>
        alert('Data not Updated')
        window.location.href='reg.php'
        </script>"; 
    }

}
?>