<?php

declare(strict_types=1);

namespace LaravelHyperf\Support\Facades;

use LaravelHyperf\Cookie\Contracts\Cookie as CookieContract;

/**
 * @method static bool has(string $key)
 * @method static string|null get(string $key, string|null $default = null)
 * @method static \LaravelHyperf\Cookie\Cookie make(string $name, string $value, int $minutes = 0, string $path = '', string $domain = '', bool $secure = false, bool $httpOnly = true, bool $raw = false, string|null $sameSite = null)
 * @method static void queue(void ...$parameters)
 * @method static void expire(string $name, string $path = '', string $domain = '')
 * @method static void unqueue(string $name, string $path = '')
 * @method static array getQueuedCookies()
 * @method static \LaravelHyperf\Cookie\Cookie forever(string $name, string $value, string $path = '', string $domain = '', bool $secure = false, bool $httpOnly = true, bool $raw = false, string|null $sameSite = null)
 * @method static \LaravelHyperf\Cookie\Cookie forget(string $name, string $path = '', string $domain = '')
 *
 * @see \LaravelHyperf\Cookie\CookieManager
 */
class Cookie extends Facade
{
    protected static function getFacadeAccessor()
    {
        return CookieContract::class;
    }
}
