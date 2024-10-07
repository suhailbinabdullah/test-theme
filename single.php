<?php get_header(); ?>

<!-- How to extend the usage of Where to Play or widen your customer groups -->

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<p>Author : <?php the_author(); ?></p>
<h5>Category : <?php 
$categories = get_the_category();
if ($categories) {
    foreach ($categories as $category) {
        echo $category->name ;
    }
}
 ?></h5>

<p><?php $content = apply_filters( 'the_content', get_the_content() );
echo $content; ?></p>

<?php endwhile; endif; ?>

<?php echo get_stylesheet_uri(); ?>

<?php get_footer(); ?>
