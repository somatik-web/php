<?php
declare(strict_types=1);
/**
 * @param $var
 * @param string $value
 * @return string
 */
function mark(&$var, string $value = 'form__item--invalid'): string
{
    return mark_if_true(isset($var), $value);
}

/**
 * @param bool $condition
 * @param string $value
 * @return string
 */
function mark_if_true(bool $condition, string $value = 'form__item--invalid'): string
{
    return $condition ? $value : '';
}

/**
 * Writes value if set with sanitizing, or empty string otherwise
 * @param $value
 * @return string
 */
function h($value): string
{
    return isset($value) ? htmlspecialchars($value, ENT_QUOTES) : '';
}

function print_array(array $array, ?callable $block) {
    if (empty($array)) return;

    $inner = function (callable $each) use ($array) {
        return implode(',', array_map($each, $array));
    };

    $block($inner);
}
