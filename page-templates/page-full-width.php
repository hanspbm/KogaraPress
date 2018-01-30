<?php
/*
Template Name: Full Width
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
						<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
					<footer>
						<?php
							wp_link_pages(
								array(
									'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
									'after'  => '</p></nav>',
								)
							);
						?>
						<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
					</footer>
				</article>

				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
	</div>
</div>
<?php get_footer();
