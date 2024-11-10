<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) 2021 CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace App\Modules\Categories\Controllers;

use App\Controllers\BaseController;
use App\Modules\Categories\Models\Categories;

class Index extends BaseController
{
    protected $folder_directory = 'Modules\\Categories\\Views\\';
    protected Categories $model;
    protected $data  = [];
    protected $rules = [];

    public function __construct()
    {
        $this->model = new Categories();
    }

    public function index()
    {
        if (! user_id()) {
            return redirect()->route('login');
        }
        $this->data['page_title']  = 'Admin - Categories';
        $this->data['page_header'] = 'Categories';
        $this->data['contents']    = [
            $this->folder_directory . 'index',
        ];
        $this->data['js'] = [
            'assets/system/js/default-datatable-script.js',
        ];
        $this->data['is_datatables'] = true;
        $this->data['entries']       = $this->model->join('at_accounts', 'account_id = at_accounts.id')->select('at_categories.*,at_categories.name as category_name, at_accounts.*, at_accounts.name as account_name')->findAll();

        return self::render();
    }

    public function render(): string
    {
        return view(HMVCSHIELDVIEWS . 'index', $this->data);
    }
}
