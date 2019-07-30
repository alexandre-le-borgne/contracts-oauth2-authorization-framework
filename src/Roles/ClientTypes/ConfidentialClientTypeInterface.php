<?php


namespace OAuth2\Roles\ClientTypes;

/**
 * Interface ConfidentialClientInterface
 * @package Roles\ClientTypes
 *
 * Clients capable of maintaining the confidentiality of their
 * credentials (e.g., client implemented on a secure server with
 * restricted access to the client credentials), or capable of secure
 * client authentication using other means.
 */
interface ConfidentialClientTypeInterface extends ClientTypeInterface
{

}