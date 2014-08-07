<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="Pt-br" dir="ltr">
    <head profile="http://gmpg.org/xfn/11">
        <title><?php echo $title; ?></title>        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="imagetoolbar" content="no" />

        <meta name="resource-type" content="document" />
        <meta name="robots" content="all, index, follow"/>
        <meta name="googlebot" content="all, index, follow" />

        <!--AREA PARA REFERENCIAS DE ARQUIVOS EXTERNOS, SCRIPTS, CSS, ETC-->
        <?php
        /** -- Copy from here -- */
        if (!empty($meta))
            foreach ($meta as $name => $content) {
                echo "\n\t\t";
                ?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
            }
        echo "\n";

        if (!empty($canonical)) {
            echo "\n\t\t";
            ?><link rel="canonical" href="<?php echo $canonical ?>" /><?php
        }
        echo "\n\t";

        foreach ($css as $file) {
            echo "\n\t\t";
            ?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
        } echo "\n\t";

        foreach ($js as $file) {
            echo "\n\t\t";
            ?><script src="<?php echo $file; ?>"></script><?php
        } echo "\n\t";

        /** -- to here -- */
        ?>

        <link rel="stylesheet" href="<?= base_url() ?>assets/themes/larq/css/layout.css" type="text/css" />

        <!-- Homepage Specific Elements -->
        <script type="text/javascript" src="<?= base_url() ?>assets/themes/larq/js/jquery-1.4.1.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/themes/larq/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/themes/larq/js/jquery.timers.1.2.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/themes/larq/js/jquery.galleryview.2.1.1.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/themes/larq/js/jquery.galleryview.setup.js"></script>
        <!-- End Homepage Specific Elements -->

    </head>
    <body id="top">
        <div class="wrapper row1">
            <div id="header" class="clear">
                <div class="fl_left">
                    <h1><a href="<?= base_url() ?>">LARQ</a></h1>
                    <p>Laboratório de Arqueologia da Univerdade Federal do Maranhão</p>
                </div>
                <div class="fl_right">
                    <p><a href="#">Administratação</a></p>
                    <form action="#" method="post" id="sitesearch">
                        <fieldset>
                            <legend>Site Search</legend>
                            <input type="text" value="Buscar no Site&hellip;" onfocus="this.value = (this.value == 'Search Our Website&hellip;') ? '' : this.value;" />
                            <input type="image" src="<?= base_url() ?>assets/themes/larq/images/search.gif" id="search" alt="Search" />
                        </fieldset>
                    </form>
                </div>
                <div id="topnav">
                    <ul>
                        <li class="active"><a href="<?= base_url() ?>site">Home</a></li>
                        <li><a href="">Galeria</a></li>
                        <li><a href="">Biblioteca</a></li>
                        <li><a href="">Colaboradores</a></li>
                        <li><a href="">Ouvidoria</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper row2">
            <div id="hpage_featured" class="clear">
                <!-- ####################################################################################################### -->
                <div id="featured_slide">
                    <ul>
                        <li><img src="<?= base_url() ?>assets/themes/larq/images/slide/img1.jpg" alt="" />
                            <div class="panel-overlay">
                                <h2>Titulo</h2>
                                <p>Descrição <a href="#">Continuar Leitura &raquo;</a></p>          
                            </div>
                        </li>
                        <!--<li><img src="<?= base_url() ?>assets/themes/larq/images/slide/img2.jpeg" alt="" /></li>-->
                        <li><img src="<?= base_url() ?>assets/themes/larq/images/slide/img3.jpg" alt="" />
                            <div class="panel-overlay">
                                <h2>Titulo</h2>
                                <p>Descrição <a href="#">Continuar Leitura &raquo;</a></p>        
                            </div>
                        </li>
                        <li><img src="<?= base_url() ?>assets/themes/larq/images/slide/img4.jpg" alt="" />
                            <div class="panel-overlay">
                                <h2>Titulo</h2>
                                <p>Descrição <a href="#">Continuar Leitura &raquo;</a></p>         
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- ###### -->
                <div class="intro clear">
                    <div class="welcome clear"><img class="imgl" src="<?= base_url() ?>assets/themes/larq/images/logo2.png" alt="" width=114 height=128/>
                        <div class="fl_right">
                            <h2>Seja Bem Vindo ao Nosso Portal!</h2>
                            <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa condimen tumfelis.</p>
                        </div>
                    </div>
                    <div class="popular">
                        <h2>Links Mais Visitados</h2>
                        <ul class="clear">
                            <li><a href="#">&raquo; Noticias</a></li>
                            <li><a href="#">&raquo; Galeria</a></li>
                            <li><a href="#">&raquo; Videos</a></li>       
                        </ul>
                    </div>
                </div>
                <!-- ####################################################################################################### -->
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper row3">
            <div id="container" class="clear">
                <!-- ####################################################################################################### -->
                <div id="homepage" class="clear">
                    <!-- ###### -->
                    <div id="content">
                        <div id="top_featured" class="clear">
                            <ul class="clear">
                                <li>
                                    <h2>Noticia Importante</h2>
                                    <img src="<?= base_url() ?>assets/themes/larq/images/demo/300x120.gif" alt="" />
                                    <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa.</p>
                                    <p class="readmore"><a href="#">Continuar lendo &raquo;</a></p>
                                </li>
                                <li class="last">
                                    <h2>Outra noticia importante</h2>
                                    <img src="<?= base_url() ?>assets/themes/larq/images/demo/300x120.gif" alt="" />
                                    <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa.</p>
                                    <p class="readmore"><a href="#">Continue lendo &raquo;</a></p>
                                </li>
                            </ul>
                        </div>
                        <div id="latestnews">
                            <h2>Últimas Notícias &amp; Eventos</h2>
                            <ul>
                                <li>
                                    <p><strong>Sentumquisque morbi dui congue tincidunt eu quis</strong><br />
                                        This is a W3C compliant free website template from
                                        <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>&hellip;</p>
                                    <p class="readmore"><a href="#">Leia a noticia completa &raquo;</a></p>
                                </li>
                                <li>
                                    <p><strong>Sentumquisque morbi dui congue tincidunt eu quis</strong><br />
                                        You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>&hellip;</p>
                                    <p class="readmore"><a href="#">Leia a noticia completa &raquo;</a></p>
                                </li>
                                <li class="last">
                                    <p><strong>Sentumquisque morbi dui congue tincidunt eu quis</strong><br />
                                        Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor&hellip;</p>
                                    <p class="readmore"><a href="#">Leia a noticia completa &raquo;</a></p>
                                </li>
                            </ul>
                        </div>
                        <div id="quicklinks">
                            <h2>Links Parceiros</h2>
                            <ul>
                                <li>
                                    <p><a href="#">UFMA <img src="<?= base_url() ?>assets/themes/larq/images/demo/200x80.gif" alt="" /></a></p>
                                </li>
                                <li>
                                    <p><a href="#">FAPEMA <img src="<?= base_url() ?>assets/themes/larq/images/demo/200x80.gif" alt="" /></a></p>
                                </li>
                                <li class="last">
                                    <p><a href="#">Outro parceiro <img src="<?= base_url() ?>assets/themes/larq/images/demo/200x80.gif" alt="" /></a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ###### -->
                    <div id="column">
                        <div class="holder">
                            <h2>Quem somos</h2>
                            <!-- Begin Flash Here - This is the correct method for W3C validation -->
                            <object type="application/x-shockwave-flash" data="https://www.youtube.com/v/vxAU88LxLis?version=3&amp;hl=en_US&amp;fs=1&amp;rel=0" width="300" height="250">
                                <param name="movie" value="https://www.youtube.com/v/vxAU88LxLis?version=3&amp;hl=en_US&amp;fs=1&amp;rel=0" />
                                <param name="wmode" value="opaque" />
                                <param name="quality" value="high" />
                                <param name="bgcolor" value="#E9E9E9" />
                                <param name="allowfullscreen" value="false" />
                                <param name="allowscriptaccess" value="never" />
                            </object>
                            <!-- End Flash Here -->
                            <p>Aliquatpede id pellus elit quis in nec consectetuer mattis duis in. Ipsumet ris morbi quis ac nulla aenean trisuscelerit nonummy augue et.</p>
                            <p class="readmore"><a href="#">Mais videos &raquo;</a></p>
                        </div>
                        <div class="holder last">
                            <h2>Colaboradores &amp; Parcerias</h2>
                            <ul class="staffmembers">
                                <li class="clear"><img class="imgl" src="<?= base_url() ?>assets/themes/larq/images/demo/80x80.gif" alt="" />
                                    <div class="fl_left">
                                        <p><strong>Nome</strong></p>
                                        <p>Função: </p>
                                        <p><a href="#">Ver perfil completo &raquo;</a></p>
                                    </div>
                                </li>
                                <li class="clear"><img class="imgl" src="<?= base_url() ?>assets/themes/larq/images/demo/80x80.gif" alt="" />
                                    <div class="fl_left">
                                        <p><strong>Nome</strong></p>
                                        <p> Função: </p>
                                        <p><a href="#">Ver perfil completo &raquo;</a></p>
                                    </div>
                                </li>
                                <li class="clear"><img class="imgl" src="<?= base_url() ?>assets/themes/larq/images/demo/80x80.gif" alt="" />
                                    <div class="fl_left">
                                        <p><strong>Nome</strong></p>
                                        <p>Função: </p>
                                        <p><a href="#">Ver perfil completo &raquo;</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ###### -->
                </div>
                <!-- ####################################################################################################### -->
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper row4">
            <div id="footer" class="clear">
                <!-- ####################################################################################################### -->
                <div class="footbox">
                    <h2>Acesso rápido</h2>
                    <ul>
                        <li><a href="#">&raquo; Homepage</a></li>
                        <li><a href="#">&raquo; Contact Us</a></li>
                        <li><a href="#">&raquo; Sitemap</a></li>
                        <li><a href="#">&raquo; Privacy Policy</a></li>
                        <li><a href="#">&raquo; Terms of Use</a></li>
                        <li><a href="#">&raquo; Copyright Information</a></li>
                        <li><a href="#">&raquo; Website Matters</a></li>
                    </ul>
                </div>
                <div class="footbox">
                    <h2>Como nos encontrar</h2>
                    <address>
                        Address Line 1<br />
                        Address Line 2<br />
                        Town/City<br />
                        Postcode/Zip<br />
                        <br />
                        Tel: xxxx xxxx xxxxxx<br />
                        Email: <a href="#">contact@domain.com</a>
                    </address>
                </div>
                <div class="fl_right">
                    <div id="social">
                        <h2>Conecte-se com a gente</h2>
                        <ul>
                            <li><a href="#"><img src="<?= base_url() ?>assets/themes/larq/images/social/facebook.gif" alt="" /></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>assets/themes/larq/images/social/twitter.gif" alt="" /></a></li>
                            <!--<li><a href="#"><img src="images/social/flickr.gif" alt="" /></a></li>-->
                            <li><a href="#"><img src="<?= base_url() ?>assets/themes/larq/images/social/youtube.gif" alt="" /></a></li>
                            <!--<li class="last"><a href="#"><img src="images/social/rss.gif" alt="" /></a></li>-->
                        </ul>
                    </div>
                    <div id="newsletter" class="clear">
                        <form action="#" method="post">
                            <fieldset>
                                <legend>Receba mais noticias:</legend>
                                <input type="text" value="Seu email aqui&hellip;" onfocus="this.value = (this.value == 'Enter Email Here&hellip;') ? '' : this.value;" />
                                <input type="text" id="subscribe" value="Submit" />
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- ####################################################################################################### -->
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper">
            <div id="copyright" class="clear">
                <p class="fl_left">Copyright &copy; 2011 - Todos os direitos reservados - <a href="#">larq.com.br</a></p>    
            </div>
        </div>
    </body>
</html>
