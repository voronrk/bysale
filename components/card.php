<div class="card mx-4 mb-4" style="width:20%">
    <header class="card-header">
        <p class="card-header-title"><?php echo $dataForCard['title'];?></p>
    </header>
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="<?php echo $dataForCard['img'];?>" alt="Ad image">
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
        <p class="title is-4"><?php echo $dataForCard['username'];?></p>
        <p class="subtitle is-6"><a href="tel:<?php echo $dataForCard['userphone'];?>"><?php echo $dataForCard['userphone'];?></a></p>
      </div>
    </div>

    <div class="content">
        <p class="title is-5"><?php echo $dataForCard['price'];?> рублей</p>
        <p><?php echo $dataForCard['description'];?></p>
    </div>
  </div>
</div>