<?php


namespace OAuth2\AuthorizationGrantTypes;

/**
 * Interface ImplicitInterface
 * @package AuthorizationGrantTypes
 *
 * The implicit grant is a simplified authorization code flow optimized
 * for clients implemented in a browser using a scripting language such
 * as JavaScript.  In the implicit flow, instead of issuing the client
 * an authorization code, the client is issued an access token directly
 *
 * (as the result of the resource owner authorization).  The grant type
 * is implicit, as no intermediate credentials (such as an authorization
 * code) are issued (and later used to obtain an access token).
 *
 * When issuing an access token during the implicit grant flow, the
 * authorization server does not authenticate the client.  In some
 * cases, the client identity can be verified via the redirection URI
 * used to deliver the access token to the client.  The access token may
 * be exposed to the resource owner or other applications with access to
 * the resource owner's user-agent.
 *
 * Implicit grants improve the responsiveness and efficiency of some
 * clients (such as a client implemented as an in-browser application),
 * since it reduces the number of round trips required to obtain an
 * access token.  However, this convenience should be weighed against
 * the security implications of using implicit grants, such as those
 * described in Sections 10.3 and 10.16, especially when the
 * authorization code grant type is available.
 *
 * The implicit grant type is used to obtain access tokens (it does not
 * support the issuance of refresh tokens) and is optimized for public
 * clients known to operate a particular redirection URI.  These clients
 * are typically implemented in a browser using a scripting language
 * such as JavaScript.
 *
 * Since this is a redirection-based flow, the client must be capable of
 * interacting with the resource owner's user-agent (typically a web
 * browser) and capable of receiving incoming requests (via redirection)
 * from the authorization server.
 *
 * Unlike the authorization code grant type, in which the client makes
 * separate requests for authorization and for an access token, the
 * client receives the access token as the result of the authorization
 * request.
 *
 * The implicit grant type does not include client authentication, and
 * relies on the presence of the resource owner and the registration of
 * the redirection URI.  Because the access token is encoded into the
 * redirection URI, it may be exposed to the resource owner and other
 * applications residing on the same device.
 */
interface ImplicitInterface
{

}