<?php
/*

    ./app/modeles/auteursModele.php

*/

namespace App\Modeles\TagsModele;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM tags
          ORDER BY name ASC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
