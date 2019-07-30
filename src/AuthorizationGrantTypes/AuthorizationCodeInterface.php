<?php


namespace OAuth2\AuthorizationGrantTypes;

/**
 * Interface AuthorizationCodeInterface
 * @package AuthorizationGrantTypes
 *
 * The authorization code is obtained by using an authorization server
 * as an intermediary between the client and resource owner.  Instead of
 * requesting authorization directly from the resource owner, the client
 * directs the resource owner to an authorization server (via its
 * user-agent as defined in [RFC2616]), which in turn directs the
 * resource owner back to the client with the authorization code.
 *
 * Before directing the resource owner back to the client with the
 * authorization code, the authorization server authenticates the
 * resource owner and obtains authorization.  Because the resource owner
 * only authenticates with the authorization server, the resource
 * owner's credentials are never shared with the client.
 *
 * The authorization code provides a few important security benefits,
 * such as the ability to authenticate the client, as well as the
 * transmission of the access token directly to the client without
 * passing it through the resource owner's user-agent and potentially
 * exposing it to others, including the resource owner.
 *
 * The authorization code grant type is used to obtain both access
 * tokens and refresh tokens and is optimized for confidential clients.
 * Since this is a redirection-based flow, the client must be capable of
 * interacting with the resource owner's user-agent (typically a web
 * browser) and capable of receiving incoming requests (via redirection)
 * from the authorization server.
 */
interface AuthorizationCodeInterface
{

}