<?php namespace Proxy\Response\Filter;

use Symfony\Component\HttpFoundation\Response;

class RemoveEncodingFilter implements ResponseFilterInterface {

    /**
     * Process the response.
     *
     * @param  Response $request
     * @return Response
     */
    public function filter(Response $response)
    {
        $response->headers->remove('transfer-encoding');

        $response->headers->remove('content-encoding');

        return $response;
    }

}