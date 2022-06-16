 <?php include("head.php"); ?>

 <!DOCTYPE html>
 <html>

 <head>
    <title>inscription</title>
    <meta charset="utf-8 iso-8859-1" />
 </head>

 <body>
     <form action="AjouterOperation.php" method="POST">

         <pre>
        <h2>Ajouter Operation :  </h2>
     
        Numero Operation  : <input type="text" name="Num_Ope">
        Montant Operation : <input type="number" name="Montant_Ope" value =0>
        Date Operation    : <input type="date" name="Date_Ope" value = <?php echo date('Y-m-d'); ?> >
        Type Operation    
        <input type="radio" 	name="Type_Ope" value="C" checked> Operation Credit<BR> 
        <input type="radio" 	name="Type_Ope" value="D"> Operation Debit Validation        	
                          
        <input type="radio" 	name="Validation" value="non" checked> Operation Non Validee<BR> 
        <input type="radio" 	name="Validation" value="oui"> Operation Validee
		                 
        <label for="Num_Cpt">Numero de Compte : </label> 
        <select name="Num_Cpt">     
            <?php
                include("connexion.php");

                $requete = mysqli_query($bdd, "select Num_Cpt , Nom_Clt from compte order by Nom_Clt");
                while ($ligne = mysqli_fetch_assoc($requete)) {
            ?>

                <option value='<?php echo $ligne['Num_Cpt']; ?>'> <?php echo $ligne['Nom_Clt']; ?> <?php echo $ligne['Num_Cpt']; ?></option>\n";
                
            <?php
                }
            ?>
        </select>
    
        <input type="submit" name="enregistrer" value="Envoyer"> 
        <input type="reset"  value="Supprimer">
        </pre>
     </form>



 </body>

 </html>