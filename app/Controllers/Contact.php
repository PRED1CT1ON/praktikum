<?php

namespace App\Controllers;
use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index()
    {
        $model = new ContactModel();
        $data['contacts'] = $model->findAll();
        return view('contact_list', $data);
    }

    public function create()
    {
        return view('contact_form');
    }

    public function store()
    {
        $model = new ContactModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message')
        ];
        $model->save($data);
        return redirect()->to('/contact');
    }

    public function edit($id)
    {
        $model = new ContactModel();
        $data['contact'] = $model->find($id);
        return view('contact_edit_form', $data);
    }

    public function update($id)
    {
        $model = new ContactModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message')
        ];
        $model->update($id, $data);
        return redirect()->to('/contact');
    }

    public function delete($id)
    {
        $model = new ContactModel();
        $model->delete($id);
        return redirect()->to('/contact');
    }
}
