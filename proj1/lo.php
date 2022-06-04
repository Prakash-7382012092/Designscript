<?php
session_start();
include 'db.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    // echo $email;
    // echo $pass;


    $se=mysqli_query($con,"SELECT * FROM login WHERE email='$email' AND pass='$pass'");
    $cn=mysqli_num_rows($se);
      while($row=mysqli_fetch_assoc($se)){
         $name= $row['name'];
         $email=$row['email'];
         $phone=$row['phone'];
      }
      $_SESSION['name']=$name;
      $_SESSION['email']=$email;
      $_SESSION['phone']=$phone;
      if($cn>0){
        echo "<script>
        alert('Login Success');
        window.location.href='index.php'
        </script>";
    }else{
        echo "<script>
        alert('Login Fail');
        window.location.href='login.php'
        </script>"; 
    }
    echo "<script>
    alert('Data not Updated');
    window.location.href='reg.php'
    </script>"; 
}
?>