<?php
/*
Template Name: Home
*/
get_header(); ?>

<section id="home-hero">
	<div class="video">
	<iframe src="https://www.youtube.com/embed/NCunjdUqKu4?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=NCunjdUqKu4&amp;start=6&amp;mute=1" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="transparent-background"></div>

	<h1 class="center-vertically">The long awaited convention event is almost here!</h1>

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

<section id="contact-us">
	<div class="main-container">
		<h2>Contact Us</h2>

		<?php echo do_shortcode( '[contact-form-7 id="38" title="Contact form 1"]' ); ?>
	</div>
</section>

<?php get_footer();
