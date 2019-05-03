<?php get_header(); ?>

ARCHIVE TAXONOMY

	<main id="main-single">
		<div class="container">
			<div class="row">
				<?php the_breadcrumb(); ?>
			</div>

			<div class="row" id="content">
				<div class="col-12 pt-4 pb-4">
					<h1 class="page-title text-center">Acervo <span><?php tainacan_the_term_name(); ?></span></h1>

					<?php tainacan_the_faceted_search(); ?>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>