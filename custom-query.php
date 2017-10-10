 <?php
      $posts = get_posts(array(
        'posts_per_page' => 1,
        'post_type' => 'post_type_name', // Name of post type 
        'orderby' => 'date',
        'order' => 'desc'
      )); 
      

      if( $posts ):
        foreach( $posts as $post ):     
          setup_postdata($post);        
?>
      <!-- Your blog content here -->
<?php
          wp_reset_postdata();
        endforeach;
      endif;       
?> 