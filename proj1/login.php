<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .row{
            margin-top:90px;
        }
        .s{
            border:2px solid skyblue;
            padding: 13px !important;
            margin-top: 19px;      
            border-radius:10px;      
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
     <div class="container mt-5">
        <div class="row">

            <div class="col-md-6 mx-auto s">
      <center><h3 class="text-primary">Login Here</h3></center>
    <form method="POST" enctype="multipart/form-data" action="lo.php">

   

  <div class="mb-3">
    <label for="email" class="form-label"> Email </label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="FAQs" class="form-label">Password</label>
    <input type="text" class="form-control" id="FAQs" name="pass">
  </div>
  
 
  <input type="submit" name="submit" class="btn btn-primary form-control"  value="Submit"/>
  Not A Member <a href="reg.php">Register</a>
</form>
</div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>