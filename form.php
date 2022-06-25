<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>PHP to XML</title>
</head>
<body>
  <!--a simple form for testing-->
  <!--use of POST method so the data from the form will pass to the php file called xml-->
    <form method="POST" action="xml.php" id="form">
      <div class="form-group">
        <input id="inputs" type="text" name="name" placeholder="Name" required>
      </div>
      <div class="form-group">  
        <input id="inputs" type="email" name="email" placeholder="Email" required>
      </div>
      <div class="form-group">      
        <input id="inputs" type="text" name="comments" placeholder="Comments" required>
      </div> <button type="submit" class="btn btn-danger" id="butto">Submit</button>
    </form>
  </div>
</body>
</html>