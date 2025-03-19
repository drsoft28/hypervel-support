<?php

declare(strict_types=1);

namespace Hypervel\Support\Facades;

use Hypervel\Auth\Contracts\Gate as GateContract;

/**
 * @method static bool has(array|string $ability)
 * @method static \Hypervel\Auth\Access\Response allowIf(\Closure|\Hypervel\Auth\Access\Response|bool $condition, string|null $message = null, string|null $code = null)
 * @method static \Hypervel\Auth\Access\Response denyIf(\Closure|\Hypervel\Auth\Access\Response|bool $condition, string|null $message = null, string|null $code = null)
 * @method static \Hypervel\Auth\Access\Gate define(string $ability, callable|array|string $callback)
 * @method static \Hypervel\Auth\Access\Gate resource(string $name, string $class, array|null $abilities = null)
 * @method static \Hypervel\Auth\Access\Gate policy(string $class, string $policy)
 * @method static \Hypervel\Auth\Access\Gate before(callable $callback)
 * @method static \Hypervel\Auth\Access\Gate after(callable $callback)
 * @method static bool allows(string $ability, mixed $arguments = [])
 * @method static bool denies(string $ability, mixed $arguments = [])
 * @method static bool check(\Traversable|array|string $abilities, mixed $arguments = [])
 * @method static bool any(\Traversable|array|string $abilities, mixed $arguments = [])
 * @method static bool none(\Traversable|array|string $abilities, mixed $arguments = [])
 * @method static \Hypervel\Auth\Access\Response authorize(string $ability, mixed $arguments = [])
 * @method static \Hypervel\Auth\Access\Response inspect(string $ability, mixed $arguments = [])
 * @method static mixed raw(string $ability, mixed $arguments = [])
 * @method static mixed|void getPolicyFor(object|string $class)
 * @method static mixed resolvePolicy(string $class)
 * @method static \Hypervel\Auth\Access\Gate forUser(\Hypervel\Auth\Contracts\Authenticatable|null $user)
 * @method static array abilities()
 * @method static array policies()
 * @method static \Hypervel\Auth\Access\Gate defaultDenialResponse(\Hypervel\Auth\Access\Response $response)
 * @method static \Hypervel\Auth\Access\Response denyWithStatus(int $status, string|null $message = null, string|int|null $code = null)
 * @method static \Hypervel\Auth\Access\Response denyAsNotFound(string|null $message = null, string|int|null $code = null)
 *
 * @see \Hypervel\Auth\Access\Gate
 */
class Gate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return GateContract::class;
    }
}
