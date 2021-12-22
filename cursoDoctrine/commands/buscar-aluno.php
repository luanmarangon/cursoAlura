<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__.'/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

// $alunoReporitory = $entityManager->getRepository(Aluno::class);
// $alunoList = $alunoReporitory->findAll();

$dql = "SELECT aluno FROM Alura\\Doctrine\\Entity\\Aluno aluno WHERE aluno.id = 1 OR aluno.nome = 'Luany de Lima Marangon'";
$query = $entityManager->createQuery($dql);
$alunoList = $query->getResult();

foreach ($alunoList as $aluno){
    $telefones = $aluno
                ->getTelefones()
                ->map(function (Telefone $telefone){
                    return $telefone->getNumero();
                })
                ->toArray();
              
    echo "ID: {$aluno->getId()} \n";
    echo "Nome: {$aluno->getNome()} \n";
    echo "Telefones: ". implode(', ', $telefones);
    echo "\n\n";
}

// $aluno1 = $alunoReporitory->find(2);
// echo $aluno1->getNome();
// echo "\n";

// $aluno2 = $alunoReporitory->findBy([
//     'nome' => 'Luany'
// ]);
// var_dump($aluno2);
//  echo "\n";

//  $aluno3 = $alunoReporitory->findOneBy([
//     'nome' => 'Luan Marangon'
// ]);
//  var_dump($aluno3);
//  echo "\n";

