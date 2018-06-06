<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package lisette
 */

get_header(); ?>
    <div class="container-fluid">
          <div class="row">
                <div class="col-xs-12"> 
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                            <section class="error-404 not-found">
                               
                                <header class="page-header">
                                   
                                    <h1 class="page-title"><?php esc_html_e( 'Oeps! Deze pagina bestaat niet.', 'lisette' ); ?></h1>
                                    
                                </header><!-- .page-header -->

                               
                                <div class="page-content">
                                   
                                    <p><?php esc_html_e( 'Deze locatie kan niet gevonden worden.', 'lisette' ); ?></p>
                                    <a class="backToHome404" href="<?php bloginfo('url')?>">&lt; terug naar home</a>
                                    
                                </div><!-- .page-content -->
                                
                            </section><!-- .error-404 -->

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div>
          </div>
    </div>
<?php
get_footer();
