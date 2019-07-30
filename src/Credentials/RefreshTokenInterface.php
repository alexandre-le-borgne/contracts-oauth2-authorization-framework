<?php


namespace OAuth2\Credentials;

/**
 * Class RefreshTokenInterface
 * @package Credentials
 *
 * Refresh tokens are credentials used to obtain access tokens.  Refresh
 * tokens are issued to the client by the authorization server and are
 * used to obtain a new access token when the current access token
 * becomes invalid or expires, or to obtain additional access tokens
 * with identical or narrower scope (access tokens may have a shorter
 * lifetime and fewer permissions than authorized by the resource
 * owner).  Issuing a refresh token is optional at the discretion of the
 * authorization server.  If the authorization server issues a refresh
 * token, it is included when issuing an access token (i.e., step (D) in
 * Figure 1).
 *
 * A refresh token is a string representing the authorization granted to
 * the client by the resource owner.  The string is usually opaque to
 * the client.  The token denotes an identifier used to retrieve the
 *
 * authorization information.  Unlike access tokens, refresh tokens are
 * intended for use only with authorization servers and are never sent
 * to resource servers.
 *
 * Authorization servers MAY issue refresh tokens to web application
 * clients and native application clients.
 *
 * Refresh tokens MUST be kept confidential in transit and storage, and
 * shared only among the authorization server and the client to whom the
 * refresh tokens were issued.  The authorization server MUST maintain
 * the binding between a refresh token and the client to whom it was
 * issued.  Refresh tokens MUST only be transmitted using TLS as
 * described in Section 1.6 with server authentication as defined by
 * [RFC2818].
 *
 * The authorization server MUST verify the binding between the refresh
 * token and client identity whenever the client identity can be
 * authenticated.  When client authentication is not possible, the
 * authorization server SHOULD deploy other means to detect refresh
 * token abuse.
 *
 * For example, the authorization server could employ refresh token
 * rotation in which a new refresh token is issued with every access
 * token refresh response.  The previous refresh token is invalidated
 *
 * but retained by the authorization server.  If a refresh token is
 * compromised and subsequently used by both the attacker and the
 * legitimate client, one of them will present an invalidated refresh
 * token, which will inform the authorization server of the breach.
 *
 * The authorization server MUST ensure that refresh tokens cannot be
 * generated, modified, or guessed to produce valid refresh tokens by
 * unauthorized parties.
 */
interface RefreshTokenInterface
{

}