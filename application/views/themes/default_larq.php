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

        <style type="text/css">
            .Three-Dee{
                font-family: Garamond, serif;
                line-height: 1em;
                color: #cc3f3f;
                font-weight:bold;
                font-size: 25px;
                text-shadow:0px 0px 0 rgb(165,24,24),1px 0px 0 rgb(136,-5,-5),2px 0px 0 rgb(107,-34,-34), 3px 0px 0 rgb(78,-63,-63),4px 0px 3px rgba(0,0,0,0.6),4px 0px 1px rgba(0,0,0,0.5),0px 0px 3px rgba(0,0,0,.2);
            }

            .sombra-dir-baixo{
                -webkit-box-shadow: 3px 0px 10px 0px rgba(50, 50, 50, 0.75);
                -moz-box-shadow:    3px 0px 10px 0px rgba(50, 50, 50, 0.75);
                box-shadow:         3px 0px 10px 0px rgba(50, 50, 50, 0.75);
            }
        </style> 

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
                        <li><a href="<?= base_url() ?>site/galeria">Galeria</a></li>
                        <li><a href="">Biblioteca</a></li>
                        <li><a href="">Colaboradores</a></li>
                        <li><a href="">Ouvidoria</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="row">
            <!--CONTEUDO DO SITE-->
            <?php echo $output; ?>
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
