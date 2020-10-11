<?php
/*

    ./app/modeles/auteursModele.php

*/

namespace App\Modeles\AuteursModele;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM authors
          ORDER BY firstname ASC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
