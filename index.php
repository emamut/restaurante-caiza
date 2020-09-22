<?php get_header();  ?>
  <div class="row mt-4">
    <div class="col text-center">
      <h1>Restaurante Caiza</h1>

      <div class="card-deck">
        <div class="card" v-for="menu in menuArray">
          <img :src="menu.post_image.url" alt="" class="card-img-top">
          <h4 class="card-title">{{ menu.post_title }}</h4>
          <p class="card-text">{{ menu.post_excerpt }}</p>
        </div>
      </div>
    </div>
  </div>
<?php get_footer() ?>