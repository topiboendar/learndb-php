<?php

namespace Repository
{
  use Model/Comment;

  interface CommentRepository
  {
    function insert(Comment $comment): Comment;
    function findById(int $id): ?Comment;
    function findAll(): array;
  }

  class CommentRepositoryImpl implements CommentRepository 
  {
    public function  
  }
}
