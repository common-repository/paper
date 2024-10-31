<?php
/*
 * Template Name: 8.5 Inch by 11 Inch Paper
 * Description: A Page Template for Page Builders that can be printed to PDF
 */
?>
<html>
<head>

<?php wp_head(); ?>
<style type="text/css">
	.site-content {
		padding: 0 !important;
	}
	#page {
		background-image: url("<?php echo plugin_dir_url( __FILE__ ); ?>images/paper-background85-11.png");
  		background-repeat: repeat-y;
		background-origin: content-box;
  		background-size: 750px 1000px;
		max-width: 750px !important;
		padding-top: 50px !important;
		margin-left: auto;
		margin-right: auto;
	}
@media print {
	.site-content {
		padding: 0 !important;
	}
	#page {
		padding-top: 0px !important;
	}
	#page * {
		overflow: visible !important;
		height: auto !important;
		max-height: auto !important;
	}
	#wpadminbar {
		display: none !important;
	}
	div, main, article, section, table, p, 
	h1, h2, h3, h4, h5, h6, header, footer {
		box-shadow: none !important;
	}
}
</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
		<div id="content" class="site-content">

			<?php
			while ( have_posts() ) :
				the_post();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
			the_content();
			?>
</article><!-- #post-<?php the_ID(); ?> -->
			
			<?php
			endwhile; // End of the loop.
			?>

		</div><!-- #content -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>