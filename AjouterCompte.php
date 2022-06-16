<?php include("head.php");?>

<?php
include("connexion.php");
?>

<?php
 
    if (isset ($_POST['enregistrer'])){

        $Num_Cpt = $_POST['Num_Cpt'];
        $Num_Clt = $_POST['Num_Clt'];
        $Nom_Clt = $_POST['Nom_Clt'];
        $Type_Cpt = $_POST['Type_Cpt'];
        $Solde_Bancaire = $_POST['Solde_Bancaire'];
        $Solde_Reel = $_POST['Solde_Reel'];
    
        $requete = mysqli_query($bdd,"INSERT INTO compte VALUES('$Num_Cpt', '$Num_Clt', '$Nom_Clt', '$Type_Cpt', '$Solde_Bancaire', '$Solde_Reel') ");
        if($requete === false){
            echo 'Error d insertion dans la base ';
            echo mysqli_error($bdd);
        } else{
            echo 'Compte enregistré avec succé - Merci-Bravo';
        }    
    }
?>