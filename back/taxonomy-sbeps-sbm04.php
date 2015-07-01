<?php get_header(); ?>
	<div class="container">
		<?php get_header('top'); ?>
		<div class="row">
			<div class="col-md-3 col-sbm">
				<?php get_sidebar('sbeps'); ?>
			</div>
			<div class="col-md-9">
				
				<div class="panel panel-primary">
					<div class="panel-heading">공장현황</div>
					<div class="panel-body">
				
						<p><i class="fa fa-home fa-2x"></i> 소재지 : 경남 창원시 의창구 대산면 가술산남로12번길 3</p>
						<p><i class="fa fa-paw fa-2x"></i> TOTAL  AREA : 1,582㎡(480평)</p>
						<p><i class="fa fa-paw fa-2x"></i> MANUFACTURING AREA : 493㎡ (150평)</p>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/main.png">

					</div>
				</div>
				
			</div>
		</div>
	</div>
<?php get_footer(); ?>
