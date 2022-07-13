<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mtmp</title>
</head>
<body>
    <header>
      <div  class="title">
         <h1> MTMP</h1> 
         
    </div >

    <ul>
    <a href="#"><li> Sobre </li></a>
    <a href="#"><li> Contato </li></a> 
    <a href="register.php" class="inscreva"><li>Registre-se</li></a> 
    </ul>  
</header>
<main> 
   <aside> 
    <h2> Inscreva-se agora</h2> 
    <h2> na melhor plataforma de anúncios</h2>
    <p>

    </p>
    <form class="" action="login.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value=" Entrar"'>
    </form> 
   </aside>
   <article> 
<img src=".components/img/5107070-removebg-previee.png" alt="anuncios">
   </article>
</main>
   
<!--
<form class="" action="login.php" method="POST">
 <input type="text" name="email" placeholder="email">
       <input type="password" name="senha" placeholder="senha">
       <input type="submit" value=" Entrar"'>
   </form> 
 
     <a class="" href="register.php">Registre-se</a>
     -->

</body>
<style>
    body{
   background-color: rgb(34,34,34);
   color: white; 
   max-width: 1100px;
    margin: 0 auto;
    padding: 10sspx;
   
    }
    header{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}
#title{
    flex-direction: column;
    line-height: 5px;
}

li{
    display: inline-block;
    margin: 10px;
}

a{
    color: white;
}

a:hover{
    color: rgb(132, 14, 201);
    transition: 0.3s all;
}

#inscreva{
    border: 2px solid rgb(132, 14, 201);
    padding: 10px;
    border-radius: 15px;
}

#inscreva:hover{
    background-color: rgb(132, 14, 201);
    color: white;
}

h1{
    font-weight: 100;
}

main{
    display: flex;
    flex-direction: row;
    margin-top: 50px;
}

h2{
    font-size: 40px;
    line-height: 10px;
    font-family: poppinsmedium;
}

span{
    color: rgb(132, 14, 201);
}

p{
    line-height: 20px;
    max-width: 500px;
    font-family: poppinslight;
}

img{
    width: 580px;
}

form{
    display: flex;
    flex-direction: column;
    width: 70%;
}

form [type="submit"]{
    height: 50px;
    width: 50%;
    background-color: rgb(132, 14, 201);
    color: white;
    font-weight: bold;
}
form [type="submit"]:hover{
    cursor: pointer;
}

input{
    margin-top: 20px;
    height: 20px;
    padding: 15px;
    border-radius: 20px;
    border: none;
    font-size: 15px;
}
</style>
</html>