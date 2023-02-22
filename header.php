<?php
/**
 * Footer template
 *
 * @package Aquila
 */

?>


<!doctype html>

<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class( 'hello-class'); ?>>
  <?php wp_body_open(); ?>
<header>Header</header>
