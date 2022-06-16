<?php include("head.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter Compte</title>
</head>
<body>
    <h2>Ajouter Compte : </h2>
    <form action="AjouterCompte.php" method="post">
        <pre>
            Numero Compte    : <input type="number" name="numero_compte">

            Numero Client    : <input type="number" name="numero_client">

            Nom Client       : <input type="text" name="nom_client">

            Type Compte      : <input type="text" name="type_compte">

            Solde Bancaire   : <input type="number" name="solde_bancaire">

            Solde Reel       : <input type="number" name="solde_reel">

                    <input type="submit" id="submit" name="enregistrer" value="Ajouter Compte">

        </pre>
    </form>
    

     

</body>
</html>