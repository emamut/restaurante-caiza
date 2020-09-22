<?php get_header();
$args = array(
  'post_type' => 'menu',
  'post_status' => 'publish',
  'posts_per_page' => 8,
  'orderby' => 'title',
  'order' => 'ASC',
);

$loop = new WP_Query( $args );  ?>
  <div class="row mt-4">
    <div class="col text-center">
      <h1>Restaurante Caiza</h1>
      <div class="card-deck">
        <?php while ( $loop->have_posts() ) : $loop->the_post();
          $image = get_field('foto');
          $prize = get_field('precio'); ?>
          <div class="card">
            <img src="<?php echo $image['url'] ?>" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?php echo the_title() ?></h5>
              <p class="card-text"><?php the_excerpt() ?></p>
              <h3>Valor: $<?php echo $prize ?></h3>
            </div>
          </div>
        <?php endwhile;?>
      </div>
    </div>
  </div>
<?php get_footer() ?>