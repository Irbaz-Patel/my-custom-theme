<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
