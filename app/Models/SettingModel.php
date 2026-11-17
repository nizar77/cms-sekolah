<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model
{
 protected $table = 'settings';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'school_name',
        'npsn',
        'jenjang',
        'address',
        'phone',
        'email',
        'logo',
        'headmaster_name',
        'headmaster_msg'
    ];
    protected $useTimestamps    = true;
    protected $createdField     = ''; // Tabel settings hanya butuh updated_at
}
