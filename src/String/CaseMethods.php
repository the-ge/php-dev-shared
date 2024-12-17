<?php

/**
 * Utility methods for string conversion
 *
 * File name: CaseMethods.php
 * Created:   2024-12-16 21:01:09
 * @author    Gabriel Tenita <dev2023@tenita.eu>
 * @link      https://github.com/the-ge/
 * @copyright Copyright (c) 2024-present Gabriel Tenita
 * @license   https://www.apache.org/licenses/LICENSE-2.0 Apache License version 2.0
 */

namespace TheGe\Shared\String;


trait CaseMethods
{
    /**
     * i.e. 'BaseUnitPrice' -> 'base_unit_price'
     */
    private function caseCamelToSnake($string): string
    {
        return \strtolower(\preg_replace('/(?<!^)[A-Z]/', '_$0', $string));
    }

    /**
     * i.e. 'base_unit_price' -> 'BaseUnitPrice'
     */
    private function caseSnakeToCamel(string $string): string
    {
        return \str_replace('_', '', \ucwords($string, '_'));
    }

    /**
     * i.e. 'base_unit_price' -> 'baseUnitPrice'
     */
    private function caseSnakeToDromedary(string $string): string
    {
        return \lcfirst($this->caseSnakeToCamel($string));
    }

    /**
     * i.e. 'base_unit_price' -> 'Base unit price'
     */
    private function caseSnakeToTitle(string $name): string
    {
        return \ucfirst(\str_replace('_', ' ', $name));
    }
}
