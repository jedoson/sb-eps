
<?php get_header(); ?>
<div class="container">
	<?php get_header('top'); ?>
	<div class="row">
		<div id="main-content" class="col-md-12 col-sm-12 col-xs-12">
			<?php echo do_shortcode('[slideshowjedogallery gallery_id="4"]'); ?>
		</div>
	</div>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		var oMainContent = jQuery("#main-content");
		oMainContent.css({
			height: parseInt((parseInt(oMainContent.width(),10) / 5) * 3) 
		});
	});
	</script>
</div>
<?php get_footer(); ?>


