<?php

namespace Repository
{
  use Model\Comment;

  interface CommentRepository
  {
    function insert(Comment $comment): Comment;
    function findById(int $id): ?Comment;
    function findAll(): array;
  }

  class CommentRepositoryImpl implements CommentRepository 
  {
    public function __construct(private \PDO $conn)
    {

    } 
    
    public function insert(Comment $comment): Comment
    {
      $sql = "INSERT INTO comments(email, comment) VALUES (?, ?)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$comment->getEmail(), $comment->getComment()]);

      $id = $this->conn->lastInsertId();
      $comment->setId($id);

      return $comment;

    }

    public function findById(int $id): ?Comment
    {
      $sql = "SELECT * FROM comments WHERE id = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$id]);

      if($row = $stmt->fetch()){
        return new Comment(
          id: $row["id"],
          email: $row["email"],
          comment: $row["comment"]
        );
      } else {
        return null;
      }
    }

    public function findALl(): array
    {
      $sql = "SELECT * FROM comments";
      $stmt = $this->conn->query($sql);

      $array = [];

      while($row = $stmt->fetch())
      {
        $array[] = new Comment(
          id: $row["id"],
          email: $row["email"],
          comment: $row["comment"]
        );
      }

      return $array;
    }

  }

}

