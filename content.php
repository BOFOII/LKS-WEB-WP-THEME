<div class="posts-container">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="post">
        <img src="https://images.unsplash.com/photo-1634897708492-98e67a0ecac5?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" class="image">
        <div class="date">
          <i class="far fa-clock"></i>
          <span><?php the_time('F j, Y'); ?></span>
        </div>
        <a href=<?php the_permalink(); ?>>
          <h3 class="title"><?php the_title(); ?></h3>
        </a>
        <?php if (is_single()) : ?>
          <p class="text"><?php the_content(); ?></p>
        <?php else : ?>
          <p class="text"><?php the_excerpt(); ?><a href=<?php the_permalink(); ?>>Read more</a></p>
        <?php endif ?>
        <div class="links">
          <a href=<?php echo get_author_posts_url(get_the_author_meta('ID')) ?> class="user">
            <i class="far fa-user"></i>
            <span>by <?php the_author(); ?></span>
          </a>
          <a href="#" class="icon">
            <i class="far fa-comment"></i>
            <span>( <?php echo wp_count_comments()->approved; ?> )</span>
          </a>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>