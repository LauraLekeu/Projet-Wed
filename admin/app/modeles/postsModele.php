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
                 p.image AS postImage,
                 c.name AS categorieName,
                 a.firstName AS authorFirstName,
                 a.lastName AS authorLastName
          FROM posts p
          JOIN categories c ON p.categorie_id = c.id
          JOIN authors a ON p.author_id = a.id
          ORDER BY postDate DESC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function insertOne(\PDO $connexion, array $data) :int { // :int car il va renvoyer un entier
  $sql = "INSERT INTO posts
          SET title        = :title,
              content      = :content,
              categorie_id = :categorie,
              author_id    = :author,
              created_at   = NOW();";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':title', $data['title'], \PDO::PARAM_STR);
  $rs->bindValue(':content', $data['content'], \PDO::PARAM_STR);
  $rs->bindValue(':categorie', $data['categorie'], \PDO::PARAM_STR);
  $rs->bindValue(':author', $data['auteur'], \PDO::PARAM_INT);
  $rs->execute();
  return $connexion->lastInsertId();
}

function insertTagById(\PDO $connexion, array $data) {
  $sql = "INSERT INTO posts_has_tags
          SET post_id = :post,
              tag_id  = :tag;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':post', $data['postId'], \PDO::PARAM_INT);
  $rs->bindValue(':tag', $data['tagId'], \PDO::PARAM_INT);
  return $rs->execute();
}
