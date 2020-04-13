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
function mensagem(){
    alert('Conteudo bloqueado!');
    return false;
}
 
function bloquearCopia(Event){
    var Event = Event ? Event : window.event;
    var tecla = (Event.keyCode) ? Event.keyCode : Event.which;
    if(tecla == 17){
        mensagem();
	}
}
</script>

    </head>
    <body>
        <?php
        require('./_app/Config.inc.php');
        include './_filmes/menu/menu.inc.php';
        
        $tipo = 'Terror';
        
        $read = new Read;
        $read->ExeRead('listar_filmes', 'WHERE tipo = :tipo LIMIT :limit', 'tipo=Terror&limit=6');
       
         if(filter_input(INPUT_GET,'pagina', FILTER_DEFAULT)){
            $Pagina = filter_input(INPUT_GET,'pagina', FILTER_DEFAULT);
           if ($Pagina == 1):
                $read->ExeRead('listar_filmes', 'WHERE tipo = :tipo LIMIT :limit OFFSET :offset', "tipo={$tipo}&limit=6&offset=0");
                elseif ($Pagina == 2):
                 $read->ExeRead('listar_filmes', 'WHERE tipo = :tipo LIMIT :limit OFFSET :offset', "tipo={$tipo}&limit=6&offset=6"); 
                elseif($Pagina == 3):
                 $read->ExeRead('listar_filmes', 'WHERE tipo = :tipo LIMIT :limit OFFSET :offset', "tipo={$tipo}&limit=6&offset=12");
                elseif($Pagina == 4):
                 $read->ExeRead('listar_filmes', 'WHERE tipo = :tipo LIMIT :limit OFFSET :offset', "tipo={$tipo}&limit=6&offset=18");
                elseif($Pagina == 5):
                 $read->ExeRead('listar_filmes', 'WHERE tipo = :tipo LIMIT :limit OFFSET :offset', "tipo={$tipo}&limit=6&offset=24");
                elseif($Pagina == 6):
                 $read->ExeRead('listar_filmes', 'WHERE tipo = :tipo LIMIT :limit OFFSET :offset', "tipo={$tipo}&limit=6&offset=30");
                elseif($Pagina == 7):
                 $read->ExeRead('listar_filmes', 'WHERE tipo = :tipo LIMIT :limit OFFSET :offset', "tipo={$tipo}&limit=6&offset=36");
                elseif($Pagina == 8):
                 $read->ExeRead('listar_filmes', 'WHERE tipo = :tipo LIMIT :limit OFFSET :offset', "tipo={$tipo}&limit=6&offset=42");
                elseif($Pagina == 9):
                 $read->ExeRead('listar_filmes', 'WHERE tipo = :tipo LIMIT :limit OFFSET :offset', "tipo={$tipo}&limit=6&offset=48");
                elseif($Pagina == 10):
                 $read->ExeRead('listar_filmes', 'WHERE tipo = :tipo LIMIT :limit OFFSET :offset', "tipo={$tipo}&limit=6&offset=54");
            endif; 
                
        }
        
        echo "<div class='container'><h1 class='text-justify'>Terror</h1><div class='row'>";

        foreach ($read->getResult() as $cat):
            View::Request('_filmes/_mostrar_filmes/img', $cat);
        endforeach;
        ?>
        <div class="container">
            <ul class="pagination">
                <li>
                    <a class="page-link" href="#">Anterior</a>
                </li>
<?php for ($i = 1; $i <= 10; $i++) { ?>
                    <li class="page-item"><a class="page-link" href="<?php echo "?pagina={$i}"; ?>"><?php echo $i; ?></a></li>
<?php } ?>
                <li class="page-item">
                    <a class="page-link" href="#">Próximo</a>
                </li>
            </ul>
        </div>
        <script>
	document.onkeypress = bloquearCopia;
	document.onkeydown = bloquearCopia;
	document.oncontextmenu = mensagem;
</script>
         <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://vjs.zencdn.net/7.6.6/video.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
       
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php include './_filmes/footer/footer.php';?>
    </body>
</html>





