<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Zakładanie konta</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php echo ROOT_URL ?>users/createAccount">
      <div class="form-group">
        <label>login</label>
        <input type="text" name="login" class="formcontrol" />
      </div>
      <div class="form-group">
        <label>Hasło</label>
        <input type="password" name="password" class="form-control" />
      </div>
      <input class="btn btn-primary" name="submit" type="submit" value="Zakładam konto" />
    </form>
  </div>
</div>