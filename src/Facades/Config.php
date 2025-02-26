<?php

declare(strict_types=1);

namespace LaravelHyperf\Support\Facades;

use LaravelHyperf\Config\Contracts\Repository as ConfigContract;

/**
 * @method static bool has(string $key)
 * @method static mixed get(array|string $key, mixed $default = null)
 * @method static array getMany(array $keys)
 * @method static string string(string $key, null|\Closure|string $default = null)
 * @method static int integer(string $key, null|\Closure|int $default = null)
 * @method static float float(string $key, null|\Closure|float $default = null)
 * @method static bool boolean(string $key, null|bool|\Closure $default = null)
 * @method static array array(string $key, null|array|\Closure $default = null)
 * @method static void set(array|string $key, mixed $value = null)
 * @method static void prepend(string $key, mixed $value)
 * @method static void push(string $key, mixed $value)
 * @method static array all()
 * @method static void afterSettingCallback(\Closure|null $callback)
 * @method static void macro(string $name, callable|object $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 *
 * @see \LaravelHyperf\Config\Repository
 */
class Config extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ConfigContract::class;
    }
}
