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

namespace App\Modules\Budgets\Controllers;

use App\Controllers\BaseController;

class Index extends BaseController
{
    protected $folder_directory = 'Modules\\Budgets\\Views\\';
    protected $model;
    protected $data  = [];
    protected $rules = [];

    public function __construct()
    {
    }

    public function index()
    {
        if (! user_id()) {
            return redirect()->route('login');
        }
        $this->data['page_title']  = 'Admin - Budgets';
        $this->data['page_header'] = 'Budgets';
        $this->data['contents']    = [
            $this->folder_directory . 'index',
        ];
        $this->data['js'] = [
            'assets/system/js/default-datatable-script.js',
        ];
        $this->data['is_datatables'] = true;
        $this->data['entries']       = $this->model->findAll();

        return self::render();
    }

    public function render(): string
    {
        return view(HMVCSHIELDVIEWS . 'index', $this->data);
    }
}
