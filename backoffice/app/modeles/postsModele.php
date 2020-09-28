<?php
/*

    ./app/modeles/postsModele.php

*/

namespace App\Modeles\PostsModele;

function findAll(\PDO $connexion) {
  $sql = "SELECT p.id AS postId,
                 p.title AS postTitle,
                 p.content AS postContent,
                 p.created_at AS postDate,
                 p.image As postImage,
                 c.name As categorieName
          FROM posts p
          JOIN categories c ON p.categorie_id = c.id
          ORDER BY p.created_at DESC
          LIMIT 5;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findOneById(\PDO $connexion, int $id) {
  $sql = "SELECT *
          FROM posts p
          JOIN categories c ON p.categorie_id = c.id
          JOIN authors a ON p.author_id = a.id
          WHERE p.id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}

function findAllBySearch(\PDO $connexion, string $search) {
  $words = explode(' ', trim($search)); // explode() = fonction qui va "couper", séparer chaque mots du $search avec un espace entre et mettre chaque mots dans un tiroir différent du tableau $words, trim() pour enlever les espaces si il y en a avant ou apres les mots de la recherche
  $sql = "SELECT DISTINCT
                 p.id AS postId,
                 p.title AS postTitle,
                 p.content AS postContent,
                 p.created_at AS postDate,
                 p.image As postImage,
                 c.name As categorieName
          FROM posts p
          JOIN categories c ON p.categorie_id = c.id
          JOIN authors a ON p.author_id = a.id
          WHERE 1 = 0";
  for ($i=0; $i<count($words); $i++):
    $sql .= " OR p.title     LIKE :word$i
              OR p.content   LIKE :word$i
              OR c.name      LIKE :word$i
              OR a.firstname LIKE :word$i
              OR a.lastname  LIKE :word$i ";
  endfor;
    $sql .= ";";
  $rs = $connexion->prepare($sql);
  for ($i=0; $i<count($words); $i++):
    $rs->bindValue(":word$i", '%'.$words[$i].'%', \PDO::PARAM_STR);
  endfor;
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
