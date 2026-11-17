<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table            = 'menus';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['parent_id', 'title', 'url', 'target', 'sort_order', 'is_active'];
    protected $useTimestamps    = true;

    public function getMenuTree(bool $onlyActive = false): array
    {
        $builder = $this->orderBy('sort_order', 'ASC');
        if ($onlyActive) {
            $builder->where('is_active', 1);
        }

        $items = $builder->findAll();
        return $this->buildTree($items);
    }

    private function buildTree(array $elements, $parentId = null): array
    {
        $branch = [];
        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->buildTree($elements, $element['id']);
                $element['children'] = $children;
                $branch[] = $element;
            }
        }
        return $branch;
    }
}
