<?php $directory = "./assets/img/events/" . $event['id'] . "/";?>
<?php $files = scandir($directory); ?>
<?php $firstFile = $directory . $files[2]; ?>
<?php $fileType = substr($firstFile, -3); ?>
<?php if($fileType !== "jpg"): ?>
  <?php $firstFile = $directory . $files[3];?>
<?php endif; ?>

<?php
  $images = [];

  for($i = 0; $i < count($files); $i++) {
    if(substr($files[$i], -3) === 'jpg' ) {
      $images[] = $files[$i];
    }
  }
?>

<header class="detail-header">
  <section class="slider">
    <div class="slider-container">
      <?php foreach($images as $image):?>
        <div class="slider-img slider-gradient slide" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(237, 167, 198, 1) 100%), url(<?php echo $directory . $image ?>); background-blend-mode: color-burn; background-size: cover;"></div>
      <?php endforeach; ?>
    </div>
    <div class="slider-controls">
      <?php foreach($images as $image):?>
        <button class="slider-controls-button"></button>
      <?php endforeach;?>
    </div>
  </section>
  <section class="detail-header-intro">
    <div class="detail-header-intro-top">
      <h1 class="detail-header-title"><?php echo($event['title'])?></h1>
      <div class="detail-header-sub">
        <p class="home-header-date"><?php echo($event['city'])?></p>
        <a class="cta-primary" href=<?php echo($event['link'])?>>Website</a>
      </div>
    </div>
    <p class="home-intro half-intro"><?php echo($event['content'])?></p>
  </section>
</header>

<main class="detail-main">
  <section class="detail-left">
    <div class="detail-address">
      <h2 class="detail-address-title">Adres</h2>
      <p class="detail-address-copy"><?php echo($event['street'])?> </br> <?php echo($event['postal'])?> </br> <?php echo($event['city']) ?> - <?php echo($event['province']) ?></p>
      <a class="cta-primary cta-primary-white cta-address" href="#">Navigeer</a>
    </div>
    <div class="detail-walloftext">
      <h2>Geschiedenis</h2>
      <p class="home-intro detail-intro half-intro"><?php echo($event['geschiedenis'])?></p>
    </div>
  </section>
  <section class="detail-right">
    <div class="detail-praktisch">
      <h2>Praktisch</h2>
      <p class="home-intro detail-intro half-intro"><?php echo($event['praktisch']) ?></p>
    </div>
    <div class="detail-walloftext">
      <h2>Activiteiten</h2>
      <p class="home-intro detail-intro half-intro"><?php echo($event['activiteiten']) ?></p>
    </div>
  </section>
</main>
