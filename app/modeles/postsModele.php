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
          WHERE p.title     LIKE :search
             OR p.content   LIKE :search
             OR c.name      LIKE :search
             OR a.firstname LIKE :search
             OR a.lastname  LIKE :search;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':search', '%'.$search.'%', \PDO::PARAM_STR);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
