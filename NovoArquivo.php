<?php
//$arquivo   = fopen("D:\aula.csv",'r'); // read  = leitura
// le o conteudo do arquivo
// while(!feof($arquivo))// lista fim do arquivo       
//{
    //$linha  = fgets($arquivo,1024);//pega o arquivo
    //echo $linha . "<br>";
//}    
//fclose($arquivo);

$texto  = "nome;idade;telefone";  

///$texto  .= "Lianderson;44";
//$texto  .= "Zeca;32";
//echo  $texto;

$texto = explode(";",$texto);
        
echo $texto[0];        
echo $texto[1];        
echo $texto[2];        




?>