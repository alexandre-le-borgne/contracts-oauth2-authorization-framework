<?php


namespace OAuth2\Roles\ClientProfiles;

/**
 * Interface WebApplicationInterface
 * @package Roles\ClientProfiles
 *
 * A web application is a confidential client running on a web
 * server.  Resource owners access the client via an HTML user
 * interface rendered in a user-agent on the device used by the
 * resource owner.  The client credentials as well as any access
 * token issued to the client are stored on the web server and are
 * not exposed to or accessible by the resource owner.
 */
interface WebApplicationInterface extends ClientProfileInterface
{

}