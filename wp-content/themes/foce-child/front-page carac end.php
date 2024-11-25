<?php

get_header();
?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>

    <main id="primary" class="site-main">

        <section class="banner">
            <!-- ETAPE 1 : Modifier l'affichage général --> 
            <img class="banner__banner" 
                src="<?php echo get_theme_file_uri() . '/assets/images/banner.png'; ?>" alt="banniere">
            <!-- ETAPE 2 : Ajout de la vidéo --> 
            <video class="banner__video" width="1440" autoplay="autoplay" muted="" loop="infinite" poster="">
                    <source src="<?php echo get_theme_file_uri() . '/assets/videos/Studio+Koukaki-video+header+sans+son.mp4'; ?>" type="video/mp4">
            </video>
            <!-- ETAPE 1 : Modifier l'affichage général, avec un mvt de floating --> 
            <div class="container">
                <div class="floating-element">
                    <img class="banner__logo" 
                            src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="logo">
                </div>
            </div>
        </section>

        <!-- l'HISTOIRE -->
        <section id="story" class="story title-wrapper">
            <h2 class="title"> <span>L'</span><span>histoire</span></h2>
            <article id="story__article" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>



            <!-- LE LIEU -->
            <article id="place" class="place parallax-container">
                <div>
                    <h3 class="title"><span>Le Lieu</span></h3>
                        <p><?php echo get_theme_mod('place'); ?></p>
                </div>

                <div>
                <!-- Image qui se déplace horizontalement avec le parallax -->
                <img src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?>" alt="big cloud" class="parallax-big-cloud" 
                    data-0="transform: translateX(0%);" 
                    data-1000="transform: translateX(-100%);">

                <!-- Image qui se déplace horizontalement avec le parallax -->
                <img src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?>" alt="little cloud" class="parallax-little-cloud" 
                    data-0="transform: translateX(0%);" 
                    data-1000="transform: translateX(-100%);">
                </div>
            </article>



            <!-- LES PERSONNAGES --> 
            <article id="characters">
                <div class="main-character">
                    <h3 class="title"><span>Les personnages</span></h3>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        while ( $characters_query->have_posts() ) {
                            $characters_query->the_post();
                            echo '<div class="swiper-slide"><figure>';
                            echo get_the_post_thumbnail( get_the_ID(), 'full' );
                            echo '<figcaption>';
                            the_title();
                            echo'</figcaption>';
                            echo '</figure></div>';
                        }
                        ?>
                    </div>
                </div>
            </article>





        </section>

    </main><!-- #main -->

    <!-- Ajout de la section des nomminations aux Oscars 2022 --> 
    <?php get_template_part( 'parts/oscars-2022' ); ?>
  
    <!-- Initialisation de Skrollr -->
    <script>
        if (window.innerWidth > 768) {
            // initialise après le chargement du contenu de la page
            window.addEventListener('load', function () {
                skrollr.init({
                    forceHeight: false, // Désactive la contrainte sur la hauteur de la page
                    smoothScrolling: true, // Option pour des défilements plus fluides
                });
        });
        } else {    // désactive pour les petites définitions le parallax
            skrollr.init().destroy();
        }
    </script>
  
<?php
get_footer();
