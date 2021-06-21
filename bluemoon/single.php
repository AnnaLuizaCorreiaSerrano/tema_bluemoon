<?php get_header(); ?>

<?php

 if ( have_posts() ) {

 } while ( have_posts() ) {
	the_post();
?>
<div class="row">
	<div class="col-12">
		<h1><div class="jumbotron"  style= "background-color: #FAFAFA"><?php the_title(); ?></div></h1>
</div>
</div>

	
	<?php the_content(); ?>

<?php

 }  




?>

<?php get_footer(); ?>

	

	