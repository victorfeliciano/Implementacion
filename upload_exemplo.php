<?php

$arquivo  = $_FILES["arquivo"];
$dir = "uploads/";

if(move_uploaded_file($arquivo['tmp_name'],"$dir/".$arquivo["name"]))
{
    echo "Arquivo enviado com sucesso";
} else {
        echo "Arquivo nao  enviado com sucesso";
}        

var_dump($arquivo);


?>
