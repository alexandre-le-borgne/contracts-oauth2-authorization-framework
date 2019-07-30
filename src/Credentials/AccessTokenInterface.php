<?php


namespace OAuth2\Credentials;

use TokenTypes\TokenTypeInterface;

/**
 * Interface AccessTokenInterface
 * @package Credentials
 *
 * Access tokens are credentials used to access protected resources.  An
 * access token is a string representing an authorization issued to the
 * client.  The string is usually opaque to the client.  Tokens
 * represent specific scopes and durations of access, granted by the
 * resource owner, and enforced by the resource server and authorization
 * server.
 *
 * The token may denote an identifier used to retrieve the authorization
 * information or may self-contain the authorization information in a
 * verifiable manner (i.e., a token string consisting of some data and a
 * signature).  Additional authentication credentials, which are beyond
 * the scope of this specification, may be required in order for the
 * client to use a token.
 *
 * The access token provides an abstraction layer, replacing different
 * authorization constructs (e.g., username and password) with a single
 * token understood by the resource server.  This abstraction enables
 * issuing access tokens more restrictive than the authorization grant
 * used to obtain them, as well as removing the resource server's need
 * to understand a wide range of authentication methods.
 *
 * Access tokens can have different formats, structures, and methods of
 * utilization (e.g., cryptographic properties) based on the resource
 * server security requirements.  Access token attributes and the
 * methods used to access protected resources are beyond the scope of
 * this specification and are defined by companion specifications such
 * as [RFC6750].
 *
 * Access token credentials (as well as any confidential access token
 * attributes) MUST be kept confidential in transit and storage, and
 * only shared among the authorization server, the resource servers the
 * access token is valid for, and the client to whom the access token is
 * issued.  Access token credentials MUST only be transmitted using TLS
 * as described in Section 1.6 with server authentication as defined by
 * [RFC2818].
 *
 * When using the implicit grant type, the access token is transmitted
 * in the URI fragment, which can expose it to unauthorized parties.
 *
 * The authorization server MUST ensure that access tokens cannot be
 * generated, modified, or guessed to produce valid access tokens by
 * unauthorized parties.
 *
 * The client SHOULD request access tokens with the minimal scope
 * necessary.  The authorization server SHOULD take the client identity
 * into account when choosing how to honor the requested scope and MAY
 * issue an access token with less rights than requested.
 *
 * This specification does not provide any methods for the resource
 * server to ensure that an access token presented to it by a given
 * client was issued to that client by the authorization server.
 */
interface AccessTokenInterface
{
    /**
     *  The access token type provides the client with the information
     * required to successfully utilize the access token to make a protected
     * resource request (along with type-specific attributes).  The client
     * MUST NOT use an access token if it does not understand the token
     * type.
     *
     *   Each access token type definition specifies the additional attributes
     * (if any) sent to the client together with the "access_token" response
     * parameter.  It also defines the HTTP authentication method used to
     * include the access token when making a protected resource request.
     *
     * @return TokenTypeInterface
     */
    function getType(): TokenTypeInterface;
}