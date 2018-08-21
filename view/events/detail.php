<header class="detail-header">
  <section class="slider">
    <div class="slider-container">
      <div class="slider-img gradient slider-gradient" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(237, 167, 198, 1) 100%), url(../assets/img/events/CAK/c72146d8-005f-11e8-8ba7-02b7b76bf47f_0.jpg); background-blend-mode: color-burn; background-size: cover;"></div>
    </div>
    <div class="slider-controls">
      <button class="slider-controls-button slider-controls-button-active"></button>
    </div>
  </section>
  <section class="detail-header-intro">
    <h1><?php echo($event['title'])?></h1>
    <div class="detail-header-sub">
      <p class="home-header-date"><?php echo($event['city'])?></p>
      <a class="cta-primary" href=<?php echo($event['link'])?>>Website</a>
    </div>
    <p class="home-intro"><?php echo($event['content'])?></p>
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
      <p class="home-intro detail-intro"><?php echo($event['geschiedenis'])?></p>
    </div>
  </section>
  <section class="detail-right">
    <div class="detail-praktisch">
      <h2>Praktisch</h2>
      <p class="home-intro detail-intro"><?php echo($event['praktisch']) ?></p>
    </div>
    <div class="detail-walloftext">
      <h2>Activiteiten</h2>
      <p class="home-intro detail-intro"><?php echo($event['activiteiten']) ?></p>
    </div>
  </section>
</main>
