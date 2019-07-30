<?php


namespace OAuth2\AuthorizationGrantTypes;

/**
 * Interface ClientCredentialsInterface
 * @package AuthorizationGrantTypes
 *
 * The client credentials (or other forms of client authentication) can
 * be used as an authorization grant when the authorization scope is
 * limited to the protected resources under the control of the client,
 * or to protected resources previously arranged with the authorization
 * server.  Client credentials are used as an authorization grant
 * typically when the client is acting on its own behalf (the client is
 * also the resource owner) or is requesting access to protected
 * resources based on an authorization previously arranged with the
 * authorization server.
 */
interface ClientCredentialsInterface
{

}