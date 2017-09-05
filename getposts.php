/*[
<?php
require('../wordpress/wp-blog-header.php');
?>
<?php
   $posts = get_posts('numberposts=10&order=DSC&orderby=date');
   foreach ($posts as $post) : setup_postdata( $post ); ?>
   {
   "date": "<?php the_date('m/d/y'); ?>",
   "title": "<?php the_title(); ?>",
   "time": "<?php the_time(); ?>",
   <?php
      if(has_post_thumbnail()) {
         echo "\"thumbnail\": ";
         the_post_thumbnail();
         echo ",\n";
      }
   ?>
   "excerpt": "<?php the_excerpt(); ?>"},
<?php endforeach; ?>
]
*/