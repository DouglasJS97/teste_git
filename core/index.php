<?php
    include "BD.php";
    
    $pdo = conectar();
    
    if($_POST){
        $title = $_POST['title'];
        $descricao = $_POST['descricao'];
        $url_image = $_POST['url_image'];

        $stmt = $pdo->prepare('INSERT INTO pessoa SET (descricao, title, image_url) VALUES (:descricao, :title, :url_image)');

        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":url_image", $url_image);

        if($stmt->execute()){
            echo "<script>Dados inseridos com sucesso !</script>";
        }

    }else{
        
        $stmt = $pdo->prepare("SELECT * FROM pessoa");
    
        $stmt->execute();
        $results =  $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
