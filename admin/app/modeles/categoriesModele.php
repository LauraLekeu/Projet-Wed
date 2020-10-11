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
  }

function findOneById(\PDO $connexion, int $id) {
    $sql = "SELECT *
            FROM categories
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }

function update(\PDO $connexion, array $data = null) {
    $sql = "UPDATE  categories
            SET name = :name,
                created_at = NOW()
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
    $rs->bindValue(':id', $data['id'], \PDO::PARAM_INT);
    return intval($rs->execute());
  }
