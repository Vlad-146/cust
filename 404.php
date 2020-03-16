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
            <div class="error">
                <span>Ошибка 404</span>
                <h2>Извините, такая страница на этом сайте не найдена.</h2>
                <p>Возможно вы ошиблись при вводе адреса.</p>
                <h2>Sorry, but I couldn't find that page.</h2>
            </div>
        
        </div>
        <div class="news">
        <?php get_sidebar(right); ?>
        </div>
        </div>
<?php get_footer(); ?>
