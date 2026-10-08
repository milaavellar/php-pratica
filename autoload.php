<?php

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = 'src\\' . str_replace('\\', DIRECTORY_SEPARATOR, $nomeCompletoDaClasse) . '.php';

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});