<!-- les variable entiere ou integer represente les nomre entier, positife, negatife. -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="job3.css">
    <title>Tableau HTML avec PHP</title></head>
<body>
    <h1>Tableau php en html</h1>
    <table>
  <thead>
    <tr>
      <th scope="col">Les variable primitive</th>
      <th scope="col">Def</th>
      <th scope="col">Echo :</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">integer</th>
      <td><p>les variable entiere ou integer represente les nomre entier, positife, negatife.
</p></td>
      <td><?php 
        $integer1 = 1;
        $integer2 = -1;
        echo $integer1,$integer2;
        ?></td>
        </tr>
    <tr>
      <th scope="row">Float</th>
      <td>les float represente les nombre a virgule</td>
      <td><?php 
        $float = 3.14;
        echo $float;
        ?></td>
    </tr>
    <tr>
      <th scope="row">String</th>
      <td>les string representes les chaines de caracteres</td>
      <td><?php
        $string = "Yo ma boy !";
        echo $string;
        ?></td>
    </tr>
    <tr>
      <th scope="row">Booléen</th>
      <td>les booléen
</td>
      <td><?php 
        $booleen = 3;
        $booleen = true;
        $booleen2 = 4;
        $booleen2 = false;
        echo $booleen, $booleen2
        ?>;</td>
    </tr>
    <tr>
      <th scope="row">Null</th>
      <td>les null 

</td>
      <td><?php 
        $null = null;
        echo $null;
        ?></td>
    </tr>
  </tbody>
</table>

</body>
</html>