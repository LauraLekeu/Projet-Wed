<?php
/*

    ./app/modeles/categoriesModele.php

*/

namespace App\Modeles\CategoriesModele;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM categories
          ORDER BY id ASC;";
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

function delete(\PDO $connexion, int $id) {
    $sql = "DELETE FROM categories
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    return intval($rs->execute()); // Récuperer 0 ou 1
    var_dump($id); die();
  }
 
