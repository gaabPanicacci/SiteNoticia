<?php
include "conexao.php"; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinhalNews</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <header>
            <img src="img/logo.png" alt="Jornal" class="logo">
            <div class="titulos">                
                <spam class="titulo1">Cartoon News</spam>
                <p class="titulo2">Seu site de notícia do mundo cartoonesco</p>
            </div>
        </header>
        <nav>
            <ul>
                    <li><a href="#">Principal</a></li>
                    <li><a href="#">Todas as Notícias</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Área Restrita</a></li>
            </ul>
        </nav>
        <main>

            <?php
                $sql = "SELECT * FROM tb_noticia ORDER BY RAND() LIMIT 6";
                $resultado = mysqli_execute_query($conexao,$sql);
                while($dados = mysqli_fetch_array($resultado))
                {
                    echo '
                    <article>
                    <img src="img/'.$dados["imagem"].'" alt="foto noticia" class="fotonoticia">
                    <p class="textonoticia"> '.$dados["titulo"].' </p>
                    <a href="noticia.php?id_noticia= '.$dados["id_noticia"].'">
                    <img src="img/saibamais.png" alt="Saiba Mais..." class="saibamais">
                    </a>
                    </article>';
                } 
            ?>  
        </main>
        <footer>
            <img src="img/Rectangle 20.png" alt="Logo Cartoon">
        </footer>
    </div>
</body>
</html>