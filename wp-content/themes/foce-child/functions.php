<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // ajout du Swiper
    wp_enqueue_style('swiper-style',  'https://cdn.jsdelivr.net/npm/swiper@9.0.0/swiper-bundle.min.css');
    wp_enqueue_script('swiper-script',  'https://cdn.jsdelivr.net/npm/swiper@9.0.0/swiper-bundle.min.js');

    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('scroll_title', get_stylesheet_directory_uri() . '/js/scroll_title.js', array(), '1.0', true);
    wp_enqueue_script('menu', get_stylesheet_directory_uri() . '/js/menu.js', array(), '1.0', true);

    wp_enqueue_script('skrollr', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js');
}

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

function init_swiper_coverflow()
{
?>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.swiper-container', {
                // Enable coverflow effect
                effect: 'coverflow',
                grabCursor: true, // Cursor type to grab the slider
                centeredSlides: true, // Center the active slide
                slidesPerView: 'auto', // Automatically adjust the number of visible slides
                coverflowEffect: {
                    rotate: 50, // Degree of rotation
                    stretch: 0, // Stretch between slides
                    depth: 100, // Depth of the slides (distance between front and back)
                    modifier: 1, // Modifier for effect strength
                    slideShadows: true, // Enable shadows on slides
                },
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
<?php
}
add_action('wp_footer', 'init_swiper_coverflow');
