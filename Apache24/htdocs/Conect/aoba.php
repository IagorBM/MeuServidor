<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    
    <style> 
        div{
            position: relative;
            background-color: lightgray;
            width: 1900px;
            height: 920px;
            content: center;
        }
    </style>
</head>
<body>
    <form method="post" action="aoba.php">
        <div>
            <br>
            <h1>Login</h1>
            <input type="text" name="usuer" placeholder="Usuário" style="width: 200px; height: 25px;">
            <br>
            <br>
            <input type="password" name="senha" placeholder="Senha" style="width: 200px; height: 25px;">
            <br>
            <br>
            <input type="submit" value="Entrar" name="Entrar">        
        </div>
    </form>
</body>
</html>
<?php
    extract($_POST);
    //isset é para verificar se te algo dentro
    #rapaz, novo metodo de comentar
    if(isset($_POST["Entrar"])){
        include_once("conect.php");
        $obj = new conect();
        $resultado = $obj->ConectarBanco();
    }
?>