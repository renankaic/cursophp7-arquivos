<?php

    $name = "images";

    //Verificar se o diretorio existe ou não
    if( !is_dir($name) ){

        //crio o diretorio
        mkdir($name);
        echo "Diretorio $name criado com sucesso!";

    } else {

        rmdir($name); //Remove a pasta
        echo "Já existe o diretório: $name foi removido ";

    }

?>