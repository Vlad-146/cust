<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta  charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php the_title(); ?></title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300i,400,700&display=swap&subset=cyrillic" rel="stylesheet">
<title>   
<?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
	?>
</title>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
