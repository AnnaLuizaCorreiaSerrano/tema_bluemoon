
<?php get_header(); ?>

	<div class="row">
		<div class="col-12">
			<div class="jumbotron" style= "background-color: #FAFAFA;">
				
				<center> <h3 class="display-4">Bem Vindo(a)</h3></center>
			</div>
			
		</div>

	</div>

<div class="row">
		<div class="col-12">
			<h2>Texto de Entrada</h2>
			<p>Lorem ipsum dolor sit amet. Ea recusandae molestias ut voluptatem voluptate ex tempora quam eos architecto galisum qui fugit molestias. Ea recusandae voluptas qui voluptas ullam sit iusto quidem. Eum nihil rerum rem quod Quis quo ipsum rerum non pariatur rerum sed internos consequatur.Ut repellendus minus et voluptatibus deleniti ad assumenda laboriosam est nemo nostrum qui ratione quia et sint sint sit temporibus aliquid? Non eius deleniti sed quod minus qui voluptas atque rem ipsa minus aut culpa galisum in quasi saepe et fugit autem.</p>
		</div>

	</div>
	<center>

<div class="row">

	<?php if ( have_posts() ) {

	} while ( have_posts() ) {

		the_post();

	?>

<div class="col-4">

		<h3><?php the_title(); ?></h3>
		<div class=" foto"> <?php the_post_thumbnail(); ?></div>
		<p><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>"> Leia Mais</a>
</div>
		<?php
	}//fim do while

	//fim do if loop wp

 	?>

</div>
</center>

<?php get_footer(); ?>

	

	