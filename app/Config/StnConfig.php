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

namespace Config;

use CodeIgniter\Config\BaseConfig;

class StnConfig extends BaseConfig
{
    public array $sidebars = [
        // General Item Sample
        [
            'label'      => 'Dashboard',
            'attributes' => [
                'class' => 'nav-item',
            ],
            'icon_class' => 'fas fa-tachometer-alt',
            'anchor'     => [
                'href'  => '/',
                'class' => 'nav-link',
            ],
        ],
        [
            'label'      => 'Accounts',
            'attributes' => [
                'class' => 'nav-item',
            ],
            'icon_class' => 'fas fa-users',
            'anchor'     => [
                'href'  => '#',
                'class' => 'nav-link',
            ],
            'dropdown_items' => [
                [
                    'label'      => 'Accounts',
                    'icon_class' => 'far fa-circle',
                    'anchor'     => [
                        'href'  => '/accounts',
                        'class' => 'nav-link',
                    ],
                ],
                [
                    'label'      => 'New Account',
                    'icon_class' => 'far fa-circle',
                    'anchor'     => [
                        'href'  => '/accounts/new',
                        'class' => 'nav-link',
                    ],
                ],
            ],
        ],
        [
            'label'      => 'Categories',
            'attributes' => [
                'class' => 'nav-item',
            ],
            'icon_class' => 'fas fa-users',
            'anchor'     => [
                'href'  => '#',
                'class' => 'nav-link',
            ],
            'dropdown_items' => [
                [
                    'label'      => 'Categories',
                    'icon_class' => 'far fa-circle',
                    'anchor'     => [
                        'href'  => '/categories',
                        'class' => 'nav-link',
                    ],
                ],
                [
                    'label'      => 'New Category',
                    'icon_class' => 'far fa-circle',
                    'anchor'     => [
                        'href'  => '/categories/new',
                        'class' => 'nav-link',
                    ],
                ],
            ],
        ],
        [
            'label'      => 'Expenses',
            'attributes' => [
                'class' => 'nav-item',
            ],
            'icon_class' => 'fas fa-users',
            'anchor'     => [
                'href'  => '#',
                'class' => 'nav-link',
            ],
            'dropdown_items' => [
                [
                    'label'      => 'Expenses',
                    'icon_class' => 'far fa-circle',
                    'anchor'     => [
                        'href'  => '/expenses',
                        'class' => 'nav-link',
                    ],
                ],
                [
                    'label'      => 'New Expense',
                    'icon_class' => 'far fa-circle',
                    'anchor'     => [
                        'href'  => '/expenses/new',
                        'class' => 'nav-link',
                    ],
                ],
            ],
        ],
        [
            'label'      => 'Payments',
            'attributes' => [
                'class' => 'nav-item',
            ],
            'icon_class' => 'fas fa-users',
            'anchor'     => [
                'href'  => '#',
                'class' => 'nav-link',
            ],
            'dropdown_items' => [
                [
                    'label'      => 'Payments',
                    'icon_class' => 'far fa-circle',
                    'anchor'     => [
                        'href'  => '/payments',
                        'class' => 'nav-link',
                    ],
                ],
                [
                    'label'      => 'New Payment',
                    'icon_class' => 'far fa-circle',
                    'anchor'     => [
                        'href'  => '/payments/new',
                        'class' => 'nav-link',
                    ],
                ],
            ],
        ],
        // Dropdown Items Sample
        [
            'label'      => 'Members',
            'attributes' => [
                'class' => 'nav-item',
            ],
            'icon_class' => 'fas fa-users',
            'anchor'     => [
                'href'  => '#',
                'class' => 'nav-link',
            ],
            'dropdown_items' => [
                [
                    'label'      => 'Members',
                    'icon_class' => 'far fa-circle',
                    'anchor'     => [
                        'href'  => '/members',
                        'class' => 'nav-link',
                    ],
                ],
                [
                    'label'      => 'New Member',
                    'icon_class' => 'far fa-circle',
                    'anchor'     => [
                        'href'  => '/members/new',
                        'class' => 'nav-link',
                    ],
                ],
            ],
        ],
        [
            'label'      => 'Logout',
            'attributes' => [
                'class' => 'nav-item',
            ],
            'icon_class' => 'fas fas fa-sign-out-alt',
            'anchor'     => [
                'href'  => '/logout',
                'class' => 'nav-link bg-danger',
            ],
        ],
    ];
}
