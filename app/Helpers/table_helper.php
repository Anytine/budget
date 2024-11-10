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

if (! function_exists('table_tr')) {
    function table_tr($contents, array $attributes = [])
    {
        $rows = is_array($contents) ? implode(PHP_EOL, $contents) : $contents;

        return '<tr ' . stringify_attributes($attributes) . ">{$rows}</tr>";
    }
}

if (! function_exists('table_th')) {
    function table_th($text, array $attributes = [], string $empty_placeholder = '-')
    {
        $text = null === $text || empty($text) ? $empty_placeholder : $text;

        return '<th ' . stringify_attributes($attributes) . ">{$text}</th>";
    }
}

if (! function_exists('table_td')) {
    function table_td($text, array $attributes = [], string $empty_placeholder = '-')
    {
        $text = null === $text || empty($text) ? $empty_placeholder : $text;

        return '<td ' . stringify_attributes($attributes) . ">{$text}</td>";
    }
}
