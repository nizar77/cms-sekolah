<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;
use App\Models\MenuModel;
use App\Models\SettingModel;

class NavbarCell extends Cell
{
    public array $menus = [];
    public array $setting = [];

    public function mount(): void
    {
        $menuModel    = new MenuModel();
        $settingModel = new SettingModel();

        // Ambil hanya menu yang aktif (is_active = 1) dalam struktur bersarang
        $this->menus = $menuModel->getMenuTree(true);

        // Ambil baris pertama pengaturan sekolah, atau beri nilai default jika tabel masih kosong
        $this->setting = $settingModel->first() ?? [
            'school_name' => 'SMA/SMK Negeri Contoh',
            'jenjang'     => 'SMK',
            'logo'        => null,
            'phone'       => '(024) 123456',
            'email'       => 'info@sekolah.sch.id',
        ];
    }
}
