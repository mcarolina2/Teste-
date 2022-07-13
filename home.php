<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location:index.php?msg=nao_autorizado');
    exit();
} 
function is_logged() {
    return isset($_SESSION['user_id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mtmp</title>

</head>
<body>
    <?php if(is_logged()): ?>
    <h1>
        Anúncios
    </h1>
    
   
    <a href="logout.php">sair</a>
    <a href="livros/index.php">Ver meus Anúncios </a>
    <?php endif ?> 

    <div class=""> 
    </div>

    <div class=""> 
        <ul>
            <li>
                <a href=""> 
            <span class="icon"></span> 
            <span class="icon">Home</span> 
            </li> 

            <li>
                <a href=""> 
            <span class="icon"></span> 
            <span class="icon">Usuario</span> 
            </li> 

            <li>
                <a href=""> 
            <span class="icon"></span> 
            <span class="icon">Favoritos</span> 
            </li> 

            <li>
                <a href=""> 
            <span class="icon"></span> 
            <span class="icon">Configuração</span> 
            </li> 

            <li>
                <a href=""> 
            <span class="icon"></span> 
            <span class="icon">Duvidas</span> 
            </li> 

            <li>
                <a href=""> 
            <span class="icon"></span> 
            <span class="icon">Ajuda</span> 
            </li> 

            <li>
                <a href=""> 
            <span class="icon"></span> 
            <span class="icon">Sair</span> 
            </li>
        </ul>
    </div>
</body>

</html>