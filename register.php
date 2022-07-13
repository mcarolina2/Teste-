<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mtmp</title>
</head>
<body>
    
    <form action="save-user.php" method="POST">
    <div class="container-inscricao">
    <h2> Inscreva-se agora</h2> 

    <div class="input">    
    <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha"> 
        <input type="text" name="cpf" placeholder="CPF">
        <input type="text" name="telefone" placeholder="Telefone">
        <input type="date" name="datadenascimento" placeholder="Data De Nascimento">
        <input type="text" name="cep" placeholder="CEP">
       
</form>
    </div>
        <input type="submit" class="button-inscricao">
        </div>
    </form>
    <style>
body{
    background-color: rgb(34,34,34);
    color: white; 
    max-width: 1100px;
    margin: 0 auto;
    padding: 10sspx;
}
h2{
    font-size: 40px;
    line-height: 10px;
    font-family: poppinsmedium;
}
    .section-inscricao {
    display: flex;
    align-items: center;
}

.container-inscricao{
    align-items: center; 
    display: flex;
    flex-direction: column;
    width: 60%;
}


.inscricao {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}

.button-inscricao {
    height: 40px;
    width: 40%;
    background-color: rgb(132, 14, 201);
    color: white;
    font-weight: bold;
}
input{
    margin-top: 10px;
    height: 10px;
    padding: 15px;
    border-radius: 15px;
    border: none;
    font-size: 15px;
    width: 30rem;
}
</style>
</body>
</html>