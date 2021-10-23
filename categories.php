<div class="box">
  <h3 class="title">categories</h3>
  <div class="component">
    <?php $categories = get_categories([
      'show_count' => 5,
    ]);
    foreach ($categories as $category) {
      echo '<a href="' . $category->term_id . '">' . $category->name .  '</a>';
    }
    ?>
  </div>
</div>