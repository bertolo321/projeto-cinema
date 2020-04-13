<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=300, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>

<body>
    <?php
    require './_app/Config.inc.php';
    $tipo = (filter_input(INPUT_GET, 'tipo', FILTER_DEFAULT));

    if ($tipo == 'AÃ§Ã£o'):
        $link = URL . "acao.php";
    elseif ($tipo == 'AnimaÃ§Ã£o') :
        $link = URL . "animacao.php";
    elseif ($tipo == 'ComÃ©dia'):
        $link = URL . "comedia.php";
    elseif ($tipo == 'DocumentÃ¡rio'):
        $link = URL . "documentario.php";
    elseif ($tipo === 'Drama'):
        $link = ULR . "drama.php";
    elseif ($tipo == 'LanÃ§amentos'):
        $link = URL . "lancamento.php";
    elseif ($tipo == 'Legendado'):
        $link = URL . "legendado.php";
    elseif ($tipo == 'Romance'):
        $link = URL . "romance.php";
    elseif ($tipo == 'Terror'):
        $link = URL . "terror.php";
    endif;
    ?>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary navegacao">
        <div class="container">
            <a href="<?php echo URL; ?>home.php" class="navbar-brand">
            <!--<img src="img/logo2.png" height="30">-->
                <h3>FACILITI</h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Menu Colapso">  
                <span class="navbar-toggler-icon text-light"></span>
            </button>

            <div id="menu" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto text-light nav-menu">
                    <li class="nav-item">
                        <a href="<?php echo $link; ?>" class="nav-link text-light font-weight-bold">VOLTAR A SELEÇÃO DE FILMES</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>
    <div class="container">
        
            <h1 class="text-justify"><?php echo utf8_decode($_GET['nome']); ?></h1>
  
        <video
            id="my-video"
            class="video-js"
            controls

            poster="<?php echo $_GET['poster']; ?>"



            data-setup='{"fluid": true}'
            >
            <source src="<?php echo $_GET['filme'] ?>" type="video/mp4" />

            <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a
                web browser that
                <a href="https://videojs.com/html5-video-support/" target="_blank"
                   >supports HTML5 video</a
                >
            </p>
        </video>
        <!-- Botão para acionar modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
            Sobre o filme
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo utf8_decode($_GET['descricao']); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://vjs.zencdn.net/7.6.6/video.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    <script>
        $('#ExemploModalCentralizado').on('shown.bs.modal', function () {
            $('#meuInput').trigger('focus')
        })
    </script>
</body>
</html>