<?php /*Template name: atelier */

get_header();
?>
<div id="" class="content-area">
<main id="main" class="site-main" style="width:80%; background-color:red; margin-left:10%;">

    <?php
    
	while ( have_posts() ) :
        the_post();
        the_post_thumbnail('full');
   
        
 
    
    $query1 = new WP_Query( $args );

         endwhile; // End of the loop.
 

    $args = array(
            "category_name" => "cours",
            "posts_per_page" => 30 ,
            "order"=>"ASC",
            "orderby" => 'title'
        
    );
    $query1 = new WP_Query( $args );

// The Loop
while ( $query1->have_posts() ) {
    $oSession = substr(get_the_title(),4,1);
    $oDomaine = substr(get_the_title(),5,1);
    echo '<div style="background-color:red; ">';
    echo '<a class="oCours" href='.get_permalink().'>' . get_the_title() .  '<p style="display:inline;color:green"> - 
    Session :'.$oSession.'</p><p style="display:inline;color:blue"> - Domaine : '.$oDomaine. '</p></a>';
echo '<br>'; 
$query1->the_post();
 //echo '<h3>' . get_the_title() . '</h3>';
 echo '<p>'.get_the_excerpt(). '</p>';
}


wp_reset_postdata();


    
?>
</main>
</div>

<?php

get_footer();
?>