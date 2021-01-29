<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> 
        <form method="get" action="page2.php">
             Nom: <input type="text" placeholder="Entrez votre nom..." name="Nomutilisateur"> <br> <br>
             Prénom: <input type="text" placeholder="Entrez votre prénom..." name="Prenomutilisateur">  <br> <br>
             <input type="submit" value="Valider">
        </form>
    </p>
    
</body>
</html>

<pre>
<?php 
print_r($_GET)

?>
</pre>
