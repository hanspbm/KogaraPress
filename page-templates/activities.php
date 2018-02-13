<?php
/*
Template Name: Activities
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

						<div id="map" class="activity">
							<img src="//placehold.it/700x350">
							<p>Click anywhere in the map for more info!</p>
						</div>

						<img src="/wp-content/themes/KogaraPress/src/assets/images/line-separator.png">

						<div id="artist-alley" class="activity">
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 large-7">
									<h4>Artist Alley / Vendor Hall</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper molestie massa, ac dapibus ante tincidunt nec. Nullam a risus ante. Proin tincidunt semper lectus vel scelerisque. Suspendisse justo justo, imperdiet in ipsum non, tristique maximus dui. Praesent id venenatis justo. Aliquam luctus, nibh sit amet malesuada dignissim, risus neque eleifend nulla, vulputate elementum orci est eget sem.</p>

									<a class="button show-for-large stroke" href="">LEARN MORE</a>
								</div>
								<div class="cell small-12 large-5">
									<img src="//placehold.it/350">
									<a class="button hide-for-large stroke" href="">LEARN MORE</a>
								</div>
							</div>
						</div>

						<img src="/wp-content/themes/KogaraPress/src/assets/images/line-separator.png">

						<div id="cosplay-contest" class="activity">
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 large-7 large-order-2">
									<h4>Cosplay Contest</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper molestie massa, ac dapibus ante tincidunt nec. Nullam a risus ante. Proin tincidunt semper lectus vel scelerisque. Suspendisse justo justo, imperdiet in ipsum non, tristique maximus dui. Praesent id venenatis justo. Aliquam luctus, nibh sit amet malesuada dignissim, risus neque eleifend nulla, vulputate elementum orci est eget sem.</p>

									<a class="button show-for-large stroke" href="">LEARN MORE</a>
								</div>
								<div class="cell small-12 large-5 large-order-1">
									<img src="//placehold.it/350">
									<a class="button hide-for-large stroke" href="">LEARN MORE</a>
								</div>
							</div>
						</div>

						<img src="/wp-content/themes/KogaraPress/src/assets/images/line-separator.png">

						<div id="video-game-room" class="activity">
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 large-7">
									<h4>Video Game Room</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper molestie massa, ac dapibus ante tincidunt nec. Nullam a risus ante. Proin tincidunt semper lectus vel scelerisque. Suspendisse justo justo, imperdiet in ipsum non, tristique maximus dui. Praesent id venenatis justo. Aliquam luctus, nibh sit amet malesuada dignissim, risus neque eleifend nulla, vulputate elementum orci est eget sem.</p>

									<a class="button show-for-large stroke" href="">LEARN MORE</a>
								</div>
								<div class="cell small-12 large-5">
									<img src="//placehold.it/350">
									<a class="button hide-for-large stroke" href="">LEARN MORE</a>
								</div>
							</div>
						</div>

						<img src="/wp-content/themes/KogaraPress/src/assets/images/line-separator.png">

						<div id="table-top" class="activity">
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 large-7 large-order-2">
									<h4>Table Top</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper molestie massa, ac dapibus ante tincidunt nec. Nullam a risus ante. Proin tincidunt semper lectus vel scelerisque. Suspendisse justo justo, imperdiet in ipsum non, tristique maximus dui. Praesent id venenatis justo. Aliquam luctus, nibh sit amet malesuada dignissim, risus neque eleifend nulla, vulputate elementum orci est eget sem.</p>

									<a class="button show-for-large stroke" href="">LEARN MORE</a>
								</div>
								<div class="cell small-12 large-5 large-order-1">
									<img src="//placehold.it/350">
									<a class="button hide-for-large stroke" href="">LEARN MORE</a>
								</div>
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
