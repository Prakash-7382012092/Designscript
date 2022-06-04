<?php
include 'db.php';
if(isset($_POST['submit'])){
    $id=$_POST['idi'];
    $title=$_POST['title'];
    $code=$_POST['code'];
    $sales=$_POST['sales'];
    $faq=$_POST['faqs'];
    $oimg=$_POST['oimg'];
    if($_FILES['file']['name']!=''){
    $file=$_FILES['file'];
    $filename=$_FILES['file']['name'];//Desert.jpg
    $filesize=$_FILES['file']['size'];//845941
    $filetmp=$_FILES['file']['tmp_name'];//C:\xampp\tmp\php8CB9.tmp
    $filetype=$_FILES['file']['type'];//image/jpeg
    $destination="upload/".$filename;
    move_uploaded_file($filetmp,$destination);
    }else{
        $destination=$oimg;
    }
    echo $id;
    echo "<br>";
    echo $title;
    echo "<br>";
    echo $code;
    echo "<br>";
    echo $sales;
    echo "<br>";
    echo $faq;
    echo "<br>";
    echo $destination;
    $qw=mysqli_query($con,"UPDATE dataa SET image='$destination', title='$title',WhatIsColdEmailing='$code',TipsToWriteCatchyEmailSubjectLinesForSales='$sales',FAQs='$faq' WHERE id='$id'");
    if($qw){
        echo "<script>
        alert('Data Updated')
        window.location.href='index.php'
        </script>";
    }else{
        echo "<script>
        alert('Data not Updated')
        window.location.href='index.php'
        </script>"; 
    }
}
?>