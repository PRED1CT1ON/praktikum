<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\CommentModel;
use CodeIgniter\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->findAll();
        return view('blog/index', $data);
    }

    public function create()
    {
        return view('blog/create');
    }

    public function store()
    {
        $model = new PostModel();
        $model->save([
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'category' => $this->request->getPost('category'),
            'tags' => $this->request->getPost('tags')
        ]);
        return redirect()->to('/blog');
    }

    public function edit($id)
    {
        $model = new PostModel();
        $data['post'] = $model->find($id);
        return view('blog/edit', $data);
    }

    public function update($id)
    {
        $model = new PostModel();
        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'category' => $this->request->getPost('category'),
            'tags' => $this->request->getPost('tags')
        ]);
        return redirect()->to('/blog');
    }

    public function delete($id)
    {
        $model = new PostModel();
        $model->delete($id);
        return redirect()->to('/blog');
    }

    public function view($id)
    {
        $postModel = new PostModel();
        $commentModel = new CommentModel();
        $data['post'] = $postModel->find($id);
        $data['comments'] = $commentModel->where('post_id', $id)->findAll();
        return view('blog/view', $data);
    }

    public function comment($id)
    {
        $commentModel = new CommentModel();
        $commentModel->save([
            'post_id' => $id,
            'comment' => $this->request->getPost('comment')
        ]);
        return redirect()->to('/blog/view/'.$id);
    }
}
