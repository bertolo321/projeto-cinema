<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>video</title>
        <link rel="stylesheet" href="css/reset.css">
        <meta name="viewport" content="width=300, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />
        <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

        <script>
            function mensagem() {
                alert('Conteudo bloqueado!');
                return false;
            }

            function bloquearCopia(Event) {
                var Event = Event ? Event : window.event;
                var tecla = (Event.keyCode) ? Event.keyCode : Event.which;
                if (tecla == 17) {
                    mensagem();
                }
            }
        </script>
    </head>
    <body>
        <?php
        require('./_app/Config.inc.php');
        include './_filmes/menu/menu.inc.php';
        ?>
        <h1>Em breve</h1>
        <div class="container">
            <div class="row">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ZX60xMo3QB0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/b15_u5wYB0I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/oqvlw6xwTr4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Emz8qlKhFDA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </iframe>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://vjs.zencdn.net/7.6.6/video.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php include './_filmes/footer/footer.php';?>
</body>
</html>


