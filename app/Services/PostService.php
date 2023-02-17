<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\Post\PostRepository;
use App\Repositories\Post\PostRepositoryInterface;

class PostService
{
    protected $postRepositoryInterface;

    public function __construct(PostRepositoryInterface $postRepositoryInterface)
    {
        $this->postRepositoryInterface = $postRepositoryInterface;
    }

    public function getAll($param)
    {
        return $this->postRepositoryInterface->getAll();
    }

    public function findById($id)
    {
        $data = Post::findOrFail($id);

        return $data;
    }
}
