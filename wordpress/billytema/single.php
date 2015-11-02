<!--Tema: Billy Tema-->
<!--Fonte: https://www.youtube.com/watch?v=44XAFLCBo9g-->

<!-- Código que exibe um Post  -->

<?php get_header(); ?>

<div class="container">
	<div class="left_container">
	<?php 
		if (have_posts()):
			while ( have_posts() ) : the_post();
	?>

	<!--Título-->
	<div class="single_container">
		<a href="<?php the_permalink(); ?>" id="title">
			<h1><?php the_title();?></h1>
		</a>

	
	Publicado por: <?php the_author()?>,em <?php echo the_date("d/m/Y").' as '; echo the_time("g:i a"); ?>
		Categoria: <?php the_category_head();?> - <?php comments_number("Nenhum comentario", "1 comentario", "% comentarios"); ?>
		
	</div>
		
	<hr width="720" align="left">
	
	<!--Conteúdo-->
	<?php the_content();?>
	<hr color="#CCCCCC"><br/>
	
	<!--Comentário-->
	<?php comments_template();?>
	
	<?php 
		endwhile; 
		else:
	?>
	<p>Nenhum post encontrado</p>
	<?php 
		endif;
	?>
	</div>

	<div class="right_container">
		<?php get_sidebar(); ?>
	</div>
	
</div>

<div style="clear: both"></div>

<?php get_footer()  ?>


