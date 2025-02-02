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

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'expense_id' => 1,
                'is_paid'    => true,
                'paid_date'  => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('payments')->insertBatch($data);
    }
}
