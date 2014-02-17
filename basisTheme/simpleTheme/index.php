<!-- header -->
<?php
get_header();
?> 
<div id="wrapper">
	<div id="content">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<?php the_content( 'Lees meer...'); ?>
		</div>
		<?php endwhile; ?>
	</div>
	<!-- sidebar -->
	<?php
		get_sidebar();
	?>
</div>
<!-- footer -->
<?php
get_footer();
?>