<?php
/*
Template Name: Guests
*/
get_header(); ?>

<section id="page-hero"></section>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- <header>
						<h1 class="entry-title"><?php //the_title(); ?></h1>
					</header> -->
					<div class="entry-content">
						<?php the_content(); ?>

						<div class="grid-x guests-grid grid-margin-x grid-margin-y">
							<div class="cell small-12 medium-6">
								<img src="//placehold.it/350x325">
								<h4>Pixel Face</h4>
								<p class="guest-type">Musical Guest</p>
								<p class="description">Nulla luctus ante vitae tincidunt volutpat. Sed nisl leo, tincidunt ac leo sit amet, pharetra ultricies nunc. Mauris at congue elit. In nibh tortor, accumsan nec neque vel, mollis blandit dolor. Phasellus ultricies sit amet neque eu malesuada.</p>

								<p>
									<a href="" target="_blank">Facebook</a> |
									<a href="" target="_blank">Twitter</a> |
									<a href="" target="_blank">Instagram</a>
								</p>
							</div>

							<div class="cell small-12 medium-6">
								<img src="//placehold.it/350x325">
								<h4>Pixel Face</h4>
								<p class="guest-type">Musical Guest</p>
								<p class="description">Nulla luctus ante vitae tincidunt volutpat. Sed nisl leo, tincidunt ac leo sit amet, pharetra ultricies nunc. Mauris at congue elit. In nibh tortor, accumsan nec neque vel, mollis blandit dolor. Phasellus ultricies sit amet neque eu malesuada.</p>

								<p>
									<a href="" target="_blank">Facebook</a> |
									<a href="" target="_blank">Twitter</a> |
									<a href="" target="_blank">Instagram</a>
								</p>
							</div>

							<div class="cell small-12 medium-6">
								<img src="//placehold.it/350x325">
								<h4>Pixel Face</h4>
								<p class="guest-type">Musical Guest</p>
								<p class="description">Nulla luctus ante vitae tincidunt volutpat. Sed nisl leo, tincidunt ac leo sit amet, pharetra ultricies nunc. Mauris at congue elit. In nibh tortor, accumsan nec neque vel, mollis blandit dolor. Phasellus ultricies sit amet neque eu malesuada.</p>

								<p>
									<a href="" target="_blank">Facebook</a> |
									<a href="" target="_blank">Twitter</a> |
									<a href="" target="_blank">Instagram</a>
								</p>
							</div>

							<div class="cell small-12 medium-6">
								<img src="//placehold.it/350x325">
								<h4>Pixel Face</h4>
								<p class="guest-type">Musical Guest</p>
								<p class="description">Nulla luctus ante vitae tincidunt volutpat. Sed nisl leo, tincidunt ac leo sit amet, pharetra ultricies nunc. Mauris at congue elit. In nibh tortor, accumsan nec neque vel, mollis blandit dolor. Phasellus ultricies sit amet neque eu malesuada.</p>

								<p>
									<a href="" target="_blank">Facebook</a> |
									<a href="" target="_blank">Twitter</a> |
									<a href="" target="_blank">Instagram</a>
								</p>
							</div>
						</div>


						<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
				</article>

			<?php endwhile; ?>
		</main>
	</div>
</div>
<?php get_footer();
