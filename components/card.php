<a href="/?ad=<?= $dataForCard['id'];?>">
<div class="card mx-4 mb-4 is-clickable" style="width:20%">
    <header class="card-header">
        <p class="card-header-title"><?= $dataForCard['title'];?></p>
    </header>
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="<?= $dataForCard['img'];?>" alt="Ad image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4"><?= $dataForCard['username'];?></p>
        <p class="subtitle is-6"><a href="tel:<?= $dataForCard['userphone'];?>"><?= $dataForCard['userphone'];?></a></p>
      </div>
    </div>

    <div class="content">
        <p class="title is-5"><?= $dataForCard['price'];?> рублей</p>
        <!-- <p><?= $dataForCard['description'];?></p> -->
    </div>
  </div>
</div>
</a>