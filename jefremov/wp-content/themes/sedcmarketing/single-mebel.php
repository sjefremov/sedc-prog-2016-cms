<?php get_header(); ?>
<?php //include('header.php') same as get_header(); ?>
<?php //require('header.php') same as get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <div id="<?php the_ID(); ?>">

        <h1><?php the_title(); ?></h1>

        <h3><?php bloginfo('rss_url'); ?></h3>

        <?php the_post_thumbnail(); ?>

        <article class="post-article">
            <?php the_content(); ?>
        </article>

    </div>
    <hr />

    <p>
        <?php echo 'Number of author posts: ' + the_author_posts(); ?>
    </p>
    <a href="<?php echo get_the_author_link(); ?>">
        <?php the_author(); ?>
    </a>
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
