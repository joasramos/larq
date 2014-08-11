<html>
    <head>
        <title>Inicio</title>
        <base href="<?= base_url() ?>" target="_blank">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/themes/back-full-img/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/themes/back-full-img/css/style1.css" />
        <script type="text/javascript" src="<?= base_url() ?>assets/themes/back-full-img/js/modernizr.custom.86080.js"></script>

        <link rel="stylesheet" href="<?= base_url() ?>assets/themes/larq/bubble-navigation/css/style.css" type="text/css" media="screen"/>
        <style>
            *{
                margin:0;
                padding:0;
            }
            body{
                font-family:Arial;
                background:#a8cfff url("assets/themes/larq/bubble-navigation/images/bg.png") no-repeat top left;

            }
            .title{
                width:548px;
                height:119px;
                position:absolute;
                top:400px;
                left:150px;
                background:transparent url(title.png) no-repeat top left;
            }
            a.back{
                background:transparent url("assets/themes/larq/images/logo2.png") no-repeat top left;
                position:fixed;
                /*                width:150px;
                                height:27px;*/
                outline:none;
                top:0px;
                left:0px;
            }
            #content{
                margin:0 auto;
            }

            .title{
                /*Apply this class to some text to unlock the secrets of the third dimension!*/

                font-family: Garamond, serif;
                line-height: 1em;
                color: #4f76b0;
                font-weight:bold;
                font-size: 29px;
                text-shadow:0px 0px 0 rgb(40,79,137),1px 0px 0 
                    rgb(11,50,108),2px 0px 0 rgb(-18,21,79), 3px 0px 0 
                    rgb(-47,-8,50),4px 0px 3px rgba(0,0,0,0.6),4px 0px 1px 
                    rgba(0,0,0,0.5),0px 0px 3px rgba(0,0,0,.2);
            }

        </style>
    </head>

    <body>
        <div>
            <div id="content" style="border:1px solid black">
                <ul class="cb-slideshow">
                    <li><span>Image 01</span><div><h3></h3></div></li>
                    <li><span>Image 02</span><div><h3></h3></div></li>
                    <li><span>Image 03</span><div><h3></h3></div></li>
                    <li><span>Image 04</span><div><h3></h3></div></li>
                    <li><span>Image 05</span><div><h3></h3></div></li>
                    <li><span>Image 06</span><div><h3></h3></div></li>
                </ul>

                <div class="title">I Seminário do Laboratório de Arqueologia do Maranhão - UFMA</div>

                <div class="navigation" id="nav">
                    <div class="item user">
                        <img src="<?= base_url() ?>assets/themes/larq/bubble-navigation/images/bg_user.png" alt="" width="199" height="199" class="circle"/>
                        <a href="<?= base_url() ?>home" class="icon"></a>
                        <h2>Área restrita</h2>
                        <!--                    <ul>
                                                <li><a href="<?= base_url() ?>inscricoes/registrados">Participantes</a></li>
                                            </ul>-->
                    </div>
                    <div class="item home">
                        <img src="<?= base_url() ?>assets/themes/larq/bubble-navigation/images/bg_home.png" alt="" width="199" height="199" class="circle"/>
                        <a href="<?= base_url() ?>inscricoes/apresentacao" class="icon" target="_self"></a>
                        <h2>Evento</h2>
                        <ul>
                            <li><a href="<?= base_url() ?>inscricoes/apresentacao" target="_self">&rightarrow;Apresentação</a></li>
                            <li><a href="<?= base_url() ?>inscricoes/programacao" target="_self">&rightarrow;Programação</a></li>
                        </ul>
                    </div>
                    <div class="item shop">
                        <img src="<?= base_url() ?>assets/themes/larq/bubble-navigation/images/bg_shop.png" alt="" width="199" height="199" class="circle"/>
                        <a href="<?= base_url() ?>inscricoes/cadastro" target="_self" class="icon"></a>
                        <h2>Inscrição</h2>
                    </div>
                    <div class="item camera">
                        <img src="<?= base_url() ?>assets/themes/larq/bubble-navigation/images/bg_camera.png" alt="" width="199" height="199" class="circle"/>
                        <a href="<?= base_url() ?>inscricoes/normas" class="icon" target="_self"></a>
                        <h2>Informações</h2>
                    </div>
                </div>
            </div>
            <div style="width: 100%; display: table" >
                <div style="width: 80px; height: 470px; float: right">
                    <h6 style="text-align: center"> OFERECIMENTO: </h6>
                    <img src="<?= base_url() ?>/assets/themes/larq/images/logo2.png" width="80" height="70">
                    <img src="<?= base_url() ?>/assets/themes/registro/logos/logo-ufma.PNG" width="80" height="70">
                    <img src="<?= base_url() ?>/assets/themes/registro/logos/fapema.gif" width="80" height="70">
                    <img src="<?= base_url() ?>/assets/themes/registro/logos/iphan.jpg" width="80" height="70">
                    <img src="<?= base_url() ?>/assets/themes/registro/logos/logo-unicamp.jpg" width="80" height="70">
                    <img src="<?= base_url() ?>/assets/themes/registro/logos/logo_ufpel.gif" width="80" height="70">
                </div>
            </div>
            <div style="width: 350px; 
                 height: 100px; 
                 float: right; 
                 padding: 2em; 
                 font-size: 10px; 
                 text-align: center; 
                 position: absolute; 
                 bottom: 0; 
                 right: 0; 
                 color:white;
                 background-color: #4f76b0; border-radius: 50px 0px; opacity: 0.7">
                <p> Tel.: (98)3272-9322 / Email.: larqufma@gmail.com</p>      
                <p> Prédio de Pós Graduação em Ciências Humanas e Sociais</p>
                <p> Programa de Pós Graduação em História Social - PPGHIS</p>
                <p> Departamento de História</p>
            </div>
        </div>
        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/themes/larq/bubble-navigation/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#nav > div').hover(
                        function() {
                            var $this = $(this);
                            $this.find('img').stop().animate({
                                'width': '199px',
                                'height': '199px',
                                'top': '-25px',
                                'left': '-25px',
                                'opacity': '1.0'
                            }, 500, 'easeOutBack', function() {
                                $(this).parent().find('ul').fadeIn(700);
                            });

                            $this.find('a:first,h2').addClass('active');
                        },
                        function() {
                            var $this = $(this);
                            $this.find('ul').fadeOut(500);
                            $this.find('img').stop().animate({
                                'width': '52px',
                                'height': '52px',
                                'top': '0px',
                                'left': '0px',
                                'opacity': '0.1'
                            }, 5000, 'easeOutBack');

                            $this.find('a:first,h2').removeClass('active');
                        }
                );
            });
        </script>
    </body>
</html>