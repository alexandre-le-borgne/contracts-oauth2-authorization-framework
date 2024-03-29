<?php


namespace OAuth2\ClientAuthentication;

/**
 * Interface ClientPasswordAuthenticationMethod
 * @package ClientAuthentication
 *
 * Clients in possession of a client password MAY use the HTTP Basic
 * authentication scheme as defined in [RFC2617] to authenticate with
 * the authorization server.  The client identifier is encoded using the
 * "application/x-www-form-urlencoded" encoding algorithm per
 * Appendix B, and the encoded value is used as the username; the client
 * password is encoded using the same algorithm and used as the
 * password.  The authorization server MUST support the HTTP Basic
 * authentication scheme for authenticating clients that were issued a
 * client password.
 *
 * For example (with extra line breaks for display purposes only):
 *
 * Authorization: Basic czZCaGRSa3F0Mzo3RmpmcDBaQnIxS3REUmJuZlZkbUl3
 *
 * Alternatively, the authorization server MAY support including the
 * client credentials in the request-body using the following
 * parameters:
 *
 * client_id
 * REQUIRED.  The client identifier issued to the client during
 * the registration process described by Section 2.2.
 *
 * client_secret
 * REQUIRED.  The client secret.  The client MAY omit the
 * parameter if the client secret is an empty string.
 *
 * Including the client credentials in the request-body using the two
 * parameters is NOT RECOMMENDED and SHOULD be limited to clients unable
 * to directly utilize the HTTP Basic authentication scheme (or other
 * password-based HTTP authentication schemes).  The parameters can only
 * be transmitted in the request-body and MUST NOT be included in the
 * request URI.
 *
 * For example, a request to refresh an access token (Section 6) using
 * the body parameters (with extra line breaks for display purposes
 * only):
 *
 * POST /token HTTP/1.1
 * Host: server.example.com
 * Content-Type: application/x-www-form-urlencoded
 *
 * grant_type=refresh_token&refresh_token=tGzv3JOkF0XG5Qx2TlKWIA
 * &client_id=s6BhdRkqt3&client_secret=7Fjfp0ZBr1KtDRbnfVdmIw
 *
 * The authorization server MUST require the use of TLS as described in
 * Section 1.6 when sending requests using password authentication.
 *
 * Since this client authentication method involves a password, the
 * authorization server MUST protect any endpoint utilizing it against
 * brute force attacks.
 */
interface ClientPasswordAuthenticationMethod extends ClientAuthenticationMethodInterface
{

}