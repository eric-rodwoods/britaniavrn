<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>
<?php the_content(); ?>


<?php endwhile; ?>

<?php next_posts_link('Предыдущая запись') ?> <?php previous_posts_link('Следующая запись') ?>

<?php else : ?>
<h1>Не найдено</h1>
<p>Извините, запрашиваемая вами страница не существует</p>
<?php get_search_form(); ?>

<?php endif; ?>

<?php get_footer(); ?>