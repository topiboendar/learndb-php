<?php

require_once __DIR__ . '\GetConn.php';
require_once __DIR__ . '\Model\Comment.php';
require_once __DIR__ . '\Repository\CommentRepository.php';

use Repository\CommentRepositoryImpl;
use Model\Comment;

$conn = getConnection();
$repository = new CommentRepositoryImpl($conn);

/* $comment = new Comment(email: "repo@test.com", comment: "hai"); */
/* $newComment = $repository->insert($comment); */
/**/
/* var_dump($newComment->getId()); */

/* $comment = $repository->findById(45); */
/**/
/* var_dump($comment); */

$comments = $repository->findALl();
var_dump($comments);


$conn = null;
