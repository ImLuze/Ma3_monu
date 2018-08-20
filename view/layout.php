<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Open Monumentendag</title>
    <?php echo $css;?>
  </head>
  <body>

    <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
    <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

    <nav class="nav">
      <div class="nav-left">
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#">Monumenten</a>
        <a class="nav-link" href="#">Nieuws</a>
        <a class="nav-link" href="#">Over ons</a>
      </div>
      <div class="nav-right">
        <form class="" action="index.php" method="post">
          <input class="input" type="text" name="zoek" value="" placeholder="Zoek">
          <img class="search-icon" src="../assets/svg/search_icon.svg" alt="search icon" width="24" height="24">
        </form>
      </div>
    </nav>

    <?php echo $content; ?>

    <?php echo $js;?>
  </body>
</html>
