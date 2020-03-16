<?php
/*
Template Name: Шаблон архива
Template Post Type: archive
*/
?>
<?php get_header(); ?>
<div class="conteiner">
        <header class="header">
            <div class="logo">
                <img src="<?php echo MY_IMG_DIR; ?>/logo.gif" alt="">
                <span>&reg;</span>
            </div>
            <div class="hed">
                
            </div>
        </header>

        <div class="content">
        <div class="nav">
        <?php get_sidebar('left'); ?>
        </div>
        <div class="page">
        <?php if ( have_posts() ) : ?>
			<?php if (is_category()) { ?>
                <h2 id="archiveTitle">Архив за the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
            <?php } elseif( is_tag() ) { ?>
                <h2 id="archiveTitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
            <?php } elseif (is_day()) { ?>
                <h2 id="archiveTitle">Архив за <?php the_time('F jS, Y'); ?></h2>
            <?php } elseif (is_month()) { ?>
                <h2 id="archiveTitle">Архив за <?php the_time('F, Y'); ?></h2>
            <?php } elseif (is_year()) { ?>
                <h2 id="archiveTitle">Архив за <?php the_time('Y'); ?></h2>
            
            <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h2 id="archiveTitle">Архив</h2>
            <?php } ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ?> id="<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <div class="meta">
                        <em>Опубликовано:</em> <?php the_time('F jS, Y') ?>
                       
                    </div>
                    <div class="entry">
                    <?php the_excerpt(); ?>
                    </div>
                    </article>
            <?php endwhile; ?> 
            <?php else : ?>
            <h2>Not Found</h2>
        <?php endif; ?>
        </div>
        <div class="news">
        <?php get_sidebar('right'); ?>
        </div>
        </div>
        <?php get_footer(); ?>