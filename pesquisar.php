<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];

    $resultado="SELECT * FROM escola WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_escola=mysqli_query($conexao, $resultado);

    while($rows_escola=mysqli_fetch_array($resultado_escola)){
        echo "Nome: ".$rows_escola['nome']."<br>";
        echo "CPF: ".$rows_escola['cpf']."<br>";
        echo "Endereço: ".$rows_escola['endereco']."<br>";
        echo "Cidade: ".$rows_escola['cidade']."<br>";
        echo "Estado: ".$rows_escola['estado']."<br>";
        echo "Formação: ".$rows_escola['formacao']."<br>";
        echo "Titulação: ".$rows_escola['titulacao']."<br>";
        echo "<br>";
    }
?>