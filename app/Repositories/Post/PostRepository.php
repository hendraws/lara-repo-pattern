<?php

namespace App\Repositories\Post;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    /**
     * getAll
     *
     * @return void
     */
    public function getAll()
    {
        $data = Post::get();
        return $data;
    }

    /**
     * findById
     *
     * @param  integer $id
     * @return void
     */
    public function findById($id)
    {
        $data = Post::findOrFail($id);

        return $data;
    }
}
