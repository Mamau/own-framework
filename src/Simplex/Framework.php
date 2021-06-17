<?php

namespace Simplex;

use Symfony\Component\HttpKernel\HttpKernel;


/**
 * Class Framework
 * @package Simplex
 */
class Framework extends HttpKernel
{
//    /** @var UrlMatcher */
//    private $matcher;
//
//    /** @var ControllerResolver */
//    private $controllerResolver;
//
//    /** @var ArgumentResolver */
//    private $argumentResolver;
//
//    /** @var EventDispatcher */
//    private $dispatcher;
//
//    /**
//     * Framework constructor.
//     * @param  EventDispatcher  $dispatcher
//     * @param  UrlMatcher  $matcher
//     * @param  ControllerResolver  $controllerResolver
//     * @param  ArgumentResolver  $argumentResolver
//     */
//    public function __construct(
//        EventDispatcher $dispatcher,
//        UrlMatcher $matcher,
//        ControllerResolver $controllerResolver,
//        ArgumentResolver $argumentResolver
//    ) {
//        $this->dispatcher = $dispatcher;
//        $this->matcher = $matcher;
//        $this->controllerResolver = $controllerResolver;
//        $this->argumentResolver = $argumentResolver;
//    }

//    /**
//     * @param  Request  $request
//     * @param  int  $type
//     * @param  bool  $catch
//     * @return false|mixed|Response
//     */
//    public function handle(
//        Request $request,
//        $type = HttpKernelInterface::MAIN_REQUEST,
//        $catch = true
//    ) {
//        $this->matcher->getContext()->fromRequest($request);
//
//        try {
//            $request->attributes->add($this->matcher->match($request->getPathInfo()));
//
//            $controller = $this->controllerResolver->getController($request);
//            $arguments = $this->argumentResolver->getArguments($request, $controller);
//
//            $response = call_user_func_array($controller, $arguments);
//        } catch (ResourceNotFoundException $exception) {
//            $response = new Response('Not Found', 404);
//        } catch (\Exception $exception) {
//            $response = new Response('An error occurred', 500);
//        }
//
//        // dispatch a response event
//        $this->dispatcher->dispatch(new ResponseEvent($response, $request), 'response');
//
//        return $response;
//    }
}
