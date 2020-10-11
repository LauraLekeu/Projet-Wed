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
          SET post_id = :postId,
              tag_id  = :tagId;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':postId', $data['postId'], \PDO::PARAM_INT);
  $rs->bindValue(':tagId', $data['tagId'], \PDO::PARAM_INT);
  return $rs->execute();
}

function deletePostsHasTagsByPostId(\PDO $connexion, int $postId) :bool {
  $sql = "DELETE FROM posts_has_tags
          WHERE post_id = :postId;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':postId', $postId, \PDO::PARAM_INT);
  return $rs->execute();
}

function deleteOneById(\PDO $connexion, int $id) :bool {
  $sql = "DELETE FROM posts
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  return $rs->execute();
}
