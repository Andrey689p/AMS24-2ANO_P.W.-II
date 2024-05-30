<?php
    echo "Dados enviados Parcialmente com sucesso";
    $name = $_POST["txt_Name"];
    $email = $_POST["txt_Email"];
    $login = $_POST["txt_Login"];
    $phone = $_POST["txt_Phone"];
    $date = $_POST["txt_Date"];
    
    echo "<br>";
    echo "<br>";

    echo "Nome: ".$name."<br>";
    echo "Email: ".$email."<br>";
    echo "Login ".$login."<br>";
    echo "Telefone: ".$phone."<br>";
    echo "Data de Cadastro: ".$date."<br>";

?>