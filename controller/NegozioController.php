<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class NegozioController
{
    public function Negozio(Request $request, Response $response, $args)
    {
        $negozio = new Negozio("Negozio-1", 055 6564321, 'Via Gino Panino 31', 'www.GinoPanino.com' , '1234567');
        $negozio->popola();
        $str = json_encode($negozio);
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }


    public function Articoli(Request $request, Response $response, $args)
    {
        $negozio = new Negozio("Negozio-1", 055 6564321, 'Via Gino Panino 31', 'www.GinoPanino.com' , '1234567');
        $negozio->popola();
        $str = json_encode($negozio->getCatalogo());
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }


    public function Articoli(Request $request, Response $response, $args)
    {
        $negozio = new Negozio("Negozio-1", 055 6564321, 'Via Gino Panino 31', 'www.GinoPanino.com' , '1234567');
        $negozio->popola();
        $str = json_encode($negozio->$ordiniNegozio->getId());
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }


    public function Articoli(Request $request, Response $response, $args)
    {
        $negozio = new Negozio("Negozio-1", 055 6564321, 'Via Gino Panino 31', 'www.GinoPanino.com' , '1234567');
        $negozio->popola();
        $str = json_encode($negozio->getOrdini());
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }

}