<?php
    include "BD.php";
    
    $pdo = conectar();
    
    if($_POST){
        try{
            $data = [
                'title' => $_POST['title'],
                'descricao' => $_POST['descricao'],
                'url_image' => $_POST['url_image']
            ];  

            $sql = "INSERT INTO `pessoa`(`descricao`, `title`, `image_url`) VALUES (:descricao, :title, :url_image)";
    
            $stmt = $pdo->prepare($sql);
    
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":url_image", $url_image);
    
            $stmt->execute($data);
    
            header("location: ../index.php");

        }catch(PDOException $e){
            echo "Houve algum erro: ".$e->getMessage()."\n";
        }

    }else{
        
        $stmt = $pdo->prepare("SELECT * FROM pessoa");
    
        $stmt->execute();
        $results =  $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
