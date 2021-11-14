<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
    <body>
    <?php
        $bdd = new PDO("mysql:host=localhost;dbname=jour08", "root" , "");
        $requete = $bdd -> query("SELECT nom,capacite FROM salles");
    ?>
    <tbody>
    <table border="3" withe="5px">
    <?php
        while ($resultat = $requete-> fetch())
        {
    ?>
    </tbody>
        <thead>
        <tr>
           
            <th>Nom</th>
            <th>Capacite</th>
            
        </tr>
    <thead>
        <tr>
            <td><?php echo $resultat['nom']; ?></td>
            <td><?php echo $resultat ['capacite']; ?></td>
           
        </tr>
    </thead>
    <?php
    }
    ?>
  </table>
 </body>
</html>