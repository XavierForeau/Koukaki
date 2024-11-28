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
                    <div class="parallax-logo-wrapper">
                        <img class="banner__logo" 
                                src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" 
                                    alt="logo"
                                    class="parallax-image"
                                    data-bottom-top="right:500px;" 
                                    data-top-bottom="right:970px;">
                    </div>
                </div>
            </div>
        </section>

        <section id="story" class="story title-wrapper">

            <!-- l'HISTOIRE -->
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

            <!-- PERSONNAGES -->
            <article id="characters">
                <div class="main-character">
                    <h3 class="title"><span>Les </span><span>personnages</span></h3>
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

            <!-- LIEU -->
            <article id="place" class="place parallax-container">
                <div>
                    <h3 class="title"><span>Le </span><span>Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

                <!-- Image qui se déplace horizontalement avec le parallax -->
                <img src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?>" alt="big cloud" class="parallax-image big-cloud" 
                    data-bottom-top="right:122px;" 
                    data-top-bottom="right:572px;">

                    <img src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?>" alt="little cloud" class="parallax-image little-cloud" 
                    data-bottom-top="right:500px;" 
                    data-top-bottom="right:970px;">
            </article>
            
        </section>

        <section id="studio" class="studio title-wrapper">
            <h2  class="title"><span>Studio</span> <span>Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

    </section>

    </main><!-- #main -->

    <!-- Ajout de la section des nomminations aux Oscars 2022 --> 
    <?php get_template_part( 'parts/oscars-2022' ); ?>
  
  <!-- Initialisation de Skrollr -->
  <script>
    skrollr.init();
  </script>
 
 <!-- écoute du scroll du logo et activation du sticky -->                       
 <script>
    window.addEventListener('scroll', function() {
        const logo = document.querySelector('.banner__logo');
        const logoTop = logo.offsetTop;
        const videoContainer = document.querySelector('.banner__video');
        const videoHeight = videoContainer.offsetHeight;
        const scrollPosition = window.scrollY;

        // Calculer la hauteur de la vidéo et ajuster le logo
        if (scrollPosition < logoTop) {
            logo.classList.add('sticky-logo'); // Ajouter la classe sticky lorsque le bas de la vidéo est atteint
            console.log("sticky scroll:",scrollPosition,"Top logo:",logoTop);
        } else {
            logo.classList.remove('sticky-logo'); // Enlever la classe sticky lorsque la vidéo est encore visible
            console.log("unsticky scroll:",scrollPosition,"Top logo:",logoTop);
       }
    });
</script>

<?php
get_footer();
