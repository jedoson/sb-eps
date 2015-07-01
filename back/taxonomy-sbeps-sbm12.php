<?php get_header(); ?>
	<div class="container">
		<?php get_header('top'); ?>
		<div class="row">
			<div class="col-md-3">
				<?php get_sidebar('sbeps'); ?>
			</div>
			<div class="col-md-9">
				<div class="panel panel-primary">
					<div class="panel-heading">찾아오시는길</div>
					<div class="panel-body">



						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/sb-eps-map.png">

					</div>
				</div>
				
			</div>
		</div>
	</div>
<?php get_footer(); ?>
