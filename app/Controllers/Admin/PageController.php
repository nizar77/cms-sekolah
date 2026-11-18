<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PageModel;

class PageController extends BaseController
{
    protected $pageModel;

    public function __construct()
    {
        $this->pageModel = new PageModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Manajemen Halaman Statis',
            'pages' => $this->pageModel->orderBy('created_at', 'DESC')->findAll(),
        ];

        return view('admin/pages/index', $data);
    }

    public function create()
    {
        $data = ['title' => 'Tambah Halaman Baru'];
        return view('admin/pages/create', $data);
    }

    public function store()
    {
        $title = $this->request->getPost('title');
        $slug  = mb_url_title($title, '-', true);

        $rules = [
            'title'   => 'required|min_length[3]|max_length[150]|is_unique[pages.slug]',
            'content' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->pageModel->save([
            'title'   => $title,
            'slug'    => $slug,
            'content' => $this->request->getPost('content'),
        ]);

        return redirect()->to('/admin/pages')->with('success', 'Halaman statis berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $page = $this->pageModel->find($id);
        if (! $page) {
            return redirect()->to('/admin/pages')->with('error', 'Halaman tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Halaman Statis',
            'page'  => $page,
        ];

        return view('admin/pages/edit', $data);
    }

    public function update($id)
    {
        $title = $this->request->getPost('title');
        $slug  = mb_url_title($title, '-', true);

        $rules = [
            'title'   => 'required|min_length[3]|max_length[150]',
            'content' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->pageModel->update($id, [
            'title'   => $title,
            'slug'    => $slug,
            'content' => $this->request->getPost('content'),
        ]);

        return redirect()->to('/admin/pages')->with('success', 'Halaman statis berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->pageModel->delete($id);
        return redirect()->to('/admin/pages')->with('success', 'Halaman statis berhasil dihapus.');
    }
}
