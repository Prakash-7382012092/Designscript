<?php
include 'db.php';
$idi=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>blog</title>
    <script>
   
        </script>
    <style>
        div .sticky{
        position: -webkit-sticky;
        position: sticky;
        top: 0;
       }
       </style>
</head>
<body>

<?php
        $rw=mysqli_query($con,"SELECT * FROM dataa WHERE id='$idi'");
            while($row=mysqli_fetch_assoc($rw)){?>
    <div class="container">
        <div class="row">
         <center>   <h1><?php echo $row['title']?></h1></center>
         <center>Created At:&nbsp;&nbsp;<?php echo $row['created_at'];?></center>
         <div class="sticky">
        <div class="col-md-3"> 
      <a href="#ass"><h6> 157 Cold Email Subject Lines</h6></a>
      <a href="#asu">  <h6>Catchy Email Subject Line Examples</h6></a>
      <a href="#asf"> <h6>  FAQs</h6></a>
        </div>   
            </div>    
        <div class="col-md-6">
           
           <img src="<?php echo $row['image']?>" class="img-fluid" height="50%" width="100%"/>
<?php echo $row['title'];?>

<h2 id="ass">What Is Cold Emailing?	</h2>
<p><?php echo $row['WhatIsColdEmailing']?></p>
<h2 id="asu">Tips To Write Catchy Email Subject Lines For Sales	</h2>
<p><?php echo $row['TipsToWriteCatchyEmailSubjectLinesForSales']?></p>
<h2 id="asf">FAQ</h2>
<p><?php echo $row['FAQs']?></p>
            <?php } ?>
        </div>
        <div class="sticky">
        <div class="col-md-3"> 
    
      <img src="work/ab.jpg"/>
            </div>
        </div>
    </div>
</div>

    
</body>
</html>