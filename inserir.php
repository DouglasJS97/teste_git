<?php include "template/header.php"; ?>

    <div class="form">
        <h3>CADASTRE UMA NOVA NOTICIA</h3>
        <form action="core/index.php" method="post">
            <div class="input-value">
                <label for="title">Titulo</label>
                <input type="text" id="title" placeholder="Titulo" name="title">
            </div>
            <div class="input-value">
                <label for="descricao">Descrição</label>
                <input type="text" id="descricao" placeholder="Descrição" name="descricao">
            </div>
            <div class="input-value">
                <label for="img">URL Imagem</label>
                <input type="text" id="img" placeholder="URL da Imagem" name="url_image">
            </div>
            <input type="submit" value="Salvar" class="submit">
        </form>
    </div>


<?php include "template/footer.php"; ?>