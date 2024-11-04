<?php

declare(strict_types=1);

namespace BaseCodeOy\HttpStatusCodes;

use InvalidArgumentException;

/**
 * @see https://http.dev/status
 * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes
 */
enum HttpStatusCode: int
{
    case CONTINUE = 100;

    case SWITCHING_PROTOCOLS = 101;

    case PROCESSING = 102;

    case EARLY_HINTS = 103;

    case RESPONSE_IS_STALE = 110;

    case REVALIDATION_FAILED = 111;

    case DISCONNECTED_OPERATION = 112;

    case HEURISTIC_EXPIRATION = 113;

    case MISCELLANEOUS_WARNING = 199;

    case OK = 200;

    case CREATED = 201;

    case ACCEPTED = 202;

    case NON_AUTHORITATIVE_INFORMATION = 203;

    case NO_CONTENT = 204;

    case RESET_CONTENT = 205;

    case PARTIAL_CONTENT = 206;

    case MULTI_STATUS = 207;

    case ALREADY_REPORTED = 208;

    case TRANSFORMATION_APPLIED = 214;

    case THIS_IS_FINE = 218;

    case IM_USED = 226;

    case MISCELLANEOUS_PERSISTENT_WARNING = 299;

    case MULTIPLE_CHOICES = 300;

    case MOVED_PERMANENTLY = 301;

    case FOUND = 302;

    case SEE_OTHER = 303;

    case NOT_MODIFIED = 304;

    case USE_PROXY = 305;

    case SWITCH_PROXY = 306;

    case TEMPORARY_REDIRECT = 307;

    case PERMANENT_REDIRECT = 308;

    case BAD_REQUEST = 400;

    case UNAUTHORIZED = 401;

    case PAYMENT_REQUIRED = 402;

    case FORBIDDEN = 403;

    case NOT_FOUND = 404;

    case METHOD_NOT_ALLOWED = 405;

    case NOT_ACCEPTABLE = 406;

    case PROXY_AUTHENTICATION_REQUIRED = 407;

    case REQUEST_TIMEOUT = 408;

    case CONFLICT = 409;

    case GONE = 410;

    case LENGTH_REQUIRED = 411;

    case PRECONDITION_FAILED = 412;

    case PAYLOAD_TOO_LARGE = 413;

    case URI_TOO_LONG = 414;

    case UNSUPPORTED_MEDIA_TYPE = 415;

    case RANGE_NOT_SATISFIABLE = 416;

    case EXPECTATION_FAILED = 417;

    case IM_A_TEAPOT = 418;

    case PAGE_EXPIRED = 419;

    case METHOD_FAILURE_OR_ENHANCE_YOUR_CALM = 420;

    case MISDIRECTED_REQUEST = 421;

    case UNPROCESSABLE_ENTITY = 422;

    case LOCKED = 423;

    case FAILED_DEPENDENCY = 424;

    case TOO_EARLY = 425;

    case UPGRADE_REQUIRED = 426;

    case PRECONDITION_REQUIRED = 428;

    case TOO_MANY_REQUESTS = 429;

    case HTTP_STATUS_CODE = 430;

    case REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    case IIS_LOGIN_TIME_OUT = 440;

    case NGINX_NO_RESPONSE = 444;

    case IIS_RETRY_WITH = 449;

    case BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;

    case IIS_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    case AWS_CLIENT_CLOSED_CONNECTION_PREMATURELY = 460;

    case AWS_TOO_MANY_FORWARDED_IP_ADDRESSES = 463;

    case INCOMPATIBLE_PROTOCOL = 464;

    case NGINX_REQUEST_HEADER_TOO_LARGE = 494;

    case NGINX_SSL_CERTIFICATE_ERROR = 495;

    case NGINX_SSL_CERTIFICATE_REQUIRED = 496;

    case NGINX_HTTP_REQUEST_SENT_TO_HTTPS_PORT = 497;

    case INVALID_TOKEN = 498;

    case NGINX_TOKEN_REQUIRED_OR_CLIENT_CLOSED_REQUEST = 499;

    case INTERNAL_SERVER_ERROR = 500;

    case NOT_IMPLEMENTED = 501;

    case BAD_GATEWAY = 502;

    case SERVICE_UNAVAILABLE = 503;

    case GATEWAY_TIMEOUT = 504;

    case HTTP_VERSION_NOT_SUPPORTED = 505;

    case VARIANT_ALSO_NEGOTIATES = 506;

    case INSUFFICIENT_STORAGE = 507;

    case LOOP_DETECTED = 508;

    case BANDWIDTH_LIMIT_EXCEEDED = 509;

    case NOT_EXTENDED = 510;

    case NETWORK_AUTHENTICATION_REQUIRED = 511;

    case CF_WEB_SERVER_IS_RETURNING_AN_UNKNOWN_ERROR = 520;

    case CF_WEB_SERVER_IS_DOWN = 521;

    case CF_CONNECTION_TIMED_OUT = 522;

    case CF_ORIGIN_IS_UNREACHABLE = 523;

    case CF_A_TIMEOUT_OCCURRED = 524;

    case CF_SSL_HANDSHAKE_FAILED = 525;

    case CF_INVALID_SSL_CERTIFICATE = 526;

    case CF_RAILGUN_LISTENER_TO_ORIGIN = 527;

    case CF_THE_SERVICE_IS_OVERLOADED = 529;

    case CF_SITE_FROZEN = 530;

    case AWS_UNAUTHORIZED = 561;

    case NETWORK_READ_TIMEOUT_ERROR = 598;

    case NETWORK_CONNECT_TIMEOUT_ERROR = 599;

    case REQUEST_DENIED = 999;

    public function __invoke(): int
    {
        return $this->value;
    }

    public static function __callStatic(string $name, mixed $args): int
    {
        foreach (self::cases() as $case) {
            if ($case->name === $name) {
                return $case->value;
            }
        }

        throw new InvalidArgumentException("Invalid case name: {$name}");
    }

    public static function options(): array
    {
        return \array_column(HttpStatusCode::cases(), 'value', 'name');
    }

    public static function names(): array
    {
        return \array_column(HttpStatusCode::cases(), 'name');
    }

    public static function values(): array
    {
        return \array_column(HttpStatusCode::cases(), 'value');
    }
}
