<?php

namespace App\Modules\Budgets\Controllers;

use App\Controllers\BaseController;

class Index extends BaseController
{
    protected $folder_directory = "Modules\\Budgets\\Views\\";
    protected $model;
    protected $data = [];
    protected $rules = [];

    public function __construct()
    {
    }

    public function index()
    {
        if(!user_id()) {
            return redirect()->route('login');
        }
        $this->data['page_title'] = 'Admin - Index';
        $this->data['page_header'] = 'Index';
        $this->data['contents'] = [
            $this->folder_directory . 'index',
        ];
        return self::render();
    }

    public function render(): string
    {
        return view( HMVCSHIELDVIEWS . 'index', $this->data);
    }
}