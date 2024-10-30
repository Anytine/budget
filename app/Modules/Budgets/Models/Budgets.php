<?php

namespace App\Modules\Budgets\Models;

use CodeIgniter\Model;

class Budgets extends Model
{
    protected $table            = 'st_budgets';
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = true;
    protected $allowedFields    = [];
}