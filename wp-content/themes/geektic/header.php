<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url')?>"
    <?php wp_head(); ?>
    <title></title>
  </head>
  <body id="body" <?php body_class(); ?>  data-background="dark" >

    <div id="wrapper">
        <header id="header" class="clearfix noback">
          <!--satrt logo-->
          <div  id="logo-holder" class="left">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                    if(function_exists('the_custom_logo')){
                       the_custom_logo();
                    }
                 ?>
            </a>
          </div>
          <!--End logo-->
          <div id="menu-holder" class="right">
                <input id="mostrar-modal" name="modal" type="radio" />
                <label for="mostrar-modal"><i class="fas fa-bars fa-2x"></i></label>

                <input id="cerrar-modal"  name="modal" type="radio" />
                <label for="cerrar-modal"><i class="fa fa-times fa-2x"></i></label>

                <div id="main-menu" class="clearfix style-full" >
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                      <?php wp_nav_menu(array(
                                              'theme_location' => 'menu_principal'
                                            ));
                       ?>
                    </nav>
                    <div class="informacion-redes">
                      <div class="redes-sociales">
                        <?php
                            $args = array(
                                        'theme_location' => 'social_menu' ,
                                        'container' => 'nav',
                                        'container_class' => 'sociales',
                                        'container_id' => 'sociales',
                                        'link_before' => '<span class="sr-text">',
                                        'link_after' => '</span>'
                             );
                             wp_nav_menu( $args);

                         ?>

                      </div>
                      <div class="direccion">
                        <a target="_blank" href="tel:949912283" class="wapp_main">¡Hablemos!  (+51) 949 912 283</a>
                      </div>
                    </div>
                    <div class="clear"></div>
                </div>
          </div>

        </header>



        <main id="content">
          <div class="maskee loaded show-nav  invisible-prevbtn invisible-pagination arrow-right ">
            <section class="pre-slide slide taken js-first-slide display by-scroll" style="  z-index: 99;">
              <header class="page-header caption">
                <div class="page-header-type">
                  <h2 class="title">El diseño debe contar una <i>historia</i></h2>

                  <h6 class="subtitle">Empecemos a crear la tuya.</h6>
                  <a href="/servicios" class="krown-button to-load  btn_bg">Los servicios que ofrezco</a>
                  <a href="/proyectos" class="dark btn_bg">Ver portafolio</a>
                </div>
              </header>
              <div class="media">
                 <video autoplay poster="" id="videobg" loop>
                  <source src="http://localhost:8080/geektic/wp-content/uploads/2018/03/programando.mp4"
                   type="video/webm">
                   <source src="http://localhost:8080/geektic/wp-content/uploads/2018/03/programando.mp4"
                    type="video/mp4">
                </video>

              </div>

            </section>
            <article id="post-481" class="slide taken by-scroll" data-background-l="dark"
            data-background-p="dark" itemscope="" itemtype="http://schema.org/CreativeWork"
            style="clip: auto; z-index: 174;" data-background="dark">

            <header class="page-header caption">
              <div><h6 class="subtitle">Interface Design, Software</h6>
                <h2 class="title" itemprop="name">Alpina</h2>

                <div class="excerpt" itemprop="description">
                  <p>Se desarrolló un software que recolecta información, la analiza y lanza informes detallados basados en métricas específicas.</p>
                </div>
                <a class="krown-button to-load dark" href="#"
                  data-i="1" data-title="Alpina" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                  <span>Ver proyecto
                      <svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="24" height="42"
                      viewBox="0 0 24 42" enable-background="new 0 0 24 42" xml:space="preserve">
                          <polygon fill="dark" points="23.3 20.1 23.3 20.1 23.3 20.1 20.1 23.3 20.1 23.3 3.1 40.3 0
                           37.1 17 20.1 0 3.1 3.1 0 20.1 17 20.1 17 ">
                         </polygon>
                      </svg>
                  </span>
                </a>
              </div>
            </header>

                <div class="media" data-bg-small="">
                  <img src="" alt="Alpina" data-lazyload="innoway" itemprop="image"
                  srcset="data:image/gif;base64,R0lGODlhAQABAJH/AP///wAAAMDAwAAAACH5BAEAAAIALAAAAAABAAEAAAICVAEAOw=="
                  data-src="">
                </div>


            </article>
              <article class="">

              </article>
              <article class="">

              </article>
          </div>

          <a href="#"></a>
          <a href="#"></a>
        </main>

    </div>
