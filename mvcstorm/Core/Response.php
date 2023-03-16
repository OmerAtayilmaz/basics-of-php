<?php
namespace Core;

class Response {
    public const FORBIDDEN = 403;
    public const NOT_FOUND = 404;
    public const INTERNAL_SERVER_ERROR = 500;
    public const OK = 200;
    public const CREATED = 201;
    public const NO_CONTENT = 204;
    public const UNAUTHORIZED = 401;
    public const BAD_REQUEST = 400;
    public const METHOD_NOT_ALLOWED = 405;
    public const CONFLICT = 409;
    public const UNPROCESSABLE_ENTITY = 422;
    public const TOO_MANY_REQUESTS = 429;
    public const SERVICE_UNAVAILABLE = 503;
    public const GATEWAY_TIMEOUT = 504;
}