<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SettingModel;

class SettingController extends BaseController
{
    protected $settingModel;

    public function __construct()
    {
        $this->settingModel = new SettingModel();
    }

    public function index()
    {
        $settingModel = new SettingModel();
        $setting      = $settingModel->first();

        return view('admin/settings/index', [
            'title'   => 'Pengaturan Sekolah',
            'setting' => $setting,
        ]);
    }

    public function update()
    {
        $settingModel = new SettingModel();
        $existing     = $settingModel->first();

        $data = [
            'school_name'     => $this->request->getPost('school_name'),
            'npsn'            => $this->request->getPost('npsn'),
            'jenjang'         => $this->request->getPost('jenjang'),
            'address'         => $this->request->getPost('address'),
            'phone'           => $this->request->getPost('phone'),
            'email'           => $this->request->getPost('email'),
            'headmaster_name' => $this->request->getPost('headmaster_name'),
            'headmaster_msg'  => $this->request->getPost('headmaster_msg'),
        ];

        // Proses upload logo jika ada file baru yang diunggah
        $logoFile = $this->request->getFile('logo');
        if ($logoFile && $logoFile->isValid() && ! $logoFile->hasMoved()) {
            $newName = $logoFile->getRandomName();
            $logoFile->move('uploads/logo', $newName);
            $data['logo'] = $newName;
        }

        if ($existing) {
            $settingModel->update($existing['id'], $data);
        } else {
            $settingModel->insert($data);
        }

        return redirect()->to('/admin/settings')->with('success', 'Pengaturan sekolah berhasil disimpan.');
    }
}
