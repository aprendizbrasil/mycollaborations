<!--Tema: Billy Tema-->
<!--Fonte: https://www.youtube.com/watch?v=44XAFLCBo9g-->

<!-- Código que exibe uma Página Estática -->

<?php get_header(); ?>

<div class="container">
	<div class="left_container">
	<?php 
		if (have_posts()):
			while ( have_posts() ) : the_post();
	?>

	<!--Título-->
	<div class="page_name">
		<h1><?php the_title(); ?></h1>
		<hr color="#DDDDDD" style="margin-top: 2px"/><br />
	</div>	<!-- Page Name -->

	<!--Conteúdo-->
	<div class="content">
		<?php the_content(); ?><br />
	</div>	<!-- Content -->
	
	<hr width="720" align="left">

	<?php 
		endwhile; 
		else:
	?>
	<p>Nenhum post encontrado</p>
	<?php 
		endif;
	?>
	</div>	<!-- Left Container -->

	<div class="right_container">
		<?php get_sidebar(); ?>
	</div>	<!-- Right Container -->


</div>	<!-- Container -->
<div style="clear: both"></div>

<?php get_footer()  ?>
