<header class="filter-container">
  <form class="filter" action="index.php?page=events" method="post">
    <input class="input" type="text" name="name" value="" placeholder="Naam monument">
    <input class="input" type="text" name="place" value="" placeholder="Gemeente">
    <select class="input" name="tag">
      <option value="">Activiteit of type</option>
      <?php foreach($tags as $tag): ?>
        <option value="<?php echo $tag['tag']; ?>"><?php echo $tag['tag']; ?></option>
      <?php endforeach;?>
    </select>
    <input class="cta-primary" type="submit" name="submit" value="Zoek">
  </form>
</header>

<main>
  <section class="event-cards">

    <?php foreach($events as $event): ?>
      <?php $directory = "./assets/img/events/" . $event['id'] . "/";?>
      <?php $firstFile = $directory . scandir($directory)[2]; ?>
      <?php $fileType = substr($firstFile, -3); ?>
      <?php if($fileType !== "jpg"): ?>
        <?php $firstFile = $directory . scandir($directory)[3];?>
      <?php endif; ?>
      <a href="/index.php?page=detail&id=<?php echo $event['id']?>">
        <article class="event-card">
          <div class="event-card-img" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(237, 167, 198, 1) 100%), url(<?php echo $firstFile?>); background-blend-mode: color-burn; background-size: cover;"></div>
          <p class="event-card-title"><?php echo $event['title']?></p>
        </article>
      </a>
    <?php endforeach; ?>

  </section>
</main>
