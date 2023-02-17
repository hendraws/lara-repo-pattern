<?php

namespace App\Repositories\Contact;

use App\Models\Contact;

class ContactRepository
{
    public function getAll()
    {
        $data = Contact::get();

        return $data;
    }

    public function findById($id)
    {
        $data = Contact::findOrFail($id);

        return $data;
    }
}
