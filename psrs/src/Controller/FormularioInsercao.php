<?php

namespace Alura\Cursos\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;

class FormularioInsercao implements RequestHandlerInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this-> entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        //var_dump($this->entityManager);
        $html = "teste";
        return new Response(200, [], $html);
    }
}
