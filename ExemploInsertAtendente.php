<?php
require_once 'conexao.php';

$id = @$_GET['id'];


$sql = "select  * from acesso where id=$id  ";

$resultado = $conexao->query($sql);
if ($resultado->num_rows > 0) {
    echo "Registro encontrado";

    while ($coluna = $resultado->fetch_assoc()) {
        $id    = $coluna['id'];
        $nome  = $coluna['nome'];
        $email = $coluna['email'];
        $senha = $coluna['senha'];
        
    }
}    
?>


    
    

<head>	

</head>    
        <form name="acesso" action="insertAtendente.php" method="get">
            
            
          
            
          id<input type="text" name="id" onclick="liberar();"     value="<?php echo $id?>"   > </input>    
            <br>
            nome<input type="text" name="nome"  value="<?php echo $nome?>"> </input>    
            <br>
            email<input type="text" name="email" value="<?php echo $email?>"> </input>    
            <br>
            senha<input type="text" name="senha" value="<?php echo $senha?>"> </input>    
            <br>
            
            <input type="submit" name="tipo" value="incluir"></input>   
            <input type="submit" name="tipo" value="editar"></input>   
            <input type="submit" name="tipo" value="listar"></input>   


            <table border="1">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nome</th>
                        <th>email</th>
                        <th>senha</th>
                        <th>excluir</th>
                        <th>foto</th>
                    </tr>
                </thead>
                <tbody>
                <BR>
                <BR>
        <?php
        require_once 'conexao.php';
            $sql = "SELECT  *  
                    FROM 
                        arquivo a, acesso ac
                    WHERE 
                         a.acesso_id = ac.id  ";
                $resultado = $conexao->query($sql);
        if ($resultado->num_rows > 0) {
            echo "Registro encontrado";

            while ($coluna = $resultado->fetch_assoc()) {
                //echo $coluna["id"] . "-" . $coluna["email"] . "-" . $coluna["senha"] . "<br>";
                echo "<tr>";
                $id = $coluna['id'];
                echo "<td><a href='ExemploInsertAtendente.php?id=$id'>" . $coluna['id'] . "</td>";
                echo "<td>" . $coluna['nome'] . "</td>";
                echo "<td>" . $coluna['email'] . "</td>";
                echo "<td>" . $coluna['senha'] . "</td>";                
                echo "<td><a href='InsertAtendente.php?id=$id&tipo=excluir'>Excluir</td>";                
                echo "<td><img src=".$coluna['caminho_arquivo']."/".$coluna['nome_arquivo']." width='200'  height='200' ></td>";
                echo "</tr>   ";
            }
        } else {
            echo "Nenhum registro encontrado!";
        }

        ?>


                



        </tbody>
    </table>





</form>