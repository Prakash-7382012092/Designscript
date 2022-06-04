<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Project 1</title>
    <style>
        .row{
            margin-top:90px;
        }
        .s{
            border:2px solid skyblue;
            padding: 13px !important;
            margin-top: 19px;            
        }

        .cdata{
     
            height: 50px;
        }
        a,a:hover{
            text-decoration:none;
        }
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li> -->
      
        
         
      </ul>

      <?php  if(isset($_SESSION['name'])){ ?>  Welcome <?php echo $_SESSION['name'];?> &nbsp;&nbsp;<a href="logout.php" style="color:white">Logout</a><?php }else{?>
      <form class="d-flex" role="search">
         
        <a href="login.php" class="text-white" style="margin-right:40px;">Login/Register</a>
      </form>
      <?php } ?>
    </div>
  </div>
</nav>

    <div class="container">
   <h1 class="text-center"> <a href="addblog.php">Add Blog</a></h1>
        <div class="row">
      
      <?php
      include 'db.php';
        $rw=mysqli_query($con,"SELECT * FROM dataa");
            while($row=mysqli_fetch_assoc($rw)){?>
        
            <div class="col-sm-4 ">
                <a href="bl.php?id=<?php echo $row['id']?>">
                <div class="s">
                <div class="">
                    <div class="cimg">
                   <img src="<?php echo $row['image'];?>" class="img-fluid" height="100%" width="100%"/>
            </div>
            <div class="cdata mt-2">
                <?php echo $row['title'];?><br>

                <a href="editblog.php?id=<?php echo $row['id'];?>"> <p style="text-align:left">Edit Blog</p></a>
                <a href="editblog.php?id=<?php echo $row['id'];?>">  <p style="text-align:right;margin-top:-30px;">Start Reading</p></a>
            </div>
                </div></a>
            </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
    <?php
     
    ?>
</body>
</html>