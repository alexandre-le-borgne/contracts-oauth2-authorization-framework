<?php


namespace TokenTypes;

/**
 * Interface MacTokenType
 * @package TokenTypes
 *
 * The "mac" token type defined in [OAuth-HTTP-MAC] is utilized by
 * issuing a Message Authentication Code (MAC) key together with the
 * access token that is used to sign certain components of the HTTP
 * requests:
 *
 * GET /resource/1 HTTP/1.1
 * Host: example.com
 * Authorization: MAC id="h480djs93hd8",
 * nonce="274312:dj83hs9s",
 * mac="kDZvddkndxvhGRXZhvuDjEWhGeE="
 */
interface MacTokenType extends TokenTypeInterface
{

}