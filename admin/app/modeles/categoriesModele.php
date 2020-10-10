<?php
/*

    ./app/modeles/categoriesModele.php

*/

namespace App\Modeles\CategoriesModele;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM categories
          ORDER BY name ASC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function insert(\PDO $connexion, array $data = null) {
    $sql = "INSERT INTO categories
            SET name = :name,
                created_at = NOW();";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
    $rs->execute();
    return $connexion->lastInsertId();
  }
