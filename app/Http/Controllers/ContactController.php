<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Repositories\Contact\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function index()
    {
        $data = $this->contactRepository->getAll();

        return $data;
    }

    public function show($id)
    {
        $data = $this->contactRepository->findById($id);
        return $data;
    }
}
