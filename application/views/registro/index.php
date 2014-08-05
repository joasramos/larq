<html>
    <head>
        <title>LARQ</title>
        <base href="<?= base_url() ?>" target="_blank">
        <link rel="stylesheet" href="<?= base_url() ?>assets/themes/larq/bubble-navigation/css/style.css" type="text/css" media="screen"/>
        <style>
            *{
                margin:0;
                padding:0;
            }
            body{
                font-family:Arial;
                background:#fff url(assets/themes/larq/bubble-navigation/images/bg.png) no-repeat top left;
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
                background:transparent url(back.png) no-repeat top left;
                position:fixed;
                width:150px;
                height:27px;
                outline:none;
                bottom:0px;
                left:0px;
            }
            #content{
                margin:0 auto;
            }


        </style>
    </head>

    <body>
        <div id="content">
            <a class="back" href="http://tympanus.net/codrops/2010/04/29/awesome-bubble-navigation-with-jquery"></a>
            <div class="title">Laboratório de Arqueologia do Maranhão - UFMA</div>

            <div class="navigation" id="nav">
                <div class="item user">
                    <img src="<?= base_url() ?>assets/themes/larq/bubble-navigation/images/bg_user.png" alt="" width="199" height="199" class="circle"/>
                    <a href="<?= base_url() ?>inscricoes/registrados" class="icon"></a>
                    <h2>Área restrita</h2>
                    <!--                    <ul>
                                            <li><a href="<?= base_url() ?>inscricoes/registrados">Participantes</a></li>
                                        </ul>-->
                </div>
                <div class="item home">
                    <img src="<?= base_url() ?>assets/themes/larq/bubble-navigation/images/bg_home.png" alt="" width="199" height="199" class="circle"/>
                    <a href="<?= base_url() ?>" class="icon"></a>
                    <h2>Evento</h2>
                    <ul>
                        <li><a href="#">&rightarrow;Apresentação</a></li>
                        <li><a href="#">&rightarrow;Programação</a></li>
                    </ul>
                </div>
                <div class="item shop">
                    <img src="<?= base_url() ?>assets/themes/larq/bubble-navigation/images/bg_shop.png" alt="" width="199" height="199" class="circle"/>
                    <a href="<?= base_url() ?>inscricoes/cadastro" class="icon"></a>
                    <h2>Inscrição</h2>
                </div>
                <div class="item camera">
                    <img src="<?= base_url() ?>assets/themes/larq/bubble-navigation/images/bg_camera.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Informações</h2>
                </div>
            </div>
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