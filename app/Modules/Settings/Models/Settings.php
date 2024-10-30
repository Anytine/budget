<?php

namespace App\Modules\Settings\Models;

use CodeIgniter\Model;

class Settings extends Model
{
    protected $table            = 'st_settings';
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = true;
    protected $allowedFields    = [];
}