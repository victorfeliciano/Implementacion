<?php

$arquivo   = fopen("D:\aula.csv",'a'); 
// write  = escrita
// Append  = incremetal 
fputs($arquivo,"minha primeira escrita \n ");
fputs($arquivo,"minha segunda escrita \n ");
fputs($arquivo,"minha terceira escrita \n ");
fclose($arquivo);        
