<?php


// $agora = new DateTime();
// echo $agora->format('d/m/Y H:i');
// echo "para.". PHP_EOL;

// $agora = new DateTime('now');
// $ontem = new DateTime('yesterday');
// $dia15 = new DateTime('2019-03-15');

// echo $agora->format('d/m/Y H:i') . PHP_EOL;
// echo $ontem . PHP_EOL;
// $formato = 'd/m/Y';
// $stringDataDia15 = '15/03/2019';
// $dia15 = DateTime::createFromFormat($formato, $stringDataDia15);

// echo $dia15 . PHP_EOL;

// $entrada = new DateTime('09:00');
// $saida = new DateTime('18:00');
// $intervalo = $saida->diff($entrada);
// print_r($intervalo);

// echo $intervalo;


// $timezone = new DateTimeZone('America/Sao_Paulo');
// $agora = new DateTime('now', $timezone);

// echo $agora;
// print_r(DateTimeZone::listIdentifiers());


$umDia = new DateInterval('P1D'); // Intervalo de 1 dia
// Com DateTime:
$hoje = new DateTime();
echo $hoje->format('d/m'); // Saída 20/03
$hoje->add($umDia); // Altera o valor de $hoje
echo $hoje->format('d/m'); // Saída 21/03

// Com DateTimeImmutable
$hoje = new DateTimeImmutable();
echo $hoje->format('d/m'); // Saída 20/03
$amanha = $hoje->add($umDia); // Não altera o valor de $hoje
echo $hoje->format('d/m'); // Saída 20/03
echo $amanha->format('d/m'); // Saída 21/03