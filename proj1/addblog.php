<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    .s{
        border:2px solid blue;
        border-radius:10px;
        padding:5px;
    }
    form{
        padding:5px;
    }
    </style>
  </head>
  <body>

    <div class="container mt-5">
        <div class="row">

            <div class="col-md-6 mx-auto s">
      <center><h3 class="text-primary">Add Blog</h3></center>
    <form method="POST" enctype="multipart/form-data" action="p.php">

    
    <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control" name="file" id="image" aria-describedby="emailHelp">  
  </div>

  

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
  
  </div>
  <div class="mb-3">
    <label for="What Is Cold Emailing?" class="form-label">What Is Cold Emailing?</label>
    <input type="text" class="form-control" id="What Is Cold Emailing?" name="code">
  </div>
  <div class="mb-3">
    <label for="Tips To Write Catchy Email Subject Lines For Sales" class="form-label">Tips To Write Catchy Email Subject Lines For Sales</label>
    <input type="text" class="form-control" id="Tips To Write Catchy Email Subject Lines For Sales" name="sales">
  </div>
  <div class="mb-3">
    <label for="FAQs" class="form-label">FAQs</label>
    <input type="text" class="form-control" id="FAQs" name="faqs">
  </div>
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" name="submit" class="btn btn-primary form-control"  value="Submit"/>
</form>
</div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>