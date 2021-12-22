<?php

use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__.'/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$cursoReporitory = $entityManager->getRepository(Curso::class);

$cursoList = $cursoReporitory->findAll();

var_dump($cursoList);
foreach ($cursoList as $curso){
//     $telefones = $aluno
//                 ->getTelefones()
//                 ->map(function (Telefone $telefone){
//                     return $telefone->getNumero();
//                 })
//                 ->toArray();
              
//     echo "ID: {$aluno->getId()} \n";
    echo "Nome: {$curso->getNome()} \n";
//     echo "Telefones: ". implode(', ', $telefones);
//     echo "\n\n";
}