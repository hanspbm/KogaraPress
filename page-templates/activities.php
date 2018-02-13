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

						<div id="map">
							<img class="map-1" usemap="#map-1" src="/wp-content/themes/KogaraPress/src/assets/images/map-placeholder-1.png">
							<blockquote>Main Convention Second Floor. Click anywhere in the map for more info!</blockquote>

							<img class="map-2" usemap="#map-2" src="/wp-content/themes/KogaraPress/src/assets/images/map-placeholder-2.png">
							<blockquote>First and Third Floor. Click anywhere in the map for more info!</blockquote>

							<map name="map-1">
								<area shape="rect" coords="685,285,915,575" href="#artist-alley" alt="Artist Alley">
							</map>

							<map name="map-2">
								<area shape="rect" coords="280,165,450,225" href="#video-game-room" alt="Video Game Room">
							</map>
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
									<img src="//placehold.it/350x300">
									<a class="button hide-for-large stroke" href="">LEARN MORE</a>
								</div>
							</div>
						</div>

						<img src="/wp-content/themes/KogaraPress/src/assets/images/line-separator.png">

						<div id="panels" class="activity">
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 large-7">
									<h4>Panels</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper molestie massa, ac dapibus ante tincidunt nec. Nullam a risus ante. Proin tincidunt semper lectus vel scelerisque. Suspendisse justo justo, imperdiet in ipsum non, tristique maximus dui. Praesent id venenatis justo. Aliquam luctus, nibh sit amet malesuada dignissim, risus neque eleifend nulla, vulputate elementum orci est eget sem.</p>

									<a class="button show-for-large stroke" href="">LEARN MORE</a>
								</div>
								<div class="cell small-12 large-5">
									<img src="//placehold.it/350x300">
									<a class="button hide-for-large stroke" href="">LEARN MORE</a>
								</div>
							</div>
						</div>						

						<img src="/wp-content/themes/KogaraPress/src/assets/images/line-separator.png">

						<div id="cosplay-contest" class="activity">
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 large-7">
									<h4>Cosplay Contest</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper molestie massa, ac dapibus ante tincidunt nec. Nullam a risus ante. Proin tincidunt semper lectus vel scelerisque. Suspendisse justo justo, imperdiet in ipsum non, tristique maximus dui. Praesent id venenatis justo. Aliquam luctus, nibh sit amet malesuada dignissim, risus neque eleifend nulla, vulputate elementum orci est eget sem.</p>

									<a class="button show-for-large stroke" href="">LEARN MORE</a>
								</div>
								<div class="cell small-12 large-5">
									<img src="//placehold.it/350x300">
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
									<img src="//placehold.it/350x300">
									<a class="button hide-for-large stroke" href="">LEARN MORE</a>
								</div>
							</div>
						</div>

						<img src="/wp-content/themes/KogaraPress/src/assets/images/line-separator.png">

						<div id="table-top" class="activity">
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 large-7">
									<h4>Table Top</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper molestie massa, ac dapibus ante tincidunt nec. Nullam a risus ante. Proin tincidunt semper lectus vel scelerisque. Suspendisse justo justo, imperdiet in ipsum non, tristique maximus dui. Praesent id venenatis justo. Aliquam luctus, nibh sit amet malesuada dignissim, risus neque eleifend nulla, vulputate elementum orci est eget sem.</p>

									<a class="button show-for-large stroke" href="">LEARN MORE</a>
								</div>
								<div class="cell small-12 large-5">
									<img src="//placehold.it/350x300">
									<a class="button hide-for-large stroke" href="">LEARN MORE</a>
								</div>
							</div>
						</div>

						<img src="/wp-content/themes/KogaraPress/src/assets/images/line-separator.png">

						<div id="crunchy-roll" class="activity">
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 large-7">
									<h4>Crunchy Roll Chill Room</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper molestie massa, ac dapibus ante tincidunt nec. Nullam a risus ante. Proin tincidunt semper lectus vel scelerisque. Suspendisse justo justo, imperdiet in ipsum non, tristique maximus dui. Praesent id venenatis justo. Aliquam luctus, nibh sit amet malesuada dignissim, risus neque eleifend nulla, vulputate elementum orci est eget sem.</p>

									<a class="button show-for-large stroke" href="">LEARN MORE</a>
								</div>
								<div class="cell small-12 large-5">
									<img src="//placehold.it/350x300">
									<a class="button hide-for-large stroke" href="">LEARN MORE</a>
								</div>
							</div>
						</div>

						<img src="/wp-content/themes/KogaraPress/src/assets/images/line-separator.png">

						<div id="karaoke" class="activity">
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 large-7">
									<h4>Karaoke</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper molestie massa, ac dapibus ante tincidunt nec. Nullam a risus ante. Proin tincidunt semper lectus vel scelerisque. Suspendisse justo justo, imperdiet in ipsum non, tristique maximus dui. Praesent id venenatis justo. Aliquam luctus, nibh sit amet malesuada dignissim, risus neque eleifend nulla, vulputate elementum orci est eget sem.</p>

									<a class="button show-for-large stroke" href="">LEARN MORE</a>
								</div>
								<div class="cell small-12 large-5">
									<img src="//placehold.it/350x300">
									<a class="button hide-for-large stroke" href="">LEARN MORE</a>
								</div>
							</div>
						</div>

						<img src="/wp-content/themes/KogaraPress/src/assets/images/line-separator.png">

						<div id="pokemon-go" class="activity">
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 large-7">
									<h4>Pokemon GO</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper molestie massa, ac dapibus ante tincidunt nec. Nullam a risus ante. Proin tincidunt semper lectus vel scelerisque. Suspendisse justo justo, imperdiet in ipsum non, tristique maximus dui. Praesent id venenatis justo. Aliquam luctus, nibh sit amet malesuada dignissim, risus neque eleifend nulla, vulputate elementum orci est eget sem.</p>

									<a class="button show-for-large stroke" href="">LEARN MORE</a>
								</div>
								<div class="cell small-12 large-5">
									<img src="//placehold.it/350x300">
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
