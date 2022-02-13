<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table{
    box-shadow: 1px  2px 4px ;
    border: solid black;
    border-radius: 7px;
    margin-top: 10%;
    margin-bottom: 35%;
    margin-right: 35%;
    margin-left: 35%;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 10px;
    padding-right: 10px;
    background-color: rgb(240, 234, 234);
}
input{
    padding:6px ;
    border-radius: 7px;
    margin:10px ;
    background-color: rgb(247, 235, 235);
}
*{
   
    font-size: medium;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;
}
body{
    background:linear-gradient(#ff1b6b,#45caff);
}
</style>
<body>
    <div>
    <table >
        <form action="gosignin.php" method="POST">
            <tr>
            <td >votre nom complet</td>
            <td><input type="text" name="username" placeholder="username"></td><pre></pre>
              
            </tr>
            <tr>
            <td>votre mot de passe</td>
            <td><input type="password" name="password" placeholder="password"></td><pre></pre>
              
            </tr><pre></pre>

            <td><input type="submit" name="signin" value=signin></td><pre></pre>
            <td><a href="login.php">cklik to login</a></td>
        </form>


    </table>
</div>
</body>
</html>
