<?php


namespace OAuth2\Endpoints;

/**
 * Interface EndpointInterface
 * @package OAuth2\Endpoints
 *
 * The authorization process utilizes two authorization server endpoints
 * (HTTP resources):
 *
 * o  Authorization endpoint - used by the client to obtain
 * authorization from the resource owner via user-agent redirection.
 *
 * o  Token endpoint - used by the client to exchange an authorization
 * grant for an access token, typically with client authentication.
 *
 * As well as one client endpoint:
 *
 * o  Redirection endpoint - used by the authorization server to return
 * responses containing authorization credentials to the client via
 * the resource owner user-agent.
 *
 * Not every authorization grant type utilizes both endpoints.
 * Extension grant types MAY define additional endpoints as needed.
 */
interface EndpointInterface
{

}