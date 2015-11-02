<div class="footer">
	<div class="centered_footer">
		<div class="left_centered_footer">
			<a href="<?php echo get_option('home')  ?>"><?php  bloginfo('name'); ?></a>
			&reg; - Todos os direitos reservados &copy;
		</div>
		<div class="right_centered_footer">
				<li><a href="<?php echo get_option('home')  ?>">Home</a></li>
				<?php echo wp_list_pages('title_li=')  ?>

		</div>
	</div>
</div>

<?php 
	wp_footer(); 
?>
</body>
</html>
