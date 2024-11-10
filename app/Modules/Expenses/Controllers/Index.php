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

namespace App\Modules\Expenses\Controllers;

use App\Controllers\BaseController;
use App\Modules\Expenses\Models\Expenses;

class Index extends BaseController
{
    protected $folder_directory = 'Modules\\Expenses\\Views\\';
    protected Expenses $model;
    protected $data  = [];
    protected $rules = [];

    public function __construct()
    {
        $this->model = new Expenses();
    }

    public function index()
    {
        if (! user_id()) {
            return redirect()->route('login');
        }
        $this->data['page_title']  = 'Admin - Expenses';
        $this->data['page_header'] = 'Expenses';
        $this->data['contents']    = [
            $this->folder_directory . 'index',
        ];
        $this->data['js'] = [
            'assets/system/js/default-datatable-script.js',
        ];
        $this->data['is_datatables'] = true;
        $this->data['entries']       = $this->model->join('at_categories', 'account_id = at_categories.id')->join('at_payments', 'at_expenses.id = at_payments.expense_id')->select('at_categories.*,at_categories.name as category_name, at_expenses.*, at_expenses.name as expenses_name, at_payments.*, ')->findAll();

        return self::render();
    }

    public function render(): string
    {
        return view(HMVCSHIELDVIEWS . 'index', $this->data);
    }
}
