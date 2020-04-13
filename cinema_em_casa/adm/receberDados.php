<?php

if (!empty((filter_input(INPUT_POST, "cadastrar", FILTER_DEFAULT)))) {
    $NomeFilme = filter_input(INPUT_POST, "nome_filme", FILTER_DEFAULT);
    $UrlFilme = filter_input(INPUT_POST, "url_filme", FILTER_DEFAULT);
    $UrlImagem = filter_input(INPUT_POST, "url_imagem", FILTER_DEFAULT);
    $tipo = filter_input(INPUT_POST, "tipo", FILTER_DEFAULT);
    $Descricao = filter_input(INPUT_POST, "descricao", FILTER_DEFAULT);
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y-m-d H:i');
    echo $date;
    if ($tipo == 1) {
        $tipo = "Ação";
    }
    if ($tipo == 2) {
        $tipo = "Animação";
    }
    if ($tipo == 3) {
        $tipo = "Clássicos";
    }
    if ($tipo == 4) {
        $tipo = "Comédia";
    }
    if ($tipo == 5) {
        $tipo = "Documentário";
    }
    if ($tipo == 6) {
        $tipo = "Drama";
    }
    if ($tipo == 7) {
        $tipo = "Lançamentos";
    }
    if ($tipo == 8) {
        $tipo = "Legendado";
    }
    if ($tipo == 9) {
        $tipo = "Romance";
    }
    if ($tipo == 10) {
        $tipo = "Terror";
    }

    require '../_app/Config.inc.php';

    $Dados = ['nome_filme' => $NomeFilme, 'descricao' => $Descricao, 'url_filme' => $UrlFilme, 'url_imagem' => $UrlImagem, 'tipo' => $tipo,'data_adicionado'=>$date];

    $Cadastra = new Create;
    // $Cadastra->ExeCreate('ws_siteviews_agent',$Dados);
    $Cadastra->ExeCreate('listar_filmes', $Dados);

    if ($Cadastra->getResult()):
        echo "Cadastro com sucesso!<hr>";
    endif;
}

