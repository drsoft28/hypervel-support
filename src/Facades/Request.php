<?php

declare(strict_types=1);

namespace LaravelHyperf\Support\Facades;

use Carbon\Carbon;
use Closure;
use Hyperf\Collection\Collection;
use LaravelHyperf\Http\Contracts\RequestContract;
use LaravelHyperf\Http\Request as HttpRequest;
use Psr\Http\Message\ServerRequestInterface;
use Stringable;

/**
 * @method static array allFiles()
 * @method static bool anyFilled(array|string $keys)
 * @method static bool boolean(?string $key = null, bool $default = false)
 * @method static Collection collect(null|array|string $key = null)
 * @method static ?Carbon date(string $key, ?string $format = null, ?string $tz = null)
 * @method static mixed enum(string $key, string $enumClass)
 * @method static array except(mixed $keys)
 * @method static bool exists(array|string $key)
 * @method static array validate(array $rules, array $messages = [], array $customAttributes = [])
 * @method static bool filled(array|string $key)
 * @method static float float(string $key, float $default = 0.0)
 * @method static Stringable string(string $key, mixed $default = null)
 * @method static Stringable str(string $key, mixed $default = null)
 * @method static bool hasAny(array|string $keys)
 * @method static string getHost()
 * @method static string getHttpHost()
 * @method static int|string getPort()
 * @method static string getScheme()
 * @method static bool isSecure()
 * @method static int integer(string $key, int $default = 0)
 * @method static bool isEmptyString(string $key)
 * @method static bool isJson()
 * @method static bool isNotFilled(array|string $key)
 * @method static array keys()
 * @method static HttpRequest merge(array $input)
 * @method static HttpRequest replace(array $input)
 * @method static HttpRequest mergeIfMissing(array $input)
 * @method static bool missing(array|string $key)
 * @method static array only(mixed $keys)
 * @method static string getSchemeAndHttpHost()
 * @method static string schemeAndHttpHost()
 * @method static bool expectsJson()
 * @method static bool wantsJson()
 * @method static bool accepts(array|string $contentTypes)
 * @method static ?string prefers(array|string $contentTypes)
 * @method static bool acceptsAnyContentType()
 * @method static bool acceptsJson()
 * @method static bool acceptsHtml()
 * @method static mixed whenFilled(string $key, callable $callback, ?callable $default = null)
 * @method static mixed whenHas(string $key, callable $callback, ?callable $default = null)
 * @method static ?string getClientIp()
 * @method static ?string ip()
 * @method static string fullUrlWithQuery(array $query)
 * @method static string fullUrlWithoutQuery(array $keys)
 * @method static string method()
 * @method static ?string bearerToken()
 * @method static array getAcceptableContentTypes()
 * @method static ?string getMimeType(string $format)
 * @method static array getMimeTypes(string $format)
 * @method static bool isXmlHttpRequest()
 * @method static bool ajax()
 * @method static bool pjax()
 * @method static ServerRequestInterface getPsr7Request()
 * @method static mixed input(?string $key = null, $default = null)
 * @method static array all(?array $keys = null)
 * @method static bool has(array|string $keys)
 * @method static string|array|null header(?string $key = null, $default = null)
 * @method static string|null headerLine(string $key)
 * @method static array|string|null server(?string $key = null, $default = null)
 * @method static string|null cookie(?string $key = null, $default = null)
 * @method static array|string|null query(?string $key = null, $default = null)
 * @method static string|null file(?string $key = null, $default = null)
 * @method static string fullUrl()
 * @method static string url()
 * @method static string path()
 * @method static string decodedPath()
 * @method static string|null segment(int $index, ?string $default = null)
 * @method static array segments()
 * @method static bool isMethod(string $method)
 * @method static string getPathInfo()
 * @method static string getRequestUri()
 * @method static string getUri()
 * @method static string getQueryString()
 * @method static SessionInterface session()
 * @method static Closure getUserResolver()
 * @method static static setUserResolver(Closure $callback)
 * @method static mixed user(?string $guard = null)
 * @method static bool hasValidSignature(bool $absolute = true)
 * @method static bool hasValidRelativeSignature()
 * @method static bool hasValidSignatureWhileIgnoring(array $ignoreQuery = [], bool $absolute = true)
 * @method static bool hasValidRelativeSignatureWhileIgnoring(array $ignoreQuery = [])
 *
 * @see \LaravelHyperf\Http\Request
 * @see \Hyperf\HttpServer\Request
 */
class Request extends Facade
{
    protected static function getFacadeAccessor()
    {
        return RequestContract::class;
    }
}
