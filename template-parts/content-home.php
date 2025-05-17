<?php
/**
 * Template part for displaying home page content
 */
?>

<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1><?php echo get_theme_mod('hero_title', 'METATONEHEN'); ?></h1>
                    <p class="greek-text"><?php echo get_theme_mod('greek_text', 'μετὰ τὸ νέἕν'); ?></p>
                    <p class="lead">
                        <?php 
                        $current_language = function_exists('pll_current_language') ? pll_current_language() : 'en';
                        
                        switch ($current_language) {
                            case 'es':
                                echo get_theme_mod('hero_text_es', 'Bienvenido a mi sitio de conocimiento espiritual y geometría sagrada');
                                break;
                            case 'it':
                                echo get_theme_mod('hero_text_it', 'Benvenuto nel mio sito di conoscenza spirituale e geometria sacra');
                                break;
                            case 'pt':
                                echo get_theme_mod('hero_text_pt', 'Bem-vindo ao meu site de conhecimento espiritual e geometria sagrada');
                                break;
                            case 'de':
                                echo get_theme_mod('hero_text_de', 'Willkommen auf meiner Website für spirituelles Wissen und heilige Geometrie');
                                break;
                            default:
                                echo get_theme_mod('hero_text', 'Bienvenido a mi sitio de conocimiento espiritual y geometría sagrada');
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sacred-geometry-container">
                    <div class="flower-of-life">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/flower_of_life_enhanced.svg" alt="Flower of Life">
                    </div>
                    <div class="metatron-cube">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/metatron_cube_enhanced.svg" alt="Metatron's Cube">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cubes-section">
    <div class="container">
        <div class="section-title">
            <h2>
                <?php 
                $current_language = function_exists('pll_current_language') ? pll_current_language() : 'en';
                
                switch ($current_language) {
                    case 'es':
                        echo 'Explora Nuestros Portales';
                        break;
                    case 'it':
                        echo 'Esplora I Nostri Portali';
                        break;
                    case 'pt':
                        echo 'Explore Nossos Portais';
                        break;
                    case 'de':
                        echo 'Erkunde Unsere Portale';
                        break;
                    default:
                        echo 'Explore Our Portals';
                }
                ?>
            </h2>
            <p>
                <?php 
                switch ($current_language) {
                    case 'es':
                        echo 'Entra en los portales del conocimiento y la transformación';
                        break;
                    case 'it':
                        echo 'Entra nei portali della conoscenza e della trasformazione';
                        break;
                    case 'pt':
                        echo 'Entre nos portais do conhecimento e da transformação';
                        break;
                    case 'de':
                        echo 'Betrete die Portale des Wissens und der Transformation';
                        break;
                    default:
                        echo 'Enter the portals of knowledge and transformation';
                }
                ?>
            </p>
        </div>
        
        <!-- Portal containers for Courses, Sessions and Group Sessions -->
        <div class="row">
            <div class="col-md-4">
                <div class="metatron-portal-container">
                    <h3 class="portal-title">Courses</h3>
                    <div class="metatron-portal">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/metatron_cube_enhanced.svg" alt="Metatron's Cube" class="portal-background">
                        <div class="portal-vertices">
                            <a href="<?php echo site_url('/courses'); ?>#love-courses" class="portal-vertex vertex-1 vertex-love">
                                <span>Love</span>
                            </a>
                            <a href="<?php echo site_url('/courses'); ?>#money-courses" class="portal-vertex vertex-2 vertex-money">
                                <span>Money</span>
                            </a>
                            <a href="<?php echo site_url('/courses'); ?>#health-courses" class="portal-vertex vertex-3 vertex-health">
                                <span>Health</span>
                            </a>
                            <a href="<?php echo site_url('/courses'); ?>#mind-courses" class="portal-vertex vertex-4 vertex-mind">
                                <span>Mind</span>
                            </a>
                            <a href="<?php echo site_url('/courses'); ?>#soul-courses" class="portal-vertex vertex-5 vertex-soul">
                                <span>Soul</span>
                            </a>
                            <a href="<?php echo site_url('/courses'); ?>#body-courses" class="portal-vertex vertex-6 vertex-body">
                                <span>Body</span>
                            </a>
                        </div>
                    </div>
                    <a href="<?php echo site_url('/courses'); ?>" class="portal-link">Enter Portal</a>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="metatron-portal-container">
                    <h3 class="portal-title">1-on-1 Sessions</h3>
                    <div class="metatron-portal">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/metatron_cube_enhanced.svg" alt="Metatron's Cube" class="portal-background">
                        <div class="portal-vertices">
                            <a href="<?php echo site_url('/sessions'); ?>#coaching" class="portal-vertex vertex-1">
                                <span>Coaching</span>
                            </a>
                            <a href="<?php echo site_url('/sessions'); ?>#astrology" class="portal-vertex vertex-2">
                                <span>Astrology</span>
                            </a>
                            <a href="<?php echo site_url('/sessions'); ?>#human-design" class="portal-vertex vertex-3">
                                <span>Human Design</span>
                            </a>
                            <a href="<?php echo site_url('/sessions'); ?>#constellations" class="portal-vertex vertex-4">
                                <span>Constellations</span>
                            </a>
                            <a href="<?php echo site_url('/sessions'); ?>#healing" class="portal-vertex vertex-5">
                                <span>Healing</span>
                            </a>
                            <a href="<?php echo site_url('/sessions'); ?>#meditation" class="portal-vertex vertex-6">
                                <span>Meditation</span>
                            </a>
                        </div>
                    </div>
                    <a href="<?php echo site_url('/sessions'); ?>" class="portal-link">Enter Portal</a>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="metatron-portal-container">
                    <h3 class="portal-title">Group Sessions</h3>
                    <div class="metatron-portal">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/metatron_cube_enhanced.svg" alt="Metatron's Cube" class="portal-background">
                        <div class="portal-vertices">
                            <a href="<?php echo site_url('/group-sessions'); ?>#meditations" class="portal-vertex vertex-1">
                                <span>Meditations</span>
                            </a>
                            <a href="<?php echo site_url('/group-sessions'); ?>#retreats" class="portal-vertex vertex-2">
                                <span>Retreats</span>
                            </a>
                            <a href="<?php echo site_url('/group-sessions'); ?>#workshops" class="portal-vertex vertex-3">
                                <span>Workshops</span>
                            </a>
                            <a href="<?php echo site_url('/group-sessions'); ?>#ceremonies" class="portal-vertex vertex-4">
                                <span>Ceremonies</span>
                            </a>
                            <a href="<?php echo site_url('/group-sessions'); ?>#healing-circles" class="portal-vertex vertex-5">
                                <span>Healing Circles</span>
                            </a>
                            <a href="<?php echo site_url('/group-sessions'); ?>#online-events" class="portal-vertex vertex-6">
                                <span>Online Events</span>
                            </a>
                        </div>
                    </div>
                    <a href="<?php echo site_url('/group-sessions'); ?>" class="portal-link">Enter Portal</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Courses Section -->
<section class="featured-courses-section">
    <!-- Contenido de cursos destacados -->
</section>

<!-- Calculators Section -->
<section class="calculators-section">
    <!-- Contenido de calculadoras -->
</section>

<!-- Membership Section -->
<section class="membership-section">
    <!-- Contenido de membresías -->
</section>
