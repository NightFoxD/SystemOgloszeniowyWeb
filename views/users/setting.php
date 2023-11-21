<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="panel panel-default">
<div class="panel-heading">
 <h3 class="panel-title">Zaloguj się</h3>
</div>
 <div class="panel-body">
 <form method="post" action="<?php echo ROOT_URL; 
?>users/authenticate">
 <div class="form-group">
 <label>Email</label>
 <input type="text" name="email" class="formcontrol" />
 </div>
 <div class="form-group">
 <label>Hasło</label>
 <input type="password" name="password" 
class="form-control" />
 </div>
 <input class="btn btn-primary" name="submit" 
type="submit" value="Zaloguj się" />
 </form>
 </div>
</div>
</body>
</html>
