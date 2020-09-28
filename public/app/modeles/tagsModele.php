<?php
/*

    ./app/modeles/categoriessModele.php

*/

namespace App\Modeles\TagsModele;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM tags
          LIMIT 8;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
