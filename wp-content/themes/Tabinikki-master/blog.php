<?php /*
Template Name: ブログトップ
*/ ?>

<?php get_header(); ?>

　　<?php query_posts('post_type=post&paged='.$paged); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<h3 class="time-author"><time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time><?php _e(' in','typesense'); ?> <?php the_category(', ') ?>
			 | <?php comments_popup_link(__('No Comments &#187;','tabinikki'), __('1 Comment &#187;','tabinikki'), __('% Comments &#187;','tabinikki')); ?></h3>
<?php global $more; $more = FALSE; ?>
   <?php the_excerpt(); ?>
   <?php $more = TRUE; ?>
		</article>

	<?php endwhile; ?>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','tabinikki'); ?></h2>

	<?php endif; ?>
    <?php wp_reset_query(); ?>

<?php get_footer(); ?>
