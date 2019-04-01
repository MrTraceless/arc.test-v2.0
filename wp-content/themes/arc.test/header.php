<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>

	<header class="header">

    <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> -->

    <div class="header__logo">

      <a href="<?php home_url() ?>">
      <img alt="" src="<?php echo get_field('header_logo', 'options'); ?>">
      </a>

    </div>

    <div class="header-social-block">
<?php

if( have_rows('header_social_block', 'options') ):

    while ( have_rows('header_social_block', 'options') ) : the_row(); ?>

    <a href="<?php the_sub_field('social_link', 'options'); ?>" class="header-social-block__item">
    <i class="<?php the_sub_field('social_icon', 'options'); ?>"></i>
  </a>

<?php  endwhile;

else :

    // no rows found

endif; ?>

    </div>

    <div class="menu-wrapper">
      <span class="menu__title">menu</span>
      <div class="menu-burger">
        <span class="menu-burger__item"></span>
      </div>
    </div>

      <nav class="main-nav" role="navigation">
			    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'main-nav__list', 'container' => false ) ); ?>
		  </nav>

	</header>
