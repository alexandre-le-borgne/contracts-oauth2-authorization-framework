<?php


namespace OAuth2\Endpoints;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface AuthorizationEndpointInterface
 * @package OAuth2\Endpoints
 *
 * The authorization endpoint is used to interact with the resource
 * owner and obtain an authorization grant.  The authorization server
 * MUST first verify the identity of the resource owner.  The way in
 * which the authorization server authenticates the resource owner
 * (e.g., username and password login, session cookies) is beyond the
 * scope of this specification.
 *
 * The means through which the client obtains the location of the
 * authorization endpoint are beyond the scope of this specification,
 * but the location is typically provided in the service documentation.
 *
 * The endpoint URI MAY include an "application/x-www-form-urlencoded"
 * formatted (per Appendix B) query component ([RFC3986] Section 3.4),
 * which MUST be retained when adding additional query parameters.  The
 * endpoint URI MUST NOT include a fragment component.
 *
 * Since requests to the authorization endpoint result in user
 * authentication and the transmission of clear-text credentials (in the
 * HTTP response), the authorization server MUST require the use of TLS
 * as described in Section 1.6 when sending requests to the
 * authorization endpoint.
 *
 * The authorization server MUST support the use of the HTTP "GET"
 * method [RFC2616] for the authorization endpoint and MAY support the
 * use of the "POST" method as well.
 *
 * Parameters sent without a value MUST be treated as if they were
 * omitted from the request.  The authorization server MUST ignore
 * unrecognized request parameters.  Request and response parameters
 * MUST NOT be included more than once.
 */
interface AuthorizationEndpointInterface extends EndpointInterface
{
    /**
     * The client constructs the request URI by adding the following
     * parameters to the query component of the authorization endpoint URI
     * using the "application/x-www-form-urlencoded" format, per Appendix B:
     *
     * response_type
     * REQUIRED.  Value MUST be set to "code" or "token".
     *
     * client_id
     * REQUIRED.  The client identifier as described in Section 2.2.
     *
     * redirect_uri
     * OPTIONAL.  As described in Section 3.1.2.
     *
     * scope
     * OPTIONAL.  The scope of the access request as described by
     * Section 3.3.
     *
     * state
     * RECOMMENDED.  An opaque value used by the client to maintain
     * state between the request and callback.  The authorization
     * server includes this value when redirecting the user-agent back
     * to the client.  The parameter SHOULD be used for preventing
     * cross-site request forgery as described in Section 10.12.
     *
     * The client directs the resource owner to the constructed URI using an
     * HTTP redirection response, or by other means available to it via the
     * user-agent.
     *
     * For example, the client directs the user-agent to make the following
     * HTTP request using TLS (with extra line breaks for display purposes
     * only):
     *
     * GET /authorize?response_type=code&client_id=s6BhdRkqt3&state=xyz
     * &redirect_uri=https%3A%2F%2Fclient%2Eexample%2Ecom%2Fcb HTTP/1.1
     * Host: server.example.com
     *
     * The authorization server validates the request to ensure that all
     * required parameters are present and valid.  If the request is valid,
     * the authorization server authenticates the resource owner and obtains
     * an authorization decision (by asking the resource owner or by
     * establishing approval via other means).
     *
     * When a decision is established, the authorization server directs the
     * user-agent to the provided client redirection URI using an HTTP
     * redirection response, or by other means available to it via the
     * user-agent.
     *
     * If the resource owner grants the access request, the authorization
     * server issues an authorization code and delivers it to the client by
     * adding the following parameters to the query component of the
     * redirection URI using the "application/x-www-form-urlencoded" format,
     * per Appendix B:
     *
     * code
     * REQUIRED.  The authorization code generated by the
     * authorization server.  The authorization code MUST expire
     * shortly after it is issued to mitigate the risk of leaks.  A
     * maximum authorization code lifetime of 10 minutes is
     * RECOMMENDED.  The client MUST NOT use the authorization code
     *
     * more than once.  If an authorization code is used more than
     * once, the authorization server MUST deny the request and SHOULD
     * revoke (when possible) all tokens previously issued based on
     * that authorization code.  The authorization code is bound to
     * the client identifier and redirection URI.
     *
     * state
     * REQUIRED if the "state" parameter was present in the client
     * authorization request.  The exact value received from the
     * client.
     *
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    function authorizationRequest(RequestInterface $request): ResponseInterface;
}