<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MenuModel;

class MenuController extends BaseController
{
    protected $menuModel;
    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Menu Management',
            'menuTree' => $this->menuModel->getMenuTree(false),
        ];
        return view('admin/menu/index', $data);
    }
    public function store()
    {
        $rules = [
            'title' => 'required|min_length[2]|max_length[100]',
            'url'   => 'required|max_length[255]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Judul dan URL menu wajib diisi dengan benar.');
        }

        $this->menuModel->save([
            'parent_id'  => null,
            'title'      => $this->request->getPost('title'),
            'url'        => $this->request->getPost('url'),
            'target'     => $this->request->getPost('target') ?? '_self',
            'sort_order' => 99,
            'is_active'  => 1,
        ]);
        return redirect()->to('/admin/menus')->with('success', 'Item menu berhasil ditambahkan.');
    }
    public function delete($id)
    {
        $this->menuModel->delete($id);
        return redirect()->to('/admin/menus')->with('success', 'Item menu berhasil dihapus.');
    }

    public function saveOrder()
    {
        $json = $this->request->getJSON(true);

        if (! isset($json['tree']) || ! is_array($json['tree'])) {
            return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'Data tidak valid']);
        }

        $this->updateTreeOrder($json['tree'], null);

        return $this->response->setJSON([
            'status'  => 'success',
            'message' => 'Struktur menu berhasil diperbarui!',
            'csrf'    => csrf_hash(), // Kirim token CSRF baru untuk request berikutnya
        ]);
    }
    private function updateTreeOrder(array $items, $parentId = null)
    {
        foreach ($items as $index => $item) {
            $this->menuModel->update($item['id'], [
                'parent_id'  => $parentId,
                'sort_order' => $index + 1,
            ]);

            if (! empty($item['children'])) {
                $this->updateTreeOrder($item['children'], $item['id']);
            }
        }
    }
}
