<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package refur
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php refur_post_thumbnail(FALSE); ?>
  <header class="entry-header">
    <?php if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb('<p id="breadcrumbs">','</p>');
    } ?>

    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

    <div class="entry-meta">
      <?php refur_post_meta('single'); ?>
    </div><!-- .entry-meta -->
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php if(is_user_logged_in()): ?>
      <?php the_content(); ?>
    <?php else: ?>
      <?php the_excerpt(); ?>

      <p class="only-premium-text">
        <span class="text-red">Pokračovanie článku patrí k prémiovému obsahu KAM fora.</span><br>
        Pre pokracovanie sa prosim <a href="<?= bloginfo('url') ?>/wp-login.php">prihlaste</a>, alebo sa môžete byť jeho predplatiteľom
      </p>

    <?php endif; ?>

    <?php
    wp_link_pages(array(
      'before' => '<div class="page-links">' . esc_html__('Pages:', 'refur'),
      'after' => '</div>',
    ));
    ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <?php refur_post_meta('single', 'footer'); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->

