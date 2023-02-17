<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $param = ['orderBy' => 'desc'];
        
        return $this->postService->getAll($param);
    }

    public function show($id)
    {
        return $this->postService->findById($id);
    }
}
