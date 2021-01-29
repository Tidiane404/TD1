<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> 
        <form method="get" action="page4a.php">
             Nom: <input type="text" placeholder="Entrez votre nom..." name="Nomutilisateur" > <br> <br>
             Prénom: <input type="text" placeholder="Entrez votre prénom..." name="Prenomutilisateur"> <br> <br>
             Sexe: <input type="radio" name="choice1" value="Masculin"> Masculin <input type="radio" name="choice2" value="Feminin"> Feminin <br> <br>
             <label for="Adresse">Adresse:</label><textarea name="Adresse" id="" cols="30" rows="10"> </textarea> <br> <br>
             
             <label for="Service">Service: </label>

             <select name="Service" id="Service" >
                <option value="IAGE"> IAGE </option>
                <option value="GLRS "> GLRS  </option>
                <option value="IDC  "> IDC  </option>
            </select> <br> <br>

              
             <label for="fonction">Fonction:</label>
             <select name="fonction" id="fonction" >
                <option value="Etudiant "> Etudiant </option>
                <option value="Professeur"> Professeur  </option>
                <option value="Surveillant "> Surveillant  </option>
             </select> <br> <br>

             <input type="submit" value="Valider">
             <input type="reset" value="Réinitialiser">

        </form>
    </p>
    
</body>
</html>