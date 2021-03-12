<?php
/*
Template Name: homepage
*/
get_header(); ?>

    <section id="header">
        <div class="container ">

            <div class="ct">
                <div class="infos">
                    <p-1 class="typewriter">- freelance</p-1>
                    <h3> Gaëlle
                        <br>FLOCH</br>
                    </h3>
                    <p-2>Web.developpeuse.</p-2>

                </div>
                <div class="photos">
                    <img src="<?= get_template_directory_uri(). '/dist/images/photo-removebg.png' ?>" alt="">
                </div>
            </div>
        </div>

    </section>
    </header>

    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'front-page');
        endwhile;
        endif; ?>
    </main>

<?php get_footer(); ?>