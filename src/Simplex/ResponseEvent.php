<?php
namespace Simplex;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class ResponseEvent
 * @package Simplex
 */
class ResponseEvent extends Event
{
    private $request;
    private $response;

    /**
     * ResponseEvent constructor.
     * @param  Response  $response
     * @param  Request  $request
     */
    public function __construct(Response $response, Request $request)
    {
        $this->response = $response;
        $this->request = $request;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }
}
