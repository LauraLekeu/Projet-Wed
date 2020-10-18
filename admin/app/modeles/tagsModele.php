<?php
/*

    ./app/modeles/auteursModele.php

*/

namespace App\Modeles\TagsModele;


function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM tags
          ORDER BY id DESC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}


function insertOne(\PDO $connexion, array $data = null) {
  $sql = "INSERT INTO tags
          SET name = :name,
              created_at = NOW();";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
  $rs->execute();
  return $connexion->lastInsertId();
  }


function delete(\PDO $connexion, int $id) {
  $sql = "DELETE FROM tags
          WHERE id =:id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  return intval($rs->execute());
  }

function findOneById(\PDO $connexion, int $id) {
  $sql = "SELECT *
          FROM tags
          WHERE id =:id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}

function update(\PDO $connexion, array $data = null) {
  $sql = "UPDATE tags
          SET name = :name,
              created_at = NOW()
          WHERE id =:id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
  $rs->bindValue(':id', $data['id'], \PDO::PARAM_INT);
  $rs->execute();
  return intval($rs->execute());
}
