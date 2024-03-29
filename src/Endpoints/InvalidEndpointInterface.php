<?php


namespace Endpoints;

/**
 * Interface InvalidEndpointInterface
 * @package Endpoints
 *
 *  If an authorization request fails validation due to a missing,
 * invalid, or mismatching redirection URI, the authorization server
 * SHOULD inform the resource owner of the error and MUST NOT
 * automatically redirect the user-agent to the invalid redirection URI.
 */
interface InvalidEndpointInterface
{

}