<?php

namespace App\Repositories\Post;

interface PostRepositoryInterface
{
    public function getAll();
    public function findById($id);
}
