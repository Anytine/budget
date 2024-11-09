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

namespace App\Modules\Accounts\Controllers;

use App\Controllers\BaseController;
use App\Modules\Accounts\Models\Accounts;

class Index extends BaseController
{
    protected $folder_directory = 'Modules\\Accounts\\Views\\';
    protected Accounts $model;
    protected $data  = [];
    protected $rules = [];

    public function __construct()
    {
        $this->model = new Accounts();
    }

    public function index()
    {
        if (! user_id()) {
            return redirect()->route('login');
        }
        $this->data['page_title']  = 'Admin - Accounts';
        $this->data['page_header'] = 'Accounts';
        $this->data['contents']    = [
            $this->folder_directory . 'index',
        ];
        $this->data['scripts'] = [
            $this->folder_directory . 'index-script.tpl',
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
