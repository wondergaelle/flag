<?php
/*
Template Name: homepage
*/
get_header(); ?>
    <div class="container">
    <section class="header">

        <div class="ct d-flex">
            <div class="infos d-flex justify-content-center flex-column align-items-center">
                <p-1 class="typewriter">- Web.developpeuse.</p-1>
                <h3> Gaëlle
                    <br>FLOCH</br>
                </h3>
                <p-2 class=typewriter"">-freelance.</p-2>

            </div>
            <div class="photos">
                <img src="<?= get_template_directory_uri() . '/assets/images/background-header.png' ?>" alt="">
            </div>
        </div>

    </section>
    <section class="cv container d-flex flex-column flex-md-row align-items-center sm-w-50">

            <div class="flip col-12 col-md-6 d-flex p-0">
                <?php $shortcode = get_post_meta($post->ID, 'flip', true);
                echo do_shortcode($shortcode); ?>

            </div>

        <div class="text-info col-12 col-md-5 offset-1 justify-content-start">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam doloribus error exercitationem illo incidunt itaque laborum maxime mollitia perferendis quidem quisquam ratione, tempora totam? Alias beatae, deserunt iure laboriosam neque quod repellat sunt ullam voluptate? Ab alias autem ducimus esse, eum impedit minus natus non odio qui, quibusdam quis voluptatum. Beatae debitis, eveniet magnam minus quos voluptatem! Ad architecto assumenda beatae debitis delectus dicta dolorem fugit ipsa molestias, mollitia nesciunt, nisi perspiciatis quaerat quas saepe ut voluptate! Deserunt quos tempora temporibus. Alias atque aut beatae dolore doloremque facere fugiat, incidunt iusto magnam minus nam qui, quia quo quod soluta voluptates voluptatum. Animi blanditiis error fugit hic illum impedit minus tenetur veniam vitae? Eaque neque nulla perferendis quasi voluptatem? Aliquid animi aut beatae culpa cum dicta eaque eveniet harum hic illo ipsa itaque libero maiores nam officia praesentium, provident quas quibusdam, quis sapiente soluta, velit vero! Adipisci atque libero nam repellat!</p>
        </div>
    </section>



<?php get_footer(); ?>