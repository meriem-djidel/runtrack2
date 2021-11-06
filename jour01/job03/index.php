<?php
$table=["Type","Nom","Valeur"];
$nom1="Meriem";
$type="Humain";
$valeur2=0.10;
$annee= 2210;
$go=true;
?>
    <table border=4>
        <thead>
          <tr>
            <td><?php echo $table [0]; ?></td>
            <td><?php echo $table [1]; ?></td>
            <td><?php echo $table [2]; ?></td>
          </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo gettype ($nom1); ?></td>
            <td><?php echo '$nom1'; ?></td>
            <td><?php echo $nom1 ; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($type); ?></td>
            <td><?php echo '$type'; ?></td>
            <td><?php echo $type ; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($valeur2); ?></td>
            <td><?php echo '$valeur2'; ?></td>
            <td><?php echo  $valeur2 ; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype ($annee); ?></td>
            <td><?php echo '$annee'; ?></td>
            <td><?php echo $annee ; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($go); ?></td>
            <td><?php echo  '$go'; ?></td>
            <td><?php echo $go ; ?></td>
        </tr>
    </table>
    </tbody>




    
