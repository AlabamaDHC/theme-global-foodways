<?php
/**
 * Template Name: Cuisine Home Template
 * Description:
 */

$context = Timber::get_context();
$post = new TimberPost();

$context['post'] = $post;
// $context['id'] = $post->ID;

$context["page_header_title"] = $post->title;
$context["page_header_link"] = $post->link;

// $context["acf"] = get_field_objects($data["post"]->ID);

$children = Timber::get_posts(array('post_type' => 'page', 'post_parent' => $post->ID, 'orderby'=> 'title', 'order' => 'ASC'));

$context["ingredients_page"] = new TimberPost($children[0]);
$context["signature_dishes_page"] = new TimberPost($children[1]);
$context["where_to_get_it_page"] = new TimberPost($children[2]);

$context['author'] = new Timber\User($post.get_field('author2'));

Timber::render('template-cuisine-home.twig', $context );
