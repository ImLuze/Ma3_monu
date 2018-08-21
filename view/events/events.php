<!-- <section>
  <h1>Events</h1>
  <?php foreach($events as $event): ?>
    <article>
      <header><h2><?php echo $event['title']; ?></h2></header>
      <dl>
        <dt>title</dt><dd><?php echo $event['title'];?></dd>
        <dt>content</dt><dd><?php echo $event['content'];?></dd>
        <dt>geschiedenis</dt><dd><?php echo $event['geschiedenis'];?></dd>
        <dt>activiteiten</dt><dd><?php echo $event['activiteiten'];?></dd>
        <dt>praktisch</dt><dd><?php echo $event['praktisch'];?></dd>
        <dt>city</dt><dd><?php echo $event['city'];?></dd>
        <dt>postal</dt><dd><?php echo $event['postal'];?></dd>
        <dt>province</dt><dd><?php echo $event['province'];?></dd>
        <dt>street</dt><dd><?php echo $event['street'];?></dd>
        <dt>link</dt><dd><?php echo $event['link'];?></dd>
        <dt>tags</dt><dd><ul><?php foreach($event['tags'] as $tag): ?><li><?php echo $tag['tag'];?></li><?php endforeach;?></ul></dd>
      </dl>
    </article>
  <? endforeach;?>
</section> -->

<header class="filter-container">
  <form class="filter" action="index.php?page=events" method="post">
    <input class="input" type="text" name="name" value="" placeholder="Naam monument">
    <input class="input" type="text" name="place" value="" placeholder="Gemeente">
    <select class="input" name="tag">
      <option value="no tag">Activiteit of type</option>
      <option value="tag">Tag</option>
      <option value="other tag">Other Tag</option>
    </select>
  </form>
</header>

<main>
  <section class="event-cards">

    <article class="event-card">
      <div class="event-card-img" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(237, 167, 198, 1) 100%), url(../assets/img/events/CAK/c72146d8-005f-11e8-8ba7-02b7b76bf47f_0.jpg); background-blend-mode: color-burn; background-size: cover;"></div>
      <p class="event-card-title">Het kasteel blauwhuis</p>
    </article>

    <article class="event-card">
      <div class="event-card-img" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(237, 167, 198, 1) 100%), url(../assets/img/events/CAK/c72146d8-005f-11e8-8ba7-02b7b76bf47f_0.jpg); background-blend-mode: color-burn; background-size: cover;"></div>
      <p class="event-card-title">Het kasteel blauwhuis</p>
    </article>

    <article class="event-card">
      <div class="event-card-img" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(237, 167, 198, 1) 100%), url(../assets/img/events/CAK/c72146d8-005f-11e8-8ba7-02b7b76bf47f_0.jpg); background-blend-mode: color-burn; background-size: cover;"></div>
      <p class="event-card-title">Het kasteel blauwhuis</p>
    </article>

    <article class="event-card">
      <div class="event-card-img" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(237, 167, 198, 1) 100%), url(../assets/img/events/CAK/c72146d8-005f-11e8-8ba7-02b7b76bf47f_0.jpg); background-blend-mode: color-burn; background-size: cover;"></div>
      <p class="event-card-title">Het kasteel blauwhuis</p>
    </article>

    <article class="event-card">
      <div class="event-card-img" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(237, 167, 198, 1) 100%), url(../assets/img/events/CAK/c72146d8-005f-11e8-8ba7-02b7b76bf47f_0.jpg); background-blend-mode: color-burn; background-size: cover;"></div>
      <p class="event-card-title">Het kasteel blauwhuis</p>
    </article>

    <article class="event-card">
      <div class="event-card-img" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(237, 167, 198, 1) 100%), url(../assets/img/events/CAK/c72146d8-005f-11e8-8ba7-02b7b76bf47f_0.jpg); background-blend-mode: color-burn; background-size: cover;"></div>
      <p class="event-card-title">Het kasteel blauwhuis</p>
    </article>

    <article class="event-card">
      <div class="event-card-img" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(237, 167, 198, 1) 100%), url(../assets/img/events/CAK/c72146d8-005f-11e8-8ba7-02b7b76bf47f_0.jpg); background-blend-mode: color-burn; background-size: cover;"></div>
      <p class="event-card-title">Het kasteel blauwhuis</p>
    </article>

    <article class="event-card">
      <div class="event-card-img" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(237, 167, 198, 1) 100%), url(../assets/img/events/CAK/c72146d8-005f-11e8-8ba7-02b7b76bf47f_0.jpg); background-blend-mode: color-burn; background-size: cover;"></div>
      <p class="event-card-title">Het kasteel blauwhuis</p>
    </article>

    <article class="event-card">
      <div class="event-card-img" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(237, 167, 198, 1) 100%), url(../assets/img/events/CAK/c72146d8-005f-11e8-8ba7-02b7b76bf47f_0.jpg); background-blend-mode: color-burn; background-size: cover;"></div>
      <p class="event-card-title">Het kasteel blauwhuis</p>
    </article>

  </section>
</main>
