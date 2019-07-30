<?php


namespace TokenTypes;

/**
 * Interface BearerTokenType
 * @package TokenTypes
 *
 * The "bearer" token type defined in [RFC6750] is utilized
 * by simply including the access token string in the request:
 *
 * GET /resource/1 HTTP/1.1
 * Host: example.com
 * Authorization: Bearer mF_9.B5f-4.1JqM
 */
interface BearerTokenType extends TokenTypeInterface
{

}