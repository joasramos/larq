<html lang="pt-br">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="resource-type" content="document" />
        <meta name="robots" content="all, index, follow"/>
        <meta name="googlebot" content="all, index, follow" />
        <base href="<?= base_url() ?>">

        <meta charset="utf-8">
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

        <!-- styles -->
        <link href="<?= base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

        <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/bootstrap.min.js"></script>
        <link href="<?php echo base_url(); ?>assets/themes/default/css/general.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/themes/default/css/custom.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/default/images/favicon.png" type="image/x-icon"/>
        <meta property="og:image" content="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png"/>
        <link rel="image_src" href="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png" />
        <style type="text/css">

            ::selection{ background-color: #E13300; color: white; }
            ::moz-selection{ background-color: #E13300; color: white; }
            ::webkit-selection{ background-color: #E13300; color: white; }

            body {
                background-color: #fff;
                margin: 40px;
                /*font: 13px/20px normal Helvetica, Arial, sans-serif;*/
                color: #4F5155;
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }

            h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }

            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #body{
                margin: 0 15px 0 15px;
            }

            p.footer{
                text-align: right;
                font-size: 11px;
                border-top: 1px solid #D0D0D0;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 20px 0 0 0;
            }

            #container{
                margin: 10px;
                border: 1px solid #D0D0D0;
                -webkit-box-shadow: 0 0 8px #D0D0D0;
            }
        </style>

    </head>

    <body>

        <div class="row clearfix">
            <div class="col-md-12 column">
                <nav class="navbar navbar-default navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> 
                        <a class="navbar-brand" href="<?= base_url() ?>manager">LARQ</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#">Artefatos</a>
                            </li>
                            <li>
                                <a href="#">Usuários</a>
                            </li>
                            <!--                            <li class="dropdown">
                                                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                                                <strong class="caret"></strong>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">Action</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Another action</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Something else here</a>
                                                                </li>
                                                                <li class="divider">
                                                                </li>
                                                                <li>
                                                                    <a href="#">Separated link</a>
                                                                </li>
                                                                <li class="divider">
                                                                </li>
                                                                <li>
                                                                    <a href="#">One more separated link</a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container" style="border: 1px outset #ccc; padding: 2em">
            <?php if ($this->load->get_section('text_header') != '') { ?>
                <h1><?php echo $this->load->get_section('text_header'); ?></h1>
            <?php } ?>
            <div class="row">
                <?php echo $output; ?>
                <?php echo $this->load->get_section('sidebar'); ?>
            </div>
            <hr/>

            <footer>
                <div class="row">
                    <div class="col-md-6">
                        Copyright &copy; <a target="_blank" href="">Larq</a> | <a target="_blank" href="http://larq.quintaparte.com">larq.quintaparte.com</a>
                    </div>
                </div>
            </footer>
        </div> 
    </body>
</html>
