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
        <section class="cv flex-md-row align-items-center">
            <div class="infos d-flex justify-content-center flex-column align-items-center">



                <div class="flip d-flex col-4 align-items-start">
                    <?php  $shortcode = get_post_meta($post->ID,'flip',true);
                    echo do_shortcode($shortcode);?>
                </div>
                <button  class="btn mirada-btn mirada-btn-black m-0"><?php
                    $file = get_field('pdf');
                    if ($file): ?>
                        <a href="<?php echo $file['url']; ?>" target="_blank"><?php echo $file['filename']; ?></a>
                    <?php endif; ?></button>
                <!--     <div class="f-fle"><?php
                /*                $image = get_field('image');
                                if( !empty( $image ) ): */?>
                    <img src="<?php /*echo esc_url($image['url']); */?>" alt="<?php /*echo esc_attr($image['alt']); */?>" />
                <?php /*endif; */?>

            </div>-->

       <!--     <div class="f-fle"><?php
/*                $image = get_field('image');
                if( !empty( $image ) ): */?>
                    <img src="<?php /*echo esc_url($image['url']); */?>" alt="<?php /*echo esc_attr($image['alt']); */?>" />
                <?php /*endif; */?>

            </div>-->

    <?php
    $file = get_field('pdf');
    if( $file ):

        // Extract variables.
        $url = $file['url'];
        $title = $file['title'];
        $caption = $file['caption'];
        $icon = $file['icon'];

        // Display image thumbnail when possible.
        if( $file['type'] == 'image' ) {
            $icon =  $file['sizes']['thumbnail'];
        }

        // Begin caption wrap.
        if( $caption ): ?>
            <div class="wp-caption">
        <?php endif; ?>

        <a href="<?php echo esc_attr($url) ; ?>" target="_blank" title="<?php echo esc_attr($title); ?>">
            <img src="<?php echo esc_attr($icon); ?>" />
            <span><?php echo esc_html($title); ?></span>
        </a>

        <?php
        // End caption wrap.
        if( $caption ): ?>
            <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
            </div>
        <?php endif; ?>
    <?php endif; ?>


</section>



<?php get_footer(); ?>