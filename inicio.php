<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fact News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Design.css" />
    <script src="index.js"></script>
    <!--Library for CSS -->
    </head>
<body>
    <?php require_once "unity.php" ?>

    <?php 

    if (isset($_SESSION['message'])): ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">

            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
    </div>
    <?php endif ?>

    <div class="container">

    <?php $mysqli = new mysqli('localhost:3307','root','','novasnoticias')
        or die (mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM noticias") 
        or die (mysqli_error($mysqli));

    ?>
    
    
    <h1>Fact News</h1>
   <br>
   <br>
   <br>
   <br>
   <p>
       <!--Home/Criar buttons -->
   <br>
   <br>
   <h3>Últimas Notícias</h3>
   <ul>
       <div class="row justify-contente-center">
           <table class="table">
           
            <?php
          while($row = $result->fetch_assoc()): ?>
                <tr>
                    <br>
                     <tr> Notícia: </tr>
                     <tr>Título: </tr> <tr><?php echo $row['titulo']; ?></tr><br>
                    <tr>Slug: </tr> <tr><?php echo $row['slug']; ?> </tr><br>
                    <tr>Descrição: </tr>  <tr><?php echo $row['descricao']; ?></tr><br>
                    <tr>Palavras chave: </tr>  <tr><?php echo $row['palavras_chave']; ?></tr><br>
                   <tr>Conteúdo: </tr> <tr color = "red"><?php echo $row['conteudo']; ?></tr><br>
                    <br>
                    <tr>
                            <a href="inicio.php?edit=<?php echo $row['id']; ?>"
                                class="fa fa-edit">Editar</a>
                                &ensp;
                            <a href="unity.php?delete=<?php echo $row['id']; ?>"
                                class="fa fa-trash">Deletar</a>
                    </tr>
                </tr>
            <?php endwhile; ?>
            </table>
        </div>
        <?php 

            function pre_r($array){
                echo '<prev>';
                print_r($array);
                echo '</prev>';
            }
            ?>
       <br>
       <br>
       <br>
       
   <form class="novaNoticia" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

            <p>
            <label>Título 
            <input type="titulo" name="titulo" value="<?php echo $titulo; ?>">
            </label> 
            </p>

            <p>
            <label>Slug
            <input type="descricao" name="slug" value="<?php echo $slug; ?>">
            </label>
            </p>
            
            <p>
            <label>Descrição 
            <input type="descricaoForm" name="descricao" value="<?php echo $descricao; ?>">
            </label>
            </p>
                
            <p>
            <label>Palavras Chave
            <input type="heywords" name="palavras_chave" value="<?php echo $palavras_chave; ?>">
            
            </select>
            </label> 
            </p>
            
            <p>
            <label>Conteúdo 
            <input  name="conteudo" maxlength="500" value="<?php echo $conteudo; ?>"></textarea>
            </label>
            </p>
            <?php 
            if ($update == true):
                ?>
            <button type="submit"  name="update"> Atualizar </button>
            <?php else: ?>

            <p><button type="submit" name="save"> Adicionar </button></p>
            <?php endif; ?>
            </form>

        </table>
        </form>
    
</body>
</html>
