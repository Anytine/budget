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

namespace App\Modules\Payments\Controllers;

use App\Controllers\BaseController;
use App\Modules\Payments\Models\Payments;

class Index extends BaseController
{
    protected $folder_directory = 'Modules\\Payments\\Views\\';
    protected Payments $model;
    protected $data  = [];
    protected $rules = [];

    public function __construct()
    {
        $this->model = new Payments();
    }

    public function index()
    {
        if (! user_id()) {
            return redirect()->route('login');
        }
        $this->data['page_title']  = 'Admin - Payments';
        $this->data['page_header'] = 'Payments';
        $this->data['contents']    = [
            $this->folder_directory . 'index',
        ];
        $this->data['js'] = [
            'assets/system/js/default-datatable-script.js',
        ];
        $this->data['is_datatables'] = true;
        $this->data['entries']       = $this->model->join('at_expenses', 'expense_id = at_expenses.id')->findAll();

        return self::render();
    }

    public function render(): string
    {
        return view(HMVCSHIELDVIEWS . 'index', $this->data);
    }
}
