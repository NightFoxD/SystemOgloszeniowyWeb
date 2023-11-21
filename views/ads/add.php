<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="panel panel-default">
<div class="panel-heading">
 <h3 class="panel-title">Dodaj nowe ogłoszenie</h3>
 </div>
 <div class="panel-body">
 <form method="post" action="<?php echo ROOT_URL; 
?>ads/create">
 <div class="form-group">
 <label>Tytuł</label>
 <input type="text" name="title" class="formcontrol" />
 </div>
 <div class="form-group">
 <label>Treść</label>
 <textarea name="content" class="form-control"></textarea>
 </div>
 <input class="btn btn-primary" name="submit" 
type="submit" value="Dodaj" />
 <a class="btn btn-danger" href="<?php echo ROOT_URL; ?>ads">Anuluj</a>
 </form>
 </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

