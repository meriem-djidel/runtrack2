

Développez un algorithme qui affiche le nombre d’arguments GET.
Tips : Pour tester, créez un formulaire html de type GET avec différents
input.
Job 02
Développer un algorithme qui affiche dans un tableau HTML l’ensemble
des arguments GET et les valeurs associées. Il doit y avoir deux colonnes :
argument et valeur.
Tips : Pour tester, créez un formulaire html de type GET avec différents
input.
Job 03
Développez un algorithme qui affiche le nombre d’arguments POST.
Tips : Pour tester, créez un formulaire html de type POST avec différents
input.
<?php
function takes_array($input) {
  echo "$input[0] + $input[1] = ", $input[0]+$input[1];
}
?>
 <?php 
session_start();

//si isset(Détermine si une variable est déclarée et est différente de null) $ est empty(diff de vide) different de vide 
 if(isset($_POST[0])AND !empty($_POST [1])){ 
     $_SESSION['nbvisiteur']= $_post['nvisiteur'];
     echo $_SESSION;
 }  
else{
   echo $_POST;
}
?> 
  <html>
      <head>
            <title>Session/Cokie</title>
            <meta charset="utf_8">
      </head>
      <body>
            <form method="POST" action=""> 
            <input type="text" name="nbvisiteur"
            placeholder="nbvisiteur"/>
            <input type="submit" value="valider"/>
       </form>
      </body>
  </html>  




