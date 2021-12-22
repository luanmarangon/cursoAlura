<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManagerFactory = $entityManagerFactory->getEntityManager();

$alunosRepository = $entityManager->getRepository(Aluno::class);


$alunos = $alunosRepository->findAll();

foreach($alunos as $aluno){
    $telefones = $aluno->getTelefone()->map(
        function(Telefone $telefone){
            return $telefone->getNumero();
        })
        ->toArray();
    echo "ID: {$aluno->getId()}\n";
    echo "Nome: {$aluno->getNome()}\n";
    echo "Telefones: ".implode(", ", $telefones);
    
    $cursos = $aluno->getCursos();

    foreach ($cursos as $curso) {
        echo "\tIdCurso: {$curso->getId()}\n";
        echo "\tCurso: {$curso->getNome()}\n";
        echo "\n";
        
    }
    echo "\n";
}