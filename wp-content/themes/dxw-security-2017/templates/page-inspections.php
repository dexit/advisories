<?php /* Template name: Plugin inspections */ ?>

<?php get_template_part('partials/page-header'); ?>

<?php get_template_part('partials/page-introduction'); ?>

<div class="row">
    <div class="page-container">
        <div class="page-content">
            <article class="rich-text">
                <?php the_post();
                the_content(); ?>
            </article>
            <?php get_template_part('partials/recommendations'); ?>
            <?php if (get_field('failure_criteria_description')) : ?>
                <section id="failure-criteria" class="failure-criteria">
                    <article class="rich-text">
                        <h2>Failure criteria</h2>
                        <?php the_field('failure_criteria_description'); ?>
                    </article>
                    <table class="criteria-table">
                        <caption><?php the_field('table_caption'); ?></caption>
                        <thead>
                            <tr>
                                <th scope="col" class="name">Criterion</th>
                                <th scope="col">Explanation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (have_rows('failure_criteria_table')) :
                                while (have_rows('failure_criteria_table')) :
                                    the_row(); ?>
                                    <tr>
                                        <td class="name"><?php the_sub_field('criterion'); ?></td>
                                        <td><?php the_sub_field('explanation'); ?></td>
                                    </tr>
                                <?php endwhile;
                            endif; ?>
                        </tbody>
                    </table>
                </section>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_template_part('partials/options-banner'); ?>