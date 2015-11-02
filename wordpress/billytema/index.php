<!--Tema: Billy Tema-->
<!--Fonte: https://www.youtube.com/watch?v=44XAFLCBo9g-->

<?php get_header(); ?>

<div class="container">
	<div class="left_container">
	<?php 
		if (have_posts()):
			while ( have_posts() ) : the_post();
	?>

	<!--Título-->
	<a href="<?php the_permalink(); ?>" id="title">
		<h1><?php the_title();?></h1>
	</a>

	<!--Conteúdo-->
	<div class="content">
		<!--p><?php the_content();?></p-->
		<div class="thumbnail">
			<?php  the_post_thumbnail(array(198,198)); ?>
		</div>
		<p><?php the_excerpt();?> <a href="<?php the_permalink()?>">[Continuar lendo...]</a></p>
		<br/>
		Publicado por: <?php the_author()?>,em <?php echo the_date("d/m/Y").' as '; echo the_time("g:i a"); ?>
		Categoria: <?php the_category_head();?> - <?php comments_number("Nenhum comentario", "1 comentario", "% comentarios"); ?>
		
		<?php //echo 'Publicado por: '; echo the_author().', em: '; echo the_date("d/m/Y").' às '; echo the_time("g:i a"); ?>
		<?php //echo 'Categoria: '; echo comments_number("Nenhum comentario", "1 comentario", "% comentários"); ?>
	</div>

	
	<hr width="720" align="left">

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


