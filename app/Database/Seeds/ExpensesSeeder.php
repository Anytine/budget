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

class ExpensesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'category_id'    => 1,
                'name'           => 'Car Loan',
                'amount'         => 500.00,
                'frequency'      => 'monthly',
                'payment_status' => false,
                'created_at'     => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('expenses')->insertBatch($data);
    }
}
