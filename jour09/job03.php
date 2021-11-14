<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
    <body>
    <?php
        $bdd = new PDO("mysql:host=localhost;dbname=jour08", "root" , "");
        $requete = $bdd -> query("SELECT  nom, prenom, naissance FROM etudiants where id=2 ");
       ?>
    <tbody>
    <table border="3">
    <?php
        while ($resultat = $requete-> fetch())
        {  
    ?>
    </tbody>
        <thead>
        <tr>
            <th>Prénom </th>
            <th>Nom</th>
            <th>Naissance</th>
        </tr>
    <thead>
        <tr>
           
            <td><?php echo $resultat ['nom']; ?></td>
            <td><?php echo $resultat['prenom'] ; ?></td>
            <td><?php echo $resultat ['naissance'] ; ?></td>
          
           
        </tr>
    </thead>
    <?php
    }
    ?>
  </table>
 </body>
</html>