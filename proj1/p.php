<?php
include 'db.php';
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $code=$_POST['code'];
    $sales=$_POST['sales'];
    $faq=$_POST['faqs'];
    $file=$_FILES['file'];
    $filename=$_FILES['file']['name'];//Desert.jpg
    $filesize=$_FILES['file']['size'];//845941
    $filetmp=$_FILES['file']['tmp_name'];//C:\xampp\tmp\php8CB9.tmp
    $filetype=$_FILES['file']['type'];//image/jpeg
    $destination="upload/".$filename;
    move_uploaded_file($filetmp,$destination);
    echo $title;
    echo "<br>";
    echo $code;
    echo "<br>";
    echo $sales;
    echo "<br>";
    echo $faq;
    $ew=mysqli_query($con,"INSERT INTO dataa(image,title,WhatIsColdEmailing,TipsToWriteCatchyEmailSubjectLinesForSales,FAQs)VALUES('$destination','$title','$code','$sales','$faq')");
    if($ew){
        echo "<script>
        alert('Data Inserted')
         window.location.href='index.php'
        </script>";
    }else{
        echo "<script>
        alert('Data Not Inserted')
         window.location.href='addblog.php'
        </script>";
    }
}
?>