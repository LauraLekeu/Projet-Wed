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
