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
               $id_noticia = $_get['id_noticia'];
               if(!$id_noticia)
               {
                echo'tem conteudo';
                $sql = "SELECT * FROM tb_noticia; WHERE id_noticia = $id_noticia;";
                $resultado = mysqli_execute_query($conexao, $sql);
                $dados = mysqli_fetch_array($resultado);
                 echo "titulo: ".$dados['titulo'].'<br>';
                 echo "Data e hora: ".$dados['datahora'].'<br>'; 
                 echo "Imagem: ".$dados['imagem'].'<br>'; 
                 echo "Fonte: ".$dados['fonte'].'<br>'; 
                 echo "Autor: ".$dados['autor'].'<br>'; 
                 echo "Noticia: ".$dados['noticia'].'<br>';  
               }else{
                echo'nao tem conteudo';
               }
            ?>  

        </main>
        <footer>
            <img src="img/Rectangle 20.png" alt="Logo Cartoon">
        </footer>
    </div>
</body>
</html>