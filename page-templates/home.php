<?php
/*
Template Name: Home
*/
get_header(); ?>

<section id="home-hero">
	<div class="video">
		<div class="screen mute" id="tv"></div>
	</div>
	<div class="transparent-background"></div>

	<h1 class="center-vertically">The awaited convention event is almost here!</h1>

	<?php echo do_shortcode( '[ujicountdown id="Hero Timer" expire="2018/04/21 09:00" hide="false" url="" subscr="" recurring="" rectype="second" repeats=""]' ); ?>
</section>

<section id="latestnews">
	<div class="main-container">
		<h2>Latest News</h2>

		<?php echo do_shortcode( '[fts_twitter twitter_name=Kogaracon tweets_count=2 cover_photo=no stats_bar=no show_retweets=no show_replies=no]' ); ?>
		<!-- twitter_height=280px  -->
	</div>
</section>

<section id="hashtagkogaracon" class="background-blue">
	<div class="main-container">
		<h2>#kogaracon</h2>

		<?php echo do_shortcode( ' [fts_instagram instagram_id=kogaracon pics_count=6 type=hashtag width=100% super_gallery=yes columns=3 force_columns=no space_between_photos=1px icon_size=65px hide_date_likes_comments=no] '); ?>
	</div>
</section>

<section id="links-grid">
	<div class="main-container">
		<div class="grid-x grid-margin-x grid-margin-y">
			<div class="cell small-12 medium-6">
				<a class="link" href="">
					<img src="//placehold.it/410x180">
					<h3>Guests</h3>
				</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer();
