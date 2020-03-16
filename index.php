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
            <h2>Новости компании</h2>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ?> id="<?php the_ID(); ?>">
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    
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





