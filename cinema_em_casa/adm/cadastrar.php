<!DOCTYPE html>
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
<script type="text/javascript">
    function validar() {
        var nome = formuser.nome.value;
        var tipo = formuser.tipo.value;
        var senha = formuser.senha.value;

        if (nome == "") {
            alert('Preencha o campo nome.');
            formuser.nome.focus();
            return false;
        }

        if (tipo == "") {
            alert('Selecione o tipo do filme.');
            formuser.nome.focus();
            return false;
        }

    }

    function valida() {
        var comboNome = document.getElementById("select");
        if (comboNome.options[comboNome.selectedIndex].value == "") {
            alert("Selecione um nome antes de prosseguir");
        }
    }
</script>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ADM CADASTRO DE FILMES</title>

    </head>
    <body>
        <?php
        $Name = array('nome_filme', 'url_filme', 'url_imagem');
        $Span = array('Nome do filme', 'URL do filme', 'URL da imagem')
        ?>
        <div class="container">
            <h1>Cadastro de filmes</h1>
            <form name="formuser" action="receberDados.php" method="POST">
                <div class="input-group mb-3">
                    <?php $erro ?>
                    <select id="select" name="tipo" class="custom-select" required="required">
                        <option value="" selected>Selecione o tipo de filme</option>
                        <option value="1">Ação</option>
                        <option value="2">Animação</option>
                        <option value="3">Clássico</option>
                        <option value="4">Comédia</option>
                        <option value="5">Documentário</option>
                        <option value="6">Drama</option>
                        <option value="7">Lançamento</option>
                        <option value="8">Legendado</option>
                        <option value="9">Romance</option>
                        <option value="10">Terror</option>
                    </select>
                </div>
                <?php
                $Juntos = array_map(null, $Name, $Span);

                foreach ($Juntos as $i => $divideArray) {

                    list($Name, $Span) = $divideArray;
                    //echo $Name;
                    ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default"><?php echo $Span; ?></span>
                        </div>
                        <input type="text" name="<?php echo $Name; ?>"class="form-control" aria-describedby="inputGroup-sizing-default" required="required">
                    </div>
                <?php } ?>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <textarea name="descricao" rows="10" cols="80" placeholder="Digite aqui a descrição do filme" required="required">
                        
                        </textarea>
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" name="cadastrar" value="CADASTRAR">

                </div>
                </body>
                </html>
                </select>